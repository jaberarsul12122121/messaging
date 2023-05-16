<?php namespace Acornassociated\Messaging\Updates;

use Schema;
use Winter\Storm\Database\Updates\Migration;

class BuilderTableCreateAcornassociatedMessagingStates extends Migration
{
    public function up()
    {
        Schema::create('acornassociated_messaging_states', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->boolean('states')->default(0);
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('acornassociated_messaging_states');
    }
}
