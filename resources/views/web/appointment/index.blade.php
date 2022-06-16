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
  <style>
    .loading-ring {
        display: flex;
        justify-content: center;
    }
    .lds-dual-ring {
        display: inline-block;
        width: 80px;
        height: 80px;
        }
        .lds-dual-ring:after {
        content: " ";
        display: block;
        width: 64px;
        height: 64px;
        margin: 8px;
        border-radius: 50%;
        border: 6px solid #1dbfaf;
        border-color: #1dbfaf transparent #1dbfaf transparent;
        animation: lds-dual-ring 1.2s linear infinite;
        }
        @keyframes lds-dual-ring {
        0% {
            transform: rotate(0deg);
        }
        100% {
            transform: rotate(360deg);
        }
        }

  </style>
</head>

<body>
    
    <header class="BgScrollEffect about-us">
        <div class="BackgroundImage"></div>
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
                            <span class="iconify" data-icon="healthicons:phone-outline" data-rotate="270deg"
                                data-flip="vertical"></span>
                            <span class="content d-flex justify-content-center flex-column">
                                <a class="d-block content--heading" href="tel:555-666-777">GỌI NGAY</a>
                                <a class="d-block content--sub"
                                    href="mailto:clinic@dentalcare.com">clinic@dentalcare.com</a>
                            </span>
                        </div>
                        <div class="contact__info--address d-flex">
                            <span class="iconify" data-icon="fluent:location-28-regular" data-rotate="180deg"
                                data-flip="vertical"></span>
                            <span class="content d-flex justify-content-center flex-column">
                                <h6 class="d-block">ABC Avenue 7</h6>
                                <p class="d-block mb-0">Ha Noi, VN</p>
                            </span>
                        </div>
                    </div>
                </div>
                <form style="margin-right: 20px;" class="form-inline SearchFixed" action="#" method="GET">
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

                    <button class="navbar-toggler" type="button" data-toggle="collapse"
                        data-target="#collapsibleNavbar">
                        <!-- <span class="navbar-toggler-icon">red</span> -->
                        <span class="iconify" data-icon="bytesize:menu"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="collapsibleNavbar">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link" href="/">Trang chủ</a>
                            </li>
                            <li class="nav-item active dropdown">
                                <a class="nav-link dropdown-toggle" id="navbardrop" data-toggle="dropdown"
                                    href="./about.php">Giới thiệu chung</a>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="./about.php">
                                        <span class="iconify" data-icon="dashicons:arrow-right-alt2"></span>
                                        Thông tin chung
                                    </a>
                                    <a class="dropdown-item" href="./doctorprofile.php">
                                        <span class="iconify" data-icon="dashicons:arrow-right-alt2"></span>
                                        Bác sĩ
                                    </a>
                                    <a class="dropdown-item active" href="./appointments.php">
                                        <span class="iconify" data-icon="dashicons:arrow-right-alt2"></span>
                                        Đặt hẹn
                                    </a>
                                    <a class="dropdown-item" href="./testimonials.php">
                                        <span class="iconify" data-icon="dashicons:arrow-right-alt2"></span>
                                        Cảm nhận của bệnh nhân
                                    </a>
                                    <a class="dropdown-item" href="./contact-us.php">
                                        <span class="iconify" data-icon="dashicons:arrow-right-alt2"></span>
                                        Liên hệ
                                    </a>
                                    <a class="dropdown-item" href="./working-hours.php">
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

                        <form class="form-inline SearchFixed" action="#" method="GET">
                            <button style="width: 70px; background-color:#22c7dd; border-color:#22c7dd" type="button" class="btn btn-primary" data-toggle="modal" data-target="#ModalSearch">
                                <span style="font-size: 25px;" class="iconify search-btn" data-icon="gg:search-loading"></span>
                            </button>
                        </form>
                    </div>

                </nav>
            </div>
        </div>

        <div class="container WrapContent">
            <div class="ContentOnBackGround ElementScrollEffect right">
                <h5 class="heading--sub">Giới thiệu</h5>
                <span class="dash"></span>
                <h2 class="heading">ĐẶT HẸN</h2>
                <p class="text">Praesent venenatis lobortis volutpat. Curabitur ultricies ex vel mi ornare fringilla. Aenean luctus orci ac tellus rutrum posuere. Curabitur sit amet varius erat. Morbi placerat, nulla eu iaculis condimentum.</p>
                <a class="content--btn content--btn--left mr-3 d-inline-block" href="#">
                    <span>ĐỘI NGŨ</span>
                </a>
                <a class="content--btn content--btn--right d-inline-block" href="#">
                    <span>GIỜ LÀM VIỆC</span>
                </a>
            </div>
        </div>
    </header>

    <section class="MakeAppointment">
        <div class="container WrapHeadingContent">
            <div class="HeadingContent  ElementScrollEffect left">
                <h5 class="heading--sub">Book a visit with your doctor</h5>
                <span class="dash"></span>
                <h2 class="heading">make an appointment now</h2>
            </div>
            <div class="row">
                <div class="col-lg-8">
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    @if(Session::has('success'))
                        <h3 class="text-success">Kiểm tra email để xác nhận đặt lịch thành công.</h3>
                    @endif
                    @if (Session::has('error'))
                        <h3 class="text-danger">{{ Session::get('error') }}</h3>
                    @endif
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
                                    <label for="phone-number" class="form-label">Điện thoại</label>
                                    <input id="phone-number" name="phone" type="text" placeholder="Số điện thoại" class="form-control">
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
                            
                            {{-- loading submit --}}
                            <div class="loading loading-ring hidden">
                                <div class="lds-dual-ring">Đang xử lý</div>
                            </div>
                            {{-- end loading submit --}}

                            <button class="form-submit">BOOK NOW</button>
                        </form>
                    </div>
                </div>
                <div class="col-lg-4">

                </div>
            </div>
        </div>
    </section>

    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-lg-3">
                    <div class="header">
                        <h3>about us</h3>
                    </div>
                    <div class="dash"></div>
                    <div class="content">
                        <ul>
                            <li><a class="title" href="./about.php">general info</a></li>
                            <li><a class="title" href="./doctorprofile.php">doctor profile</a></li>
                            <li><a class="title" href="./appointments.php">appointments</a></li>
                            <li><a class="title" href="./testimonials.php">testimonials</a></li>
                            <li><a class="title" href="./contact-us.php">contact us</a></li>
                            <li><a class="title" href="./working-hours.php">working hours</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="header">
                        <h3>services</h3>
                    </div>
                    <div class="dash"></div>
                    <div class="content">
                        <ul>
                            <li><a class="title" href="#">dental services</a></li>
                            <li><a class="title" href="#">surgery and dental implants</a></li>
                            <li><a class="title" href="#">dental crowns</a></li>
                            <li><a class="title" href="#">teeth whitening</a></li>
                            <li><a class="title" href="#">cosmetic dentistry</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="header">
                        <h3>news</h3>
                    </div>
                    <div class="dash"></div>
                    <div class="content">
                        <ul>
                            <li><a class="title" href="#">Some sugar-free drinks can also damage teeth, experts warn</a>
                            </li>
                            <li><a class="title" href="#">Benefits of Dental Implant</a></li>
                            <li><a class="title" href="#">Gum Diseases</a></li>
                            <li><a class="title" href="#">Pulpitis – Risk of tooth loss</a></li>
                            <li><a class="title" href="#">Meet the new dental guidelines.</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="header">
                        <h3>follow us</h3>
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
                Copyright &#169; <script>document.write(new Date().getFullYear())</script> DentalCare <br>Made by <a href="https://www.facebook.com/khoa.nguyenvan.99"
                    target="_blank">Khoa Nguyen</a></div>
        </div>
    </footer>

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
  </script>
</body>

</html>