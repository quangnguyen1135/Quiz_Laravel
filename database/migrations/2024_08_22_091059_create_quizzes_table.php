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
    Schema::create('quizzes', function (Blueprint $table) {
        $table->id();
        $table->string('title');
        $table->text('description')->nullable();
        $table->foreignId('created_by')->constrained('users')->onDelete('cascade');
        $table->string('level'); // To store the level (e.g., grade 1-12, university)
        $table->integer('play_count')->default(0); // To store the number of times the quiz has been played
        $table->foreignId('category_id')->constrained('categories')->onDelete('cascade'); 
        $table->float('correct_answer_rate')->default(0); // To store the correct answer percentage
        $table->string('image')->nullable();
        $table->timestamps();
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('quizzes');
    }
};
