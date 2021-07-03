<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class CreateKategoriTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kategori', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('url');
            $table->integer('user_id');
            $table->enum('status', ['active', 'passive', 'pending'])->default('active');
            $table->timestamps();
        });

        $add = DB::table('kategori')->insert([
            "name" => "Anasayfa",
            "url" => "/",
            "user_id" => 1,
            "status" => "active",
            "created_at" => date('Y-m-d H:i:s'),
            "updated_at" => date('Y-m-d H:i:s')
        ]);

        $add = DB::table('kategori')->insert([
            "name" => "Hakkımızda",
            "url" => "hakkimizda",
            "user_id" => 1,
            "status" => "active",
            "created_at" => date('Y-m-d H:i:s'),
            "updated_at" => date('Y-m-d H:i:s')
        ]);

        $add = DB::table('kategori')->insert([
            "name" => "Blog",
            "url" => "blog",
            "user_id" => 1,
            "status" => "active",
            "created_at" => date('Y-m-d H:i:s'),
            "updated_at" => date('Y-m-d H:i:s')
        ]);

        $add = DB::table('kategori')->insert([
            "name" => "İletişim",
            "url" => "iletisim",
            "user_id" => 1,
            "status" => "active",
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
        Schema::dropIfExists('kategori');
    }
}
