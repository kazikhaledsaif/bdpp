<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCentralCommittesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('central_committes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->text('name');
            $table->integer('designation_id');
            $table->text('details')->nullable();
            $table->string('email')->nullable();
            $table->text('mobile')->nullable();
            $table->string('image')->nullable();
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
        Schema::dropIfExists('central_committes');
    }
}
