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
            $table->string('article_slug');
            $table->string('thumbnail');
            $table->string('author_image');
            $table->string('author_name');
            $table->longText('title');
            $table->longText('intro_details');
            $table->longText('details');
            $table->json('tags');
            $table->string('meta_tags');
            $table->string('meta_keys');
            $table->text('meta_desc');

            $table->timestamps();
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
