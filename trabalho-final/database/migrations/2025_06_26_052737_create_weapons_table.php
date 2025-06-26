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
        Schema::create('weapon', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->int('baseDamage');
            $table->int('knockback');
            $table->int('attackSpeed');
            $table->foreign('classId')->references('id')->on('classes');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('weapon');
    }
};
