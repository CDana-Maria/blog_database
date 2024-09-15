<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateArticlesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('articles', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('short_description');
            $table->text('content');
            $table->unsignedBigInteger('author_id')->nullable();
            $table->unsignedBigInteger('category_id');
            $table->timestamps();
            $table->dateTime('modified_at');
            $table->string('seo_title', 60);
            $table->string('seo_description',150);
            $table->string('slug')->unique();
            $table->foreign('author_id')->references('id')->on('users')
            ->onDelete('set null')
            ->onUpdate('cascade');

            $table->foreign('category_id')->references('id')->on('categories')->onUpdate('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('articles');
    }
}
