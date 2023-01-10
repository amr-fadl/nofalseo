@extends('admin.layouts.app')

@section('content')
    <div>
        @foreach ($allData as $singlData)
            <div class="card col-7 pt-2 mt-5 ml-auto mb-0 mr-auto bg-transparent">
                <div class="m-3 d-flex justify-content-between">
                    <div>
                        <img src="{{ asset('uploads/users/' . $singlData->user->image) }}"
                            style="height: 40px; width: 40px; object-fit: cover" class="img-circle elevation-2"
                            alt="..."><span class="pl-2">{{ $singlData->user->name }}</span>
                    </div>
                </div>
                <img src="{{ asset('uploads/posts/' . $singlData->image) }}"
                    style="max-height: 350px; object-fit: cover; border-radius: 5px;" class="card-img-top" alt="...">
                <div class="card-body p-0">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item mt-3 mb-3 bg-transparent">
                            <h5 class="card-title  w-100">
                                <div>{{ $singlData->title }}</div>
                                <div>{{ $singlData->content }}</div>
                                <div>{{ $singlData->created_at }}</div>
                            </h5>
                        </li>
                        @if ($singlData->user->id == Auth::user()->id)
                            <div class="d-flex">
                                <form method="POST" action="{{ route('post.archive.restore', $singlData->id) }}">
                                    @csrf
                                    <button type="submit" onclick="return confirm('are you sure delete forever')" class="btn btn-success mr-3 mb-3 ml-2">restore</button>
                                </form>

                                <form method="POST" action="{{ route('post.archive.destroy', $singlData->id) }}">
                                    <button type="submit" onclick="return confirm('are you sure delete forever')" class="btn btn-danger mr-3 mb-3">delete</button>
                                    @csrf
                                </form>
                            </div>
                        @endif
                    </ul>
                </div>
            </div>
        @endforeach
    </div>

@endsection

@section('page_style')
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('admin/plugins/fontawesome-free/css/all.min.css') }}">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Tempusdominus Bbootstrap 4 -->
    <link rel="stylesheet"
        href="{{ asset('admin/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css') }}">
    <!-- iCheck -->
    <link rel="stylesheet" href="{{ asset('admin/plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}">
    <!-- JQVMap -->
    <link rel="stylesheet" href="{{ asset('admin/plugins/jqvmap/jqvmap.min.css') }}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('admin/dist/css/adminlte.min.css') }}">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="{{ asset('admin/plugins/overlayScrollbars/css/OverlayScrollbars.min.css') }}">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="{{ asset('admin/plugins/daterangepicker/daterangepicker.css') }}">
    <!-- summernote -->
    <link rel="stylesheet" href="{{ asset('admin/plugins/summernote/summernote-bs4.css') }}">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
@endsection

@section('page_script')
    <!-- jQuery -->
    <script src="{{ asset('admin/plugins/jquery/jquery.min.js') }}"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="{{ asset('admin/plugins/jquery-ui/jquery-ui.min.js') }}"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
        $.widget.bridge('uibutton', $.ui.button)
    </script>
    <!-- Bootstrap 4 -->
    <script src="{{ asset('admin/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <!-- ChartJS -->
    <script src="{{ asset('admin/plugins/chart.js/Chart.min.js') }}"></script>
    <!-- Sparkline -->
    <script src="{{ asset('admin/plugins/sparklines/sparkline.js') }}"></script>
    <!-- JQVMap -->
    <script src="{{ asset('admin/plugins/jqvmap/jquery.vmap.min.js') }}"></script>
    <script src="{{ asset('admin/plugins/jqvmap/maps/jquery.vmap.usa.js') }}"></script>
    <!-- jQuery Knob Chart -->
    <script src="{{ asset('admin/plugins/jquery-knob/jquery.knob.min.js') }}"></script>
    <!-- daterangepicker -->
    <script src="{{ asset('admin/plugins/moment/moment.min.js') }}"></script>
    <script src="{{ asset('admin/plugins/daterangepicker/daterangepicker.js') }}"></script>
    <!-- Tempusdominus Bootstrap 4 -->
    <script src="{{ asset('admin/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js') }}"></script>
    <!-- Summernote -->
    <script src="{{ asset('admin/plugins/summernote/summernote-bs4.min.js') }}"></script>
    <!-- overlayScrollbars -->
    <script src="{{ asset('admin/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js') }}"></script>
    <!-- AdminLTE App -->
    <script src="{{ asset('admin/dist/js/adminlte.js') }}"></script>
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src="{{ asset('admin/dist/js/pages/dashboard.js') }}"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="{{ asset('admin/dist/js/demo.js') }}"></script>
@endsection

@section('pageTitle', 'admin')
