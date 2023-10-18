<?php

use App\Models\Book;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('books', function (Blueprint $table) {
            $table->id('book_id');
            $table->string('author', 32); //vessző után max karakterszám
            $table->longText('title', 150);
            $table->integer('pieces')->default(50); //nyíl után megadhatok alapértelmezett értéket
            $table->timestamps();
        });

        Book::create([
            'author' => 'Kis Katalin',
            'title' => 'Kató szerint a világ',
            'pieces'=> 33]);

        Book::create([
            'author' => 'Asimov',
            'title' => 'Alapítvány']);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('books');
    }
};
