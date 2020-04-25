<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Install extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('servers', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('ip');
            $table->string('root_username');
            $table->string('root_password');
            $table->integer('up_votes');
            $table->integer('down_votes');
            $table->dateTime('latest_up_vote');
            $table->dateTime('latest_down_vote');
            $table->text('comments');
            $table->timestamps();
            $table->softDeletes();
        });

        Schema::create('customers', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('email');
            $table->timestamps();
            $table->softDeletes();
        });

        Schema::create('domains', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('server_id')->unsigned();
            $table->integer('customer_id')->unsigned();
            $table->string('name');
            $table->string('ssh_user');
            $table->string('ssh_password');
            $table->integer('ssh_up_votes');
            $table->integer('ssh_down_votes');
            $table->dateTime('latest_ssh_vote');
            $table->string('backend_url');
            $table->string('admin_user');
            $table->string('admin_password');
            $table->integer('admin_up_votes');
            $table->integer('admin_down_votes');
            $table->dateTime('latest_admin_vote');
            $table->text('comments');
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('server_id', 'fk_server_id')
                ->references('id')
                ->on('servers')
                ->onDelete('NO ACTION')
                ->onUpdate('NO ACTION');

            $table->foreign('customer_id', 'fk_customer_id')
                ->references('id')
                ->on('customers')
                ->onDelete('NO ACTION')
                ->onUpdate('NO ACTION');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
