<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProfilTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profil', function (Blueprint $table) {
            // $table->id();
            $table->integer('nisn',10);
            $table->string('namalengkap',100);
            $table->string('status',20);
            $table->string('ttl');
            $table->text('alamat',60);
            $table->string('sekolah',50);
            $table->string('nohp',13);
            $table->string('email');
            $table->text('about');
            $table->text('foto');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('profil');
    }
}
