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
        Schema::create('customers', function (Blueprint $table) {
            $table->id();
            $table->string('fullName');
            $table->unsignedBigInteger('status')->default('1');
            $table->bigInteger('phone');
            $table->bigInteger('mobilePhone');
            $table->string('zipcode', 10);
            $table->string('address', 250);
            $table->string('addressNumber', 10);
            $table->string('addressNeighborhood', 50);
            $table->string('city', 50);
            $table->string('province', 50);
            $table->string('country', 50);
            $table->string('email', 50)->nullable()->unique();
            $table->string('cpfCnpj', 20);
            $table->string('identityCard', 20)->nullable();
            $table->string('issuingBody', 50)->nullable();
            $table->string('passportNumber', 50)->nullable();
            $table->unsignedBigInteger('typeCostumers')->default(1);
            $table->date('dateBirth');
            $table->unsignedBigInteger('purchaseLimit')->default(0);
            $table->unsignedBigInteger('idCompany')->default(0);
            $table->text('information')->nullable();
            $table->timestamps();
        });
    }
    
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('customers');
    }
};
