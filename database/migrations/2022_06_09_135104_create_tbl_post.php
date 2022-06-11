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
        Schema::create('thread', function (Blueprint $table) {
            $table->id();
            $table->integer('id_kategori');
            $table->string('judul');
            $table->longText('isi_thread');
            $table->string('id_user');
            $table->integer('view_count')->default('0');
            $table->integer('komentar_count')->default('0');
            $table->enum('status',['tampilkan', 'tidak_ditampilkan', 'dihapus']);
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
        Schema::dropIfExists('thread');
    }
};
