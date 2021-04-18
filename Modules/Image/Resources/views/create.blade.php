@extends('image::layouts.master')

@section('content')

    <div class="container mt-5">

        {{-- <form action="">
            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input type="text" class="form-control" id="title" name="title">
            </div>
            <div class="mb-3">
                <input type="submit" class="btn btn-success">
            </div>
        </form> --}}

        <form action="{{ route('image.store') }}" class="dropzone" id="my_dropzone" method="POST">
            @csrf
        </form>
        <div class="mb-3">
            <input type="submit" class="btn btn-success" id="submit">
        </div>

    </div>

@endsection

@section('script')
    <script>
        $("#my_dropzone").dropzone({ url: "/file/post" });
    </script>
@endsection
