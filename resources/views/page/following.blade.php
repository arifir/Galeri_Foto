@extends('layout.master_2')

@section('content_2')

@include('include.navbarOtherProfil')

<li href="{{ asset('css/style.css') }}"></li>
<link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css" rel="stylesheet" />

<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>


    <!-- Blog Section Begin -->
    <section class="blog spad">
        <div class="container">
            <div class="row">
                        {{-- End Album --}}
                        <div class="col-lg-12 col-md-8 col-sm-6 mt-3">
                            <div class="section-title">
                                <h4>Following</h4>
                            </div>
                        </div>
                        {{-- Foto --}}
                        <div class="col-lg-12 col-md-6 col-sm-6">

                            <ul class="list-group">
                                @foreach ($followings as $following)
                                <li class="list-group-item gelap text-white d-flex justify-content-between">
                                    <div>
                                        <div class="anime__review__item_3">
                                            <a href="/other-profil/{{$following->following->id}}">
                                        <div class="anime__review__item__pic_3 d-flex">
                                            <img src="{{ asset('profileFoto/'. $following->following->picture) }}" alt="">
                                            <div class="my-auto ml-3">
                                                <h6 class="anime__review__item__text_3">{{ $following->following->username }}</h6>
                                            </div>
                                        </div>
                                            </a>
                                        <div class="anime__review__item__text_3 mb-2">
                                        </div>
                                    </div>
                                </div>
                                    <div class="hidden my-auto">
                                        {{-- <button class="">Follow</button> --}}
                                </div>


                                <div id="follow" class="{{ $following->following->id ? 'follow_2' : 'follow' }} follow follow-button my-auto" data-user-id="{{ $following->following->id }}"
                                    data-following="{{ $following->following->id ? 'true' : 'false' }}">
                                    @csrf
                                    <button class="btn-flw" type="button">{{ $following->following->id ? 'Unfollow' : 'Follow' }}</button>
                                </div>



                                    {{-- <div id="follow" class="{{ $data_follow ? 'follow_2' : 'follow' }} follow follow-button my-auto" data-user-id="{{ $user->id }}"
                                        data-following="{{ $data_follow ? 'true' : 'false' }}">
                                        @csrf
                                        <button class="btn-flw" type="button">{{ $data_follow ? 'Unfollow' : 'Follow' }}</button>
                                    </div> --}}


                                </li>
                                @endforeach
                            </ul>
                        </div>
                        <!-- foto end -->

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Blog Section End -->
    {{-- @include('include.footer') --}}
@endsection
