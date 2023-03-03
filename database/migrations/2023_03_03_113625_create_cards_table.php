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
        Schema::create('cards', function (Blueprint $table) {
            $table->id();
            $table->string('name', 50);
            $table->tinyInteger('mana')->unsigned();
            $table->text('thumb')->nullable();
            $table->enum('type', ['artefatto', 'creatura', 'incantesimo', 'istantaneo', 'terra', 'piano', 'intrigo', 'stregoneria']);
            $table->tinyInteger('edition');
            $table->json('effect');
            $table->text('description')->nullable();
            $table->tinyInteger('str');
            $table->tinyInteger('constitution');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cards');
    }
};
