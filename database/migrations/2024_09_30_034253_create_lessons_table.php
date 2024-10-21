<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLessonsTable extends Migration
{
    public function up()
    {
        Schema::create('lessons', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('course_id'); 
            $table->string('title'); 
            $table->text('content');
            $table->string('video_url')->nullable();
            $table->integer('order')->default(0); 
            $table->unsignedInteger('duration')->nullable(); 

            $table->timestamps();
        
            $table->foreign('course_id')->references('id')->on('courses')->onDelete('cascade');
        });
        
    }

    public function down()
    {
        Schema::dropIfExists('lessons');
    }
}
