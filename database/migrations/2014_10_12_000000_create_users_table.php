<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use App\User;
class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->boolean('is_admin')->default(0);
            $table->string('phone')->nullable();
            $table->string('address')->nullable();
            $table->string('city_region')->nullable();
            $table->string('cc_number')->nullable();
            $table->rememberToken();
            $table->timestamps();
        });

        $user = User::make([
            "name" => "admin",
            "email" => "admin@affablebean.com",
            "password" => bcrypt("admin123"),
        ]);
        $user->is_admin = 1;
        $user->save();
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
