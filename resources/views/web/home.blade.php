<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>Dental Care</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css" integrity="sha512-NhSC1YmyruXifcj/KFRWoC561YpHpc5Jtzgvbuzx5VozKpWvQ+4nXhPdFgmx8xqexRcpAglTj9sIBWINXa8x5w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="icon" href="/web-dentalcare/images/dentalcare-favicon.png" type="image/x-icon">
  <link rel="stylesheet" href="/web-dentalcare/css/main.css">
  <script src="https://code.iconify.design/2/2.0.3/iconify.min.js"></script>
</head>

<body id="body">
  <header class="BgScrollEffect">
    <span class="cover-lay"></span>
    <span class="separate-nav"></span>
    <div class="container-fluid NavEffect">
      <div class="SearchContainer">
        <div class="TopBarContact">
          <span class="infoToggle">
            <div class="left">
              <span class="iconify" data-icon="dashicons:plus"></span>
            </div>
            <div class="right">
              <span class="iconify" data-icon="ic:round-keyboard-arrow-down"></span>
            </div>
          </span>
          <div class="contact__info justify-content-lg-end">
            <div class="contact__info--time d-flex">
              <span class="iconify" data-icon="ph:clock-thin" data-rotate="270deg"></span>
              <span class="content d-flex justify-content-center flex-column">
                <h6 class="d-block">Monday - Friday 08:00-19:00</h6>
                <p class="d-block mb-0">Saturday and Sunday - CLOSED</p>
              </span>
            </div>
            <div class="contact__info--phone d-flex">
              <span class="iconify" data-icon="healthicons:phone-outline" data-rotate="270deg" data-flip="vertical"></span>
              <span class="content d-flex justify-content-center flex-column">
                <a class="d-block content--heading" href="tel:555-666-777">GỌI NGAY</a>
                <a class="d-block content--sub" href="mailto:clinic@dentalcare.com">clinic@dentalcare.com</a>
              </span>
            </div>
            <div class="contact__info--address d-flex">
              <span class="iconify" data-icon="fluent:location-28-regular" data-rotate="180deg" data-flip="vertical"></span>
              <span class="content d-flex justify-content-center flex-column">
                <h6 class="d-block">ABC Avenue 7</h6>
                <p class="d-block mb-0">Ha Noi, VN</p>
              </span>
            </div>
          </div>
        </div>
        <form style="margin-right: 20px;" class="form-inline SearchFixed" action="search.html" method="GET">
          <button style="width: 70px; background-color:#22c7dd; border-color:#22c7dd" type="button" class="btn btn-primary" data-toggle="modal" data-target="#ModalSearch">
            <span style="font-size: 25px;" class="iconify search-btn" data-icon="gg:search-loading"></span>
          </button>
        </form>
      </div>

      <div class="ContainerNavbar">
        <nav class="navbar navbar-expand-lg navbar-dark">
          <a class="navbar-brand" href="/">
            <img src="/web-dentalcare/images/dentalcare-logo-color.png" alt="Logo">
          </a>

          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
            <!-- <span class="navbar-toggler-icon">red</span> -->
            <span class="iconify" data-icon="bytesize:menu"></span>
          </button>

          <div class="collapse navbar-collapse" id="collapsibleNavbar">
            <ul class="navbar-nav">
              <li class="nav-item active">
                <a class="nav-link" href="/">Trang chủ</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="navbardrop" data-toggle="dropdown" href="about.html">Giới thiệu chung</a>
                <div class="dropdown-menu">
                  <a class="dropdown-item" href="./pages/about.php">
                    <span class="iconify" data-icon="dashicons:arrow-right-alt2"></span>
                    Thông tin chung
                  </a>
                  <a class="dropdown-item" href="./pages/doctorprofile.php">
                    <span class="iconify" data-icon="dashicons:arrow-right-alt2"></span>
                    Bác sĩ
                  </a>
                  <a class="dropdown-item" href="{{ route('appointmentPatient.index') }}">
                    <span class="iconify" data-icon="dashicons:arrow-right-alt2"></span>
                    Đặt hẹn
                  </a>
                  <a class="dropdown-item" href="./pages/testimonials.php">
                    <span class="iconify" data-icon="dashicons:arrow-right-alt2"></span>
                    Cảm nhận của bệnh nhân
                  </a>
                  <a class="dropdown-item" href="./pages/contact-us.php">
                    <span class="iconify" data-icon="dashicons:arrow-right-alt2"></span>
                    Liên hệ
                  </a>
                  <a class="dropdown-item" href="./pages/working-hours.php">
                    <span class="iconify" data-icon="dashicons:arrow-right-alt2"></span>
                    Giờ làm việc
                  </a>
                </div>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="navbardrop" data-toggle="dropdown" href="./pages/services.php">Dịch vụ</a>
                <div class="dropdown-menu dropdown-menu-2">
                  <a class="dropdown-item" href="./pages/services.php">
                    <span class="iconify" data-icon="dashicons:arrow-right-alt2"></span>
                    Dịch vụ
                  </a>
                  <a class="dropdown-item" href="./pages/procedures.php">
                    <span class="iconify" data-icon="dashicons:arrow-right-alt2"></span>
                    Điều trị
                  </a>
                </div>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="./pages/cost-calculator.php">Chi phí</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="./pages/newsKN/">Tin tức</a>
              </li>
            </ul>

            <form class="form-inline SearchFixed" action="search.html" method="GET">
              <button style="width: 70px; background-color:#22c7dd; border-color:#22c7dd" type="button" class="btn btn-primary" data-toggle="modal" data-target="#ModalSearch">
                <span style="font-size: 25px;" class="iconify search-btn" data-icon="gg:search-loading"></span>
              </button>
            </form>
          </div>

        </nav>
      </div>
    </div>

    <div id="header__slider" class="carousel slide" data-ride="carousel" data-interval="false">
      <!-- The slideshow -->
      <div class="carousel-inner">
        <div class="carousel-item active">
          <div class="content">
            <h1 style="letter-spacing: .2rem;">Sức khỏe là vàng</h1>
            <div class="text" style="line-height: 1.55;">Donec libero dui, dapibus non leo et, molestie faucibus
              risus. In fermentum tortor et posuere laoreet.
              Morbi pharetra velit ut varius semper. Donec accumsan et lacus at posuere.
            </div>
            <a class="content--btn content--btn--left d-inline-block" href="#">
              <span>Đội ngũ bác sĩ</span>
            </a>
            <!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
              Open modal
            </button> -->
            <div class="content--btn content--btn--right d-inline-block" href="#" data-toggle="modal" data-target="#myAppointment">
              <span>Đặt lịch khám</span>
            </div>
          </div>
        </div>
        <div class="carousel-item">
          <div class="content">
            <h1 style="letter-spacing: .2rem;">Nụ cười tỏa sáng</h1>
            <div class="text" style="line-height: 1.55;">DentalCare tập trung nhất vào việc giúp bạn khám phá nụ cười đẹp nhất của mình càng nhanh càng tốt. Hãy sở hữu nụ cười đẹp nhất của bạn ngay bây giờ!</div>
            <a class="content--btn content--btn--left mt-3 mr-3 d-inline-block" href="#">
              <span>ĐỌC THÊM</span>
            </a>
            <a class="content--btn content--btn--right mt-3 d-inline-block" href="#">
              <span>VỀ CHÚNG TÔI</span>
            </a>
          </div>
        </div>
      </div>

      <!-- Left and right controls -->
      <a class="carousel-control-prev" href="#header__slider" data-slide="prev">
        <span class="carousel-control-prev-icon"></span>
      </a>
      <a class="carousel-control-next" href="#header__slider" data-slide="next">
        <span class="carousel-control-next-icon"></span>
      </a>
    </div>
  </header>

  <!-- section common-feature -->
  <section class="common-feature BgScrollEffect">
    <div class="container">
      <div class="row">
        <div class="col-lg-3 col-md-6 container__card card--1">
          <a href="#" class="icon-card">
          </a>
          <div class="content">
            <h4>Chuyên gia hàng đầu</h4>
            <div class="text">
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam quis semper felis.</p>
            </div>
          </div>
          <a class="content--btn" href="#">
            <span>ĐỌC THÊM</span>
          </a>
        </div>
        <div class="col-lg-3 col-md-6 container__card card--2">
          <a href="#" class="icon-card"></a>
          <div class="content">
            <h4>Kiểm tra nhanh</h4>
            <div class="text">
              <p>Aliquam sit amet porttitor ex, sit amet pellentesque nibh. Praesent viverra dui augue.</p>
            </div>
          </div>
          <a class="content--btn" href="#">
            <span>ĐỌC THÊM</span>
          </a>
        </div>
        <div class="col-lg-3 col-md-6 container__card card--3">
          <a href="#" class="icon-card"></a>
          <div class="content">
            <h4>Điều trị không đau đớn</h4>
            <div class="text">
              <p>Praesent cursus ligula elit, vitae ullamcorper felis sodales non suspendisse.</p>
            </div>
          </div>
          <a class="content--btn" href="#">
            <span>ĐỌC THÊM</span>
          </a>
        </div>
        <div class="col-lg-3 col-md-6 container__card card--4">
          <a href="#" class="icon-card"></a>
          <div class="content">
            <h4>Đặt lịch ngay</h4>
            <div class="text">
              <p>Lựa chọn bác sĩ và đặt lịch khám với chuyên gia.</p>
            </div>
          </div>
          <a class="content--btn" href="#">
            <span>ĐỌC THÊM</span>
          </a>
        </div>
      </div>
      <!-- out standing -->
      <div style="margin-top:7rem;" class="row outstanding">
        <div class="col-md-6 col-lg-7 ElementScrollEffect left">
          <div class="content">
            <div class="content__header">
              <div class="content__header--subtitle">
                Dr Jenna Wilson
              </div>
              <span class="d-block dash"></span>
              <div class="content__header--title">
                ĐỘI NGŨ TÂM HUYẾT
              </div>
            </div>
            <div class="content__script mt-4">
              <p>Bác sĩ Jenna Wilson luôn tận tâm mang đến cho bệnh nhân nụ cười đẹp nhất cùng với biện pháp bảo vệ răng miệng tốt nhất hiện nay.</p>
            </div>
            <div class="content__footer">
              <img src="/web-dentalcare/images/signature.png" alt="">
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-5 ElementScrollEffect right">
          <img src="/web-dentalcare/images/Jenna_Dr.png" alt="">
        </div>
      </div>
    </div>
  </section>

  <!--Section doctor team -->
  <section class="dr-team SequentialAppear">
    <div class="container">
      <div class="row">
        <div class="col-md-6 col-lg-3 dr-card FadeInItem dr-card--1">
          <div class="container-img">
            <a href="#">
              <div class="search-info">
                <span class="iconify" data-icon="carbon:search"></span>
              </div>
              <img src="/web-dentalcare/images/dr-audrey.jpg" alt="">
            </a>
          </div>
          <div class="content">
            <a href="#" class="icon-card icon-card--1"></a>
            <a href="#" class="icon-card icon-card--2"></a>
            <h5>Bác sĩ phẫu thuật</h5>
            <h3>Audrey Button</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quia totam amet laboriosam harum magni aut!
              Veritatis, veniam facilis nihil itaque pariatur quam!</p>
          </div>
          <div class="dr-card--contact">
            <a href="#">
              <span class="iconify" data-icon="gg:facebook"></span>
            </a>
            <a href="#">
              <span class="iconify" data-icon="ei:sc-twitter"></span>
            </a>
            <a href="#">
              <span class="iconify" data-icon="la:google-plus-g"></span>
            </a>
          </div>
        </div>
        <div class="col-md-6 col-lg-3 dr-card FadeInItem dr-card--2">
          <div class="container-img">
            <a href="#">
              <div class="search-info">
                <span class="iconify" data-icon="carbon:search"></span>
              </div>
              <img src="/web-dentalcare/images/dr-emma.jpg" alt="">
            </a>
          </div>
          <div class="content">
            <a href="#" class="icon-card icon-card--1"></a>
            <a href="#" class="icon-card icon-card--2"></a>
            <h5>Bác sĩ phẫu thuật</h5>
            <h3>Emma Beckett</h3>
            <p>Vivamus sapien ligula, tempus ac ipsum ac, mattis luctus magna. Lorem ipsum dolor sit amet consectetur
              adipisicing elit. Nobis, obcaecati!</p>
          </div>
          <div class="dr-card--contact">
            <a href="#">
              <span class="iconify" data-icon="gg:facebook"></span>
            </a>
            <a href="#">
              <span class="iconify" data-icon="ei:sc-twitter"></span>
            </a>
            <a href="#">
              <span class="iconify" data-icon="la:google-plus-g"></span>
            </a>
          </div>
        </div>
        <div class="col-md-6 col-lg-3 dr-card FadeInItem dr-card--3">
          <div class="container-img">
            <a href="#">
              <div class="search-info">
                <span class="iconify" data-icon="carbon:search"></span>
              </div>
              <img src="/web-dentalcare/images/dr-hellen.jpg" alt="">
            </a>
          </div>
          <div class="content">
            <a href="#" class="icon-card">
            </a>
            <h5>Nha sĩ</h5>
            <h3>Hellen Hill</h3>
            <p>Donec varius libero tortor, eu luctus ipsum aliquet ut. Lorem ipsum dolor sit amet consectetur
              adipisicing elit. Ut, eaque?</p>
          </div>
          <div class="dr-card--contact">
            <a href="#">
              <span class="iconify" data-icon="gg:facebook"></span>
            </a>
            <a href="#">
              <span class="iconify" data-icon="ei:sc-twitter"></span>
            </a>
            <a href="#">
              <span class="iconify" data-icon="la:google-plus-g"></span>
            </a>
          </div>
        </div>
        <div class="col-md-6 col-lg-3 dr-card FadeInItem dr-card--4">
          <div class="container-img">
            <a href="#">
              <div class="search-info">
                <span class="iconify" data-icon="carbon:search"></span>
              </div>
              <img src="/web-dentalcare/images/dr-arianna.jpg" alt="">
            </a>
          </div>
          <div class="content">
            <a href="#" class="icon-card">
            </a>
            <h5>Nha sĩ</h5>
            <h3>Audrey Button</h3>
            <p>Curabitur lobortis, eros eu efficitur lacinia, velit magna cursus nisi. Lorem ipsum dolor sit amet
              consectetur adipisicing elit. Dolorem, aliquam.</p>
          </div>
          <div class="dr-card--contact">
            <a href="#">
              <span class="iconify" data-icon="gg:facebook"></span>
            </a>
            <a href="#">
              <span class="iconify" data-icon="ei:sc-twitter"></span>
            </a>
            <a href="#">
              <span class="iconify" data-icon="la:google-plus-g"></span>
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!--Section testimonials-->
  <section class="testimonial">
    <div class="container">
      <div class="container__heading ElementScrollEffect right">
        <h5 class="container__heading--sub">
          THAM KHẢO TỐT NHẤT
        </h5>
        <span class="dash"></span>
        <h2>
          <em>KHÁCH HÀNG</em>
          <b>ĐÁNH GIÁ</b>
        </h2>
      </div>
      <div class="row SequentialAppear">
        <div class="col-md-12 col-lg-6 testimonial__content FadeInItem testimonial__content--1">
          <div style="height: 100%;" class="row align-items-center pt-3 pb-3">
            <div class="col-md-12 col-lg-4 testimonial__content--info">
              <img class="client-img" src="/web-dentalcare/images/client-1.jpg" alt="">
              <h4>PAUL LEE</h4>
              <span class="sign-img"><img src="/web-dentalcare/images/sign-1.png" alt=""></span>
            </div>
            <div class="col-md-12 col-lg-8">
              <div class="testimonial__content--text">
                <blockquote>
                  <i class="fas fa-quote-left"></i>
                  <p>Nullam eleifend lectus a tortor interdum, non sodales ante vehicula. Proin consequat, at commodo.
                    Donec eros massa, gravida ac lectus et, pharetra interdum lectus. Sed vel scelerisque quam, id
                    fringilla ante. Vivamus sagittis velit quis dictum ultricies.</p>
                </blockquote>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-12 col-lg-6 testimonial__content FadeInItem testimonial__content--2">
          <div style="height: 100%;" class="row align-items-center pt-3 pb-3">
            <div class="col-md-12 col-lg-4 testimonial__content--info">
              <img class="client-img" src="/web-dentalcare/images/client-2.jpg" alt="">
              <h4>ANN CLARK</h4>
              <span class="sign-img"><img src="/web-dentalcare/images/sign-2.png" alt=""></span>
            </div>
            <div class="col-md-12 col-lg-8">
              <div class="testimonial__content--text">
                <blockquote>
                  <i class="fas fa-quote-left"></i>
                  <p>Quisque posuere rhoncus erat, sit amet aliquet augue. Donec eros massa, gravida ac lectus et,
                    pharetra interdum lectus. Sed vel scelerisque quam, id fringilla ante. Vivamus sagittis velit quis
                    dictum ultricies. Nullam eleifend lectus a tortor interdum, non sodales.</p>
                </blockquote>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row SequentialAppear">
        <div class="col-md-12 col-lg-6 testimonial__content FadeInItem testimonial__content--3">
          <div style="height: 100%;" class="row align-items-center pt-3 pb-3">
            <div class="col-md-12 col-lg-4 testimonial__content--info">
              <img class="client-img" src="/web-dentalcare/images/client-3.jpg" alt="">
              <h4>PAUL LEE</h4>
              <span class="sign-img"><img src="/web-dentalcare/images/sign-3.png" alt=""></span>
            </div>
            <div class="col-md-12 col-lg-8">
              <div class="testimonial__content--text">
                <blockquote>
                  <i class="fas fa-quote-left"></i>
                  <p>Nullam eleifend lectus a tortor interdum, non sodales ante vehicula. Proin consequat, at commodo.
                    Donec eros massa, gravida ac lectus et, pharetra interdum lectus. Sed vel scelerisque quam, id
                    fringilla ante. Vivamus sagittis velit quis dictum ultricies.</p>
                </blockquote>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-12 col-lg-6 testimonial__content FadeInItem testimonial__content--4">
          <div style="height: 100%;" class="row align-items-center pt-3 pb-3">
            <div class="col-md-12 col-lg-4 testimonial__content--info">
              <img class="client-img" src="/web-dentalcare/images/client-4.jpg" alt="">
              <h4>ANN CLARK</h4>
              <span class="sign-img"><img src="/web-dentalcare/images/sign-4.png" alt=""></span>
            </div>
            <div class="col-md-12 col-lg-8">
              <div class="testimonial__content--text">
                <blockquote>
                  <i class="fas fa-quote-left"></i>
                  <p>Quisque posuere rhoncus erat, sit amet aliquet augue. Donec eros massa, gravida ac lectus et,
                    pharetra interdum lectus. Sed vel scelerisque quam, id fringilla ante. Vivamus sagittis velit quis
                    dictum ultricies. Nullam eleifend lectus a tortor interdum, non sodales.</p>
                </blockquote>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!--Section contact us-->
  <section class="contact-us">
    <div class="container content d-flex justify-content-between flex-wrap">
      <div class="heading ElementScrollEffect left">
        <h5>Hợp tác?</h5>
        <h2 class="mb-3">liên hệ với chúng tôi và có một cuộc hẹn</h2>
      </div>
      <div class="d-flex align-items-center ElementScrollEffect right">
        <a href="#">
          <span style="text-transform: uppercase; color: #000000;">liên hệ</span>
        </a>
      </div>
    </div>
  </section>

  <!--Section services-->
  <section class="services">
    <div class="container">
      <div class="container__heading ElementScrollEffect right">
        <h5 class="container__heading--sub">
          the best reference
        </h5>
        <span class="dash"></span>
        <h2>
          <em>Dịch vụ</em>
          <b>của chúng tôi</b>
        </h2>
        <p>
          Quisque posuere rhoncus erat, sit amet aliquet augue. Donec eros massa, gravida ac lectus et, pharetra
          interdum lectus.
        </p>
      </div>
      <div class="row">
        <div class="col-md-6 col-lg-3 sv-card FadeInItem sv-card--1">
          <div class="container--card">
            <div class="container-img">
              <a href="#">
                <img src="web-dentalcare/images/sv-teeth.jpg" alt="">
              </a>
            </div>
            <div class="content">
              <a href="#" class="icon-card"></a>
              <h5>Răng</h5>
              <h3>Dịch vụ răng</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quia totam amet laboriosam harum magni aut!
              </p>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-3 sv-card FadeInItem sv-card--2">
          <div class="container--card">
            <div class="container-img">
              <a href="#">
                <img src="web-dentalcare/images/sv-implants.jpg" alt="">
              </a>
            </div>
            <div class="content">
              <a href="#" class="icon-card"></a>
              <h5>Nếu bạn thiếu</h5>
              <h3>Cấy ghép implant</h3>
              <p>Nullam eleifend lectus a tortor interdum, non sodales ante vehicula. Proin consequat, at commodo.</p>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-3 sv-card FadeInItem sv-card--3">
          <div class="container--card">
            <div class="container-img">
              <a href="#">
                <img src="web-dentalcare/images/sv-dentistry.jpg" alt="">
              </a>
            </div>
            <div class="content">
              <a href="#" class="icon-card"></a>
              <h5>Thẩm mỹ</h5>
              <h3>nha khoa</h3>
              <p>Curabitur nec interdum justo. Suspendisse in venenatis justo. Sed arcu velit, pulvinar eu consequat in,
                volutpat et urna.</p>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-3 sv-card FadeInItem sv-card--4">
          <div class="container--card">
            <div class="container-img">
              <a href="#">
                <img src="web-dentalcare/images/sv-bridges.jpg" alt="">
              </a>
            </div>
            <div class="content">
              <a href="#" class="icon-card"></a>
              <h5>biện pháp tốt nhất</h5>
              <h3>cầu răng sứ</h3>
              <p>Vestibulum volutpat, nunc vitae tempus efficitur, sapien quam tristique nunc, in pulvinar sapien sem et
                massa.</p>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-6 col-lg-3 sv-card FadeInItem sv-card--5">
          <div class="container--card">
            <div class="container-img">
              <a href="#">
                <img src="web-dentalcare/images/sv-crowns.jpg" alt="">
              </a>
            </div>
            <div class="content">
              <a href="#" class="icon-card"></a>
              <h5>điều trị không đau</h5>
              <h3>chụp răng</h3>
              <p>Integer ullamcorper odio vitae nibh dapibus, id mollis quam eleifend. Fusce finibus vestibulum odio
                vitae malesuada.</p>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-3 sv-card FadeInItem sv-card--6">
          <div class="container--card">
            <div class="container-img">
              <a href="#">
                <img src="web-dentalcare/images/sv-invisalign.jpg" alt="">
              </a>
            </div>
            <div class="content">
              <a href="#" class="icon-card"></a>
              <h5>hàm răng đều</h5>
              <h3>niềng răng</h3>
              <p>Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Morbi a
                pulvinar leo.</p>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-3 sv-card FadeInItem sv-card--7">
          <div class="container--card">
            <div class="container-img">
              <a href="#">
                <img src="web-dentalcare/images/sv-venneers.jpg" alt="">
              </a>
            </div>
            <div class="content">
              <a href="#" class="icon-card"></a>
              <h5>dán sứ</h5>
              <h3>Dán sứ veneers</h3>
              <p>Praesent porta lacus a viverra tempus. Proin maximus felis ac risus aliquam maximus. Pellentesque quis
                orci tempus.</p>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-3 sv-card FadeInItem sv-card--8">
          <div class="container--card">
            <div class="container-img">
              <a href="#">
                <img src="web-dentalcare/images/sv-whitening.jpg" alt="">
              </a>
            </div>
            <div class="content">
              <a href="#" class="icon-card"></a>
              <h5>nụ cười tỏa sáng</h5>
              <h3>làm trắng răng</h3>
              <p>Fusce tempus suscipit auctor. Sed at nulla at nisi pretium tincidunt. Nullam mattis arcu porttitor,
                dictum metus sed.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!--section map-->
  <section class="map">
    <div class="container-map">
      <div class="containerWorkingHour" style="background-color: #005B88; padding: 48px 40px;">
        <div id="btn-toggle" data-icon=""></div>
        <div class="working-hours-wrap">
          <h3>giờ làm việc</h3>
          <div class="working-hours">
            <div class="row">
              <div class="col-md-5">
                Mon - Wed
              </div>
              <div class="col-md-7">
                8:00 AM - 7:00 PM
              </div>
            </div>
            <div class="row">
              <div class="col-md-5">
                Thu - Fri
              </div>
              <div class="col-md-7">
                8:00 AM - 5:00 PM
              </div>
            </div>
            <div class="row">
              <div class="col-md-5">
                Sat - Sun
              </div>
              <div class="col-md-7">
                Đóng cửa
              </div>
            </div>
          </div>
          <div class="TopSpace"></div>
          <h3>liên hệ chi tiết</h3>
          <div class="contact">
            <div>
              <a href="#">
                <div style="display: table-cell; width: 28px;">
                  <span class="iconify" data-icon="fluent:location-28-regular" data-rotate="180deg" data-flip="vertical"></span>
                </div>
                <span style="display: table-cell;" class="ml-2 text">ABC Avenue 7, NY, VN</span>
              </a>
              <a class="d-block mt-2" href="mailto:clinic@dentalcare.com">
                <span class="iconify" data-icon="uiw:mail-o"></span>
                <span class="ml-2 text">clinic@dentalcare.com</span>
              </a>
              <a class="d-block mt-2" href="tel:555-666-777">
                <span class="iconify" data-icon="healthicons:phone-outline" data-rotate="270deg" data-flip="vertical"></span>
                <span class="ml-2 text">Gọi ngay</span>
              </a>
            </div>
          </div>
        </div>
      </div>
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2521.189562983325!2d105.86532408406353!3d20.996233074417177!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135ac04daecb877%3A0xef1e1e02b64fcb4c!2zQuG7h25oIHZp4buHbiDEkGEga2hvYSBRdeG7kWMgdOG6vyBWaW5tZWMgVGltZXMgQ2l0eQ!5e0!3m2!1svi!2s!4v1635734046594!5m2!1svi!2s" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
    </div>
  </section>

  <footer>
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-lg-3">
                <div class="header">
                    <h3>về chúng tôi</h3>
                </div>
                <div class="dash"></div>
                <div class="content">
                    <ul>
                        <li><a class="title" href="./pages/about.php">thông tin chung</a></li>
                        <li><a class="title" href="./pages/doctorprofile.php">chuyên gia hàng đầu</a></li>
                        <li><a class="title" href="./pages/appointments.php">đặt lịch hẹn</a></li>
                        <li><a class="title" href="./pages/testimonials.php">cảm nhận của khách hàng</a></li>
                        <li><a class="title" href="./pages/contact-us.php">liên hệ</a></li>
                        <li><a class="title" href="./pages/working-hours.php">giờ làm việc</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="header">
                    <h3>dịch vụ</h3>
                </div>
                <div class="dash"></div>
                <div class="content">
                    <ul>
                        <li><a class="title" href="#">dịch vụ</a></li>
                        <li><a class="title" href="#">phẫu thuật và trồng răng</a></li>
                        <li><a class="title" href="#">làm răng sứ</a></li>
                        <li><a class="title" href="#">làm trắng răng</a></li>
                        <li><a class="title" href="#">nha khoa thẩm mỹ</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="header">
                    <h3>tin tức</h3>
                </div>
                <div class="dash"></div>
                <div class="content">
                    <ul>
                        <li><a class="title" href="#">Some sugar-free drinks can also damage teeth, experts warn</a></li>
                        <li><a class="title" href="#">Benefits of Dental Implant</a></li>
                        <li><a class="title" href="#">Gum Diseases</a></li>
                        <li><a class="title" href="#">Pulpitis - Risk of tooth loss</a></li>
                        <li><a class="title" href="#">Meet the new dental guidelines.</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="header">
                    <h3>theo dõi</h3>
                </div>
                <div class="dash"></div>
                <div class="content">
                    <p>Organically grow the holistic world view of innovation empowerment</p>
                    <div class="footer--contact">
                        <a class="mt-2" href="#">
                            <span class="iconify" data-icon="gg:facebook"></span>
                        </a>
                        <a class="mt-2" href="#">
                            <span class="iconify" data-icon="ei:sc-twitter"></span>
                        </a>
                        <a class="mt-2" href="#">
                            <span class="iconify" data-icon="akar-icons:instagram-fill"></span>
                        </a>
                        <a class="mt-2" href="#">
                            <span class="iconify" data-icon="iconoir:youtube"></span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="copyright">
        <div class="content">
            Copyright &#169; <script>
                document.write(new Date().getFullYear())
            </script> DentalCare <br>Made by <a href="https://www.facebook.com/khoa.nguyenvan.99" target="_blank">Khoa Nguyen</a></div>
    </div>
