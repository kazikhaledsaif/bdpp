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
            $table->integer('userId');
            $table->text('name');
            $table->text('father_name')->nullable();
            $table->text('mother_name')->nullable();
            $table->date('dob');
            $table->text('nid')->nullable();
            $table->text('gender');
            $table->string('email');
            $table->text('present_address');
            $table->text('permanent_address')->nullable();
            $table->text('phone');
            $table->text('inst_name');
            $table->date('passing_year')->nullable();
            $table->text('inst_type');
            $table->text('ssc_school');
            $table->text('ssc_board');
            $table->text('ssc_passing_year')->nullable();
            $table->text('district');
            $table->string('reference')->unique();
            $table->string('payment_status')->default('pending');
            $table->string('payment_txid');
            $table->string('image')->nullable();
            $table->string('signature')->nullable();
            $table->string('diplomacert')->nullable();
            $table->string('birthcert')->nullable();
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
