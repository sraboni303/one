@extends('image::layouts.master')

@section('content')

    <div class="container mt-5">

        <form action="{{ route('image.store') }}" method="post" enctype="multipart/form-data" class="dropzone" id="dropzoneForm">
            @csrf
        </form>
        <div class="text-center mt-3">
            <button type="button" class="btn btn-success" id="submit-all"> Upload Gallery</button>
        </div>

    </div>

@endsection

@section('script')

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.5.0/dropzone.js"></script>

    <script type="text/javascript">
        Dropzone.options.dropzoneForm = {
            autoProcessQueue : false,
            uploadMultiple: true,
            parallelUploads: 10,
            thumbnailHeight: 120,
            thumbnailWidth: 120,
            maxFilesize: 3,
            filesizeBase: 1000,
            addRemoveLinks: true,
            renameFile: function (file) {
                var dt = new Date();
                var time = dt.getTime();
                return time + file.name;
            },
            acceptedFiles: ".jpeg,.jpg,.png,.gif",
            init:function(){
                myDropzone = this;
                $('#submit-all').on('click', function(){
                    myDropzone.processQueue();
                });
                this.on("complete", function(){
                    if(this.getQueuedFiles().length == 0 && this.getUploadingFiles().length == 0){
                        var _this = this;
                        _this.removeAllFiles();
                        console.log()
                    }
                });
            },
            success: function (file, response) {
                console.log(response)
                window.location.href = response.url;
                // toastr.success(response.message,'Success');
            },
            error: function (file, response) {
                // toastr.success('Image upload failed','Success');
            }
        };
    </script>
@endsection
