@extends('layout.master_2')

@section('content_2')

@include('include.navbarDetailFoto')



                                    {{-- <div  class="follow-button"
                                        data-user-id="{{ $detail->user_id }}"
                                        data-following="{{ $isFollowing ? 'true' : 'false' }}">
                                        @csrf
                                        <button type="button" class="text-sm text-biru">
                                            {{ $isFollowing ? 'Unfollow' : 'Follow' }}
                                        </button>
                                    </div> --}}

    <!-- Anime Section Begin -->
    <section class="anime-details spad">
        <div class="container">
            <div class="anime__details__content">
                <div class="row">
                    <div class="col-lg-5 mb-2">
                        <div class="anime__details__pic set-bg" data-setbg="">
                            <img class="anime__details__pic" src="{{ asset('foto/'.$data->url) }}" alt="">
                        </div>
                    </div>
                    <div class="col-lg-7">
                        <div class="anime__details__text">
                            <div class="anime__details__title">
                                <h3>{{ $data->judul_photo }}</h3>
                            </div>
                            <p>{{ $data->deskripsi }}</p>
                            <div class="anime__details__widget">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6">
                                        @if ($data->user->id == Auth::user()->id)
                                        <a href="/profil">
                                        @else
                                        <a href="/other-profil/{{$data->user->id}}">
                                        @endif
                                        {{-- <a href="/other-profil/{{$data->user->id}}"> --}}
                                        <div class="profil-1__item__pic">
                                            <img class="" src="{{ asset('profileFoto/'. $data->user->picture) }}" alt="">
                                        </div>
                                        <div class="profil-1__item__text mb-2 d-flex">
                                            <h6>{{ $data->user->username }}</h6>
                                        </a>

                                            @if ($data->user->id == Auth::user()->id)
                                                <div id="follow" class="{{ $isFollowing ? 'follow_2' : 'follow'}} follow follow-button" data-user-id="{{ $data->id_user }}"
                                                    data-following="{{ $isFollowing ? 'true' : 'false' }}">
                                                    @csrf
                                                    <button hidden  class="btn-flw" type="button">{{ $isFollowing ? 'Unfollow' : 'Follow' }}</button>
                                                </div>
                                            @else
                                                <div id="follow" class="{{ $isFollowing ? 'follow_2' : 'follow'}} follow follow-button" data-user-id="{{ $data->id_user }}"
                                                    data-following="{{ $isFollowing ? 'true' : 'false' }}">
                                                    @csrf
                                                    <button class="btn-flw" type="button">{{ $isFollowing ? 'Unfollow' : 'Follow' }}</button>
                                                </div>
                                            @endif


                                        </div>

                                        <ul class="kataLike">
                                            <li>Categories : <span>{{ $data->categories->name }}</span></li>
                                            <li>Tanggal Post : <span> {{ $data->created_at->format('d M Y') }}</span></li>
                                            <li>Like : <span id="likeCount">{{ $data->LikePhoto->count() }}</span> </li>
                                            <li>Comment : <span id="CommentCount">{{$data->Comment->count()}}</span></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="anime__details__btn mb-2">

                                <button data-liked="{{ $data->likephoto->contains('id_user', auth()->id()) ? 'true' : 'false' }}" id="likebtn" data-id="{{ $data->id }}" type="submit" class="follow-btn ">
                                    <div class="flex justify-center">
                                        <svg id="like" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-heart" viewBox="0 0 16 16">
                                            <path d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143q.09.083.176.171a3 3 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15"/>
                                        </svg>
                                        <svg id="liked" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-heart-fill" viewBox="0 0 16 16">
                                            <path fill-rule="evenodd" d="M8 1.314C12.438-3.248 23.534 4.735 8 15-7.534 4.736 3.562-3.248 8 1.314"/>
                                          </svg>

                                    </div>
                                   Like</button>


                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12 col-md-8">
                        <div class="anime__details__review">
                            <div class="section-title">
                                <h5>Comment</h5>
                            </div>


                            <div class="scroll-1">
                                <div class="scroll-2" id="commentContainer">





                        </div>
                    </div>

                </div>
                        <div class="anime__details__form">
                            <div class="section-title">
                                <h5>Your Comment</h5>
                            </div>
                            <form id="addComment">
                                @csrf
                                <input type="hidden" value="{{ $data->id }}" name="fotoID" id="fotoID">
                                <textarea name="isi_komentar" placeholder="Here..."></textarea>
                                <button type="submit"><i class="fa fa-location-arrow"></i> Send</button>
                            </form>
                        </div>

                    </div>
                </div>
            </div>
        </section>
        <!-- Anime Section End -->

        @include('include.footer')
@endsection

