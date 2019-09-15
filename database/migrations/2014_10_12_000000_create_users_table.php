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
            $table->increments('id');
            $table->string('nama');
            $table->string('username',11)->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->enum('level',['Admin','Operator']);
            $table->rememberToken();
            $table->timestamps();
        });

        DB::table('users')->insert(array(
			array('nama' => 'Admin Cakep','username' => 'admin', 'password' => Hash::make('tanyapakrw'), 'level' => 'Admin'),
        ));
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
