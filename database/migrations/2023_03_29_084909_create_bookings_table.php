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
        Schema::create('bookings', function (Blueprint $table) {
            $table->id();
            $table->string('fName');
            $table->string('lName');
            $table->string('roomType');
            $table->string('roomNumber');
            $table->string('email');
            $table->string('idCard');
            $table->string('phone');
            $table->string('address');
            $table->string('city');
            $table->string('zipCode');
            $table->double('bookingAmount');
            $table->double('paidAmount');
            $table->date('checkInDate');
            $table->date('checkOutDate');
            $table->string('bookingStatus');
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bookings');
    }
};
