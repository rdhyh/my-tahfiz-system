<!DOCTYPE html>
<html lang="zxx" class="no-js">
  <head>

    <!-- Favicon-->
    <link rel="shortcut icon" href="img/fav.png" />
    <!-- Author Meta -->
    <meta name="author" content="CodePixar" />
    <!-- Meta Description -->
    <meta name="description" content="" />
    <!-- Meta Keyword -->
    <meta name="keywords" content="" />
    <!-- meta character set -->
    <meta charset="UTF-8" />
    <!-- Site Title -->
    <title>Kursus</title>

    <link
      href="https://fonts.googleapis.com/css?family=Open+Sans:400,600|Playfair+Display:700,700i"
      rel="stylesheet"
    />
    <!--
			CSS
			============================================= -->
    <link rel="stylesheet" href="css/linearicons.css" />
    <link rel="stylesheet" href="css/font-awesome.min.css" />
    <link rel="stylesheet" href="css/magnific-popup.css" />
    <link rel="stylesheet" href="css/nice-select.css" />
    <link rel="stylesheet" href="css/owl.carousel.css" />
    <link rel="stylesheet" href="css/bootstrap.css" />
    <link rel="stylesheet" href="css/bootstrap-datepicker.css" />
    <link rel="stylesheet" href="css/themify-icons.css" />
    <link rel="stylesheet" href="css/main.css" />
  </head>

  <body>
    <!--================ Start Header Area =================-->
    <header class="header-area">
      <div class="container">
        <div class="header-wrap">
          <div
            class="header-top d-flex justify-content-between align-items-lg-center navbar-expand-lg"
          >
            <div class="col menu-left">
              <a class="active" href="index.html">Halaman Utama</a>
              <a href="category.html">Biasiswa</a>
              <a href="archive.html">Aliran</a>
            </div>
            <div class="col-5 text-lg-center mt-2 mt-lg-0">
              <span class="logo-outer">
                <span class="logo-inner">
                  <a href="index.html"
                    ><img class="mx-auto" src="img/logo.png" alt=""
                  /></a>
                </span>
              </span>
            </div>
            <nav class="col navbar navbar-expand-lg justify-content-end">
              <!-- Toggler/collapsibe Button -->
              <button
                class="navbar-toggler"
                type="button"
                data-toggle="collapse"
                data-target="#collapsibleNavbar"
              >
                <span class="lnr lnr-menu"></span>
              </button>

              <!-- Navbar links -->
              <div
                class="collapse navbar-collapse menu-right"
                id="collapsibleNavbar"
              >
                <ul class="navbar-nav justify-content-center w-100">
                  <li class="nav-item hide-lg">
                    <a class="nav-link" href="index.html">Home</a>
                  </li>
                  <li class="nav-item hide-lg">
                    <a class="nav-link" href="category.html">Category</a>
                  </li>
                  <!-- Dropdown -->
                  <!-- <li class="nav-item dropdown">
                    <a
                      class="nav-link dropdown-toggle"
                      href="#"
                      id="navbardrop"
                      data-toggle="dropdown"
                    >
                      Pages
                    </a>
                    <div class="dropdown-menu">
                      <a class="dropdown-item" href="elements.html">Elements</a>
                    </div>
                  </li> -->
                  <li class="nav-item">
                    <a class="nav-link" href="elements.html">FAQ</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="blog-single.html">Hubungi Kami</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="contact.html">Contact</a>
                  </li>
                </ul>
              </div>
            </nav>
          </div>
        </div>
      </div>
    </header>
    <!--================ End Header Area =================-->

    <!--================ Start banner Area =================-->
    <section class="banner-area relative">
        <div class="overlay overlay-bg"></div>
      <div class="banner-content text-center">
        <h1>Kursus</h1>
        <p> <br />  </p>
      </div>
    </section>
    <!--================ End banner Area =================-->

    <!--================ Start Blog Post Area =================-->


          <table class="table table-striped table-hover">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">Nama Kursus</th>
                    <th scope="col">Nama Universiti</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($courses as $course)
                    <tr>
                        <td>{{ $course->course_name }}</td>
                        <td>{{ $course->uni_name }}</td>
                        @empty
                        @endforelse
                        </tr>
                        </tbody>
                        </table>
    <!--================ End Blog Post Area =================-->

    <!--================ Start Footer Area =================-->
    <footer class="footer-area section-gap">
      <div class="container">
        <div class="row">
          <div class="col-lg-3  col-md-6 col-sm-6">
            <div class="single-footer-widget">
              <h6>About Us</h6>
              <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore dolore
                magna aliqua.
              </p>
            </div>
          </div>
          <div class="col-lg-4  col-md-6 col-sm-6">
            <div class="single-footer-widget">
              <h6>Newsletter</h6>
              <p>Stay update with our latest</p>
              <div class="" id="mc_embed_signup">
  
                <form target="_blank" novalidate="true" action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01"
                 method="get" class="form-inline">
  
                  <div class="d-flex flex-row">
  
                    <input class="form-control" name="EMAIL" placeholder="Enter Email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Email '"
                     required="" type="email">
  
  
                    <button class="click-btn btn btn-default"><i class="fa fa-long-arrow-right" aria-hidden="true"></i></button>
                    <div style="position: absolute; left: -5000px;">
                      <input name="b_36c4fd991d266f23781ded980_aefe40901a" tabindex="-1" value="" type="text">
                    </div>
                  </div>
                  <div class="info"></div>
                </form>
              </div>
            </div>
          </div>
          <div class="col-lg-3  col-md-6 col-sm-6">
            <div class="single-footer-widget mail-chimp">
              <h6 class="mb-20">Instragram Feed</h6>
              <ul class="instafeed d-flex flex-wrap">
                <li><img src="img/instagram/i1.jpg" alt=""></li>
                <li><img src="img/instagram/i2.jpg" alt=""></li>
                <li><img src="img/instagram/i3.jpg" alt=""></li>
                <li><img src="img/instagram/i4.jpg" alt=""></li>
                <li><img src="img/instagram/i5.jpg" alt=""></li>
                <li><img src="img/instagram/i6.jpg" alt=""></li>
                <li><img src="img/instagram/i7.jpg" alt=""></li>
                <li><img src="img/instagram/i8.jpg" alt=""></li>
              </ul>
            </div>
          </div>
          <div class="col-lg-2 col-md-6 col-sm-6">
            <div class="single-footer-widget">
              <h6>Follow Us</h6>
              <p>Let us be social</p>
              <div class="footer-social d-flex align-items-center">
                <a href="#"><i class="fa fa-facebook"></i></a>
                <a href="#"><i class="fa fa-twitter"></i></a>
                <a href="#"><i class="fa fa-dribbble"></i></a>
                <a href="#"><i class="fa fa-behance"></i></a>
              </div>
            </div>
          </div>
        </div>
        <div class="footer-bottom d-flex justify-content-center align-items-center flex-wrap">
          <p class="footer-text m-0"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
        </div>
      </div>
    </footer>
    <!--================ End Footer Area =================-->

    <script src="js/vendor/jquery-2.2.4.min.js"></script>
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js"
      integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4"
      crossorigin="anonymous"
    ></script>
    <script src="js/vendor/bootstrap.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.sticky.js"></script>
    <script src="js/jquery.tabs.min.js"></script>
    <script src="js/parallax.min.js"></script>
    <script src="js/jquery.nice-select.min.js"></script>
    <script src="js/jquery.ajaxchimp.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script
      type="text/javascript"
      src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA"
    ></script>
    <script src="js/bootstrap-datepicker.js"></script>
    <script src="js/main.js"></script>
  </body>
</html>
