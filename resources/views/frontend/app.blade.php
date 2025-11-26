<!DOCTYPE html>
<html lang="en">
<head>


    {{-- include style and meta tag --}}
    @include('frontend.partials.style')
</head>

<body>

{{-- include header --}}
    @include('frontend.partials.header');

    

    {{--  dynamic  content--}}

@yield('content');



{{-- include footer --}}
@include('frontend.partials.footer');


{{-- include script --}}
@include('frontend.partials.script');
</body>
</html>