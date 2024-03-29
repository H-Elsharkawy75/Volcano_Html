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
        Schema::create('teams', function (Blueprint $table) {
            $table->id();
            $table->string('member_name');
            $table->string('member_image');
            $table->string('member_role');
            $table->string('member_facebook')->nullable();
            $table->string('member_twitter')->nullable();
            $table->string('member_linkedin')->nullable();
            $table->string('member_gmail')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('teams');
    }
};
