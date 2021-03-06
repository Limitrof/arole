<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrganizationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('organizations', function (Blueprint $table) {
            $table->increments('id');
            /*$table->string('title',255);*/
            $table->string('logo',500)->nullable();
            $table->text('descr')->nullable();
            $table->timestamps();
            $table->string('photo',255)->nullable();
            $table->text('address')->nullable();
            $table->string('phone',255);
            $table->string('email',255)->nullable();
            $table->string('geo',255)->nullable();
            $table->string('worktime',255)->nullable();

            $table->integer('user_id')->unsigned()->nullable();

            $table->foreign('user_id')->references('id')->on('users');
        });

        Schema::create('organization_translations', function(Blueprint $table)
        {
            $table->increments('id');
            $table->integer('organization_id')->unsigned();
            $table->string('title');
            $table->string('locale')->index();

            $table->unique(['organization_id','locale']);
            $table->foreign('organization_id')->references('id')->on('organizations')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('organizations_translations');
        Schema::dropIfExists('organizations');
    }
}
