<!DOCTYPE html>
<html lang="en">

@include('layouts.header')

<body>
    <!-- NAVBAR -->
    @include('layouts.navbar')

    {{-- CONTENT --}}
    @yield('content')

    <!-- FOOTER -->
    @include('layouts.footer')

    @include('layouts.script')
</body>

</html>