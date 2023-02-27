@extends('layouts.default')
@section('content')

<div class="hero-banner-two">
  <div class="bg-wrapper">
    <div class="container">
      <div class="row">
        <div class="col-xl-6 col-md-7">
          <h1 class="hero-heading">I’m Sinco. Magical AI for solution.</h1>
          <p class="text-lg pt-25 pb-40 lg-pb-20 sm-pt-10">Sinco delivered blazing fast, striking ai solution</p>
          <ul class="style-none button-group d-sm-flex align-items-center">
            <li class="me-4 mt-10"><a href="https://t.me/SincoAIBsc" class="btn-one ripple-btn">JOIN US</a></li>
            <li><a class="demo-btn tran3s mt-10" href="https://poocoin.app/tokens/0x7B47613Ba1f781158A8001332F0360fB1c02c8D0">POOCOIN CHART</a></li>
          </ul>
        </div>
      </div>
    </div> <!-- /.container -->
    <div class="illustration-holder">
      <img src="{{ asset('images/assets/ils_04.svg') }}" alt="" class="main-illustration w-100">
      <img src="{{ asset('images/assets/ils_04_1.svg') }}" alt="" class="shapes shape-one">
      <img src="{{ asset('images/assets/ils_04_2.svg') }}" alt="" class="shapes shape-two">
      <img src="{{ asset('images/assets/ils_04_2.svg') }}" alt="" class="shapes shape-three">
      <img src="{{ asset('images/assets/ils_04_3.svg') }}" alt="" class="shapes shape-four">
      <img src="{{ asset('images/assets/ils_04_4.svg') }}" alt="" class="shapes shape-five">
      <img src="{{ asset('images/assets/ils_04_5.svg') }}" alt="" class="shapes shape-six">
      <img src="{{ asset('images/assets/ils_04_6.svg') }}" alt="" class="shapes shape-seven">
      <div class="card-one shapes d-flex align-items-center justify-content-center">
        <div class="icon"><i class="bi bi-check-lg"></i></div>
        <h6>A++ Performance</h6>
      </div> <!-- /.card-one -->
    </div> <!-- /.illustration-holder -->
  </div> <!-- /.bg-wrapper -->
</div> <!-- /.hero-banner-two -->



<!--
=====================================================
  Counter Section One
=====================================================
-->
<div class="counter-section-one fancy-bg">
  <div class="container">
    <div class="inner-container">
      <div class="row justify-content-center">
        <div class="col-md-4 col-sm-6" data-aos="fade-up">
          <div class="counter-block-one text-center mb-20">
            <div class="main-count"><span class="counter">4</span>%</div>
            <p>BUY & SELL TAX</p>
          </div> <!-- /.counter-block-one -->
        </div>
        <div class="col-md-4 col-sm-6" data-aos="fade-up" data-aos-delay="100">
          <div class="counter-block-one text-center mb-20">
            <div class="main-count"><span class="counter">4</span>%</div>
            <p>MAX WALLET & TX</p>
          </div> <!-- /.counter-block-one -->
        </div>
        <div class="col-md-4 col-sm-6" data-aos="fade-up" data-aos-delay="200">
          <div class="counter-block-one text-center mb-20">
            <div class="main-count"><span class="counter">100</span>million</div>
            <p>TOTAL SUPPLY</p>
          </div> <!-- /.counter-block-one -->
        </div>
      </div>
    </div> <!-- /.inner-container -->
  </div>
  <img src="{{ asset('images/shape/shape_04.svg') }}" alt="" class="shapes shape-one">
  <img src="{{ asset('images/shape/shape_05.svg') }}" alt="" class="shapes shape-two">
</div> <!-- /.counter-section-one -->

<!--
=============================================
  Feature Section Four
