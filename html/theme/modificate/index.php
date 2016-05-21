<?php
define('_INDEX_', true);
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

if (G5_IS_MOBILE) {
    include_once(G5_THEME_MOBILE_PATH.'/index.php');
    return;
}

include_once(G5_THEME_PATH.'/head.php');
?>

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
                <h1 class="text-bold text-center">섬기는 이 소개</h1>
                <p class="lead">하나님과 사람, 자연을 사랑하는 서울에스라교회를 소개합니다.</p>
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
                    <p class="h6 font-base text-base">
                      <q>포항공과대학교(전자전기공학)<br>
총신대학교 신학대학원(M.div)<br><br>

서울에스라성서원 강사 (2013년~현)<br>
서울에스라교회 부교역자 (2015년~현)</q>
                    </p>
                  </blockquote>
                </div>
<!--                 <div class="owl-item">
                  <blockquote class="quote-2"><img src="images/index_img7.jpg" alt="" class="img-circle">
                    <h6>
                      <cite>Derrick Whitehead</cite>
                    </h6>
                    <p class="small text-light-clr text-uppercase">web-designer</p>
                    <p class="h6 text-italic font-base text-base">
                      <q>Lectus tincidunt pellentesque augue urna sit sed, arcu sed ante ac montes pellentesque consectetuer, neque magnis penatibus laoreet vehicula nulla orci, a malesuada justo laoreet ipsum, in ac fusce.</q>
                    </p>
                  </blockquote>
                </div> -->
              </div>
            </div>
          </div>
        </section>
        <!--End section-->
        
        
        
      </main>
<?php
include_once(G5_THEME_PATH.'/tail.php');
?>