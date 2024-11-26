<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('comments', function (Blueprint $table) {
            $table->id();
            $table->string('name'); // Imię użytkownika
            $table->string('email'); // Email użytkownika
            $table->string('website')->nullable(); // Opcjonalna strona internetowa
            $table->text('content'); // Treść komentarza
            $table->timestamps(); // Znacznik czasu dodania
        });
    }
    

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('comments');
    }
};