</footer>


  <!-- The Modal -->
  <div class="modal fade" id="myAppointment">
    <div class="modal-dialog modal-dialog-centered modal-lg">
      <div class="modal-content">

        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Tạo một cuộc hẹn ngay</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>

        <!-- Modal body -->
        <div class="modal-body">
          <form action="{{ route('appointmentPatient.store') }}" method="POST" class="form" id="form-1">
            @csrf
            <div class="spacer"></div>

            <div class="row">
              <div class="col-lg-6">
                <div class="form-group">
                  <label for="fullname" class="form-label">Tên đầy đủ<span class="mandatory"> *</span></label>
                  <input id="fullname" name="name" type="text" placeholder="VD: Khoa Nguyễn" class="form-control">
                  <span class="form-message"></span>
                </div>
              </div>
              <div class="col-lg-6">
                <div class="form-group">
                  <label for="email" class="form-label">Email<span class="mandatory"> *</span></label>
                  <input id="email" name="email" type="text" placeholder="VD: email@domain.com" class="form-control">
                  <span class="form-message"></span>
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-lg-6">
                <div class="form-group">
                  <label for="phone-number" class="form-label">Điện thoại di động<span class="mandatory"> *</span></label>
                  <input id="phone-number" name="phone" type="tel" placeholder="Số điện thoại" class="form-control">
                  <span class="form-message"></span>
                </div>
              </div>
              <div class="col-lg-6">
                <div class="form-group">
                  <label for="formDate" class="form-label">Lịch hẹn<span class="mandatory"> *</span></label>
                  <input id="formDate" min="" name="date" type="date" class="form-control">
                  <span class="form-message"></span>
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-lg-6">
                <div class="form-group">
                  <label for="formTimes" class="form-label">Chọn thời gian phù hợp với bạn<span class="mandatory"> *</span></label>
                  <select name="time" id="formTimes" class="form-control">
                    <option value="">Thời gian</option>
                  </select>
                  <span class="form-message"></span>
                </div>
              </div>
              <div class="col-lg-6">
                <div class="form-group">
                  <label for="formAddress" class="form-label">Địa chỉ<span class="mandatory"> *</span></label>
                  <input id="formAddress" name="address" type="text" placeholder="Địa chỉ của bạn" class="form-control">
                  <span class="form-message"></span>
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-lg-6">
                <div class="form-group">
                  <label for="gender" class="form-label">Giới tính</label>
                  <select name="gender" id="gender" class="form-control">
                    <option value="">Chọn</option>
                    <option value="nam">Nam</option>
                    <option value="nữ">Nữ</option>
                    <option value="khác">Khác</option>
                  </select>
                  <span class="form-message"></span>
                </div>
              </div>
            </div>

            <div class="form-group">
              <label for="services" class="form-label">Dịch vụ của bạn là gì<span class="mandatory"> *</span></label>
              <span style="display: block" class="form-message"></span>
              <div class="row" id="formServices">
                <div class="col-lg-6">
                  <input type="checkbox" id="service-1" name="services[]" value="Nhận tư vấn">
                  <label for="service-1">Nhận tư vấn</label><br>
                  <input type="checkbox" id="service-2" name="services[]" value="Thẩm mỹ răng sứ">
                  <label for="service-2">Thẩm mỹ răng sứ</label><br>
                  <input type="checkbox" id="service-3" name="services[]" value="Chỉnh nha niềng rằng">
                  <label for="service-3">Chỉnh nha niềng rằng</label><br>
                  <input type="checkbox" id="service-4" name="services[]" value="Trám răng thẩm mỹ">
                  <label for="service-4">Trám răng thẩm mỹ</label><br>
                  <input type="checkbox" id="service-5" name="services[]" value="Làm răng giả">
                  <label for="service-5">Làm răng giả</label>
                </div>
                <div class="col-lg-6">
                  <input type="checkbox" id="service-6" name="services[]" value="Tẩy trắng răng">
                  <label for="service-6">Tẩy trắng răng</label><br>
                  <input type="checkbox" id="service-7" name="services[]" value="Lấy cao răng">
                  <label for="service-7">Lấy cao răng</label><br>
                  <input type="checkbox" id="service-8" name="services[]" value="Mặt dán răng sứ Veneers">
                  <label for="service-8">Mặt dán răng sứ Veneers</label><br>
                  <input type="checkbox" id="service-9" name="services[]" value="Bọc răng sứ Emax">
                  <label for="service-9">Bọc răng sứ Emax</label>
                </div>
              </div>
            </div>

            <div class="form-group">
              <label for="form-field-message" class="form-label">Nếu bạn cần hỏi điều gì hoặc muốn gửi các thông tin về mối quan tâm
                của bạn vui lòng điền vào khung bên dưới.</label>
              <textarea name="more_info" id="form-field-message" cols="100%" rows="5" placeholder="Nội dung" class="form-control"></textarea>
            </div>
            <p class="text-success hidden">Kiểm tra email để xác nhận đặt lịch thành công.</p>
            <p class="text-danger hidden">Có lỗi thử lại sau.</p>
            <button class="form-submit">ĐẶT LỊCH</button>
          </form>
        </div>

        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">ĐÓNG</button>
        </div>

      </div>
    </div>
  </div>

  <!-- The search Modal -->
  <div class="modal fade" id="ModalSearch">
    <div class="modal-dialog">
      <div class="modal-content">

        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Tìm kiếm</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>

        <!-- Modal body -->
        <div class="modal-body">
          <form action="#" method="GET">
            <div class="input-group">
              <input type="text" class="form-control" name="s" placeholder="Bạn muốn tìm gì?">
              <span class="input-group-btn">
                <button class="btn btn-primary" type="submit"><span class="iconify" data-icon="gg:search-loading"></span></button>
              </span>
            </div>
          </form>
        </div>

      </div>
    </div>
  </div>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous" referrerpolicy="no-referrer">
  </script>

  <script src="/web-dentalcare/js/main.js"></script>
  <script src="/web-dentalcare/js/validator.js"></script>
  <script src="/web-dentalcare/js/jquery.js"></script>
  <script>
    Validator({
    form: "#form-1",
    formGroupSelector: ".form-group",
    errorSelector: ".form-message",
    rules: [
      Validator.isRequired("#fullname", "Vui lòng nhập đầy đủ tên!"),
      Validator.isRequired("#email", "Vui lòng nhập trường này!"),
      Validator.isEmail("#email", "Địa chỉ email không hợp lệ"),
      Validator.isRequired("#phone-number", "Vui lòng nhập trường này!"),
      Validator.isPhoneNumber("#phone-number", "Số điện thoại không hợp lệ"),
      Validator.isRequired("#formDate", "Vui lòng nhập trường này!"),
      Validator.isRequired("#formTimes", "Vui lòng nhập trường này!"),
      Validator.isRequired("#formAddress", "Vui lòng nhập địa chỉ"),
      Validator.isRequired("#gender", "Chọn giới tính!"),
      Validator.isRequired("input[name='services[]']", "Vui lòng chọn dịch vụ!"),
    ],

  });
    // Set min input date
    let today = new Date();
    let dd = today.getDate();
    let mm = today.getMonth()+1; //January is 0 so need to add 1 to make it 1!
    let yyyy = today.getFullYear();
    if(dd<10){
      dd='0'+dd
    } 
    if(mm<10){
      mm='0'+mm
    } 
    today = yyyy+'-'+mm+'-'+dd;
    document.getElementById("formDate").setAttribute("min", today);
    // End set min input date

    
  </script>
</body>

</html>