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
            $table->string('fname');
            $table->string('lname');
            $table->string('roomtype');
            $table->string('roomnumber');
            $table->string('email');
            $table->string('idcard');
            $table->string('phone');
            $table->string('residentialaddress');
            $table->string('city');
            $table->string('zipcode');
            $table->double('amount');
            $table->double('paidamount');
            $table->double('deposit');
            $table->date('checkindate');
            $table->date('checkoutdate');
            $table->boolean('checkedin')->default(false);
            $table->boolean('checkedout')->default(false);
            
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
