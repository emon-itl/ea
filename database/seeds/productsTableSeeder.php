<?php

use Illuminate\Database\Seeder;

class productsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       $products= [

       [

       	'product_name'=>'A',
       	'product_price'=>'123',
       	'product_sku'=>'00DW',
       	'product_image'=>'ex_1.png',
       	'product_description'=>'LLL'

        ],

        [

       	'product_name'=>'B',
       	'product_price'=>'1111',
       	'product_sku'=>'00BW',
       	'product_image'=>'ex_2.png',
       	'product_description'=>'MMM'

        ],

        ];

        foreach ($products as $key => $value) {
        	DB::table('products')->insert([

        		$key => $value

        	]);
        }
    }
}
