        </div>
<div id="insuran">
<p>Most insurances accepted</p>
<span><img src=""></span>
</div>

        <!-- FOOTER STARTS -->    


        <footer id="footer">



            <div class="container">


                <!-- Upper footer -->


                <div class="row">


                    <div class="col-md-3">


                        <?php if ( !function_exists('dynamic_sidebar')


                                || !dynamic_sidebar("Footer Left") ) : ?>  


                        <?php endif; ?>                   


                    </div>


                    <div class="col-md-3">


                        <?php if ( !function_exists('dynamic_sidebar')


                                || !dynamic_sidebar("Footer Left Center") ) : ?>  


                        <?php endif; ?>                   


                    </div>


                    <div class="col-md-3">


                        <?php if ( !function_exists('dynamic_sidebar')


                                || !dynamic_sidebar("Footer Right Center") ) : ?>  


                        <?php endif; ?>                   


                    </div>


                    <div class="col-md-3">


                        <?php if ( !function_exists('dynamic_sidebar')


                                || !dynamic_sidebar("Footer Right") ) : ?>  


                        <?php endif; ?>                   


                    </div>


                </div>


                <!-- Lower footer -->


                <div class="row">


                    <div class="copyright">


                        <div class="col-lg-12">


                            <p>Copyright © 2015 <?php bloginfo('name');?>. All rights reserved -  <a href="/privacy-policy/">Privacy Policy</a> <span>|</span> <a href="/terms-of-service/">Terms of Service</a> <span>|</span> <a href="<?php home_url();?>/sitemap_index.xml">Site Map</a></p>


                        </div>


                    </div>


                </div>


            </div>


        </footer>


        <!-- FOOTER ENDS -->
		


        <?php wp_footer(); ?>


    </body>


</html>