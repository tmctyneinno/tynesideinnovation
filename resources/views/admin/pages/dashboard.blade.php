@extends('admin.adminLayout.master')
@section('title')
@lang('translation.dashboards')
@endsection
@section('content')
<body class="dashboard-topbar-wrapper">
<div class="row">
   
    <!--end col-->
</div>
<!--end row-->

<div class="row">
   
    <!--end col-->
</div>
<!--end row-->
@endsection

@section('script')
<!-- apexcharts -->
<script src="{{ URL::asset('build/libs/apexcharts/apexcharts.min.js') }}"></script>

<!-- dashboard init -->
<script src="{{ URL::asset('build/libs/list.js/list.min.js') }}"></script>
<script src="{{ URL::asset('build/js/pages/dashboard-analytics.init.js') }}"></script>
<script src="{{ URL::asset('build/js/app.js') }}"></script>
@endsection

