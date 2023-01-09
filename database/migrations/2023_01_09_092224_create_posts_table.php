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
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('author');
            $table->text('content');
            $table->foreignId('user_id')->constrained('users','id');
            $table->string('image')->default('default.png');
            $table->string('soft_delete')->nullable();
            $table->timestamps();
        });
    }
    // [ id, title, author, content,image, date , soft delete ]
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('posts');
    }
};
