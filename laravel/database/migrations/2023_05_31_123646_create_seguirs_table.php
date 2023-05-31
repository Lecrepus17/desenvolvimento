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
        Schema::create('seguirs', function (Blueprint $table) {
            $table->id();
            $table->foreignId('seguido_fk')->constrained(
                table: 'users'
            );
            $table->foreignId('seguidor_fk')->constrained(
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
        Schema::dropIfExists('sequirs');
    }
};
