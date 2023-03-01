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
        Schema::create('user_lists', function (Blueprint $table) {
            $table->id();
            $table->string('first_name');
            $table->string('last_name');
            $table->string('email');
            $table->string('profession');
            $table->string('chapter_name');
            $table->string('company_name');
            $table->string('website')->nullable();
            $table->text('address');
            $table->string('postcode');
            $table->string('phone_number');
            $table->string('status');
            $table->string('join_date');
            $table->string('renewal_date');
            $table->string('sponsor')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_lists');
    }
};
