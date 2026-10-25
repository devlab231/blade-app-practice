<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        {
            $pageTitle = '商品一覧';

            $lastUpdated = '2024年1月1日 12:00';

            $products = collect([
                (object)['name' => 'ノートパソコン', 'category' => '電子機器', 'price' => 89800, 'in_stock' => 1],
                (object)['name' => 'ワイヤレスマウス', 'category' => '周辺機器', 'price' => 3980, 'in_stock' => 1],
                (object)['name' => 'USBハブ', 'category' => '周辺機器', 'price' => 2480, 'in_stock' => 0],
            ]);

            return view('products.index', compact('pageTitle', 'products', 'lastUpdated'));
        }
    }
}