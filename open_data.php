<!DOCTYPE html>
<!-- 
Theme: JANGO - Ultimate Multipurpose HTML Theme Built With Twitter Bootstrap 3.3.5
Version: 1.3.2
Author: Themehats
Site: http://www.themehats.com
Purchase: http://themeforest.net/item/jango-responsive-multipurpose-html5-template/11987314?ref=themehats
Contact: support@themehats.com
Follow: http://www.twitter.com/themehats
-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
    <!--<![endif]-->
    <!-- BEGIN HEAD -->
    <link rel="stylesheet" href="php_image/lib/js/chartphp.css">
    <script src="assets/plugins/jquery.min.js" type="text/javascript"></script>
    <?php 
      include("header.php");
      include("php_image/lib/inc/chartphp_dist.php");
      $p = new chartphp();
      $p->data = array(array(array('a',6), array('b',8), array('c',14), array('d',20)));
      $p->chart_type = "donut";
      // Common Options
      $p->title = "<p><a href=\"#\">營建預算(詳情請點我)</a></p><p>總預算:4332212</p>(藍:都更 紅:道路 綠:公園 藍:鐵路)";
      $out = $p->render('c1');
      $p->data = array(array(array('a',26), array('b',18), array('c',4), array('d',5)));
      $p->chart_type = "donut";
      // Common Options
      $p->title = "<p><a href=\"#\">醫療預算(詳情請點我)</a></p><p>總預算:3441234</p>(藍:藥品 紅:救難 綠:獎勵 藍:預防)";
      $out2 = $p->render('c2');
      $p->data = array(array(array('a',48), array('b',48), array('c',4)));
      $p->chart_type = "donut";
      // Common Options
      $p->title = "<p><a href=\"#\">吃客松預算(詳情請點我)</a></p><p>總預算:1000000</p>(藍:食物 綠:飲料 紅:獎勵)";
      $out3 = $p->render('c3');
    ?>
    <style>
  /* white color data labels */
      .jqplot-data-label{color:white;}
    </style>
    <body class="c-layout-header-fixed c-layout-header-mobile-fixed">
        <!-- BEGIN: LAYOUT/HEADERS/HEADER-1 -->
        <!-- END: LAYOUT/HEADERS/HEADER-1 -->
        <!-- BEGIN: PAGE CONTAINER -->
        <div class="c-layout-page">
            <!-- BEGIN: LAYOUT/BREADCRUMBS/BREADCRUMBS-1 -->
            <div class="c-layout-breadcrumbs-1 c-fonts-uppercase c-fonts-bold">
                <div class="container">
                    <div class="c-page-title c-pull-left">
                        <h3 class="c-font-uppercase c-font-sbold"><a href="http://opendata.hccg.gov.tw/">開放資料專區(想瞭解更多請點我)</a></h3>
                    </div>
                    <ul class="c-page-breadcrumbs c-theme-nav c-pull-right c-fonts-regular">
                        <li>
                            <a href="#data1">預算分派</a>
                        </li>
                        <li>/</li>
                        <li>
                            <a href="#data2">生育保健</a>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- END: LAYOUT/BREADCRUMBS/BREADCRUMBS-1 -->
            <!-- BEGIN: PAGE CONTENT -->
            <!-- BEGIN: CONTENT/STATS/COUNTER-1 -->
            <div class="c-content-box c-size-md c-bg-white" id="data1">
               <div class="container">
                    <div class="c-content-counter-1">
                        <div class="c-content-title-1">
                            <h3 class="c-center c-font-uppercase c-font-bold c-font-bold">預算分派</h3>
                            <div class="c-line-center c-bg-white"></div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="c-theme-border c-font-bold c-theme-font" ><?php echo $out; ?></div>
                            </div>
                            <div class="col-md-4">
                                <div class="c-theme-border c-font-bold c-theme-font"><?php echo $out2; ?></div>
                            </div>
                            <div class="col-md-4">
                                <div class="c-theme-border c-font-bold c-theme-font"><?php echo $out3; ?></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END: CONTENT/STATS/COUNTER-1 -->
            <!-- BEGIN: CONTENT/STATS/COUNTER-4 --> 
            <div class="c-content-box c-size-lg c-bg-parallax"  id="data2" style="background-image: url(assets/base/img/content/backgrounds/bg-65.jpg)">
              <div class="container">
                    <div class="c-content-counter-1 c-opt-1">
                        <div class="c-content-title-1">
                            <h3 class="c-center c-font-uppercase c-font-bold">生育保健類</h3>
                            <div class="c-line-center"></div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="c-counter c-theme-border c-font-bold c-theme-font" data-counter="counterup">12</div>
                                <h4 class="c-title c-first c-font-uppercase c-font-bold">預防愛滋諮詢服務點</h4>
                                <p class="c-content"><a href="http://opendata.hccg.gov.tw/dataset/hcchb-20151013-083529-6581/resource/12ed311c-3b4b-4b7c-9843-241039915104">詳情請點我</a></p>
                            </div>
                            <div class="col-md-4">
                                <div class="c-counter c-theme-border c-font-bold c-theme-font" data-counter="counterup">6</div>
                                <h4 class="c-title c-font-uppercase c-font-bold">護理之家</h4>
                                <p class="c-content"><a href="http://opendata.hccg.gov.tw/dataset/hcchb-20150127-115025-8972/resource/93408e68-b31f-465f-b51a-7567404f1d97">詳情請點我</a></p>
                            </div>
                            <div class="col-md-4">
                                <div class="c-counter c-theme-border c-font-bold c-theme-font" data-counter="counterup">5</div>
                                <h4 class="c-title c-font-uppercase c-font-bold">月子中心</h4>
                                <p class="c-content"><a href="http://opendata.hccg.gov.tw/dataset/hcchb-20150127-115152-8818/resource/147a5ac7-ed24-46a9-a69f-c1ee964e7a07">詳情請點我</a></p>
                            </div>
                        </div>
                    </div>
                </div>              
            </div>
            <!-- END: CONTENT/STATS/COUNTER-4 -->

            <!-- END: PAGE CONTENT -->
        </div>
        <!-- END: PAGE CONTAINER -->
        <!-- BEGIN: LAYOUT/FOOTERS/FOOTER-5 -->

        <!-- END: LAYOUT/FOOTERS/FOOTER-5 -->
        <!-- BEGIN: LAYOUT/FOOTERS/GO2TOP -->
           <?php include("footer.php") ?>
        <!-- END: LAYOUT/FOOTERS/GO2TOP -->
        <!-- BEGIN: LAYOUT/BASE/BOTTOM -->
        <!-- BEGIN: CORE PLUGINS -->
        <!--[if lt IE 9]>
	<script src="../assets/global/plugins/excanvas.min.js"></script> 
	<![endif]-->
        

      
        <script src="assets/plugins/jquery-migrate.min.js" type="text/javascript"></script>
        <script src="assets/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
        <script src="assets/plugins/jquery.easing.min.js" type="text/javascript"></script>
        <!-- END: CORE PLUGINS -->
        <!-- BEGIN: LAYOUT PLUGINS -->
        <script src="assets/plugins/cubeportfolio/js/jquery.cubeportfolio.min.js" type="text/javascript"></script>
        <script src="assets/plugins/owl-carousel/owl.carousel.min.js" type="text/javascript"></script>
        <script src="assets/plugins/counterup/jquery.counterup.min.js" type="text/javascript"></script>
        <script src="assets/plugins/counterup/jquery.waypoints.min.js" type="text/javascript"></script>
        <script src="assets/plugins/fancybox/jquery.fancybox.pack.js" type="text/javascript"></script>
        <script src="assets/plugins/slider-for-bootstrap/js/bootstrap-slider.js" type="text/javascript"></script>
        <!-- END: LAYOUT PLUGINS -->
        <!-- BEGIN: THEME SCRIPTS -->
        <script src="assets/base/js/components.js" type="text/javascript"></script>
        <script src="assets/base/js/components-shop.js" type="text/javascript"></script>
        <script src="assets/base/js/app.js" type="text/javascript"></script>
        <script src="php_image/lib/js/chartphp.js"></script>

        <script>
            $(document).ready(function()
            {
                App.init(); // init core    
            });

            jQuery(window).load(function(){
              $("#c1").next("div").hide();
              $("#c2").next("div").hide();
              $("#c3").next("div").hide();
            });
        </script>
        <!-- END: THEME SCRIPTS -->
        <!-- END: LAYOUT/BASE/BOTTOM -->
    </body>

</html>