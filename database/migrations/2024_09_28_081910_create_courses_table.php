<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCoursesTable extends Migration
{
    public function up()
    {
        Schema::create('courses', function (Blueprint $table) {
            $table->id();
            $table->string('title'); 
            $table->text('description'); 
            $table->string('image_url')->nullable();
            $table->unsignedBigInteger('category_id'); 
            $table->unsignedBigInteger('user_id'); 
            $table->integer('lessons_count')->default(0); 
            $table->unsignedBigInteger('level');
            $table->unsignedInteger('duration')->nullable(); 

            $table->timestamps();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade');
            $table->foreign('level')->references('id')->on('levels')->onDelete('cascade');
        });
        
    }

    public function down()
    {
        Schema::dropIfExists('courses');
    }
}
