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
		Schema::create('games', function (Blueprint $table) {
		    $table->uuid('id')->primary();
		    $table->string('title');
		    $table->string('slug')->unique();
		    $table->string('thumbnail');
		    $table->enum('type', ['clicker', 'guessing', 'misc']);
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
        Schema::dropIfExists('games');
    }
};
