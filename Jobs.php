<!DOCTYPE html>
<!-- 

<!--[if !IE]><!-->
<html lang="en">
    <!--<![endif]-->
    <!-- BEGIN HEAD -->
	<?php 
      include("header.php");
    ?>
        <!-- BEGIN: PAGE CONTAINER -->
        <div class="c-layout-page">
            
            <div class="container">
                <div class="c-layout-sidebar-menu c-theme ">
                    <!-- BEGIN: LAYOUT/SIDEBARS/SHOP-SIDEBAR-DASHBOARD -->
                    <div class="c-sidebar-menu-toggler">
                        <h3 class="c-title c-font-uppercase c-font-bold">My Profile</h3>
                        <a href="javascript:;" class="c-content-toggler" data-toggle="collapse" data-target="#sidebar-menu-1">
                            <span class="c-line"></span>
                            <span class="c-line"></span>
                            <span class="c-line"></span>
                        </a>
                    </div>
                    <ul class="c-sidebar-menu collapse " id="sidebar-menu-1">
                        <li class="c-dropdown c-open">
                            <a href="javascript:;" class="c-toggler">分類:
                                <span class="c-arrow"></span>
                            </a>
                            <ul class="c-dropdown-menu">
								<li class="c-active">
                                    <a id="ShowAll" >全部</a>
                                </li>
                                <li class="">
                                    <a id="Gov" >行政</a>
                                </li>
                                <li class="">
                                    <a id="Doc">文書</a>
                                </li>
                                <li class="">
                                    <a id="Inf">資訊</a>
                                </li>
                                <li class="">
                                    <a id="ToGo">派遣</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                    <!-- END: LAYOUT/SIDEBARS/SHOP-SIDEBAR-DASHBOARD -->
                </div>
                <div class="c-layout-sidebar-content ">
                    <!-- BEGIN: PAGE CONTENT -->
                    <div class="c-content-title-1">
                        <h3 class="c-font-uppercase c-font-bold">徵才公告</h3>
                        <div class="c-line-left"></div>
                    </div>
                    <div class="c-shop-wishlist-1">
                        <div class="c-border-bottom hidden-sm hidden-xs">
                            <div class="row">
                                <div class="col-md-3">
                                    <h3 class="c-font-uppercase c-font-16 c-font-grey-2 c-font-bold">徵才一覽表</h3>
                                </div>
                                <div class="col-md-5">
                                    <h3 class="c-font-uppercase c-font-16 c-font-grey-2 c-font-bold">職務名稱</h3>
                                </div>
                                <div class="col-md-2">
                                    <h3 class="c-font-uppercase c-font-16 c-font-grey-2 c-font-bold">發佈日期</h3>
                                </div>
                                <div class="col-md-2">
                                    <h3 class="c-font-uppercase c-font-16 c-font-grey-2 c-font-bold">發佈單位</h3>
                                </div>
                            </div>
                        </div>
                        <!-- BEGIN: PRODUCT ITEM ROW -->
                        <div class="c-border-bottom c-row-item DocClass">
                            <div class="row">
                                <div class="col-md-3 col-sm-12">
                                    <div class="c-content-overlay">
                                        <div class="c-overlay-wrapper">
                                            <div class="c-overlay-content">
                                                <a href="shop-product-details-2.html" class="btn btn-md c-btn-grey-1 c-btn-uppercase c-btn-bold c-btn-border-1x c-btn-square">我有興趣</a>
                                            </div>
                                        </div>
                                        <div class="c-bg-img-top-center c-overlay-object " data-height="height">
                                            <img width="100%" class="img-responsive" src="assets/base/img/content/job/Doc.jpg"> </div>
                                    </div>
                                </div>
                                <div class="col-md-5 col-sm-8 TestJob ">
                                    <ul class="c-list list-unstyled">
                                        <li class="c-margin-b-25">
                                            <a href="shop-product-details-2.html" class="c-font-bold c-font-22 c-theme-link">臨時計時人員(1名)</a>
                                        </li>
                                        <li class="c-margin-b-10">工作內容 : 協助婦女福利服務業務，系統資料登打及其他臨時交辦事項</li>
                                        <li>待遇 : 以時薪新台幣120元進用，每月最高工時為160小時。</li>
                                        <li class="c-margin-t-30">
                                            <div class="form-group" role="group">
                                                
                                                <button type="submit" class="btn btn-sm btn-default c-btn-square c-btn-uppercase c-btn-bold">我有興趣</button>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-md-2 col-sm-2">
                                    <p class="visible-xs-block c-theme-font c-font-uppercase c-font-bold">Stock</p>
                                    <p class="c-font-sbold c-font-18">104.11.26</p>
                                </div>
                                <div class="col-md-2 col-sm-2">
                                    <p class="visible-xs-block c-theme-font c-font-uppercase c-font-bold">Unit Price</p>
                                    <p class="c-font-sbold c-font-uppercase c-font-18 Testter2" id="Tes">人事處</p>
                                </div>
                            </div>
                        </div>
                        <!-- END: PRODUCT ITEM ROW -->
						<!-- BEGIN: PRODUCT ITEM ROW -->
                        <div class="c-border-bottom c-row-item GovClass">
                            <div class="row">
                                <div class="col-md-3 col-sm-12">
                                    <div class="c-content-overlay">
                                        <div class="c-overlay-wrapper">
                                            <div class="c-overlay-content">
                                                <a href="shop-product-details-2.html" class="btn btn-md c-btn-grey-1 c-btn-uppercase c-btn-bold c-btn-border-1x c-btn-square">我有興趣</a>
                                            </div>
                                        </div>
                                        <div class="c-bg-img-top-center c-overlay-object " data-height="height">
                                            <img width="100%" class="img-responsive" src="assets/base/img/content/job/Gov.png"> </div>
                                    </div>
                                </div>
                                <div class="col-md-5 col-sm-8 TestJob ">
                                    <ul class="c-list list-unstyled">
                                        <li class="c-margin-b-25">
                                            <a href="shop-product-details-2.html" class="c-font-bold c-font-22 c-theme-link">行政志工人員(1名)</a>
                                        </li>
                                        <li class="c-margin-b-10">工作內容 : 協助處理行政程序</li>
                                        <li>待遇 : 可以免費吃到營養午餐。</li>
                                        <li class="c-margin-t-30">
                                            <div class="form-group" role="group">
                                                
                                                <button type="submit" class="btn btn-sm btn-default c-btn-square c-btn-uppercase c-btn-bold">我有興趣</button>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-md-2 col-sm-2">
                                    <p class="visible-xs-block c-theme-font c-font-uppercase c-font-bold">Stock</p>
                                    <p class="c-font-sbold c-font-18">104.11.26</p>
                                </div>
                                <div class="col-md-2 col-sm-2">
                                    <p class="visible-xs-block c-theme-font c-font-uppercase c-font-bold">Unit Price</p>
                                    <p class="c-font-sbold c-font-uppercase c-font-18 Testter2" id="Tes">人事處</p>
                                </div>
                            </div>
                        </div>
                        <!-- END: PRODUCT ITEM ROW -->
						<!-- BEGIN: PRODUCT ITEM ROW -->
                        <div class="c-border-bottom c-row-item DocClass">
                            <div class="row">
                                <div class="col-md-3 col-sm-12">
                                    <div class="c-content-overlay">
                                        <div class="c-overlay-wrapper">
                                            <div class="c-overlay-content">
                                                <a href="shop-product-details-2.html" class="btn btn-md c-btn-grey-1 c-btn-uppercase c-btn-bold c-btn-border-1x c-btn-square">我有興趣</a>
                                            </div>
                                        </div>
                                        <div class="c-bg-img-top-center c-overlay-object " data-height="height">
                                            <img width="100%" class="img-responsive" src="assets/base/img/content/job/Doc.jpg"> </div>
                                    </div>
                                </div>
                                <div class="col-md-5 col-sm-8 TestJob ">
                                    <ul class="c-list list-unstyled">
                                        <li class="c-margin-b-25">
                                            <a href="shop-product-details-2.html" class="c-font-bold c-font-22 c-theme-link">文書處理人員(3名)</a>
                                        </li>
                                        <li class="c-margin-b-10">工作內容 : 協助幫忙打字</li>
                                        <li>待遇 : 以時薪新台幣130元進用，每月最高工時為190小時。</li>
                                        <li class="c-margin-t-30">
                                            <div class="form-group" role="group">
                                                
                                                <button type="submit" class="btn btn-sm btn-default c-btn-square c-btn-uppercase c-btn-bold">我有興趣</button>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-md-2 col-sm-2">
                                    <p class="visible-xs-block c-theme-font c-font-uppercase c-font-bold">Stock</p>
                                    <p class="c-font-sbold c-font-18">104.11.26</p>
                                </div>
                                <div class="col-md-2 col-sm-2">
                                    <p class="visible-xs-block c-theme-font c-font-uppercase c-font-bold">Unit Price</p>
                                    <p class="c-font-sbold c-font-uppercase c-font-18 Testter2" id="Tes">人事處</p>
                                </div>
                            </div>
                        </div>
                        <!-- END: PRODUCT ITEM ROW -->
						<!-- BEGIN: PRODUCT ITEM ROW -->
                        <div class="c-border-bottom c-row-item InfClass">
                            <div class="row">
                                <div class="col-md-3 col-sm-12">
                                    <div class="c-content-overlay">
                                        <div class="c-overlay-wrapper">
                                            <div class="c-overlay-content">
                                                <a href="shop-product-details-2.html" class="btn btn-md c-btn-grey-1 c-btn-uppercase c-btn-bold c-btn-border-1x c-btn-square">我有興趣</a>
                                            </div>
                                        </div>
                                        <div class="c-bg-img-top-center c-overlay-object " data-height="height">
                                            <img width="100%" class="img-responsive" src="assets/base/img/content/job/Inf.png"> </div>
                                    </div>
                                </div>
                                <div class="col-md-5 col-sm-8 TestJob ">
                                    <ul class="c-list list-unstyled">
                                        <li class="c-margin-b-25">
                                            <a href="shop-product-details-2.html" class="c-font-bold c-font-22 c-theme-link">機房管理組員(3名)</a>
                                        </li>
                                        <li class="c-margin-b-10">工作內容 : 協助管理機房，排除錯誤</li>
                                        <li>待遇 : 以時薪新台幣100元進用，每月最高工時為180小時。</li>
                                        <li class="c-margin-t-30">
                                            <div class="form-group" role="group">
                                                
                                                <button type="submit" class="btn btn-sm btn-default c-btn-square c-btn-uppercase c-btn-bold">我有興趣</button>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-md-2 col-sm-2">
                                    <p class="visible-xs-block c-theme-font c-font-uppercase c-font-bold">Stock</p>
                                    <p class="c-font-sbold c-font-18">104.11.26</p>
                                </div>
                                <div class="col-md-2 col-sm-2">
                                    <p class="visible-xs-block c-theme-font c-font-uppercase c-font-bold">Unit Price</p>
                                    <p class="c-font-sbold c-font-uppercase c-font-18 Testter2" id="Tes">人事處</p>
                                </div>
                            </div>
                        </div>
                        <!-- END: PRODUCT ITEM ROW -->
						<!-- BEGIN: PRODUCT ITEM ROW -->
                        <div class="c-border-bottom c-row-item GoClass">
                            <div class="row">
                                <div class="col-md-3 col-sm-12">
                                    <div class="c-content-overlay">
                                        <div class="c-overlay-wrapper">
                                            <div class="c-overlay-content">
                                                <a href="shop-product-details-2.html" class="btn btn-md c-btn-grey-1 c-btn-uppercase c-btn-bold c-btn-border-1x c-btn-square">我有興趣</a>
                                            </div>
                                        </div>
                                        <div class="c-bg-img-top-center c-overlay-object " data-height="height">
                                            <img width="100%" class="img-responsive" src="assets/base/img/content/job/Go.png"> </div>
                                    </div>
                                </div>
                                <div class="col-md-5 col-sm-8 TestJob ">
                                    <ul class="c-list list-unstyled">
                                        <li class="c-margin-b-25">
                                            <a href="shop-product-details-2.html" class="c-font-bold c-font-22 c-theme-link">暑期派遣志工(10名)</a>
                                        </li>
                                        <li class="c-margin-b-10">工作內容 : 外出協助市府活動知舉行</li>
                                        <li>待遇 : 無。</li>
                                        <li class="c-margin-t-30">
                                            <div class="form-group" role="group">
                                                
                                                <button type="submit" class="btn btn-sm btn-default c-btn-square c-btn-uppercase c-btn-bold">我有興趣</button>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-md-2 col-sm-2">
                                    <p class="visible-xs-block c-theme-font c-font-uppercase c-font-bold">Stock</p>
                                    <p class="c-font-sbold c-font-18">104.11.26</p>
                                </div>
                                <div class="col-md-2 col-sm-2">
                                    <p class="visible-xs-block c-theme-font c-font-uppercase c-font-bold">Unit Price</p>
                                    <p class="c-font-sbold c-font-uppercase c-font-18 Testter2" id="Tes">人事處</p>
                                </div>
                            </div>
                        </div>
                        <!-- END: PRODUCT ITEM ROW -->
						<!-- BEGIN: PRODUCT ITEM ROW -->
                        <div class="c-border-bottom c-row-item InfClass">
                            <div class="row">
                                <div class="col-md-3 col-sm-12">
                                    <div class="c-content-overlay">
                                        <div class="c-overlay-wrapper">
                                            <div class="c-overlay-content">
                                                <a href="shop-product-details-2.html" class="btn btn-md c-btn-grey-1 c-btn-uppercase c-btn-bold c-btn-border-1x c-btn-square">我有興趣</a>
                                            </div>
                                        </div>
                                        <div class="c-bg-img-top-center c-overlay-object " data-height="height">
                                            <img width="100%" class="img-responsive" src="assets/base/img/content/job/Inf.png"> </div>
                                    </div>
                                </div>
                                <div class="col-md-5 col-sm-8 TestJob ">
                                    <ul class="c-list list-unstyled">
                                        <li class="c-margin-b-25">
                                            <a href="shop-product-details-2.html" class="c-font-bold c-font-22 c-theme-link">資安管理組員(3名)</a>
                                        </li>
                                        <li class="c-margin-b-10">工作內容 : 協助市府內資訊安全以及系統穩定</li>
                                        <li>待遇 : 面議。</li>
                                        <li class="c-margin-t-30">
                                            <div class="form-group" role="group">
                                                
                                                <button type="submit" class="btn btn-sm btn-default c-btn-square c-btn-uppercase c-btn-bold">我有興趣</button>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-md-2 col-sm-2">
                                    <p class="visible-xs-block c-theme-font c-font-uppercase c-font-bold">Stock</p>
                                    <p class="c-font-sbold c-font-18">104.12.28</p>
                                </div>
                                <div class="col-md-2 col-sm-2">
                                    <p class="visible-xs-block c-theme-font c-font-uppercase c-font-bold">Unit Price</p>
                                    <p class="c-font-sbold c-font-uppercase c-font-18 Testter2" id="Tes">資管組</p>
                                </div>
                            </div>
                        </div>
                        <!-- END: PRODUCT ITEM ROW -->
                    </div>
                    <!-- END: PAGE CONTENT -->
                </div>
            </div>
        </div>
        <!-- END: PAGE CONTAINER -->
        
        <!-- BEGIN: LAYOUT/FOOTERS/GO2TOP -->
        <?php include("footer.php") ?>
        <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script> -->
		<script>
            $(document).ready(function()
            {
			
				<!-- GovClass DocClass InfClass GoClass -->
				$("#ShowAll").click(function () {
					 $(".GovClass").show(200);
					 $(".DocClass").show(200);
					 $(".InfClass").show(200);
					 $(".GoClass").show(200);
					 //$(this).hide();
					
				});
				$("#Gov").click(function () {
					$(".GovClass").show(200);
					$(".DocClass").hide(200);
					$(".InfClass").hide(200);
					$(".GoClass").hide(200);
					// $(this).hide();
					
				});
				$("#Doc").click(function () {
					$(".GovClass").hide(200);
					$(".DocClass").show(200);
					$(".InfClass").hide(200);
					$(".GoClass").hide(200);
					// $(this).hide();
				});
				$("#Inf").click(function () {
					$(".GovClass").hide(200);
					$(".DocClass").hide(200);
					$(".InfClass").show(200);
					$(".GoClass").hide(200);
					// $(this).hide();
				});
				$("#ToGo").click(function () {
					$(".GovClass").hide(200);
					$(".DocClass").hide(200);
					$(".InfClass").hide(200);
					$(".GoClass").show(200);
					// $(this).hide();
				});
                App.init(); // init core    
            });
        </script>
        <!-- END: THEME SCRIPTS -->
        <!-- END: LAYOUT/BASE/BOTTOM -->
    </body>

</html>