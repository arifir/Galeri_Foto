@extends('layout.master_2')

@section('content_2')

@include('include.navbarProfil')



    <!-- Normal Breadcrumb Begin -->
    <section class="normal-breadcrumb set-bg" data-setbg="">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <!-- <div class="normal__breadcrumb__text">
                        <h2>Search ideas you like</h2>
                        <p>Welcome to the web Fotoku</p>
                    </div> -->
                    <div class="profil-user__item__pic ">
                        <img class="profil-user__item__pic" src="{{ asset('profileFoto/'. $dataku->picture) }}" alt="">
                    </div>

                    <div class="profil-name__text">
                        <h3>{{ $data->username }}</h3>
                        <h5 class="text-secondary mt-3">{{ $data->bio }}</h5>
                        <p class="mb-2"> Post {{ $dataPost->count() }} |<a href="/viewFollowing/{{ $data->id }}" class="no-underline text-white"> Following  {{ $following }} </a>|<a href="/viewFollowers/{{ $data->id }}" class="no-underline text-white"> Followers {{ $followers }} </a></p>
                        {{-- <p class="mb-2"> Post {{ $dataPost->count() }} |<a href="/viewFollowing/" class="no-underline text-white"> Following  {{ $following }} </a>| Followers {{ $followers }}</p> --}}
                        <div class="edit_profil_btn">
                            <a href="/edit-profil" class="edit_profil_btn">Edit</a>
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </section>
    <!-- Normal Breadcrumb End -->

    <!-- Blog Section Begin -->
    <section class="blog spad">
        <div class="container">
            <div class="product__page__title">
                <div class="row">

                    <div class="col-lg-8 col-md-8 col-sm-6">
                        <div class="section-title">
                            <h4>Album</h4>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="row">
                        {{-- Album --}}
                        <div class="scroll-5">
                            <div class="scroll-6">
                                {{-- <div class="col-lg-3 col-md-6 col-sm-6">
                                    <a href="/albums/{{ $album->id }}"><div class="blog__item small__item set-bg" data-setbg="img/blog/art_practice.jpg">
                                        <div class="blog__item__text">
                                            <h4>Sun Flower</h4>
                                        </div>
                                    </div>
                                </a>
                                </div> --}}
                                {{-- <a href="/albums/{{ $album->id }}" class="blog__item small__item col-lg-4 col-md-6 col-sm-6">
                                <div class="blog__item small__item set-bg col-lg-12 col-md-6 col-sm-6" data-setbg="{{ asset('album/'.$album->cover)  }}">
                                            <div class="blog__item__text">
                                                <h4 class="text-shadow-sm">{{ $album->name }}</h4>
                                            </div>
                                        </div>
                                    </a> --}}
                                @foreach ($albums as $album)
                                    <a href="/albums/{{ $album->id }}">
                                    <div class="col-lg-3 col-md-6 col-sm-6">
                                            <div class="blog__item small__item set-bg" data-setbg="">
                                                <img src="{{ asset('album/'.$album->cover)  }}" class="blog__item small__item" alt="">
                                                <div class="blog__item__text">
                                                 <h4>{{ $album->name }}</h4>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                @endforeach




                            </div>
                        </div>

                        {{-- End Album --}}
                        <div class="col-lg-12 col-md-8 col-sm-6 mt-3">
                            <div class="section-title">
                                <h4>Postingan</h4>
                            </div>
                        </div>
                        {{-- Foto --}}
                        {{-- <div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="product__item">
                                <a href="foto-details.html"><div class="product__item__pic set-bg" data-setbg="img/blog/sun_flower.jpg">
                                    <div class="comment"><i class="fa fa-heart"></i> 100</div>
                                    <div class="view"><i class="fa fa-comments"></i> 30</div>
                                </div>
                            </a>
                                <div class="product__item__text">
                                    <ul>
                                        <li>Categories</li>
                                    </ul>
                                    <h5><a href="#">Judul / Lorem, ipsum dolor.</a></h5>
                                </div>
                            </div>
                        </div> --}}
                        {{-- <div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="product__item">
                                <a href="/foto-detail/{{ $isi->id }}"><div class="product__item__pic set-bg" data-setbg="{{ asset('foto/'.$isi->url)  }}">
                                    <div class="justify-betwen2">
                                        <a href="#" class="btn btn-outline-warning">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil" viewBox="0 0 16 16">
                                                <path d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325"/>
                                            </svg>
                                        </a>
                                        <a href="/delete/{{$isi->id}}" class="btn btn-outline-danger">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash-fill" viewBox="0 0 16 16">
                                                <path d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5M8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5m3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0"/>
                                              </svg>
                                        </a>
                                    </div>
                                    <div class="comment"><i class="fa fa-heart"></i> {{ $isi->likephoto->count() }}</div>
                                    <div class="view"><i class="fa fa-comments"></i> {{ $isi->comment->count() }}</div>
                                </div>

                                <div class="product__item__text">
                                    <ul>
                                        <li>{{ $isi->categories->name}}</li>
                                    </ul>
                                    <h5><a href="/foto-detail/{{ $isi->id }}">{{ $isi->judul_photo }}</a></h5>
                                </div>
                                </a>
                            </div>
                        </div> --}}
                        {{-- <div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="product__item">
                                <a href="/foto-detail/ ${x.id}"><div class="product__item__pic set-bg">
                                    <img src="/foto/${x.url}" class="product__item__pic set-bg">
                                    <div id="likeCount" class="comment"><i class="fa fa-heart"></i> ${x.likephoto_count}</div>
                                    <div class="view"><i class="fa fa-comments"></i> 30</div>
                                </div>

                                <div class="product__item__text">
                                    <ul>
                                        <li>${x.categories.name}</li>
                                    </ul>
                                    <h5><a href="/foto-detail/{{ $isi->id }}"> ${x.judul_photo}</a></h5>
                                </div>
                                </a>
                            </div>
                        </div> --}}
                            @foreach ( $dataPost as $isi )

                            <div class="col-lg-4 col-md-6 col-sm-6">
                                <div class="product__item">
                                    <a href="/foto-detail/{{$isi->id}}"><div class="product__item__pic set-bg">
                                        <img src="{{ asset('foto/'.$isi->url)  }}" class="product__item__pic set-bg">
                                        <div class="ep">
                                            <div class="justify-betwen2">
                                                <a href="/edit-foto/{{$isi->id}}" class="btn btn-outline-warning py-2">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="12" fill="currentColor" class="bi bi-pencil" viewBox="0 0 16 16">
                                                        <path d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325"/>
                                                    </svg>
                                                </a>
                                                <a href="/delete/{{$isi->id}}" class="btn btn-outline-danger">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash-fill" viewBox="0 0 16 16">
                                                        <path d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5M8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5m3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0"/>
                                                    </svg>
                                                </a>
                                            </div>
                                        </div>
                                        <div id="likeCount" class="comment"><i class="fa fa-heart"></i> {{ $isi->likephoto->count() }}</div>
                                        <div class="view"><i class="fa fa-comments"></i> {{ $isi->comment->count() }}</div>
                                    </div>

                                    <div class="product__item__text">
                                        <ul>
                                            <li>{{ $isi->categories->name}}</li>
                                        </ul>
                                        <h5><a href="/foto-detail/{{ $isi->id }}"> {{ $isi->judul_photo }}</a></h5>
                                    </div>
                                    </a>
                                </div>
                            </div>

                            @endforeach


                        <!-- foto end -->

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Blog Section End -->
    @include('include.footer')
@endsection
