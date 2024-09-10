<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOTPCodesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('o_t_p_codes', function (Blueprint $table) {
            $table->id();
            $table->integer('otp');
            $table->timestamp('valid_until');
            $table->foreignId('customer_id')->constrained('customers');
            $table->timestamps();
            
            // $table->foreign('user_id')->references('id')->on('customers');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('o_t_p_codes');
    }
}
