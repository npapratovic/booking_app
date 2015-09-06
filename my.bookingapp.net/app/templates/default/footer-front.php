   </div> <!-- end wrapper -->
  

	<!-- Bootstrap -->
	<script src="<?php echo url::get_template_path();?>js/jquery.min.js"></script>
	<script src="<?php echo url::get_template_path();?>js/jquery-ui-1.10.4.custom.min.js"></script>
 
    <script src="<?php echo url::get_template_path();?>js/bootstrap.min.js"></script>


     <script type="text/javascript">
        var big_image;
        $().ready(function(){
            responsive = $(window).width();
            
            // $(window).on('scroll', gsdk.checkScrollForTransparentNavbar);
            
            if (responsive >= 768){
                big_image = $('.parallax-background').find('img');
                console.log(big_image);
                $(window).on('scroll',function(){           
                    parallax();
                });
            }
            
        });
        
       var parallax = function() {
            var current_scroll = $(this).scrollTop();
            
            oVal = ($(window).scrollTop() / 3); 
            big_image.css('top',oVal);
        };
    </script>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-28527143-9', 'auto');
  ga('send', 'pageview');

</script>
</body>
</html>
