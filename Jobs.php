<!DOCTYPE html>
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
    <!--<![endif]-->
    <!-- BEGIN HEAD -->
	<?php 
      include("header.php");
    ?>
    

    <body class="c-layout-header-fixed c-layout-header-mobile-fixed c-layout-header-topbar c-layout-header-topbar-collapse">
        <!-- BEGIN: CONTENT/USER/SIGNUP-FORM -->
        <div class="modal fade c-content-login-form" id="signup-form" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content c-square">
                    <div class="modal-header c-no-border">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <h3 class="c-font-24 c-font-sbold">Create An Account</h3>
                        <p>Please fill in below form to create an account with us</p>
                        <form>
                            <div class="form-group">
                                <label for="signup-email" class="hide">Email</label>
                                <input type="email" class="form-control input-lg c-square" id="signup-email" placeholder="Email"> </div>
                            <div class="form-group">
                                <label for="signup-username" class="hide">Username</label>
                                <input type="email" class="form-control input-lg c-square" id="signup-username" placeholder="Username"> </div>
                            <div class="form-group">
                                <label for="signup-fullname" class="hide">Fullname</label>
                                <input type="email" class="form-control input-lg c-square" id="signup-fullname" placeholder="Fullname"> </div>
                            <div class="form-group">
                                <label for="signup-country" class="hide">Country</label>
                                <select class="form-control input-lg c-square" id="signup-country">
                                    <option value="1">Country</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn c-theme-btn btn-md c-btn-uppercase c-btn-bold c-btn-square c-btn-login">Signup</button>
                                <a href="javascript:;" class="c-btn-forgot" data-toggle="modal" data-target="#login-form" data-dismiss="modal">Back To Login</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- END: CONTENT/USER/SIGNUP-FORM -->
        <!-- BEGIN: CONTENT/USER/LOGIN-FORM -->
        <div class="modal fade c-content-login-form" id="login-form" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content c-square">
                    <div class="modal-header c-no-border">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <h3 class="c-font-24 c-font-sbold">Good Afternoon!</h3>
                        <p>Let's make today a great day!</p>
                        <form>
                            <div class="form-group">
                                <label for="login-email" class="hide">Email</label>
                                <input type="email" class="form-control input-lg c-square" id="login-email" placeholder="Email"> </div>
                            <div class="form-group">
                                <label for="login-password" class="hide">Password</label>
                                <input type="password" class="form-control input-lg c-square" id="login-password" placeholder="Password"> </div>
                            <div class="form-group">
                                <div class="c-checkbox">
                                    <input type="checkbox" id="login-rememberme" class="c-check">
                                    <label for="login-rememberme" class="c-font-thin c-font-17">
                                        <span></span>
                                        <span class="check"></span>
                                        <span class="box"></span> Remember Me </label>
                                </div>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn c-theme-btn btn-md c-btn-uppercase c-btn-bold c-btn-square c-btn-login">Login</button>
                                <a href="javascript:;" data-toggle="modal" data-target="#forget-password-form" data-dismiss="modal" class="c-btn-forgot">Forgot Your Password ?</a>
                            </div>
                            <div class="clearfix">
                                <div class="c-content-divider c-divider-sm c-icon-bg c-bg-grey c-margin-b-20">
                                    <span>or signup with</span>
                                </div>
                                <ul class="c-content-list-adjusted">
                                    <li>
                                        <a class="btn btn-block c-btn-square btn-social btn-twitter">
                                            <i class="fa fa-twitter"></i> Twitter </a>
                                    </li>
                                    <li>
                                        <a class="btn btn-block c-btn-square btn-social btn-facebook">
                                            <i class="fa fa-facebook"></i> Facebook </a>
                                    </li>
                                    <li>
                                        <a class="btn btn-block c-btn-square btn-social btn-google">
                                            <i class="fa fa-google"></i> Google </a>
                                    </li>
                                </ul>
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer c-no-border">
                        <span class="c-text-account">Don't Have An Account Yet ?</span>
                        <a href="javascript:;" data-toggle="modal" data-target="#signup-form" data-dismiss="modal" class="btn c-btn-dark-1 btn c-btn-uppercase c-btn-bold c-btn-slim c-btn-border-2x c-btn-square c-btn-signup">Signup!</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- END: CONTENT/USER/LOGIN-FORM -->
        <!-- BEGIN: LAYOUT/SIDEBARS/QUICK-SIDEBAR -->
        <nav class="c-layout-quick-sidebar">
            <div class="c-header">
                <button type="button" class="c-link c-close">
                    <i class="icon-login"></i>
                </button>
            </div>
            <div class="c-content">
                <div class="c-section">
                    <h3>Theme Colors</h3>
                    <div class="c-settings">
                        <span class="c-color c-default c-active" data-color="default"></span>
                        <span class="c-color c-green1" data-color="green1"></span>
                        <span class="c-color c-green2" data-color="green2"></span>
                        <span class="c-color c-green3" data-color="green3"></span>
                        <span class="c-color c-yellow1" data-color="yellow1"></span>
                        <span class="c-color c-yellow2" data-color="yellow2"></span>
                        <span class="c-color c-yellow3" data-color="yellow3"></span>
                        <span class="c-color c-red1" data-color="red1"></span>
                        <span class="c-color c-red2" data-color="red2"></span>
                        <span class="c-color c-red3" data-color="red3"></span>
                        <span class="c-color c-purple1" data-color="purple1"></span>
                        <span class="c-color c-purple2" data-color="purple2"></span>
                        <span class="c-color c-purple3" data-color="purple3"></span>
                        <span class="c-color c-blue1" data-color="blue1"></span>
                        <span class="c-color c-blue2" data-color="blue2"></span>
                        <span class="c-color c-blue3" data-color="blue3"></span>
                        <span class="c-color c-brown1" data-color="brown1"></span>
                        <span class="c-color c-brown2" data-color="brown2"></span>
                        <span class="c-color c-brown3" data-color="brown3"></span>
                        <span class="c-color c-dark1" data-color="dark1"></span>
                        <span class="c-color c-dark2" data-color="dark2"></span>
                        <span class="c-color c-dark3" data-color="dark3"></span>
                    </div>
                </div>
                <div class="c-section">
                    <h3>Header Type</h3>
                    <div class="c-settings">
                        <input type="button" class="c-setting_header-type btn btn-sm c-btn-square c-btn-border-1x c-btn-white c-btn-sbold c-btn-uppercase active" data-value="boxed" value="boxed" />
                        <input type="button" class="c-setting_header-type btn btn-sm c-btn-square c-btn-border-1x c-btn-white c-btn-sbold c-btn-uppercase" data-value="fluid" value="fluid" /> </div>
                </div>
                <div class="c-section">
                    <h3>Header Mode</h3>
                    <div class="c-settings">
                        <input type="button" class="c-setting_header-mode btn btn-sm c-btn-square c-btn-border-1x c-btn-white c-btn-sbold c-btn-uppercase active" data-value="fixed" value="fixed" />
                        <input type="button" class="c-setting_header-mode btn btn-sm c-btn-square c-btn-border-1x c-btn-white c-btn-sbold c-btn-uppercase" data-value="static" value="static" /> </div>
                </div>
                <div class="c-section">
                    <h3>Mega Menu Style</h3>
                    <div class="c-settings">
                        <input type="button" class="c-setting_megamenu-style btn btn-sm c-btn-square c-btn-border-1x c-btn-white c-btn-sbold c-btn-uppercase active" data-value="dark" value="dark" />
                        <input type="button" class="c-setting_megamenu-style btn btn-sm c-btn-square c-btn-border-1x c-btn-white c-btn-sbold c-btn-uppercase" data-value="light" value="light" /> </div>
                </div>
                <div class="c-section">
                    <h3>Font Style</h3>
                    <div class="c-settings">
                        <input type="button" class="c-setting_font-style btn btn-sm c-btn-square c-btn-border-1x c-btn-white c-btn-sbold c-btn-uppercase active" data-value="default" value="default" />
                        <input type="button" class="c-setting_font-style btn btn-sm c-btn-square c-btn-border-1x c-btn-white c-btn-sbold c-btn-uppercase" data-value="light" value="light" /> </div>
                </div>
            </div>
        </nav>
        <!-- END: LAYOUT/SIDEBARS/QUICK-SIDEBAR -->
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
		
        <!-- END: LAYOUT/FOOTERS/GO2TOP -->
        <!-- BEGIN: LAYOUT/BASE/BOTTOM -->
        <!-- BEGIN: CORE PLUGINS -->
        <!--[if lt IE 9]>
	<script src="../assets/global/plugins/excanvas.min.js"></script> 
	<![endif]-->
        <script src="assets/plugins/jquery.min.js" type="text/javascript"></script>
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