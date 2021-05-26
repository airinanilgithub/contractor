<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\bookingmodel;
class CreateBookingmodelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bookingmodels', function (Blueprint $table) {
            $table->id();
           $table->String("user_id");
            $table->String("bname");
            $table->String("bphone");
            $table->String("bwno");
           
            $table->String("bdate");
         
            $table->String("bmailid");
            $table->String("time");
            $table->String("status");
            
    
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bookingmodels');
    }
}
