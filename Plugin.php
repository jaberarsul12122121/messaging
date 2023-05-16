<?php namespace Acornassociated\Messaging;

use Backend\Facades\Backend;
use System\Classes\PluginBase;

class Plugin extends PluginBase
{
    public function registerComponents()
    {
    }

    public function registerSettings()
    {
    }
    public function registerNavigation()
    {
        return [
            'messaging' => [
                'label'       => 'Messaging',
                'url'         => Backend::url('acornassociated/messaging/messaging'),
                'icon'        => 'icon-wechat',
                'permissions' => ['messagingnavigation'],
                'sideMenu' => [
                    'convirsation' => [
                        'label'       => 'Conversation',
                        'icon'        => 'icon-send-o',
                        'url'         => Backend::url('acornassociated/messaging/messaging'),
                        'permissions' => ['messagingitem'],
                        'attributes'  => ['data-menu-item'=>'convirsation']
                    ],
                    'states' => [
                        'label'       => 'States',
                        'icon'        => 'icon-eye',
                        'url'         => Backend::url('acornassociated/messaging/state'),
                        'permissions' => ['messagingstates'],
                        'attributes'  => ['data-menu-item'=>'states']
                    ]
                ]

            ]
        ];
    }
}
