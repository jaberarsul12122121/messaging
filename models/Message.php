<?php namespace Acornassociated\Messaging\Models;

use Model;
use Backend\Models\User;
use Backend\Models\UserGroup;
use Acornassociated\Messaging\Models\State;
/**
 * Model
 */
class Message extends Model
{
    use \Winter\Storm\Database\Traits\Validation;
    

    /**
     * @var string The database table used by the model.
     */
    public $table = 'acornassociated_messaging_messages';

    /**
     * @var array Validation rules
     */
    public $belongsToMany = [   
        'users' => [
            User::class,
            'table' => 'acornassociated_messaging_messages_users',
            'order' => 'id'
        ],
    ];
    public $belongsTo = [
        'user_id' => User::class,
        'state_id'=> State::class,
        
    ];
    public $rules = [
    ];
}
