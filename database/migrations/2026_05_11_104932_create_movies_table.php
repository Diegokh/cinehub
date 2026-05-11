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
    Schema::create('movies', function (Blueprint $table) {
        $table->id();

        $table->string('title');

        $table->string('director')->nullable();

        $table->integer('year')->nullable();

        $table->float('score')->default(0);

        $table->text('synopsis')->nullable();

        $table->string('poster_url')->nullable();

        $table->boolean('published')->default(true);

        $table->timestamps();
    });
}    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('movies');
    }
};
