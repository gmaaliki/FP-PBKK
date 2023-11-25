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
        Schema::create('services', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('title');
            $table->string('description');
            $table->string('basic_plan_title');
            $table->string('basic_plan_price');
            $table->string('basic_plan_description');
            $table->string('basic_plan_days');
            $table->string('standard_plan_title');
            $table->string('standard_plan_price');
            $table->string('standard_plan_description');
            $table->string('standard_plan_days');
            $table->string('premium_plan_title');
            $table->string('premium_plan_price');
            $table->string('premium_plan_description');
            $table->string('premium_plan_days');
            $table->foreignId('user_id')->constrained();
            $table->foreignId('subcategory_id')->constrained('subcategory');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('services');
    }
};