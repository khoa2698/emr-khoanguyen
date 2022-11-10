<!DOCTYPE html>
<html lang="en">

    @include('web.layouts.head')

<body>
    
    <header class="BgScrollEffect about-us">
        <div class="BackgroundImage"></div>

        <!-- Include navbar -->
        @include('web.layouts.navbar')

        <div class="container WrapContent">
            <div class="ContentOnBackGround ElementScrollEffect right">
                <h5 class="heading--sub">Giới thiệu</h5>
                <span class="dash"></span>
                <h2 class="heading">ĐẶT HẸN</h2>
                <p class="text">Các chuyên gia răng hàm mặt có nhiều năm kinh nghiệm.</p>
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
                <h5 class="heading--sub">Lựa chọn dịch vụ bạn mong muốn</h5>
                <span class="dash"></span>
                <h2 class="heading">Tạo một cuộc hẹn ngay</h2>
            </div>
            <div class="row">
                <div class="col-lg-8">
                    @if (empty($timeout))
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
                            <h3 class="text-success">Đặt lịch thành công.</h3>
                        @endif
                        @if (Session::has('error'))
                            <h3 class="text-danger">{{ Session::get('error') }}</h3>
                        @endif
                    @else
                        <h3 class="text-danger">{{ $timeout }}</h3>
                    @endif
                    
                </div>
                <div class="col-lg-4">

                </div>
            </div>
        </div>
    </section>

    @include('web.layouts.foot')

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
                    <label for="gender" class="form-label">Giới tính<span class="mandatory"> *</span></label>
                    <select name="gender" id="gender" class="form-control">
                        <option value="">Chọn</option>
                        <option value="Nam">Nam</option>
                        <option value="Nữ">Nữ</option>
                        <option value="Khác">Khác</option>
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
    @include('web.layouts.footer')

</body>

</html>