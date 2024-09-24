<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('choices', function (Blueprint $table) {
            $table->id();
            $table->foreignId('question_id')
                  ->constrained('questions')
                  ->onDelete('cascade'); // Deletes choices if the associated question is deleted
            $table->text('choice_text'); // The text of the choice
            $table->boolean('is_correct')->default(false); // Indicates if this choice is correct
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('choices');
    }
};
