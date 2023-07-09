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
        Schema::create('collections', function (Blueprint $table) {
            $table->id();
            $table->string('name', 100);
            $table->text('short_description');
            $table->text('long_description');
            $table->string('url_slug', 100);
            $table->string('image', 100);
            $table->string('author_name', 100);
            $table->integer('author_id');
            $table->string('tags', 100);
            $table->timestamps();
        });

        Schema::create('collection_post', function (Blueprint $table) {
            $table->id();
            $table->integer('collection_id');
            $table->integer('post_id');
            $table->timestamps();

            // Add foreign key constraint for collection_id
            $table->foreign('collection_id')->references('id')->on('collections');

            // Add foreign key constraint for post_id
            $table->foreign('post_id')->references('id')->on('posts');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('collections');
    }
};
