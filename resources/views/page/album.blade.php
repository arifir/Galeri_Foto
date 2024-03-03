
    @extends('layout.master_2')

    @section('content_2')

    @include('include.navbarAlbum')




    <!-- Breadcrumb Begin -->
    <div class="breadcrumb-option">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="justify-betwen2 mb-1">
                        <a href="/viewEditAlbum/{{$view->id}}" class="btn btn-outline-warning py-2">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="12" fill="currentColor" class="bi bi-pencil" viewBox="0 0 16 16">
                                <path d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325"/>
                            </svg>
                        </a>
                        <a href="/delalbums/{{$view->id}}" class="btn btn-outline-danger">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash-fill" viewBox="0 0 16 16">
                                <path d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5M8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5m3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0"/>
                            </svg>
                        </a>
                    </div>
                    <div class="breadcrumb__links">
                            <a href="/profil"><i class="icon_book"></i> Album</a>
                            <span>{{$view->name}}</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb End -->


    <!-- Product Section Begin -->
    <section class="product-page spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="product__page__content">
                        <div class="product__page__title">
                            <div class="row">
                                <div class="col-lg-8 col-md-8 col-sm-6">
                                    <div class="section-title justify-betwen2">
                                        <h4>Album</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">


                            @foreach ( $albumview as $album )
                            <div class="col-lg-4 col-md-6 col-sm-6">
                                <div class="product__item">
                                    <a href="/foto-detail/{{ $album->id }}"><div class="product__item__pic set-bg" data-setbg="{{ asset('foto/'.$album->url)  }}">
                                        <div class="comment"><i class="fa fa-heart"></i> {{ $album->likephoto->count() }}</div>
                                        <div class="view"><i class="fa fa-comments"></i> {{ $album->comment->count() }}</div>
                                    </div>

                                    <div class="product__item__text">
                                        <ul>
                                            <li>{{ $album->categories->name}}</li>
                                        </ul>
                                        <h5><a href="/foto-detail/{{ $album->id }}">{{ $album->judul_photo }}</a></h5>
                                    </div>
                                    </a>
                                </div>
                            </div>

                            @endforeach

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


    @endsection
    @push('js')
    <script src="{{asset('js/explore2.js')}}"></script>
   @endpush
