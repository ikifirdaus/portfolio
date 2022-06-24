<!DOCTYPE html>
<html lang="en">

@include('layouts.admin.header')

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        @include('layouts.admin.sidebar')

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                {{-- navbar --}}
                @include('layouts.admin.navbar')

                {{-- login succesfull --}}
                @yield('content')

            </div>
            <!-- End of Main Content -->

            {{-- footer --}}
            @include('layouts.admin.footer')

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    @include('layouts.admin.script')

    @yield('script')


</body>

</html>