<?php
global $abouts, $aboutContent;
?>
<!-- About section ========================================================= -->
<section id="about" class="section-content">
    <div class="row bgSilver">
        <div class="col-md-4 col-sm-12 item_bottom bgDark text-center">
            <!-- Section Title -->
            <div class="section-title white text-center">
                <?php if (isset($aboutContent['about_title']) && !empty($aboutContent['about_title'])): ?>                
                    <?php echo "<h1>" . $aboutContent['about_title'] . "</h1>"; ?>
                <?php else: ?>
                    <h1>Who We<br>Ares</h1>
                <?php endif; ?>                     
                <p class="section-desc">
                    <?php if (isset($aboutContent['about_desc']) && !empty($aboutContent['about_desc'])): ?>
                        <?php echo $aboutContent['about_desc']; ?>
                    <?php else: ?>
                        We're creatives, designers & developers who work together to create beautiful &amp; super digital experiences.
                    <?php endif; ?>                    
                </p>
            </div>
            <!-- End Section Title -->
        </div>
        <div class="col-md-8 col-sm-12 bgWhite sec_title_content">
            <div class="row about-desc item_bottom">
                <p class="heroline text-center">
                    <?php echo $aboutContent['content']; ?>
                </p>
            </div>            
            <div class="row new-line">
                <!-- feature-item-carousel : starts -->
                <div id="feature-list-carousel" class="owl-carousel">
                    <?php if (!empty($abouts)): ?>
                        <?php foreach ($abouts as $key => $value): ?>
                            <?php if (!empty($value)): ?>
                                <?php foreach ($value as $keys => $values): ?>
                                    <div class="feature-box text-center item_fade_in">
                                        <div class="feature-box-image">   
                                            <?php
                                            $attachment_id = get_the_post_thumbnail($values->ID, 'full', array('class' => 'img-responsive'));
                                            echo $attachment_id;
                                            ?>                                            
                                            <br>
                                            <h4><?php echo $values->post_title; ?></h4>
                                            <p>
                                                <?php echo $values->post_content; ?>
                                            </p>
                                        </div>
                                    </div>    
                                <?php endforeach; ?>
                            <?php endif; ?>
                        <?php endforeach; ?>
                    <?php endif; ?>
                </div>
                <!-- feature-item-carousel : ends -->
            </div>
        </div>
    </div>
</section>
<!-- End About section ==================================================== -->