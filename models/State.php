<?php namespace Acornassociated\Messaging\Models;

use Model;

/**
 * Model
 */
class State extends Model
{
    use \Winter\Storm\Database\Traits\Validation;
    

    /**
     * @var string The database table used by the model.
     */
    public $table = 'acornassociated_messaging_states';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];
}
