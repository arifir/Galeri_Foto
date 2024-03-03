@extends('layout.master_2')

@section('content_2')

@include('include.navbarAddFoto')

    <script src="/js/upload.js"></script>
    <script src="https://cdn.tailwindcss.com"></script>


    <!-- Section Begin -->
    <section class="anime-details spad">
        <div class="container">

            <form action="/AddPostingan" method="POST" enctype="multipart/form-data">
                @csrf
            <div class="anime__details__content">
                <div class="row">
                    <div class="col-lg-5 mb-2">


                        <div id="preview-container" class="hidden">
                            <img id="preview-image" class="anime__details__pic set-bg" alt="">
                        </div>
                        <div id="original-content" class="">
                            <img src="img/noimage.jpg" id="original-image" class="anime__details__pic set-bg" alt="">
                        </div>


                    </div>
                    <div class="col-lg-7">
                        <div class="anime__details__text">

                            <h3 class="mb-2 text-slate-400">Pilih Foto</h3>
                            <input type="file" id="choose_photo" name="url" class="mb-3 block w-full text-sm text-gray-600
                                file:mr-4 file:py-2 file:px-4
                                file:rounded-md file:border-0
                                file:text-sm file:font-semibold
                                file:bg-violet-50 file:text-gray-500
                                hover:file:bg-gray-100" onchange="previewImage(this)"/>

                                <h3 class="mb-2 text-slate-400">Judul</h3>
                                <input type="text" name="judul_photo" class="form-control mb-4" placeholder="Judul">

                                <h3 class="mb-2 text-slate-400">Deskripsi</h3>
                                <textarea class="form-control mb-3" name="deskripsi" rows="3" placeholder="Deskripsi"></textarea>

                                <h3 class="mb-2 text-slate-400">Categories</h3>
                                <select class="mb-3 w-full" aria-label="Default select example" name="id_categories">
                                    <option selected>Categories</option>
                                    @foreach ( $dataCategori as $dataCate )
                                    <option value="{{ $dataCate->id }}">{{ $dataCate->name }}</option>
                                    {{-- <option value="1">Nature</option> --}}
                                    @endforeach
                                </select>

                                <h3 class="mb-2 text-slate-400">Album</h3>
                                <select class="mb-2 w-full" aria-label="Default select example" name="id_album">

                                    <option selected value="">No Album</option>
                                    @foreach ( $dataAlbums as $album )
                                    <option value="{{ $album->id }}">{{ $album->name }}</option>
                                    @endforeach
                                </select>

                                <button  type="submit" class="btn btn-outline-success">Confirm</button>
                        </div>
                    </div>

            </form>
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
