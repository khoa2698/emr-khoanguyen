@extends('admin.layouts.master')

@section('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
            <div class="col-sm-3">
                <h1 class="m-0">Nhập chẩn đoán</h1>
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
          <h3 class="card-title">Nhập chẩn đoán</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form action="{{ route('diagnosis.store') }}" method="POST" id="form-1">
            <div class="card-body">
                <div class="row">
                    <div class="col-6">
                        <div class="form-group">
                            <label>Nhập tên bệnh nhân để tìm kiếm:<span class="mandatory"> *</span></label>
                            <input value="{{old('patient_id')}}" autocomplete="off" id="search_khoa_nguyen" type="text" class="form-control" name="patient_id" list="fullname_patient" placeholder="nhập tên bệnh nhân">
                            <datalist id="fullname_patient">
                            </datalist>
                            <span class="form-message"></span>
                        </div>
                    </div>
                    
                </div>
                
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="diagnosis_tuanhoan">Bệnh chính</label>
                            <select id="icd10_main_code" name="icd10_main_code" class="form-control select2" style="width: 100%;">
                                <option value=""></option>
                                @foreach ($icd10s as $icd10)
                                    <option value="{{ $icd10->code . '-' . $icd10->name}}">{{ $icd10->code . '-' . $icd10->name}}</option>
                                @endforeach
                            </select>
                            <span class="form-message"></span>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="diagnosis_tuanhoan">Bệnh kèm theo</label>
                            <select id="icd10_sub_code" name="icd10_sub_code" class="form-control select2" style="width: 100%;">
                                <option value=""></option>
                                @foreach ($icd10s as $icd10)
                                    <option value="{{ $icd10->code . '-' . $icd10->name}}">{{ $icd10->code . '-' . $icd10->name}}</option>
                                @endforeach
                            </select>
                            <span class="form-message"></span>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="diagnosis">Chẩn đoán</label>
                            <textarea style="resize: none" name="diagnosis" id="diagnosis" cols="100%" rows="5" placeholder="Nội dung" class="form-control">{{ old('diagnosis') }}</textarea>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="disease_prognosis">Tiên lượng</label>
                            <textarea style="resize: none" name="disease_prognosis" id="disease_prognosis" cols="100%" rows="5" placeholder="Nội dung" class="form-control">{{ old('disease_prognosis') }}</textarea>
                        </div>
                    </div>
                </div>
                <div class="row">
                    
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="disease_plan">Kế hoạch điều trị</label>
                            <textarea style="resize: none" name="disease_plan" id="disease_plan" cols="100%" rows="5" placeholder="Nội dung" class="form-control">{{ old('disease_plan') }}</textarea>
                        </div>
                    </div>
                </div>
                <div class="row">
                    
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="result_imaging">Kết quả ảnh chụp</label>
                            <textarea style="resize: none" name="result_imaging" id="result_imaging" cols="100%" rows="5" placeholder="Nội dung" class="form-control">{{ old('result_imaging') }}</textarea>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="result_lab">Kết quả xét nghiệm</label>
                            <textarea style="resize: none" name="result_lab" id="result_lab" cols="100%" rows="5" placeholder="Nội dung" class="form-control">{{ old('result_lab') }}</textarea>
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