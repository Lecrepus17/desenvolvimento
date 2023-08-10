<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
Schema::enableForeignKeyConstraints();

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('comentarios', function (Blueprint $table) {
            $table->id();
            $table->string('texto');
            $table->string('imagem')->nullable();
            $table->integer('like')->nullable();
            $table->foreignId('post_fk')->constrained(
                table: 'posts'
            );
            $table->foreignId('user_fk')->constrained(
                table: 'users'
            );
            $table->timestamps();
        });
    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('comentarios');
    }
};
