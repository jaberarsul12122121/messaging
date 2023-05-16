<?php namespace Acornassociated\Messaging\Controllers;

use Backend\Classes\Controller;
use BackendMenu;
use Acornassociated\Messaging\Widgets\WidgetMessging;

class Messaging extends Controller
{
    public $implement = [        'Backend\Behaviors\ListController',        'Backend\Behaviors\FormController'    ];
    
    public $listConfig = 'config_list.yaml';
    public $formConfig = 'config_form.yaml';
    //this is perimissions for navigaition and item
    public $requiredPermissions = [
        'messagingnavigation', 
        'messagingitem' 
    ];

    public function __construct()
    {
        parent::__construct();
        //this is Navigation on Plugin Messaging
        BackendMenu::setContext('Acornassociated.Messaging', 'messaging');
        //this is loadasset from asset and this file is Messging.css and Messging.js
        $this->addCss('/plugins/acornassociated/messaging/assets/css/Messging.css');
        $this->addJs('/plugins/acornassociated/messaging/assets/js/Messging.js');
        //get widgetMessging class from widgets/WidgetMessging and render on sidepanal
        new WidgetMessging($this, 'WidgetMessging');
    }
}
