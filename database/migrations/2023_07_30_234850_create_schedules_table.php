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
        Schema::create('schedules', function (Blueprint $table) {
            $table->id();
            $table->string('customerName');
            $table->unsignedBigInteger('isRegistered')->default('0');
            $table->unsignedBigInteger('idCustomer')->nullable();
            $table->text('reportedDefect');
            $table->text('mechanicName')->nullable();
            $table->dateTime('scheduleDate');
            $table->text('information')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('schedules');
    }
};