==============================================
-->
<div class="fancy-feature-four position-relative mt-110 lg-mt-50" id="about">
  <div class="bg-wrapper">
    <div class="inner-container">
      <div class="container">
        <div class="row gx-xxl-5">
          <div class="col-lg-4 mt-40 d-flex" data-aos="fade-up">
            <div class="d-flex justify-content-center flex-column">
              <div class="title-style-one">
                <div class="sc-title-three">Services</div>
                <h2 class="main-title">Our experties field.</h2>
              </div> <!-- /.title-style-one -->
            </div>
          </div>
          <div class="col-lg-4 col-sm-6 mt-40 d-flex" data-aos="fade-up" data-aos-delay="100">
            <div class="block-style-four">
              <div class="icon d-flex align-items-end justify-content-center"><img src="{{ asset('images/icon/icon_08.svg') }}" alt=""></div>
              <a href="#"><h5>Predictive Analytics</h5></a>
              <p>Convert data noise to intelligent insights for competitive differentiation.</p>
            </div> <!-- /.block-style-four -->
          </div>
          <div class="col-lg-4 col-sm-6 mt-40 d-flex" data-aos="fade-up" data-aos-delay="200">
            <div class="block-style-four">
              <div class="icon d-flex align-items-end justify-content-center"><img src="{{ asset('images/icon/icon_09.svg') }}" alt=""></div>
              <a href="#"><h5>Data Engineers</h5></a>
              <p>Stay ahead of disruption & exceed customer expectation by implementing predictive analytics solutions.</p>
            </div> <!-- /.block-style-four -->
          </div>
          <div class="col-lg-4 col-sm-6 mt-40 d-flex" data-aos="fade-up" data-aos-delay="100">
            <div class="block-style-four">
              <div class="icon d-flex align-items-end justify-content-center"><img src="{{ asset('images/icon/icon_10.svg') }}" alt=""></div>
              <a href="#"><h5>Deep Learning</h5></a>
              <p>Access tools for deep learning, cloud computing and any scale.</p>
            </div> <!-- /.block-style-four -->
          </div>
          <div class="col-lg-4 col-sm-6 mt-40 d-flex" data-aos="fade-up" data-aos-delay="200">
            <div class="block-style-four">
              <div class="icon d-flex align-items-end justify-content-center"><img src="{{ asset('images/icon/icon_11.svg') }}" alt=""></div>
              <a href="#"><h5>Data Mining</h5></a>
              <p>You can discover hidden opportunities collecting, analyzing or explaining your data in a different way.</p>
            </div> <!-- /.block-style-four -->
          </div>
          <div class="col-lg-4 mt-40 d-flex" data-aos="fade-up" data-aos-delay="300">
            <div class="block-style-four">
              <div class="icon d-flex align-items-end justify-content-center"><img src="{{ asset('images/icon/icon_12.svg') }}" alt=""></div>
              <a href="#"><h5>Statistical Modeling</h5></a>
              <p>Offer future-ready business applications that can learn & adjust with time.</p>
            </div> <!-- /.block-style-four -->
          </div>
        </div>
      </div>
    </div> <!-- /.inner-container -->
  </div> <!-- /.bg-wrapper -->
  <img src="{{ asset('images/shape/shape_06.svg') }}" alt="" class="shapes shape-one">
  <img src="{{ asset('images/shape/shape_07.svg') }}" alt="" class="shapes shape-two">
</div> <!-- /.fancy-feature-four -->

<div class="fancy-feature-five position-relative mt-50 xs-mt-20">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-xxl-4 col-lg-5 col-md-6">
        <div class="block-style-five pt-60 md-pt-20" data-aos="fade-right">
          <div class="title-style-one">
            <div class="sc-title-three">BESt AI SOLUTION</div>
            <h2 class="main-title">Why you should choose us?</h2>
          </div> <!-- /.title-style-one -->
          <p class="pt-10 pb-70">We are the best team on Smart Chain ecosystem</p>
          <div class="skills-progress skills">
            <div class="habilidades_contenedor">
                  <div class="codeconSkills">
                      <div class="codeconSkillbar mb-80 md-mb-60">
                        <div class="skill-text">
                          <span class="codeconSkillArea">TRUSTED</span>
                        </div>
                          <div class="skillBar" data-percent="100%" style="background: #F25DFF;">
                            <span class="PercentText">100%</span>
                          </div>
                      </div>
                      <div class="codeconSkillbar">
                        <div class="skill-text">
                          <span class="codeconSkillArea ">QUICK RESPONSE</span>

                        </div>
                        <div class="skillBar" data-percent="100%" style="background: #00E8FA;">
                            <span class="PercentText">100%</span>
                        </div>
                      </div>
                </div> <!-- /.codeconSkills -->
              </div> <!-- /.habilidades_contenedor -->
          </div> <!-- /.skills-progress -->
          <a href="https://t.me/SincoAIBsc" class="btn-five ripple-btn mt-60 lg-mt-50">Join Us</a>
        </div> <!-- /.block-style-five -->
      </div>

      <div class="col-xxl-8 col-lg-7 col-md-6 text-end">
        <div class="illustration-holder d-inline-block position-relative xs-mt-20">
          <img src="{{ asset('images/assets/ils_06.svg') }}" alt="" class="main-illustration w-100">
          <img src="{{ asset('images/assets/ils_06_1.svg') }}" alt="" class="shapes shape-one">
          <img src="{{ asset('images/assets/ils_06_2.svg') }}" alt="" class="shapes shape-two">
          <img src="{{ asset('images/assets/ils_06_3.svg') }}" alt="" class="shapes shape-three" data-aos="fade-down" data-aos-duration="1800">
          <img src="{{ asset('images/assets/ils_06_4.svg') }}" alt="" class="shapes shape-four" data-aos="fade-left" data-aos-duration="1800">
          <img src="{{ asset('images/assets/ils_06_5.svg') }}" alt="" class="shapes shape-five">
        </div><!--  /.illustration-holder -->
      </div>
    </div>
  </div> <!-- /.container -->
</div>

