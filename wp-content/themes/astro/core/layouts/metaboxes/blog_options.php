
<?php ?>
<div class="pr_page_metaboxse">
    <div id="pr_tab_pag">
        <ul class='category-tabs'>
           <li class='pr-tab'><a href="#tabs-header"><i class="dashicons dashicons-menu"></i> <?php echo _e('HEADER',THEMENAME);?></a></li>
        </ul>
        <div class='pr-tabs-panel'>
            <div id="tabs-header">
                <div id="tabs-header">
                     <?php
                        $headers = array('default' => 'Default', 'none-cart' => 'No Cart');
                        $this->select('header',
                                'Header',
                                $headers,
                                '',
                                ''
                        );
                     ?>
            </div>
        </div>
    </div>
</div>
