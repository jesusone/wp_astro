<?php
    /**
    * The template for displaying the footer
    *
    * Contains footer content and the closing of the #main and #page div elements.
    *
    * @package WordPress
    * @subpackage promsu
    * @since Twenty Thirteen 1.0
    */
?>
</div><!-- #main -->
<!--<footer id="footer-bottom">
    <div class="container">
        <div class="row">
            <div class="footer-bottom">
                <?php //prosum_sidebar_footer(); ?>
            </div>
        </div>
    </div>
</footer>  -->
<footer id="footer">
    <div class="container">
      <div class="row text-center">        
        <div class="col-sm-12">
          <div class="copyright-text">
            <p>&copy; Copyright 2015 <a href="#"><span>Astro</span></a>. All Rights Reserved.</p>
          </div>
          <div class="footer-socials">
			<?php 
				dynamic_sidebar('pro-footer-sidebar');
			?>
          </div>
          <div class="scroll-up">
            <a data-scroll href="#home"><i class="fa fa-angle-double-up"></i></a>
          </div>
        </div>
      </div>
    </div>
  </footer><!--/#footer--> 
<?php wp_footer(); ?>
<!-- Js Library -->
<script type="text/javascript">
    var _gaq = _gaq || [];
    _gaq.push(['_setAccount', 'YOUR GOOGLE ANALYTICS CODE']);
    _gaq.push(['_trackPageview']);
    (function() {
        var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
        ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
        var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
    })();
</script>
</body>
</html>