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
        Schema::create('counterofnumbers', function (Blueprint $table) {
            $table->id();
            $table->integer('successful_consultation_count')->default(0);
            $table->integer('satisfied_customer_count')->default(0);
            $table->integer('created_website_count')->default(0);
            $table->integer('expert_advisor_count')->default(0);


            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('counterofnumbers');
    }
};
