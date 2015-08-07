<?php
    global $pricingPromSu ; 
    $count_item = 4;
?>
<?php for($i=1; $i <= $count_item; $i++) { ?>
    <!--Price Table 1 -->
    <div class="col-sm-3 text-center">
        <div class="<?php echo ($pricingPromSu['pr_featured'] == $i) ? 'featured':''; ?> pricing-table">
            <div class="price-head">
                <h2 class="price-name"><?php echo $pricingPromSu['pr_title'.$i]; ?><strong><?php echo $pricingPromSu['pr_price'.$i]; ?></strong> </h2>
            </div>
            <div class="price-body">  
                <ul>
                    <li><?php echo $pricingPromSu['pr_domains'.$i]; ?> Domain Names</li>
                    <li><?php echo $pricingPromSu['pr_disk'.$i]; ?>GB Dedicated Ram</li>
                    <li><?php echo $pricingPromSu['pr_subdomains'.$i]; ?> Sub Domain</li>
                    <li><?php echo $pricingPromSu['pr_addon_domain'.$i]; ?> Addon Domain</li>
                    <li><?php echo $pricingPromSu['pr_support'.$i]; ?> Support</li>
                </ul>
            </div>
            <div class="price-footer">
                <a href="<?php echo $pricingPromSu['pr_link'.$i]; ?>">Sign Up</a>
            </div>
        </div>
    </div>
    <!-- END .column -->
    <?php } ?>
   
