<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use App\Category;

class CreateCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('categories', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('image')->nullable();
            $table->timestamps();
        });

        Category::insert([
            [
                'name' => 'Dairy',
                'image' => 'dairy.jpg',
            ],
            [
                'name' => 'Bakery',
                'image' => 'bakery.jpg',
            ],
            [
                'name' => 'Fruit & Vegetables',
                'image' => 'fruit_veg.jpg',
            ],
            [
                'name' => 'Meats',
                'image' => 'meats.jpg',
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
        Schema::dropIfExists('categories');
    }
}
