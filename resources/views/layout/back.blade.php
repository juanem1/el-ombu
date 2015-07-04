@extends('app')

@section('mainContent')
<div id="wrapper" class="clearfix">

    @include('partials/nav-back')

    <!-- Content -->
    @yield('content')
    <!-- content end -->

</div>
@endsection