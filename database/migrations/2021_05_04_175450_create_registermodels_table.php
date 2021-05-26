<?php
use App\Models\registermodel;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRegistermodelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('registermodels', function (Blueprint $table) {
            $table->id();
            $table->String("rname");
            $table->String("rphone");
            $table->String("rplace");
            $table->String("rmailid");
            $table->String("rusername");
            $table->String("rpassword");
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
        Schema::dropIfExists('registermodels');
    }
}
