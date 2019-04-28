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
            $table->integer('category_id');
            $table->string('image');
            $table->timestamps();
        });

        Product::insert([
            [
                'name' => 'milk',
                'price' => '1.70',
                'description' => 'semi skimmed (1L)',
                'category_id' => '1',
                'image' => 'milk.png',
            ],
            [
                'name' => 'cheese',
                'price' => '2.39',
                'description' => 'mild cheddar (330g)',
                'category_id' => '1',
                'image' => 'cheese.png',
            ],
            [
                'name' => 'butter',
                'price' => '1.09',
                'description' => 'unsalted (250g)',
                'category_id' => '1',
                'image' => 'butter.png',
            ],
            [
                'name' => 'free range eggs',
                'price' => '1.76',
                'description' => 'medium-sized (6 eggs)',
                'category_id' => '1',
                'image' => 'eggs.png',
            ],
            [
                'name' => 'organic meat patties',
                'price' => '2.29',
                'description' => 'rolled in fresh herbs (250g)',
                'category_id' => '2',
                'image' => 'patties.png',
            ],
            [
                'name' => 'parma ham',
                'price' => '3.49',
                'description' => 'matured, organic (70g)',
                'category_id' => '2',
                'image' => 'ham.png',
            ],
            [
                'name' => 'chicken leg',
                'price' => '2.59',
                'description' => 'free range (250g)',
                'category_id' => '2',
                'image' => 'chicken.png',
            ],
            [
                'name' => 'sausages',
                'price' => '3.55',
                'description' => 'reduces fat, pork (350g)',
                'category_id' => '2',
                'image' => 'sausages.png',
            ],
            [
                'name' => 'sunflower seed loaf',
                'price' => '1.89',
                'description' => '600g',
                'category_id' => '3',
                'image' => 'loaf.png',
            ],
            [
                'name' => 'sesame seed bagel',
                'price' => '1.19',
                'description' => '4 bagels',
                'category_id' => '3',
                'image' => 'bagel.png',
            ],
            [
                'name' => 'pumpkin seed bun',
                'price' => '1.15',
                'description' => '4 buns',
                'category_id' => '3',
                'image' => 'bun.png',
            ],
            [
                'name' => 'chocolate cookies',
                'price' => '2.39',
                'description' => 'contain peanuts (3 cookies)',
                'category_id' => '3',
                'image' => 'cookies.png',
            ],
            [
                'name' => 'corn on the cob',
                'price' => '1.59',
                'description' => '2 pieces',
                'category_id' => '4',
                'image' => 'corn.png',
            ],
            [
                'name' => 'red currants',
                'price' => '2.49',
                'description' => '150g',
                'category_id' => '4',
                'image' => 'currants.png',
            ],
            [
                'name' => 'broccoli',
                'price' => '1.29',
                'description' => '500g',
                'category_id' => '4',
                'image' => 'broccoli.png',
            ],
            [
                'name' => 'seedless watermelon',
                'price' => '1.49',
                'description' => '250g',
                'category_id' => '4',
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
