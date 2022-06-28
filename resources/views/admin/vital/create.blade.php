@extends('admin.layouts.master')

@section('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
            <div class="col-sm-3">
                <h1 class="m-0">Nhập thông tin sinh hiệu</h1>
            </div>
            <div class="col-sm-9">
                <a href="{{ route('account.index') }}" class="btn btn-primary btn-sm">
                    <i class="fas fa-arrow-left"></i> @lang('Back')
                </a>
            </div>
            </div><!-- /.row -->

            @include('admin.layouts.alert')
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="card card-primary">
        <div class="card-header">
          <h3 class="card-title">Nhập thông tin sinh hiệu</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form action="{{ route('vital.store') }}" method="POST" id="form-1">
            <div class="card-body">
                <div class="row">
                    <div class="col-4">
                        <div class="form-group">
                            <label>Nhập tên bệnh nhân để tìm kiếm:<span class="mandatory"> *</span></label>
                            <input autocomplete="off" id="search_khoa_nguyen" type="text" class="form-control" name="patient_id" list="fullname_patient" placeholder="nhập tên bệnh nhân">
                            <datalist id="fullname_patient">
                            </datalist>
                            <span class="form-message"></span>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="form-group">
                            <label for="temperature">Nhiệt độ <i>&deg;C</i></label>
                            <input value="{{ old('temperature') }}" id="temperature" name="temperature" type="text" class="form-control">
                            <span class="form-message"></span>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="form-group">
                            <label for="height">Chiều cao <i>cm</i></label>
                            <input value="{{ old('height') }}" id="height" name="height" type="text" class="form-control">
                            <span class="form-message"></span>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="form-group">
                            <label for="weight">Cân nặng <i>kg</i></label>
                            <input value="{{ old('weight') }}" id="weight" name="weight" type="text" class="form-control">
                            <span class="form-message"></span>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="form-group">
                            <label for="pulse">Nhịp tim <i>lần/phút</i></label>
                            <input value="{{ old('pulse') }}" id="pulse" name="pulse" type="text" class="form-control">
                            <span class="form-message"></span>
                        </div>
                    </div>
                </div>
                
                <div class="row">
                    <div class="col-md-2">
                        <div class="form-group">
                            <label for="blood_group">Nhóm máu</label>
                            <select id="blood_group" name="blood_group" class="form-control">
                                <option value="">-- chọn nhóm máu --</option>
                                <option value="O">O</option>
                                <option value="A">A</option>
                                <option value="B">B</option>
                                <option value="AB">AB</option>
                            </select>
                            <span class="form-message"></span>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="form-group">
                            <label for="blood_type">Loại máu</label>
                            <select id="blood_type" name="blood_type" class="form-control">
                                <option value="">----</option>
                                <option value="Rh+">Rh+</option>
                                <option value="Rh-">Rh-</option>
                            </select>
                            <span class="form-message"></span>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="form-group">
                            <label for="systolic">HA tâm thu <i>mmHg</i></label>
                            <input type="text" class="form-control" value="{{ old('systolic') }}" name="systolic" id="systolic" placeholder="triệu chứng">
                            <span class="form-message"></span>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="form-group">
                            <label for="diastolic">HA tâm trương <i>mmHg</i></label>
                            <input type="text" class="form-control" value="{{ old('diastolic') }}" name="diastolic" id="diastolic" placeholder="triệu chứng">
                            <span class="form-message"></span>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="form-group">
                            <label for="blood_pressure">Mạch đập <i>lần/phút</i></label>
                            <input type="text" class="form-control" value="{{ old('blood_pressure') }}" name="blood_pressure" id="blood_pressure" placeholder="triệu chứng">
                            <span class="form-message"></span>
                        </div>
                    </div>

                    <div class="col-md-2">
                        <div class="form-group">
                            <label for="respiration">Nhịp thở <i>lần/phút</i></label>
                            <input type="text" class="form-control" value="{{ old('respiration') }}" name="respiration" id="respiration" placeholder="triệu chứng">
                            <span class="form-message"></span>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="note">Ghi chú</label>
                            <textarea name="note" id="note" cols="100%" rows="5" placeholder="Nội dung" class="form-control">{{ old('note') }}</textarea>
                        </div>
                    </div>
                </div>
                
            </div>
            <!-- /.card-body -->
            @csrf
            {{-- loading submit --}}
            <div class="loading loading-ring hidden">
                <div class="lds-dual-ring">Đang xử lý</div>
            </div>
            {{-- end loading submit --}}
            <div class="card-footer">
                <button type="submit" class="btn btn-primary btn-submit-form"><i class="fas fa-plus"></i> @lang('Add New')</button>
            </div>
        </form>
    </div>
    
    <!-- /.content -->
</div>
    
@endsection

@section('script')
<script>
    Validator({
        form: "#form-1",
        formGroupSelector: ".form-group",
        errorSelector: ".form-message",
        rules: [
            Validator.isRequired("#search_khoa_nguyen", "@lang('Please fill out this field')"),
        ]
    });
    $(function () {
        //Initialize Select2 Elements
        $('.select2').select2()
    });    

</script>
@endsection