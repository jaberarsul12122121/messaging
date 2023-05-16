<?php namespace Acornassociated\Messaging\Updates;

use Schema;
use Winter\Storm\Database\Updates\Migration;

class BuilderTableCreateAcornassociatedMessagingMessagesUsers extends Migration
{
    public function up()
    {
        Schema::create('acornassociated_messaging_messages_users', function($table)
        {
            $table->engine = 'InnoDB';
            $table->integer('message_id');
            $table->integer('user_id');
            $table->primary(['message_id','user_id']);
            $table->foreign('message_id')
                            ->references('id')
                            ->on('acornassociated_messaging_messages')
                            ->onDelete('cascade');
             $table->foreign('user_id')
                            ->references('id')
                            ->on('backend_users')
                            ->onDelete('cascade');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('acornassociated_messaging_messages_users');
    }
}
