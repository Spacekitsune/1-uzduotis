<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clients', function (Blueprint $table) {
            //             ID
            // name(string)
            // surname(string)
            // username(string)
            // company_id(bigInt) - skaiciu
            // image_url(string)
            $table->id();
            $table->string('name'); // 255
            $table->string('surname');
            $table->string('username');

            // $table->bigInteger('company_id'); //signed gali ir neigiamos -5
            
            $table->unsignedBigInteger('company_id'); // unsigned 1 teigiami skaiciai ....
            $table->foreign('company_id')->references('id')->on('companies');
            
            
            $table->string('image_url', 300);


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
        Schema::dropIfExists('clients');
    }
}
