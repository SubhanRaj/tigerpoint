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
    //   Define schema, also use factories for filling 
    //   the table with data
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->string('title', 100);
            $table->dateTime('date_published');
            $table->text('short_description');
            $table->text('long_description');
            $table->string('image', 100);
            $table->string('author_name', 100);
            $table->integer('author_id');
            $table->integer('category_id');
            $table->string('category_name', 100);
            $table->string('url_slug', 100);
            $table->string('tags', 100);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('posts');
    }
};
