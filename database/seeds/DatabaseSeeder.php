<?php

use App\User;
use App\Category;
use App\Product;
use App\Transaction;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        //Must disable foreign keys at moment of truncating
        Schema::disableForeignKeyConstraints();

        //Must truncate all tables first
        User::truncate();
        Category::truncate();
        Product::truncate();
        Transaction::truncate();

        //Pivot table has no model, will access using DB Facade
        DB::table('category_product')->truncate();
    
        $usersQuantity = 1000;
        $productQuantity = 1000;        
        $categoryQuantity = 30;
        $transactionsQuantity = 1000;
    
        factory(User::class, $usersQuantity)->create();
        factory(Category::class, $categoryQuantity)->create();
        factory(Product::class, $productQuantity)->create()->each(
            function ($product) {
                $categories = Category::all()->random(mt_rand(1, 5))->pluck('id');

                $product->categories()->attach($categories);
            }
        );
        factory(Transaction::class, $transactionsQuantity)->create();
    
        //Must re-enable foreignKeyConstraints
        Schema::enableForeignKeyConstraints();    
    }
}
