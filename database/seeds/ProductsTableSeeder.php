<?php

use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $product = new \App\Product();
        $product->name = 'macbookPro-2017';
        $product->price = '21000000';
        $product->decs = 'hang xach tay chinh hang';
        $product->qty = '45';
        $product->image = 'mac2017.jpg';
        $product->view_count = '0';
        $product->save();
        $product = new \App\Product();
        $product->name = 'macbookPro-2020';
        $product->price = '41000000';
        $product->decs = 'hang xach tay chinh hang';
        $product->qty = '25';
        $product->image = 'mac2020.jpg';
        $product->view_count = '0';
        $product->save();


    }
}
