<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
        <link rel="stylesheet" href="{{ asset('js/dropzone.min.css') }}" />

        <title>Module Image</title>

       {{-- Laravel Mix - CSS File --}}
       {{-- <link rel="stylesheet" href="{{ mix('css/image.css') }}"> --}}

    </head>
    <body>
        @yield('content')

        {{-- Laravel Mix - JS File --}}
        {{-- <script src="{{ mix('js/image.js') }}"></script> --}}

        <script src="{{ asset('js/jquery.min.js') }}"></script>
	    <script src="{{ asset('js/popper.min.js') }}"></script>
        <script src="{{ asset('js/dropzone.min.js') }}"></script>
        @yield('script')
        <script src="{{ asset('js/custom.js') }}"></script>
    </body>
</html>
