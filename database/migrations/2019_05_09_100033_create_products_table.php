<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use App\Product;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->decimal('price');
            $table->mediumText('description');
            $table->integer('in_stock')->default(0);
            $table->unsignedBigInteger('category_id')->nullable();
            $table->foreign('category_id')->references('id')->on('categories');
            $table->string('image')->nullable();
            $table->timestamps();
        });

        Product::insert([
            [
                'name' => 'milk',
                'price' => '1.70',
                'description' => 'semi skimmed (1L)',
                'in_stock' => 5,
                'category_id' => 1,
                'image' => 'milk.png',
            ],
            [
                'name' => 'cheese',
                'price' => '2.39',
                'description' => 'mild cheddar (330g)',
                'in_stock' => 5,
                'category_id' => '1',
                'image' => 'cheese.png',
            ],
            [
                'name' => 'butter',
                'price' => '1.09',
                'description' => 'unsalted (250g)',
                'in_stock' => 5,
                'category_id' => '1',
                'image' => 'butter.png',
            ],
            [
                'name' => 'free range eggs',
                'price' => '1.76',
                'description' => 'medium-sized (6 eggs)',
                'in_stock' => 5,
                'category_id' => '1',
                'image' => 'eggs.png',
            ],
            [
                'name' => 'organic meat patties',
                'price' => '2.29',
                'description' => 'rolled in fresh herbs (250g)',
                'in_stock' => 5,
                'category_id' => '4',
                'image' => 'patties.png',
            ],
            [
                'name' => 'parma ham',
                'price' => '3.49',
                'description' => 'matured, organic (70g)',
                'in_stock' => 5,
                'category_id' => '4',
                'image' => 'ham.png',
            ],
            [
                'name' => 'chicken leg',
                'price' => '2.59',
                'description' => 'free range (250g)',
                'in_stock' => 5,
                'category_id' => '4',
                'image' => 'chicken.png',
            ],
            [
                'name' => 'sausages',
                'price' => '3.55',
                'description' => 'reduces fat, pork (350g)',
                'in_stock' => 5,
                'category_id' => '4',
                'image' => 'sausages.png',
            ],
            [
                'name' => 'sunflower seed loaf',
                'price' => '1.89',
                'description' => '600g',
                'in_stock' => 5,
                'category_id' => '2',
                'image' => 'loaf.png',
            ],
            [
                'name' => 'sesame seed bagel',
                'price' => '1.19',
                'description' => '4 bagels',
                'in_stock' => 5,
                'category_id' => '2',
                'image' => 'bagel.png',
            ],
            [
                'name' => 'pumpkin seed bun',
                'price' => '1.15',
                'description' => '4 buns',
                'in_stock' => 5,
                'category_id' => '2',
                'image' => 'bun.png',
            ],
            [
                'name' => 'chocolate cookies',
                'price' => '2.39',
                'description' => 'contain peanuts (3 cookies)',
                'in_stock' => 5,
                'category_id' => '2',
                'image' => 'cookies.png',
            ],
            [
                'name' => 'corn on the cob',
                'price' => '1.59',
                'description' => '2 pieces',
                'in_stock' => 5,
                'category_id' => '3',
                'image' => 'corn.png',
            ],
            [
                'name' => 'red currants',
                'price' => '2.49',
                'description' => '150g',
                'in_stock' => 5,
                'category_id' => '3',
                'image' => 'currants.png',
            ],
            [
                'name' => 'broccoli',
                'price' => '1.29',
                'description' => '500g',
                'in_stock' => 5,
                'category_id' => '3',
                'image' => 'broccoli.png',
            ],
            [
                'name' => 'seedless watermelon',
                'price' => '1.49',
                'description' => '250g',
                'in_stock' => 5,
                'category_id' => '3',
                'image' => 'watermelon.png',
            ],
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
}
