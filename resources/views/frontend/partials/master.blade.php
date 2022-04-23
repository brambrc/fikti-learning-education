<!doctype html>
<html class="no-js" lang="en">

@include('frontend.partials.head')
<body>

    <div class="main-wrapper">

        <!-- Preloader Start  -->
        <div class="preloader">
            <div class="loader"></div>
        </div>
        <!-- Preloader End  -->
        @include('frontend.partials.navbar')
        @yield('content')
        @include('frontend.partials.footer')

    </div>

    @include('frontend.partials.script')
    @yield('script')

</body>

</html>