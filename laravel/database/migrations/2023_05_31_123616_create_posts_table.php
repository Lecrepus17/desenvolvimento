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
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->string('texto');
            $table->string('imagem')->nullable();
            $table->integer('like')->default(0);
            $table->foreignId('user_fk')->constrained(
                table: 'users'
            );
            $table->timestamps();
        });
    }



    public function down(): void
    {
        Schema::dropIfExists('posts');
    }
};
