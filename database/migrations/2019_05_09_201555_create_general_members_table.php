<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGeneralMembersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('general_members', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->text('name');
            $table->text('father_name');
            $table->text('mother_name');
            $table->date('dob');
            $table->text('nid');
            $table->text('gender');
            $table->string('email');
            $table->text('present_address');
            $table->text('permanent_address');
            $table->text('phone');
            $table->text('inst_name');
            $table->date('passing_year');
            $table->text('inst_type');
            $table->text('ssc_school');
            $table->text('ssc_board');
            $table->text('ssc_passing_year');
            $table->text('district');
            $table->string('reference')->unique();
            $table->string('payment_status')->default('pending');
            $table->string('payment_txdid')->nullable();
            $table->string('image')->default('no-image.jpg');
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
        Schema::dropIfExists('general_members');
    }
}
