@extends('layout.master_2')

@section('content_2')

@include('include.navbarAddFoto')

    <script src="/js/upload.js"></script>
    <script src="https://cdn.tailwindcss.com"></script>


    <!-- Section Begin -->
    <section class="anime-details spad">
        <div class="container">

            <form action="/editAlbum/{{$data->id}}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="anime__details__content">
                <div class="row">
                    <div class="col-lg-5 mb-2">


                        <div id="preview-container" class="hidden">
                            <img id="preview-image" class="anime__details__pic set-bg" alt="">
                        </div>
                        <div id="original-content" class="">
                            <img src="{{ asset('album/'.$data->cover)  }}" id="original-image" class="anime__details__pic set-bg" alt="">
                        </div>


                    </div>
                    <div class="col-lg-7">
                        <div class="anime__details__text">

                            <h3 class="mb-2 text-slate-400">Cover</h3>
                            <input type="file" id="choose_photo" name="cover" class="mb-3 block w-full text-sm text-gray-600
                                file:mr-4 file:py-2 file:px-4
                                file:rounded-md file:border-0
                                file:text-sm file:font-semibold
                                file:bg-violet-50 file:text-gray-500
                                hover:file:bg-gray-100" onchange="previewImage(this)" value=""/>

                                <h3 class="mb-2 text-slate-400">Nama</h3>
                                <input type="text" name="name" class="form-control mb-4" placeholder="" value="{{ $data->name }}">

                                <h3 class="mb-2 text-slate-400">Deskripsi</h3>
                                <textarea class="form-control mb-4" name="deskripsi" rows="3" placeholder="Deskripsi" >{{$data->deskripsi}}</textarea>

                            </div>

                            <button  type="submit" class="btn btn-outline-success">Confirm</button>
                        </form>
                        </div>
                    </div>
                </div>

            </div>
        </section>
        <!-- Section End -->

        <script>
            document.getElementById("choose_photo").addEventListener("change", function(e){
                var output_image = document.getElementById("output_image");
                var reader = new FileReader();
                reader.onload = function(){
                    output_image.classList.remove('display-none-image-upload');
                    var output = document.getElementById('output_image');
                    output.src = reader.result;
                }
                reader.readAsDataURL(e.target.files[0]);
            });
        </script>
@include('include.footer')
@endsection
