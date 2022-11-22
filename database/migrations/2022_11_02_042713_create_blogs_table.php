<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBlogsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('blogs', function (Blueprint $table) {
            $table->id();
            $table->string('blog_slug');
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
        Schema::dropIfExists('blogs');
    }
}
