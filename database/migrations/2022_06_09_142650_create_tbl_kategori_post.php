<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kategori_thread', function (Blueprint $table) {
            $table->id();
            $table->string('jenis_kategori');
            $table->enum('status',['tampilkan', 'tidak_ditampilkan'])
            ->default('tampilkan');
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
        Schema::dropIfExists('kategori_thread');
    }
};
