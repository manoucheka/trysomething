<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePatientsTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('patients', function(Blueprint $table)
        {
            $table->increments('id');
$table->string('code')->default(1234);

$table->string('firstname');
$table->string('lastname');
$table->string('phone');
$table->string('mobile');
$table->string('bloodgroup');
$table->string('sexe');
$table->date('birthday');
$table->string('email');

$table->text('address');

$table->boolean('activation')->default(1);

$table->string('image');

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
        Schema::drop('patients');
    }

}
