@extends('app')

@section('mainContent')
<div id="wrapper" class="clearfix">

    @include('partials/nav')

    <!-- Content -->
    @yield('content')
    <!-- content end -->

    @include('partials/footer')

</div>
@endsection