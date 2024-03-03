@extends('layout.master_2')

@section('content_2')

@include('include.navbarOtherProfil')

<script src="{{asset('js/follow.js')}}"></script>

    <!-- Normal Breadcrumb Begin -->
    <section class="normal-breadcrumb set-bg" data-setbg="">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <!-- <div class="normal__breadcrumb__text">
                        <h2>Search ideas you like</h2>
                        <p>Welcome to the web Fotoku</p>
                    </div> -->
                    <div class="profil-user__item__pic">
                        {{-- <img src="{{ asset('img/'. $dataku->picture) }}" alt=""> --}}
                        <img class="profil-user__item__pic" src="{{asset('profileFoto/'. $user->picture)  }}" alt="">
                        {{-- {{ asset('profileFoto/'. $dataku->picture) }} --}}
                    </div>

                    <div class="profil-name__text">
                        <h3> {{ $user->username }}</h3>
                        <h5 class="text-secondary mt-3">{{ $user->bio }}</h5>
                        <p class="mb-2"> Post {{ $photo->count() }} | Folowing {{ $following }} | Follower {{ $following }}</p>
                        {{-- <div class="follow mt-1">
                            <button href="#">Follow</button>
                        </div> --}}

                        
                        <div id="follow" class="{{ $data_follow ? 'follow_2' : 'follow'}} follow follow-button" data-user-id="{{ $user->id }}"
                            data-following="{{ $data_follow ? 'true' : 'false' }}">
                            @csrf
                            <button class="btn-flw" type="button">{{ $data_follow ? 'Unfollow' : 'Follow' }}</button>
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
            {{-- <div class="product__page__title">
                <div class="row">

                    <div class="col-lg-8 col-md-8 col-sm-6">
                        <div class="section-title">
                            <h4>Album</h4>
                        </div>
                    </div>
                </div>
            </div> --}}
            <div class="row">
                <div class="col-lg-12">
                    <div class="row">
                        {{-- Album --}}
                        {{-- <div class="scroll-3">
                            <div class="scroll-4 row">
                                <div class="col-lg-3 col-md-6 col-sm-6">
                                    <a href="foto-details.html"><div class="blog__item small__item set-bg" data-setbg="img/blog/sun_flower.jpg">
                                        <div class="blog__item__text">
                                            <h4>Sun Flower</h4>
                                        </div>
                                    </div>
                                </a>
                                </div>
                                <div class="col-lg-3 col-md-6 col-sm-6">
                                    <a href="foto-details.html"><div class="blog__item small__item set-bg" data-setbg="img/blog/sun_flower.jpg">
                                        <div class="blog__item__text">
                                            <h4>Sun Flower</h4>
                                        </div>
                                    </div>
                                </a>
                                </div>
                                <div class="col-lg-3 col-md-6 col-sm-6">
                                    <a href="foto-details.html"><div class="blog__item small__item set-bg" data-setbg="img/blog/sun_flower.jpg">
                                        <div class="blog__item__text">
                                            <h4>Sun Flower</h4>
                                        </div>
                                    </div>
                                </a>
                                </div>
                                <div class="col-lg-3 col-md-6 col-sm-6">
                                    <a href="foto-details.html"><div class="blog__item small__item set-bg" data-setbg="img/blog/sun_flower.jpg">
                                        <div class="blog__item__text">
                                            <h4>Sun Flower</h4>
                                        </div>
                                    </div>
                                </a>
                                </div>
                                <div class="col-lg-3 col-md-6 col-sm-6">
                                    <a href="foto-details.html"><div class="blog__item small__item set-bg" data-setbg="img/blog/sun_flower.jpg">
                                        <div class="blog__item__text">
                                            <h4>Sun Flower</h4>
                                        </div>
                                    </div>
                                </a>
                                </div>
                                <div class="col-lg-3 col-md-6 col-sm-6">
                                    <a href="foto-details.html"><div class="blog__item small__item set-bg" data-setbg="img/blog/sun_flower.jpg">
                                        <div class="blog__item__text">
                                            <h4>Sun Flower</h4>
                                        </div>
                                    </div>
                                </a>
                                </div>
                                <div class="col-lg-3 col-md-6 col-sm-6">
                                    <a href="foto-details.html"><div class="blog__item small__item set-bg" data-setbg="img/blog/sun_flower.jpg">
                                        <div class="blog__item__text">
                                            <h4>Sun Flower</h4>
                                        </div>
                                    </div>
                                </a>
                                </div>
                                <div class="col-lg-3 col-md-6 col-sm-6">
                                    <a href="foto-details.html"><div class="blog__item small__item set-bg" data-setbg="img/blog/sun_flower.jpg">
                                        <div class="blog__item__text">
                                            <h4>Sun Flower</h4>
                                        </div>
                                    </div>
                                </a>
                                </div>
                                <div class="col-lg-3 col-md-6 col-sm-6">
                                    <a href="foto-details.html"><div class="blog__item small__item set-bg" data-setbg="img/blog/sun_flower.jpg">
                                        <div class="blog__item__text">
                                            <h4>Sun Flower</h4>
                                        </div>
                                    </div>
                                </a>
                                </div>
                                <div class="col-lg-3 col-md-6 col-sm-6">
                                    <a href="foto-details.html"><div class="blog__item small__item set-bg" data-setbg="img/blog/sun_flower.jpg">
                                        <div class="blog__item__text">
                                            <h4>Sun Flower</h4>
                                        </div>
                                    </div>
                                </a>
                                </div>
                                <div class="col-lg-3 col-md-6 col-sm-6">
                                    <a href="foto-details.html"><div class="blog__item small__item set-bg" data-setbg="img/blog/sun_flower.jpg">
                                        <div class="blog__item__text">
                                            <h4>Sun Flower</h4>
                                        </div>
                                    </div>
                                </a>
                                </div>
                                <div class="col-lg-3 col-md-6 col-sm-6">
                                    <a href="foto-details.html"><div class="blog__item small__item set-bg" data-setbg="img/blog/sun_flower.jpg">
                                        <div class="blog__item__text">
                                            <h4>Sun Flower</h4>
                                        </div>
                                    </div>
                                </a>
                                </div>
                                <div class="col-lg-3 col-md-6 col-sm-6">
                                    <a href="foto-details.html"><div class="blog__item small__item set-bg" data-setbg="img/blog/sun_flower.jpg">
                                        <div class="blog__item__text">
                                            <h4>Sun Flower</h4>
                                        </div>
                                    </div>
                                </a>
                                </div>
                                <div class="col-lg-3 col-md-6 col-sm-6">
                                    <a href="foto-details.html"><div class="blog__item small__item set-bg" data-setbg="img/blog/sun_flower.jpg">
                                        <div class="blog__item__text">
                                            <h4>Sun Flower</h4>
                                        </div>
                                    </div>
                                </a>
                                </div>
                                <div class="col-lg-3 col-md-6 col-sm-6">
                                    <a href="foto-details.html"><div class="blog__item small__item set-bg" data-setbg="img/blog/sun_flower.jpg">
                                        <div class="blog__item__text">
                                            <h4>Sun Flower</h4>
                                        </div>
                                    </div>
                                </a>
                                </div>
                                <div class="col-lg-3 col-md-6 col-sm-6">
                                    <a href="foto-details.html"><div class="blog__item small__item set-bg" data-setbg="img/blog/sun_flower.jpg">
                                        <div class="blog__item__text">
                                            <h4>Sun Flower</h4>
                                        </div>
                                    </div>
                                </a>
                                </div>


                            </div>
                        </div> --}}
                        {{-- <div class="scroll-5">
                            <div class="scroll-6">
                                <div class="col-lg-3 col-md-6 col-sm-6">
                                    <a href="foto-details.html"><div class="blog__item small__item set-bg" data-setbg="img/blog/sun_flower.jpg">
                                        <div class="blog__item__text">
                                            <h4>Sun Flower</h4>
                                        </div>
                                    </div>
                                </a>
                                </div>
                                <div class="col-lg-3 col-md-6 col-sm-6">
                                    <a href="foto-details.html"><div class="blog__item small__item set-bg" data-setbg="img/blog/sun_flower.jpg">
                                        <div class="blog__item__text">
                                            <h4>Sun Flower</h4>
                                        </div>
                                    </div>
                                </a>
                                </div>
                                <div class="col-lg-3 col-md-6 col-sm-6">
                                    <a href="foto-details.html"><div class="blog__item small__item set-bg" data-setbg="img/blog/sun_flower.jpg">
                                        <div class="blog__item__text">
                                            <h4>Sun Flower</h4>
                                        </div>
                                    </div>
                                </a>
                                </div>
                                <div class="col-lg-3 col-md-6 col-sm-6">
                                    <a href="foto-details.html"><div class="blog__item small__item set-bg" data-setbg="img/blog/sun_flower.jpg">
                                        <div class="blog__item__text">
                                            <h4>Sun Flower</h4>
                                        </div>
                                    </div>
                                </a>
                                </div>
                                <div class="col-lg-3 col-md-6 col-sm-6">
                                    <a href="foto-details.html"><div class="blog__item small__item set-bg" data-setbg="img/blog/sun_flower.jpg">
                                        <div class="blog__item__text">
                                            <h4>Sun Flower</h4>
                                        </div>
                                    </div>
                                </a>
                                </div>
                                <div class="col-lg-3 col-md-6 col-sm-6">
                                    <a href="foto-details.html"><div class="blog__item small__item set-bg" data-setbg="img/blog/sun_flower.jpg">
                                        <div class="blog__item__text">
                                            <h4>Sun Flower</h4>
                                        </div>
                                    </div>
                                </a>
                                </div>
                                <div class="col-lg-3 col-md-6 col-sm-6">
                                    <a href="foto-details.html"><div class="blog__item small__item set-bg" data-setbg="img/blog/sun_flower.jpg">
                                        <div class="blog__item__text">
                                            <h4>Sun Flower</h4>
                                        </div>
                                    </div>
                                </a>
                                </div>
                                <div class="col-lg-3 col-md-6 col-sm-6">
                                    <a href="foto-details.html"><div class="blog__item small__item set-bg" data-setbg="img/blog/sun_flower.jpg">
                                        <div class="blog__item__text">
                                            <h4>Sun Flower</h4>
                                        </div>
                                    </div>
                                </a>
                                </div>
                                <div class="col-lg-3 col-md-6 col-sm-6">
                                    <a href="foto-details.html"><div class="blog__item small__item set-bg" data-setbg="img/blog/sun_flower.jpg">
                                        <div class="blog__item__text">
                                            <h4>Sun Flower</h4>
                                        </div>
                                    </div>
                                </a>
                                </div>
                                <div class="col-lg-3 col-md-6 col-sm-6">
                                    <a href="foto-details.html"><div class="blog__item small__item set-bg" data-setbg="img/blog/sun_flower.jpg">
                                        <div class="blog__item__text">
                                            <h4>Sun Flower</h4>
                                        </div>
                                    </div>
                                </a>
                                </div>
                                <div class="col-lg-3 col-md-6 col-sm-6">
                                    <a href="foto-details.html"><div class="blog__item small__item set-bg" data-setbg="img/blog/sun_flower.jpg">
                                        <div class="blog__item__text">
                                            <h4>Sun Flower</h4>
                                        </div>
                                    </div>
                                </a>
                                </div>
                                <div class="col-lg-3 col-md-6 col-sm-6">
                                    <a href="foto-details.html"><div class="blog__item small__item set-bg" data-setbg="img/blog/sun_flower.jpg">
                                        <div class="blog__item__text">
                                            <h4>Sun Flower</h4>
                                        </div>
                                    </div>
                                </a>
                                </div>
                                <div class="col-lg-3 col-md-6 col-sm-6">
                                    <a href="foto-details.html"><div class="blog__item small__item set-bg" data-setbg="img/blog/sun_flower.jpg">
                                        <div class="blog__item__text">
                                            <h4>Sun Flower</h4>
                                        </div>
                                    </div>
                                </a>
                                </div>
                                <div class="col-lg-3 col-md-6 col-sm-6">
                                    <a href="foto-details.html"><div class="blog__item small__item set-bg" data-setbg="img/blog/sun_flower.jpg">
                                        <div class="blog__item__text">
                                            <h4>Sun Flower</h4>
                                        </div>
                                    </div>
                                </a>
                                </div>
                                <div class="col-lg-3 col-md-6 col-sm-6">
                                    <a href="foto-details.html"><div class="blog__item small__item set-bg" data-setbg="img/blog/sun_flower.jpg">
                                        <div class="blog__item__text">
                                            <h4>Sun Flower</h4>
                                        </div>
                                    </div>
                                </a>
                                </div>
                                <div class="col-lg-3 col-md-6 col-sm-6">
                                    <a href="foto-details.html"><div class="blog__item small__item set-bg" data-setbg="img/blog/sun_flower.jpg">
                                        <div class="blog__item__text">
                                            <h4>Sun Flower</h4>
                                        </div>
                                    </div>
                                </a>
                                </div>


                            </div>
                        </div> --}}

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
                            @foreach ( $photo as $isi )
                            <div class="col-lg-4 col-md-6 col-sm-6">
                                <div class="product__item">
                                    <a href="/foto-detail/{{ $isi->id }}"><div class="product__item__pic set-bg" data-setbg="{{ asset('foto/'.$isi->url)  }}">
                                        <div class="comment"><i class="fa fa-heart"></i> {{ $isi->likephoto->count() }}</div>
                                        <div class="view"><i class="fa fa-comments"></i> {{ $isi->likephoto->count() }}</div>
                                    </div>

                                    <div class="product__item__text">
                                        <ul>
                                            <li>{{ $isi->categories->name}}</li>
                                        </ul>
                                        <h5><a href="/foto-detail/{{ $isi->id }}">{{ $isi->judul_photo }}</a></h5>
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
