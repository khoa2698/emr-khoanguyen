@extends('admin.layouts.master')

@section('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
            <div class="col-sm-3">
                <h1 class="m-0">Nhập kết quả chụp</h1>
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
          <h3 class="card-title">Nhập kết quả chụp</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form action="{{ route('account.store') }}" method="POST" id="form-1">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="fullname">@lang('Full Name')<span class="mandatory"> *</span></label>
                            <input type="text" class="form-control" value="{{ old('name') }}" name="name" id="fullname" placeholder="@lang('Type full name')">
                            <span class="form-message"></span>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="email">@lang('Email Address')<span class="mandatory"> *</span></label>
                            <input type="email" class="form-control" name="email" value="{{ old('email') }}" id="email" placeholder="@lang('Type email address')">
                            <span class="form-message"></span>
                        </div>
                    </div>
                </div>
                
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="password">@lang('PassWord')<span class="mandatory"> *</span></label>
                            <input type="text" class="form-control" name="password" id="password" placeholder="@lang('Enter password')">
                            <span class="form-message"></span>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="password_confirmation">@lang('Re-enter Password')<span class="mandatory"> *</span></label>
                            <input type="text" class="form-control" name="password_confirmation" id="password_confirmation" placeholder="@lang('Enter password')">
                            <span class="form-message"></span>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>@lang('Select role group')</label>
                            
                          </div>
                          <!-- /.form-group -->
                    </div>
                    <!-- /.col -->
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
        Validator.isRequired("#fullname", "@lang('Please fill out your full name')"),
        Validator.isRequired("#email", "@lang('Please fill out this field')"),
        Validator.isRequired("#password", "@lang('Please fill out this field')"),
        Validator.isRequired("#password_confirmation", "@lang('Please fill out this field')"),
        Validator.isEmail("#email", 'Email không hợp lệ'),
        Validator.validatePassword("#password", '@lang('Minimum eight and maximum 50 characters, at least one uppercase letter, one lowercase letter, one number and one special character')'),
        Validator.isConfirmed("#password_confirmation", function() {
            return document.querySelector('#form-1 #password').value;
        }, '@lang('Re-entered password is incorrect')'),
        ],
    });
    $(function () {
        //Initialize Select2 Elements
        $('.select2').select2()
    });    

</script>
@endsection