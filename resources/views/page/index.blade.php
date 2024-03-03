    @extends('layout.master_2')

    @section('content_2')

    @include('include.navbarguest')

    <!-- Normal Breadcrumb Begin -->
    <section class="normal-breadcrumb set-bg" data-setbg="img/hero/anime_wallpaper.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="normal__breadcrumb__text">
                        <h2>Upload your foto</h2>
                        <p>Welcome to the web Fotoku</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Normal Breadcrumb End -->

    <!-- Product Section Begin -->
    <section class="product-page spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="product__page__content">
                        <div class="product__page__title">
                            <div class="row">
                                <div class="col-lg-8 col-md-8 col-sm-6">
                                    <div class="section-title">
                                        <h4>Postingan</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row" id="exploreData">


                            {{-- @foreach ( $data as $isi )
                            <div class="col-lg-4 col-md-6 col-sm-6">
                                <div class="product__item">
                                    <a href="/foto-detail/{{ $isi->id }}"><div class="product__item__pic set-bg" data-setbg="{{ asset('foto/'.$isi->url)  }}">
                                        <div class="comment"><i class="fa fa-heart"></i> 22</div>
                                        <div class="view"><i class="fa fa-comments"></i> 30</div>
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

                            @endforeach --}}


                        </div>
                    </div>
                </div>


</div>
</div>
</section>
<!-- Product Section End -->
@include('include.footer')
    @endsection
    @push('js')
    <script src="{{asset('js/explore2.js')}}"></script>
   @endpush
