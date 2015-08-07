<?php global $choosePromSu; ?>
<!-- About More section =================================================== -->
<section id="about_more" class="parallax">
    <div class="parallax-overlay-light">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-6 col-xs-12 item_left">
                    <?php if (!isset($choosePromSu['choosePromSu']['choose_feature_image'])): ?>
                        <img class="img-center img-responsive" src="<?php echo get_template_directory_uri(); ?>/images/features.png" alt=""/>
                    <?php else: ?>
                        <?php $image_attributes = wp_get_attachment_image_src($choosePromSu['choosePromSu']['choose_feature_image'], 'full'); ?>
                        <img class="img-center img-responsive" src="<?php echo $image_attributes[0]; ?>" width="<?php echo $image_attributes[1]; ?>" height="<?php echo $image_attributes[2]; ?>" alt=""/>
                    <?php endif; ?>
                </div>
                <div class="col-md-6 col-sm-6 col-xs-12 item_right">
                    <h2 class="duel-title secondary-title">
                        <?php if (isset($choosePromSu['choosePromSu']['choose_sub_title'])): ?>
                            <span><?php echo $choosePromSu['choosePromSu']['choose_sub_title']; ?></span>
                        <?php endif; ?>
                        <?php if (isset($choosePromSu['choosePromSu']['choose_title'])): ?>
                            <?php echo $choosePromSu['choosePromSu']['choose_title']; ?>
                        <?php endif; ?>
                    </h2>
                    <?php if (isset($choosePromSu['choosePromSu']['choose_desc'])): ?>
                        <p><?php echo $choosePromSu['choosePromSu']['choose_desc']; ?></p>
                    <?php endif; ?>
                    <div id="accordion" class="accordion panel-group">
                        <!-- Panel -->
                        <div class="panel panel-default">
                            <!-- Panel Title -->
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" class="panel-button uppercase">
                                <i class="icon fa fa-desktop"></i>
                                <?php
                                if (isset($choosePromSu['choosePromSu']['choose_item1_title'])) {
                                    echo $choosePromSu['choosePromSu']['choose_item1_title'];
                                }
                                ?>
                            </a>
                            <!-- Panel Table -->
                            <div class="panel-collapse collapse in" id="collapseOne">
                                <!-- Panel Body -->
                                <div class="panel-body">
                                    <?php if (isset($choosePromSu['choosePromSu']['choose_item1_cap'])): ?>
                                        <span class="dropcap">
                                            <?php echo $choosePromSu['choosePromSu']['choose_item1_cap']; ?>
                                        </span>
                                    <?php endif; ?>
                                    <?php
                                    if (isset($choosePromSu['choosePromSu']['choose_item1_desc'])) {
                                        echo $choosePromSu['choosePromSu']['choose_item1_desc'];
                                    }
                                    ?>
                                </div>
                                <!-- End Panel Body -->
                            </div>
                            <!-- End Panel table -->
                        </div>
                        <!-- End Panel -->
                        <!-- Panel -->
                        <div class="panel panel-default">
                            <!-- Panel Title -->
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapsetwo" class="panel-button uppercase">
                                <i class="icon fa fa-eye"></i>
                                <?php
                                if (isset($choosePromSu['choosePromSu']['choose_item2_title'])) {
                                    echo $choosePromSu['choosePromSu']['choose_item2_title'];
                                }
                                ?>
                            </a>
                            <!-- Panel Table -->
                            <div class="panel-collapse collapse" id="collapsetwo">
                                <!-- Panel Body -->
                                <div class="panel-body">
                                    <?php if (isset($choosePromSu['choosePromSu']['choose_item2_cap'])): ?>
                                        <span class="dropcap">
                                            <?php echo $choosePromSu['choosePromSu']['choose_item2_cap']; ?>
                                        </span>
                                    <?php endif; ?>
                                    <?php
                                    if (isset($choosePromSu['choosePromSu']['choose_item2_desc'])) {
                                        echo $choosePromSu['choosePromSu']['choose_item2_desc'];
                                    }
                                    ?>
                                </div>
                                <!-- End Panel Body -->
                            </div>
                            <!-- End Panel table -->
                        </div>
                        <!-- End Panel -->
                        <!-- Panel -->
                        <div class="panel panel-default">
                            <!-- Panel Title -->
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree" class="panel-button uppercase">
                                <i class="icon fa fa-html5"></i>
                                <?php
                                if (isset($choosePromSu['choosePromSu']['choose_item3_title'])) {
                                    echo $choosePromSu['choosePromSu']['choose_item3_title'];
                                }
                                ?>
                            </a>
                            <!-- Panel Table -->
                            <div class="panel-collapse collapse" id="collapseThree">
                                <!-- Panel Body -->
                                <div class="panel-body">
                                    <?php if (isset($choosePromSu['choosePromSu']['choose_item3_cap'])): ?>
                                        <span class="dropcap">
                                            <?php echo $choosePromSu['choosePromSu']['choose_item3_cap']; ?>
                                        </span>
                                    <?php endif; ?>
                                    <?php
                                    if (isset($choosePromSu['choosePromSu']['choose_item3_desc'])) {
                                        echo $choosePromSu['choosePromSu']['choose_item3_desc'];
                                    }
                                    ?>
                                </div>
                                <!-- End Panel Body -->
                            </div>
                            <!-- End Panel table -->
                        </div>
                        <!-- End Panel -->
                        <!-- Panel -->
                        <div class="panel panel-default">
                            <!-- Panel Title -->
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseFour" class="panel-button uppercase">
                                <i class="icon fa fa-file-pdf-o"></i>
                                <?php
                                if (isset($choosePromSu['choosePromSu']['choose_item4_title'])) {
                                    echo $choosePromSu['choosePromSu']['choose_item4_title'];
                                }
                                ?>
                            </a>
                            <!-- Panel Table -->
                            <div class="panel-collapse collapse" id="collapseFour">
                                <!-- Panel Body -->
                                <div class="panel-body">
                                    <?php if (isset($choosePromSu['choosePromSu']['choose_item4_cap'])): ?>
                                        <span class="dropcap">
                                            <?php echo $choosePromSu['choosePromSu']['choose_item4_cap']; ?>
                                        </span>
                                    <?php endif; ?>
                                    <?php
                                    if (isset($choosePromSu['choosePromSu']['choose_item4_desc'])) {
                                        echo $choosePromSu['choosePromSu']['choose_item4_desc'];
                                    }
                                    ?>
                                </div>
                                <!-- End Panel Body -->
                            </div>
                            <!-- End Panel table -->
                        </div>
                        <!-- End Panel -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End About More section ====================================================== -->