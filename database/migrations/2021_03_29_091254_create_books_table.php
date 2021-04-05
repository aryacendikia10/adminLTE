<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBooksTable extends Migration
{
    public function up()
    {
        Schema::create('books', function (Blueprint $table) {
            $table->id();
            $table->string('judul')->unique();
            $table->string('penulis');
            $table->year('tahun');
            $table->string('penerbit');
            $table->string('cover')->nullable();
            $table->timestamps();
        });
    }
    public function down()
    {
        Schema::dropIfExists('books');
    }
}
