<?php namespace Acornassociated\Messaging\Widgets;

use Backend\Classes\WidgetBase;

/**
 * WidgetMessging Form Widget
 */
class WidgetMessging extends WidgetBase
{
    /**
     * @inheritDoc
     */
    protected $defaultAlias = 'WidgetMessging';

    /**
     * @inheritDoc
     */
    public function __construct($controller, $alias)
    {
        $this->alias = $alias;
        parent::__construct($controller, []);
        $this->bindToController();
    }
    public function init()
    {
    }

    /**
     * @inheritDoc
     */
    public function render()
    {
        $this->prepareVars();
        return $this->makePartial('widgetmessging');
    }

    /**
     * Prepares the form widget view data
     */
    public function prepareVars()
    {
        // $this->vars['name'] = $this->formField->getName();
        // $this->vars['value'] = $this->getLoadValue();
        // $this->vars['model'] = $this->model;
    }

    /**
     * @inheritDoc
     */
    // public function loadAssets()
    // {
    //     $this->addCss('../assets/css/widgetmessging.css');
    //     $this->addJs('js/widgetmessging.js', 'Acornassociated.Messaging');
    // }

    /**
     * @inheritDoc
     */
    public function getSaveValue($value)
    {
        return $value;
    }
}
