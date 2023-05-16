<div class="layout control-scrollpanel" id="builder-side-panel">
    <div class="layout-cell">
        <div class="layout-relative fix-button-container fix-button-content-header">
            <!-- tab1 for Navigation -->
            <form
                class="layout hide"
                data-content-id="convirsation"
                data-template-type="convirsation"
                data-type-icon="wn-icon-database"
                onsubmit="return false">
                <!--render class WidgetMessging with partials _widgetmessging.php -->
                <?= $this->widget->WidgetMessging->render() ?> 
            </form>   
            <!-- tab2 for NavigationItem-->
            <form
                class="layout hide"
                data-content-id="states"
                data-template-type="states"
                data-type-icon="wn-icon-file-code"
                onsubmit="return false">
                <h1>hello 2</h1>
            </form>
        </div>
    </div>
</div>