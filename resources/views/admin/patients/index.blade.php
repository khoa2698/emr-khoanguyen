@extends('admin.layouts.master')

@section('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
            <div class="col-sm-3">
                <h1 class="m-0">Danh sách bệnh nhân</h1>
            </div>
            
            <div>
                <a href="{{ route('patient.create') }}" class="btn btn-primary">
                    <i class="fas fa-plus"></i> Thêm bệnh nhân mới
                </a>
            </div>

            </div><!-- /.row -->

            @include('admin.layouts.alert')
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Danh sách bệnh nhân</h3>

                    <div class="card-tools">
                        <div class="input-group input-group-sm" style="width: 150px;">
                            <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

                            <div class="input-group-append">
                                <button type="submit" class="btn btn-default">
                                    <i class="fas fa-search"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.card-header -->
                <div class="card-body table-responsive p-0 loadAjax">
                    <table class="table table-hover">
                        <thead>
                        <tr>
                            <th style="width:15px">ID</th>
                            <th style="width:40px">Mã bệnh nhân</th>
                            <th>@lang('Name')</th>
                            <th>Số điện thoại</th>
                            <th>Địa chỉ</th>
                            <th>@lang('Action')</th>
                            <th>@lang('Updated at')</th>
                        </tr>
                        </thead>
                        <tbody>
                            @if (count($all_patients) != 0)
                                @foreach ($all_patients as $patient)
                                    <tr id="rowId_{{ $patient->id }}">
                                        <td>{{ $patient->id }}</td>
                                        <td>{{ $patient->patient_id }}</td>
                                        <td>{{ $patient->full_name }}</td>
                                        <td>{{ $patient->phone_patient }}</td>
                                        <td>
                                            {!! App\Helpers\Helper::getPatientAddress($patient->city_id, $patient->district_id, $patient->ward_id) !!}
                                        </td>
                                        <td>
                                            <div>
                                                <a href="{{ route('patient.edit', $patient->id) }}" class="btn btn-outline-info btn-inline-block">
                                                    <i class="fas fa-tools"></i> @lang('Edit')
                                                </a>
                                                <a href="{{ route('patient.edit', $patient->id) }}" class="btn btn-outline-info btn-inline-block">
                                                    <i class="fas fa-eye"></i> @lang('Detail')
                                                </a>
                                                <button type="button" class="btn btn-outline-danger btn-inline-block" data-toggle="modal" data-target="#{{ 'myModal-' . $patient->id }}">
                                                    <i class="fas fa-trash"></i> @lang('Delete')
                                                </button>
                                                @php
                                                    if(isset($_GET['page'])) {
                                                        $page = $_GET['page'];
                                                    } else {
                                                        $page = 1;
                                                    }
                                                @endphp
                                                <div class="modal fade" id="{{ 'myModal-' . $patient->id }}">
                                                    <div class="modal-dialog">
                                                      <div class="modal-content">
                                                      
                                                        <!-- Modal Header -->
                                                        <div class="modal-header">
                                                            <h4 class="modal-title">Xóa bệnh nhân<br> 
                                                                <b><i>{{ $patient->full_name .' - '. $patient->patient_id }}</i></b>
                                                            </h4>
                                                          <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                        </div>
                                                        
                                                        <!-- Modal body -->
                                                        <div class="modal-body" style="display:flex;">
                                                            <button onclick="removeRow({{ $patient->id }}, '/emr/patient/destroy', {{ $page }})" type="button" class="btn btn-danger" data-dismiss="modal">
                                                                <i class="fas fa-check"></i> @lang('Agree')
                                                            </button>
                                                            <button type="button" style="margin-left: 20px" class="btn btn-primary" data-dismiss="modal">
                                                                <i class="fas fa-window-close"></i> @lang('Cancel')
                                                            </button>
                                                            
                                                        </div>
                                                        
                                                      </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                        <td>{{ $patient->updated_at }}</td>
                                    </tr>
                                @endforeach
                            @else
                                <tr>
                                    <td colspan="7">Không có kết quả</td>
                                </tr>
                            @endif
                            
                        </tbody>
                    </table>
                </div>

                @if (count($all_patients) != 0)
                    {{ $all_patients->links() }}
                @endif
                <!-- /.card-body -->
            </div>

            <!-- /.card -->
        </div>
    </div>
    <!-- /.content -->
</div>
    
@endsection

