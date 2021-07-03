<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

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
            $table->id();
            $table->string('name');
            $table->string('about')->nullable();
            $table->string('jobs')->nullable();
            $table->string('address')->nullable();
            $table->string('phone')->nullable();
            $table->string('images')->nullable();
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
        });

        $add = DB::table('users')->insert([
            "name" => "Hasan İneci",
            "email" => "hasanineci@gmail.com",
            "password" => bcrypt(123456),
            "created_at" => date('Y-m-d H:i:s'),
            "updated_at" => date('Y-m-d H:i:s')
        ]);

        $add = DB::table('users')->insert([
            "name" => "Ersel Hekim",
            "email" => "erselhekim@gmail.com",
            "password" => bcrypt(123456),
            "created_at" => date('Y-m-d H:i:s'),
            "updated_at" => date('Y-m-d H:i:s')
        ]);
        
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
