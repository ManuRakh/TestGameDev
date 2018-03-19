<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Campaigns', function (Blueprint $table) {
            $table->increments('id');//Айди с автоинкрементом, и стринги варчары по длине 255
            $table->string('Accounts_ID');
            $table->string('Campaign_type_ID');
            $table->string('Name');
            $table->string('Message_end');

            $table->timestamps();////Автоматом создает updated_at и created_at
        });
        Schema::create('members', function (Blueprint $table) {
            $table->increments('id'); //Айди с автоинкрементом, и стринги варчары по длине 255
            $table->string('Name');
            $table->string('Email');
            $table->string('Phone');
            $table->string('Password');
            $table->string('Uid');
            $table->timestamps();//Автоматом создает updated_at и created_at

        });
        Schema::create('Campaign_type', function (Blueprint $table) {
            $table->increments('id');//Айди с автоинкрементом, и стринги варчары по длине 255
            $table->string('Name');
            $table->string('Status');

            $table->timestamps();////Автоматом создает updated_at и created_at
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('members');

        Schema::dropIfExists('Campaign');
        Schema::dropIfExists('Campaign_type');

    }
}
