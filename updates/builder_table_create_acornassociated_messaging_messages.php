<?php namespace Acornassociated\Messaging\Updates;

use Schema;
use Winter\Storm\Database\Updates\Migration;

class BuilderTableCreateAcornassociatedMessagingMessages extends Migration
{
    public function up()
    {
        Schema::create('acornassociated_messaging_messages', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->integer('user_id_id');
            $table->string('subject');
            $table->text('body');
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->integer('state_id_id');
            $table->foreign('user_id_id')
                        ->references('id')
                        ->on('backend_users')
                        ->onDelete('cascade');
            $table->foreign('state_id_id')
                        ->references('id')
                        ->on('acornassociated_messaging_states')
                        ->onDelete('cascade');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('acornassociated_messaging_messages');
    }
}
