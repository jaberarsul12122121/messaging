<div class="MainSidepanl">
    <div class="oneDiv">
    <?= $this->makePartial('header') ?>
    </div>
    <!-- <div class="towDiv">
        <button class="buttonMessage">
            <p><i class="oc-icon-plus"></i>Message</p>
        </button>
        <button class="iconbutton">
            <i class="wn-icon-sort-alpha-asc"></i>
        </button>
    </div>
    <div class="threeDiv">
        <?= $this->makePartial('usergruop') ?>
    </div> -->
    <div class="all">
        <div>
            <button class="buttonMessage">
            <p><i class="oc-icon-plus"></i>Message</p>
            </button>
        </div>
        <div class="icon">
           <button class="iconbutton">
               <i class="wn-icon-sort-alpha-asc"></i>
           </button>  
        </div>
        <div class="flex">
        <button>User</button>
        <button>Group</button>
        </div>
        
    </div>
    <div class="fourDiv">
        <?= $this->makePartial('listuser') ?>
    </div>
  
</div>