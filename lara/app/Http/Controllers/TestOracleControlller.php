<?php

namespace App\Http\Controllers;


use App\Models\ListProducts;
use App\Models\Product;
use App\Services\ListProductsService;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Crypt;
use App\Services\DispatchApiService;

class TestOracleControlller extends Controller
{
    protected $product_service, $http_client_service;

    public function __construct()
    {
        $this->product_service = App::make(ListProductsService::class);
        $this->http_client_service = App::make(DispatchApiService::class);
    }
    public function test()
    {


        $result = $this->product_service->getDataBetweenRange();

        $crypt_data = Crypt::encrypt($result);

        $field = config('parameters.params.field');

        $result_invert_key = $result->keyBy($field);

        $last_data = $this->product_service->latestData();

        if (!is_null($last_data)) {
            $decrypt_data = $this->product_service->getDataDecrypted($last_data->hash);

            $result_invert_key['16441']['desccompleta'] = 'MP';
            //$result_invert_key['17106']['desccompleta'] = 'MP';

            $diff_keys =   $result_invert_key->diffAssoc($decrypt_data);
            $diff_all_keys = $diff_keys->all();


           $this->http_client_service->sendToApi($diff_all_keys);

        } else {
            $this->product_service->create($crypt_data);
            dd("salvou");
        }
    }
}
