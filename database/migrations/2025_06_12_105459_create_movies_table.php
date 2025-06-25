<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('movies', function (Blueprint $table) {
            $table->id(); // primary key: movie_id
            $table->string('title'); // judul film
            $table->text('description')->nullable(); // deskripsi film
            $table->string('genre')->nullable(); // genre film
            $table->integer('release_year'); // tahun rilis
            $table->integer('duration'); // durasi (menit)
            $table->string('image'); // gambar film (path atau URL)
            $table->timestamps(); // created_at dan updated_at
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('movies');
    }
};
