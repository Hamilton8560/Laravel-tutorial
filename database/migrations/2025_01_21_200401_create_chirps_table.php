<?php

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
        Schema::create('chirps', function (Blueprint $table) {
            $table->id();                    // Creates auto-incrementing primary key
            $table->foreignId('user_id')     // Creates user_id column
                ->constrained()              // Links to 'id' column in 'users' table
                ->cascadeOnDelete();         // If user deleted, delete their chirps
            $table->string('message');       // Creates message column
            $table->timestamps();            // Creates created_at and updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('chirps');
    }
};
