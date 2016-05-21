<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

if (G5_IS_MOBILE) {
    include_once(G5_THEME_MOBILE_PATH.'/head.php');
    return;
}

include_once(G5_THEME_PATH.'/head.sub.php');
include_once(G5_LIB_PATH.'/latest.lib.php');
include_once(G5_LIB_PATH.'/outlogin.lib.php');
include_once(G5_LIB_PATH.'/poll.lib.php');
include_once(G5_LIB_PATH.'/visit.lib.php');
include_once(G5_LIB_PATH.'/connect.lib.php');
include_once(G5_LIB_PATH.'/popular.lib.php');

?>
<!DOCTYPE html>
<html lang="en" class="wide wow-animation">
  <head>
    <!--Site Title-->
    <title>Home</title>
    <meta charset="utf-8">
    <meta name="format-detection" content="telephone=no">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

    <!--Stylesheets-->
    <link rel="icon" href="images/favicon.ico" type="image/x-icon">

    <!--Bootstrap-->
    <link rel="stylesheet" href="css/style.css">
<!--[if lt IE 10]>
    <div style="background: #212121; padding: 10px 0; box-shadow: 3px 3px 5px 0 rgba(0,0,0,.3); clear: both; text-align:center; position: relative; z-index:1;"><a href="http://windows.microsoft.com/en-US/internet-explorer/.."><img src="images/ie8-panel/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today."></a></div>
    <script src="js/html5shiv.min.js"></script><[endif]-->
  </head>

  <body>
    <!--The Main Wrapper-->
	    <?php
    if(defined('_INDEX_')) { // index에서만 실행
        include G5_BBS_PATH.'/newwin.inc.php'; // 팝업레이어
    }
    ?>
    <div class="page">
      <!--
      ========================================================
                              HEADER
      ========================================================
      -->
      <header class="page-header">

        <!--RD Navbar-->
        <div class="rd-navbar-wrap">
          <nav class="rd-navbar top-panel-none-items" data-layout="rd-navbar-fixed" data-hover-on="false" data-stick-up="false" data-sm-layout="rd-navbar-fullwidth" data-md-layout="rd-navbar-static">
            <div class="rd-navbar-top-panel">
              <div class="rd-navbar-inner">
                <button data-rd-navbar-toggle=".list-inline, .fa-envelope, .fa-phone, .fa-shopping-cart" class="rd-navbar-collapse-toggle"><span></span></button><a href="mailto:#" class="fa-envelope">demomail@domail.com</a><a href="callto:#" class="fa-phone">+1 (126) 598-89-75</a>
                <ul class="list-inline pull-right">
                  <li><a href="#" class="fa-facebook"></a></li>
                  <li><a href="#" class="fa-pinterest-p"></a></li>
                  <li><a href="#" class="fa-twitter"></a></li>
                  <li><a href="#" class="fa-google-plus"></a></li>
                  <li><a href="#" class="fa-instagram"></a></li>
                </ul>
              </div>
            </div>
            <div class="rd-navbar-inner">

              <!--RD Navbar Panel-->
              <div class="rd-navbar-panel">

                <!--RD Navbar Toggle-->
                <button data-rd-navbar-toggle=".rd-navbar" class="rd-navbar-toggle"><span></span></button>
                <!--END RD Navbar Toggle-->

                <!--RD Navbar Brand-->
                <div class="rd-navbar-brand"><a href="#" class="brand-name">Ezrachurch</a></div>
                <!--END RD Navbar Brand-->
              </div>
              <!--END RD Navbar Panel-->

              <div class="rd-navbar-nav-wrap"><a href="shop-cart.html" class="fa-shopping-cart"></a>
                <!--RD Navbar Search-->
                <div class="rd-navbar-search">
                  <form action="search.php" method="GET" class="rd-navbar-search-form">
                    <label class="rd-navbar-search-form-input">
                      <input type="text" name="s" placeholder="Search.." autocomplete="off">
                    </label>
                    <button type="submit" class="rd-navbar-search-form-submit"></button>
                  </form><span class="rd-navbar-live-search-results"></span>
                  <button data-rd-navbar-toggle=".rd-navbar-search, .rd-navbar-live-search-results" class="rd-navbar-search-toggle"></button>
                </div>
                <!--END RD Navbar Search-->

                <!--RD Navbar Nav-->
                <ul class="rd-navbar-nav">
                  <li class="active"><a href="./">Home</a></li>
            <?php
            $sql = " select *
                        from {$g5['menu_table']}
                        where me_use = '1'
                          and length(me_code) = '2'
                        order by me_order, me_id ";
            $result = sql_query($sql, false);
            $gnb_zindex = 999; // gnb_1dli z-index 값 설정용

            for ($i=0; $row=sql_fetch_array($result); $i++) {
            ?>
            <!-- <li style="z-index:<?php echo $gnb_zindex--; ?>"> -->
            <li>
                <!-- <a href="<?php echo $row['me_link']; ?>" target="_<?php echo $row['me_target']; ?>" class="gnb_1da"><?php echo $row['me_name'] ?></a> -->
                <a href="<?php echo $row['me_link']; ?>" target="_<?php echo $row['me_target']; ?>" ><?php echo $row['me_name'] ?></a>
                <!--RD Navbar Dropdown-->    
                <?php
                $sql2 = " select *
                            from {$g5['menu_table']}
                            where me_use = '1'
                              and length(me_code) = '4'
                              and substring(me_code, 1, 2) = '{$row['me_code']}'
                            order by me_order, me_id ";
                $result2 = sql_query($sql2);

                for ($k=0; $row2=sql_fetch_array($result2); $k++) {
                    if($k == 0)
                        echo '<ul class="rd-navbar-dropdown">'.PHP_EOL;
                ?>
                    <!-- <li class="gnb_2dli"><a href="<?php echo $row2['me_link']; ?>" target="_<?php echo $row2['me_target']; ?>" class="gnb_2da"><?php echo $row2['me_name'] ?></a></li> -->
                    <li><a href="<?php echo $row2['me_link']; ?>" target="_<?php echo $row2['me_target']; ?>"><?php echo $row2['me_name'] ?></a></li>
                <?php
                }

                if($k > 0)
                    echo '</ul>'.PHP_EOL;
                ?>
            </li>
            <?php
            }

            if ($i == 0) {  ?>
                <li id="gnb_empty">메뉴 준비 중입니다.<?php if ($is_admin) { ?> <br><a href="<?php echo G5_ADMIN_URL; ?>/menu_list.php">관리자모드 &gt; 환경설정 &gt; 메뉴설정</a>에서 설정하실 수 있습니다.<?php } ?></li>
            <?php } ?>
                <!--END RD Navbar Nav-->
              </div>
            </div>

                    <div id="text_size">
            <!-- font_resize('엘리먼트id', '제거할 class', '추가할 class'); -->
            <button id="size_down" onclick="font_resize('container', 'ts_up ts_up2', '');"><img src="<?php echo G5_URL; ?>/img/ts01.gif" alt="기본"></button>
            <button id="size_def" onclick="font_resize('container', 'ts_up ts_up2', 'ts_up');"><img src="<?php echo G5_URL; ?>/img/ts02.gif" alt="크게"></button>
            <button id="size_up" onclick="font_resize('container', 'ts_up ts_up2', 'ts_up2');"><img src="<?php echo G5_URL; ?>/img/ts03.gif" alt="더크게"></button>
        </div>

        <ul id="tnb">
            <?php if ($is_member) {  ?>
            <?php if ($is_admin) {  ?>
            <li><a href="<?php echo G5_ADMIN_URL ?>"><b>관리자</b></a></li>
            <?php }  ?>
            <li><a href="<?php echo G5_BBS_URL ?>/member_confirm.php?url=<?php echo G5_BBS_URL ?>/register_form.php">정보수정</a></li>
            <li><a href="<?php echo G5_BBS_URL ?>/logout.php">로그아웃</a></li>
            <?php } else {  ?>
            <li><a href="<?php echo G5_BBS_URL ?>/register.php">회원가입</a></li>
            <li><a href="<?php echo G5_BBS_URL ?>/login.php"><b>로그인</b></a></li>
            <?php }  ?>
            <li><a href="<?php echo G5_BBS_URL ?>/faq.php">FAQ</a></li>
            <li><a href="<?php echo G5_BBS_URL ?>/qalist.php">1:1문의</a></li>
            <li><a href="<?php echo G5_BBS_URL ?>/current_connect.php">접속자 <?php echo connect('theme/basic'); // 현재 접속자수, 테마의 스킨을 사용하려면 스킨을 theme/basic 과 같이 지정  ?></a></li>
            <li><a href="<?php echo G5_BBS_URL ?>/new.php">새글</a></li>
        </ul>
          </nav>
        </div>
        <!--END RD Navbar-->
        <section>
          <!--Swiper-->
          <div data-autoplay="5000" data-slide-effect="fade" data-loop="false" class="swiper-container swiper-slider">
            <div class="jumbotron text-center">
              <h1><small>신명기 6장 5절</small>너는 마음을 다하고 성품을 다하고 힘을 다하여 네 하나님 여호와를 사랑하라. </h1>
              <p class="big">We create quality products <br> tailored to your needs and requirements.</p>
              <div class='btn-group-variant'> 
              <a class='btn btn-default round-xl btn-sm' href='#'>Buy A Theme</a> 
              <a class='btn btn-default round-xl btn-sm' href='#'>View Features</a></div>
            </div>
            <div class="swiper-wrapper">
              <div data-slide-bg="images/header-1.jpg" class="swiper-slide">
                <div class="swiper-slide-caption">1</div>
              </div>
              <div data-slide-bg="images/header-2.jpg" class="swiper-slide">
                <div class="swiper-slide-caption">2</div>
              </div>
              <div data-slide-bg="images/header-3.jpg" class="swiper-slide">
                <div class="swiper-slide-caption">3</div>
              </div>
              <div data-slide-bg="images/header-4.jpg" class="swiper-slide">
                <div class="swiper-slide-caption">4</div>
              </div>
              <div data-slide-bg="images/header-5.jpg" class="swiper-slide">
                <div class="swiper-slide-caption">5</div>
              </div>
              <div data-slide-bg="images/header-6.jpg" class="swiper-slide">
                <div class="swiper-slide-caption">6</div>
              </div>
            </div>
          </div>
        </section>
      </header>
      <!--
      ========================================================
                              CONTENT
      ========================================================
      -->
      <main class="page-content">

        <!--Start section-->
        <section class="text-center well well-sm">
          <div class="container">
            <div class="row">
              <div class="col-lg-10 col-lg-offset-1">
                <h1 class="text-bold">Creative Multiuse   Theme</h1>
                <p class="lead big">We create <a href="#" class="text-primary">user interfaces</a> and modern <a href="#" class="text-primary">websites</a>. We will help you build strong <a href="#" class="text-primary">online business</a> by creating a professional website which best suits your needs.</p><img src="images/index_img1.jpg" alt="" class="box-shadow offset-2 margin-negative">
              </div>
            </div>
          </div>
        </section>
        <!--End section-->

        <!--Start section-->
        <section class="well well-sm bg-lighter relative text-center">
          <div class="container">
            <div class="row">
              <div class="col-lg-6 col-lg-offset-3">
                <h1 class="text-bold">Some Features</h1>
                <p class="lead">
                  We worked out an amazing combination of vast functionality
                  and user's comfort. It will totally impress you with its power!
                </p>
              </div>
            </div>
            <div class="row offset-1 text-md-left flow-offset-1">
              <div class="col-sm-6 col-md-3"><span class="icon icon-lg icon-primary fa-comments-o"></span>
                <h5>성경읽는 교회</h5>
                <p>내가 이를 때까지 읽는 것과 권하는 것과 가르치는 것에 전념하라[딤전4:13]</p>
              </div>
              <div class="col-sm-6 col-md-3"><span class="icon icon-lg icon-primary fa-edit"></span>
                <h5>가르치는 교회</h5>
                <p>예수께서 온 갈릴리에 두루 다니사 그들의 회당에서 가르치시며 천국 복음을 전파하시며 백성 중의 모든 병과 모든 약한 것을 고치시니 [마4:23]</p>
              </div>
              <div class="col-sm-6 col-md-3"><span class="icon icon-lg icon-primary fa-compass"></span>
                <h5>전파하는 교회</h5>
                <p>그러므로 너희는 가서 모든 민족을 제자로 삼아 아버지와 아들과 성령의 이름으로 세례를 베풀고 [마28:19]</p>
              </div>
              <div class="col-sm-6 col-md-3"><span class="icon icon-lg icon-primary fa-heartbeat"></span>
                <h5>치료하는 교회</h5>
                <p>예수께서 모든 도시와 마을에 두루 다니사 그들의 회당에서 가르치시며 천국 복음을 전파하시며 모든 병과 모든 약한 것을 고치시니라[마 9:35]</p>
              </div>
            </div>
          </div>
        </section>
        <!--End section-->

        <!--Start section-->
        <section class="well well-sm text-center text-md-left">
          <div class="container">
            <div class="row">
              <div class="col-md-6 col-lg-5">
                <h1 class="text-bold">About Company</h1>
                <p class="lead">We are a studio that aims to make our users experience easier and much more pleasant. <br><br>You probably won't have a better opportunity to make sure of our competence, as well as friendliness towards our customers.</p>
              </div>
              <div class="col-md-6 col-lg-6 col-lg-offset-1 text-left">
                <p class="font-secondary big text-uppercase text-light-clr inset-2">CREATIVE DESIGN</p>
                <div class="progress">
                  <div role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" class="progress-bar"></div><span class="small text-light-clr"></span>
                </div>
                <p class="font-secondary big text-uppercase text-light-clr">BRANDING</p>
                <div class="progress">
                  <div role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" class="progress-bar"></div><span class="small text-light-clr"></span>
                </div>
                <p class="font-secondary big text-uppercase text-light-clr">SUPPORT</p>
                <div class="progress">
                  <div role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" class="progress-bar"></div><span class="small text-light-clr"></span>
                </div>
              </div>
            </div>
          </div>
        </section>
        <!--End section-->

        <!--Start section-->
        <?php echo visit('theme/modificate'); // 접속자집계, 테마의 스킨을 사용하려면 스킨을 theme/basic 과 같이 지정 ?>
        <!--End section-->

        <!--Start section-->
        <section class="well well-sm text-center section-border">
          <div class="container">
            <ul class="flex-list">
              <li><a href="#"><img src="images/partner1.png" alt=""></a></li>
              <li><a href="#"><img src="images/partner2.png" alt=""></a></li>
              <li><a href="#"><img src="images/partner3.png" alt=""></a></li>
              <li><a href="#"><img src="images/partner4.png" alt=""></a></li>
              <li><a href="#"><img src="images/partner5.png" alt=""></a></li>
              <li><a href="#"><img src="images/partner6.png" alt=""></a></li>
            </ul>
          </div>
        </section>
        <!--End section-->

        <!--Start section-->
        <section class="well well-sm well-inset-2 text-center text-md-left">
          <div class="container">
            <h1 class="text-bold text-center">최근 사진첩</h1>
            <div class="row flow-offset-2">
              <div class="col-md-4">
                <article class="thumbnail thumbnail-4"><img src="http://ezrachurch.kr/data/file/bbs_5_1/thumbs/2072917083_MN8sq29E_IMG_0601.png" alt="">
                  <div class="caption">
                    <h4><a href="blog_post.html">웨민 성경 암송 대회 2/2</a></h4>
                    <p class="text-dark-variant-2">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate, asperiores quod est tenetur in.</p>
                    <div class="blog-info">
                      <div class="pull-md-left">
                        <time datetime="2015" class="meta fa-calendar">Feb 10, 2014</time><a href="#" class="badge fa-comments font-secondary">13</a>
                      </div><a href="blog_post.html" class="btn-link">Read More</a>
                    </div>
                  </div>
                </article>
              </div>
              <div class="col-md-4">
                <article class="thumbnail thumbnail-4"><img src="http://ezrachurch.kr/data/file/bbs_5_1/thumbs/1407319605_6BJgjueW_all_copy.jpg" alt="">
                  <div class="caption">
                    <h4><a href="blog_post.html">웨민 성경 암송 대회 1/2</a></h4>
                    <p class="text-dark-variant-2">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate, asperiores quod est tenetur in.</p>
                    <div class="blog-info">
                      <div class="pull-md-left">
                        <time datetime="2015" class="meta fa-calendar">Feb 10, 2014</time><a href="#" class="badge fa-comments font-secondary">13</a>
                      </div><a href="blog_post.html" class="btn-link">Read More</a>
                    </div>
                  </div>
                </article>
              </div>
              <div class="col-md-4">
                <article class="thumbnail thumbnail-4"><img src="http://ezrachurch.kr/data/file/bbs_5_2/thumbs/833238805_zpHkLBcr_2016_EB8BACEBA0A5_ECA084EAB590EC9DB8EC82ACECA784_ED9995ECA09528ECA084ECB2B429-1500size.jpg" alt="">
                  <div class="caption">
                    <h4><a href="blog_post.html">2016년 달력</a></h4>
                    <p class="text-dark-variant-2">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate, asperiores quod est tenetur in.</p>
                    <div class="blog-info">
                      <div class="pull-md-left">
                        <time datetime="2015" class="meta fa-calendar">Feb 10, 2014</time><a href="#" class="badge fa-comments font-secondary">13</a>
                      </div><a href="blog_post.html" class="btn-link">Read More</a>
                    </div>
                  </div>
                </article>
              </div>
            </div>
          </div>
        </section>
        <!--End section-->

        <!--Start section-->
        <section class="well well-sm well-inset-3 bg-image bg-image-1 text-center">
          <div class="container">
            <div class="row">
              <div class="col-md-8 col-md-offset-2">
                <h1 class="text-bold">Subscribe to Our Newsletter</h1>
                <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda deleniti eaque eum exercitationem fugit in, ipsum, itaque minus eum exercitationem</p>
                <form class="form-width-1 offset-1">
                  <div class="form-group">
                    <input type="email" placeholder="Name@domainname.com" id="exampleInputEmail1" class="width-1 form-control">
                    <button type="submit" class="btn btn-primary btn-xs round-xl">Subscribe</button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </section>
        <!--End section-->

        <!--Start section-->
        <section class="well well-sm well-inset-2 text-center">
          <div class="container">
            <div class="row">
              <div class="col-lg-6 col-lg-offset-3">
                <h1 class="text-bold text-center">Testimonials</h1>
                <p class="lead">Incidunt deleniti blanditiis quas aperiam recusandae consequatur ullam quibusdam cum libero illo rerum!</p>
              </div>
            </div>
            <div class="row offset-1">
              <!--Owl Carousel-->
              <div data-items="1" data-sm-items="2" data-xs-items="1" data-md-items="3" data-nav="true" data-margin="30" class="owl-carousel">
                <div class="owl-item">
                  <blockquote class="quote-2"><img src="http://ezrachurch.kr/images/1452458712UCFKP.png" alt="" class="img-circle">
                    <h6>
                      <cite>남궁현우 </cite>
                    </h6>
                    <p class="small text-light-clr text-uppercase">담임 강도사
