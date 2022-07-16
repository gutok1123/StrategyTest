<?php

namespace App\Jobs;


use App\Models\Product;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\App;
use App\Services\ListProductsService;

class ProductsJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->product_service = App::make(ListProductsService::class);
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
       
        $model_product = new Product();

        $result = $this->product_service->getDataBetweenRange();
        
        $crypt_data = Crypt::encrypt($result);
        
        $field = config('parameters.params.field');
     
        $result_invert_key= $result->keyBy($field);
       
        $last_data = $model_product->latest()->first();

            if (!is_null($last_data)) {
                $decrypt_data = $this->product_service->getDataDecrypted($last_data->hash);
                // $result_invert_key['17105']['desccompleta'] = 'MP';
                //$result_invert_key['17106']['desccompleta'] = 'MP';
                
                $diff_keys =   $result_invert_key->diffAssoc($decrypt_data);
                $diff_all_keys = $diff_keys->all();
            
                dd($diff_all_keys);
        } else {
            $model_product->create(["hash" => $crypt_data]);
            dd("salvou");
        }
    }
}

