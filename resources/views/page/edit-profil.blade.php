@extends('layout.master_2')

@section('content_2')

@include('include.navbarAddFoto')

    <script src="/js/upload.js"></script>
    <script src="https://cdn.tailwindcss.com"></script>


    <!-- Section Begin -->
    <section class="anime-details spad">
        <div class="container">

            <form action="/process-edit-profil" method="post" enctype="multipart/form-data">
            @csrf
            <div class="anime__details__content">
                <div class="row">
                    <div class="col-lg-5 mb-2">


                        <div id="preview-container" class="hidden">
                            <img id="preview-image" class="anime__details__pic_2 set-bg-2" alt="">
                        </div>
                        <div id="original-content" class="">
                            <img src="{{asset('profileFoto/'.$data->picture)}}" id="original-image" class="anime__details__pic_2 set-bg-2" alt="">
                        </div>


                    </div>
                    <div class="col-lg-7">
                        <div class="anime__details__text">

                            @if ($message = Session::get('success'))
                            <div class="alert alert-secondary bg-success col-lg-6 text-white" role="alert">
                                <i class="icon_check"></i>
                                {{ $message }}
                            </div>
                            @endif


                            <h3 class="mb-2 text-slate-400">Foto Profil</h3>
                            <input type="file" id="choose_photo" name="picture" class="mb-3 block w-full text-sm text-gray-600
                                file:mr-4 file:py-2 file:px-4
                                file:rounded-md file:border-0
                                file:text-sm file:font-semibold
                                file:bg-violet-50 file:text-gray-500
                                hover:file:bg-gray-100" onchange="previewImage(this)" value=""/>

                                <h3 class="mb-2 text-slate-400">Username</h3>
                                <input type="text" name="username" class="form-control mb-4" placeholder="" value="{{ $data->username }}">

                                <h3 class="mb-2 text-slate-400">Alamat</h3>
                                <input type="text" name="alamat" class="form-control mb-4" placeholder="Alamat" value="{{ $data->alamat }}">

                                <h3 class="mb-2 text-slate-400">Birthday</h3>
                                <input type="date" name="tgl_lahir" class="form-control mb-4" placeholder="Birthday" value="{{ $data->tgl_lahir }}">

                                <h3 class="mb-2 text-slate-400">No Telepon</h3>
                                <input type="text" name="no_telepon" class="form-control mb-4" placeholder="Nomor" value="{{ $data->no_telepon }}">

                                <h3 class="mb-2 text-slate-400">Bio</h3>
                                <textarea class="form-control mb-4" name="bio" rows="3" placeholder="Bio" value="{{ $data->bio }}"></textarea>

                                <h3 class="mb-2 text-slate-400">Jenis Kelamin</h3>
                                <select class="" aria-label="Default select example" name="jenis_kelamin">

                                    {{-- <option selected>Jenis Kelamin</option> --}}
                                    {{-- @foreach ( $data as $jk ) --}}
                                        <option selected value="{{ $data->jenis_kelamin }}">{{ $data->jenis_kelamin }}</option>
                                        <option value="Pria">Pria</option>
                                        <option value="Wanita">Wanita</option>
                                        {{-- <option value="Private">Private</option> --}}
                                    {{-- @endforeach --}}
                                </select>

                            </div>

                            <button  type="submit" class="btn btn-outline-success mx-2">Confirm</button>
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
