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
        Schema::create('users', function (Blueprint $table) {
           // $table->increments('id');
           // $table->string('name');
            $table->string('email');
            $table->integer('typeUser');
            $table->primary('email');
           // $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
           // $table->rememberToken();
            $table->timestamps();
        });
        DB::statement('ALTER TABLE users ADD CONSTRAINT chk_type_user CHECK (typeUser in (0,1,2));');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