</p>
                    <p class="h6 text-italic font-base text-base">
                      <q>서울과학기술대학교 (매체공학과)<br>
총신대학교 신학대학원 (M.div.eq)<br>
총신대학교 일반대학원 (Th.M) 신약신학<br>
<br>
서울에스라성서원 원장 (2007년~현)<br>
서울에스라교회 담임 교역자 (2012년~현)</pre></q>
                    </p>
                  </blockquote>
                </div>
                <div class="owl-item">
                  <blockquote class="quote-2"><img src="http://ezrachurch.kr/images/1456886015GDXDA.png" alt="" class="img-circle">
                    <h6>
                      <cite>김남현 </cite>
                    </h6>
                    <p class="small text-light-clr text-uppercase">교육 전도사</p>
                    <p class="h6 text-italic font-base text-base">
                      <q>포항공과대학교(전자전기공학)<br>
총신대학교 신학대학원(M.div)<br><br>

서울에스라성서원 강사 (2013년~현)<br>
서울에스라교회 부교역자 (2015년~현)</q>
                    </p>
                  </blockquote>
                </div>
                <div class="owl-item">
                  <blockquote class="quote-2"><img src="images/index_img7.jpg" alt="" class="img-circle">
                    <h6>
                      <cite>Derrick Whitehead</cite>
                    </h6>
                    <p class="small text-light-clr text-uppercase">web-designer</p>
                    <p class="h6 text-italic font-base text-base">
                      <q>Lectus tincidunt pellentesque augue urna sit sed, arcu sed ante ac montes pellentesque consectetuer, neque magnis penatibus laoreet vehicula nulla orci, a malesuada justo laoreet ipsum, in ac fusce.</q>
                    </p>
                  </blockquote>
                </div>
              </div>
            </div>
          </div>
        </section>
        <!--End section-->
        
        
        
      </main>
