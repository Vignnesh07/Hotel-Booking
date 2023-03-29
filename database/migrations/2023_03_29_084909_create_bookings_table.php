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
            $table->string('cus_name');
            $table->string('cus_email');
            $table->string('cus_id');
            $table->string('cus_phone_number');
            $table->string('cus_address');
            $table->string('cus_city');
            $table->string('cus_zipcode');
            $table->double('total_price');
            $table->double('paid_amount');
            $table->double('deposit');
            $table->date('check_in_date');
            $table->date('check_out_date');
            $table->boolean('checked_in')->default(false);
            $table->boolean('checked_out')->default(false);
            $table->string('room_id');
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
