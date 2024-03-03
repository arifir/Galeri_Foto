@extends('layout.master_2')

@section('content_2')


    @include('include.navbar')


<!-- Button trigger modal -->
<!-- <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
    Launch demo modal
  </button> -->

  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Change Password</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <div class="mb-3">
                <label for="Inputpass" class="form-label">Old Password</label>
                <input type="password" class="form-control" id="Inputpass" aria-describedby="emailHelp">
              </div>
            <div class="mb-3">
                <label for="Inputpass2" class="form-label">New Password</label>
                <input type="password" class="form-control" id="Inputpass2" aria-describedby="emailHelp">
              </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Save</button>
        </div>
      </div>
    </div>
  </div>

    <!-- Header End -->




    <!-- Hero Section Begin -->
    <section class="hero">
        <div class="container">
            <div class="hero__slider owl-carousel">
                <div class="hero__items set-bg" data-setbg="img/hero/monster.jpg">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="hero__text">
                                <div class="label">Categories</div>
                                <h2>Picture</h2>
                                <p>Sebuah boss dari salah satu game RPG</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="hero__items set-bg" data-setbg="img/hero/lighthouse.jpg">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="hero__text">
                                <div class="label">Categories</div>
                                <h2>Picture</h2>
                                <p>Mercusuar untuk penerangan daerah pesisir pantai</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="hero__items set-bg" data-setbg="img/hero/viking.jpg">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="hero__text">
                                <div class="label">Categories</div>
                                <h2>Picture</h2>
                                <p>Viking yang sedang beristirahat di tengah hujan salju</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Hero Section End -->

    <!-- Breadcrumb Begin -->
    <div class="breadcrumb-option">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb__links">
                        <a href="/home"><i class="fa fa-home"></i> Home</a>
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
                                    <div class="section-title">
                                        <h4>Postingan</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row" id="exploreData">



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
 <script src="{{asset('js/explore.js')}}"></script>
@endpush
