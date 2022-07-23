@extends('web.layouts.master')

@section('home')
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
              <p>DentalCare quy tụ đội ngũ chuyên gia, bác sĩ, dược sĩ và điều dưỡng được đào tạo bài bản đến chuyên sâu tại Việt nam và nhiều nước có nên y học phát triển như Mỹ, Anh, Pháp... Luôn lấy người bệnh là trung tâm, DentalCare cam kết mang lại dịch vụ chăm sóc sức khỏe toàn diện và chất lượng cao cho khách hàng.</p>
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
          dịch vụ tốt nhất
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
@endsection