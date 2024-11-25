<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('news', function (Blueprint $table) {
            $table->id();
            $table->string('title', 128);
            $table->text('content');
            $table->string('author', 128);
            $table->timestamp('published_at')->nullable();
            $table->unsignedBigInteger('category_id')->nullable();
            $table->string('cover_image')->nullable();
            $table->timestamps();

            $table->foreign('category_id')->references('id')->on('news_categories')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('news', function (Blueprint $table) {
            $table->dropForeign(['category_id']);
            $table->dropColumn('category_id');
        });
        
        Schema::dropIfExists('news');
    }
};