<div class="fancy-feature-six position-relative mt-80">
  <div class="container">
    <div class="bg-wrapper">
      <div class="row gx-xxl-5 justify-content-center">
        <div class="col-lg-4 col-sm-6" data-aos="fade-up">
          <div class="block-style-six text-center mt-40">
            <div class="icon" style="background: rgba(68, 109, 255, 0.07); color: #446DFE;"><i class="bi bi-check-lg"></i></div>
            <h6>Qulaity Support</h6>
            <p>Learn content by interacting anything expert lesson a video.</p>
          </div> <!-- /.block-style-six -->
        </div>
        <div class="col-lg-4 col-sm-6" data-aos="fade-up" data-aos-delay="100">
          <div class="block-style-six text-center mt-40">
            <div class="icon" style="background: rgba(253, 232, 255, 1); color: #F36EFF;"><i class="bi bi-check-lg"></i></div>
            <h6>Fastest AI Machine</h6>
            <p>Practice what you realistic test great  questions lorem.</p>
          </div> <!-- /.block-style-six -->
        </div>
        <div class="col-lg-4 col-sm-6" data-aos="fade-up" data-aos-delay="200">
          <div class="block-style-six text-center mt-40">
            <div class="icon" style="background: rgba(255, 122, 65, 0.12); color: #FF7A41;"><i class="bi bi-check-lg"></i></div>
            <h6>Great Pricing</h6>
            <p>Review your practice & learn how to improve your skill.</p>
          </div> <!-- /.block-style-six -->
        </div>
      </div>
    </div> <!-- /.bg-wrapper -->
  </div> <!-- /.container -->
  <img src="{{ asset('images/shape/shape_10.svg') }}" alt="" class="shapes shape-one">
  <img src="{{ asset('images/shape/shape_11.svg') }}" alt="" class="shapes shape-two">
</div> <!-- /.fancy-feature-six -->

<div class="blog-section-two mt-110 lg-mt-50" id="news">
  <div class="container">
    <div class="title-style-one text-center mb-50 lg-mb-20" data-aos="fade-up">
      <div class="sc-title-three">BLOG</div>
      <h2 class="main-title">Upcoming News</h2>
    </div> <!-- /.title-style-one -->

    <div class="row gx-xxl-5">
      <div class="col-lg-4 col-sm-6 d-flex" data-aos="fade-up">
        <article class="blog-meta-two mt-30">
          <figure class="post-img m0"><a href="#" class="w-100 d-block"><img src="{{ asset('images/blog/blog_img_04.jpg') }}" alt="" class="w-100 tran4s"></a></figure>
          <div class="post-data">
            <a href="#" class="blog-title"><h5>Is AI good for office ?</h5></a>
            <a href="#" class="read-btn tran3s">Continue Reading <i class="fas fa-chevron-right"></i></a>
          </div> <!-- /.post-data -->
        </article>
      </div>
      <div class="col-lg-4 col-sm-6 d-flex" data-aos="fade-up" data-aos-delay="100">
        <article class="blog-meta-two mt-30">
          <figure class="post-img m0"><a href="#" class="w-100 d-block"><img src="{{ asset('images/blog/blog_img_05.jpg') }}" alt="" class="w-100 tran4s"></a></figure>
          <div class="post-data">
            <a href="#" class="blog-title"><h5>AI & Metaverse for future ?</h5></a>
            <a href="#" class="read-btn tran3s">Continue Reading <i class="fas fa-chevron-right"></i></a>
          </div> <!-- /.post-data -->
        </article>
      </div>
      <div class="col-lg-4 col-sm-6 d-flex" data-aos="fade-up" data-aos-delay="200">
        <article class="blog-meta-two mt-30">
          <figure class="post-img m0"><a href="#" class="w-100 d-block"><img src="{{ asset('images/blog/blog_img_06.jpg') }}" alt="" class="w-100 tran4s"></a></figure>
          <div class="post-data">
            <a href="#" class="blog-title"><h5>Will AI replace human ?</h5></a>
            <a href="#" class="read-btn tran3s">Continue Reading <i class="fas fa-chevron-right"></i></a>
          </div> <!-- /.post-data -->
        </article>
      </div>
    </div>
  </div>
</div>

<!--
=============================================
  Fancy Short Banner One
==============================================
-->
<div class="fancy-short-banner-one position-relative mt-160 lg-mt-100 md-mt-80">
  <div class="container">
    <div class="bg-wrapper">
      <div class="row align-items-center gx-xxl-5">
        <div class="col-lg-6 text-center text-lg-start" data-aos="fade-right">
          <div class="sub-title">QUESTIONS</div>
          <h3 class="pe-xl-5 md-pb-20">Having Any Question? Contact Us!</h3>
        </div>
        <div class="col-lg-6 text-center text-lg-end" data-aos="fade-left">
          <a href="#" class="msg-btn tran3s">Send Us Message</a>
        </div>
      </div>
    </div> <!-- /.bg-wrapper -->
  </div> <!-- /.container -->
  <img src="{{ asset('images/shape/shape_10.svg') }}" alt="" class="shapes shape-one">
  <img src="{{ asset('images/shape/shape_11.svg') }}" alt="" class="shapes shape-two">
</div> <!-- /.fancy-short-banner-one -->
@stop
