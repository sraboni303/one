@extends('image::layouts.master')

@section('content')

<div class="container mt-5">
    <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Images</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($images as $image)
            <tr>
                <th scope="row">{{ $loop->index+1 }}</th>
                <td><img src="{{ asset($image->image) }}" height="50px" width="50px" alt=""></td>
            </tr>
          @endforeach
        </tbody>
    </table>
</div>


@endsection
