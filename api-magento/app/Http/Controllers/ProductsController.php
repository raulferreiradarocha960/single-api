<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;


class ProductsController extends Controller
{

        

        public function index()
        {
            $products = Http::withToken('wfkfiw3l5478ntkitcxfzscidqwegxqg')->get("https://mcstaging.madeiranit.com.br/rest/V1/inventory/source-items?searchCriteria[filter_groups][0][filters][0][field]=sku&searchCriteria[filter_groups][0][filters][0][value]=&searchCriteria[filter_groups][0][filters][0][condition_type]=neq&searchCriteria[pageSize]=100");
            
            $products = json_decode($products, true);
            //simple DTO
            
            $translate = [];
            $tamanho = count($products['items']);
            
            for($i = 0; $i < $tamanho; $i++){
               $translate[$i]['produto'] = $products['items'][$i]['sku'];
               $translate[$i]['loja'] = $products['items'][$i]['source_code'];
               $translate[$i]['quantidade'] = $products['items'][$i]['quantity'];
               $translate[$i]['habilitado'] = $products['items'][$i]['status'];
               $i++;
            }

            return $translate;
        }
        
        
}
