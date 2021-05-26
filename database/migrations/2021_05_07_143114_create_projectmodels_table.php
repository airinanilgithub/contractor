<?php
use App\Models\projectmodel;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProjectmodelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('projectmodels', function (Blueprint $table) {
            $table->id();
            $table->String("pid");
            $table->String("ptitle");
            $table->String("parea");
            $table->String("pbedroom");
            $table->String("pplace");     
            $table->String("pprize");
            $table->String("pcategory");
            $table->mediumText("pdetails");
            $table->mediumText("pdetailsnew");
            $table->mediumText("pimage")->nullable();
            $table->mediumText("pimage1")->nullable();
            $table->mediumText("pimage2")->nullable();
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
        Schema::dropIfExists('projectmodels');
    }
}
