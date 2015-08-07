<?php global $featurePromSu;?>
<!-- Features Section ========================================================= -->
<section id="feature" class="parallax">
<div class="parallax-overlay-dark">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <!-- Section title -->
                <div class="section-title white item_bottom text-center">
                    <h1>Versatile &amp; <span class="hlite">Unique</span> Layout</h1>
                    <p class="section-desc">
                           <?php echo $featurePromSu['featurePr']['fi_description'] ?>
                    </p>
                    <p class="button">
                        <a class="btn btn-promsu btn-md" href="<?php echo $featurePromSu['featurePr']['fi_link_option'] ?>"><?php echo $featurePromSu['featurePr']['fi_value_button'] ?></a>
                    </p>
                </div>
                <!-- End Section title -->
            </div>
        </div>
        <div class="row new-line">
            <div class="col-md-12 text-center item_bottom">
            <?php $image_attributes = wp_get_attachment_image_src($featurePromSu['featurePr']['fi_image'], 'full'); ?>
                <img class="img-responsive" src="<?php echo $image_attributes[0]; ?>" alt="promsu-img">
            </div>
        </div>
    </div>
</div>
</section>
<!-- End Features Section ========================================================= -->