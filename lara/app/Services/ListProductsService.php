<?php

namespace App\Services;

use App\Models\ListProducts;
use App\Models\Product;
use Illuminate\Support\Facades\Crypt;

class ListProductsService{

    protected $entity_list_products , $entity_products;

    public function __construct(ListProducts $entity , Product  $entity_products)
    {
        $this->entity = $entity;
        $this->entity_products = $entity_products;
    }

    public function getDataBetweenRange()
    {
        $date = \Carbon\Carbon::today()->subDays(120);

        $result = $this->entity->where('dtahorinclusao', '>=', $date)->get();

        return $result;
    }

    public function create(string $hash)
    {
      return  $this->entity_products->create(["hash"=>$hash]);
    }
    
    public function latestData()
    {
        return $this->entity_products->latest()->first();
    }

    public function getDataDecrypted(string $crypt)
    {
        $field = config('parameters.params.field');

         $decrypted = Crypt::decrypt($crypt);

        $decrypted_inverted_keys = $decrypted->keyBy($field);

        return $decrypted_inverted_keys;

    }


}