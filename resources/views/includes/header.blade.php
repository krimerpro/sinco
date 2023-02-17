<div class="main-page-wrapper">
  <!-- ===================================================
    Loading Transition
  ==================================================== -->
  <section>
    <div id="preloader">
      <div id="ctn-preloader" class="ctn-preloader">
        <div class="animation-preloader">
          <div class="icon"><img src="{{ asset('images/logo/logo_01.svg') }}" alt="" class="m-auto d-block" width="38"></div>
          <div class="txt-loading mt-2">
            <span data-text-preloader="S" class="letters-loading">
              S
            </span>
            <span data-text-preloader="I" class="letters-loading">
              I
            </span>
            <span data-text-preloader="N" class="letters-loading">
              N
            </span>
            <span data-text-preloader="C" class="letters-loading">
              C
            </span>
            <span data-text-preloader="O" class="letters-loading">
              O
            </span>
          </div>
        </div>
      </div>
    </div>
  </section>


  <!--
  =============================================
    Search
  ==============================================
  -->
  <div class="offcanvas offcanvas-top theme-search-form justify-content-center" tabindex="-1" id="offcanvasTop">
    <button type="button" class="close-btn tran3s" data-bs-dismiss="offcanvas" aria-label="Close"><i class="bi bi-x-lg"></i></button>
    <div class="form-wrapper">
      <form action="#">
        <input type="text" placeholder="Search Keyword....">
      </form>
    </div> <!-- /.form-wrapper -->
  </div>


  <!--
  =============================================
    Theme Main Menu
  ==============================================
  -->
  <header class="theme-main-menu sticky-menu theme-menu-two">
    <div class="inner-content">
      <div class="container d-flex align-items-center justify-content-between">
        <div class="logo order-lg-0"><a href="#" class="d-block"><img src="{{ asset('images/logo/logo_01.png') }}" alt="" width="130"></a></div>
        <a href="#" class="get-in-touch-btn d-none d-lg-block order-lg-3">WALLET</a>
        <nav class="navbar navbar-expand-lg order-lg-2">
          <button class="navbar-toggler d-block d-lg-none" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
              <span></span>
          </button>
            <div class="collapse navbar-collapse" id="navbarNav">
              <ul class="navbar-nav">
                  <li class="d-block d-lg-none"><div class="logo"><a href="#"><img src="{{ asset('images/logo/logo_01.png') }}" alt="" width="130"></a></div></li>

                  <li class="nav-item">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false">Home</a>
                  </li>

                  <li class="nav-item">
                    <a class="nav-link dropdown-toggle" href="#about" role="button" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false">About</a>
                  </li>

                  <li class="nav-item">
                    <a class="nav-link dropdown-toggle" href="#news" role="button" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false">News</a>
                  </li>

              </ul>
              <!-- Mobile Content -->
              <div class="mobile-content d-block d-lg-none">
                <div class="d-flex flex-column align-items-center justify-content-center mt-70">
                  <a href="#" class="get-in-touch-btn">Get In Touch</a>
                </div>
              </div> <!-- /.mobile-content -->
            </div>
        </nav>
      </div>
    </div> <!-- /.inner-content -->
  </header> <!-- /.theme-main-menu -->
