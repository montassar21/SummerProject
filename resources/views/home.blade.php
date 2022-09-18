@include('inc.nav', ['num' =>$tot])

    <!-- Hero Section Begin -->

    <section class="hero">
        <div class="my-5 text-center">
            <h1 class="display-4 fw-bold">A votre service</h1>
            <div class="col-lg-6 mx-auto">
              <p class="lead mb-4 text-white">Nous mettons à dispositions des Tunisiens le plus large choix d’annonces afin de leur faciliter la recherche d’un bien selon leurs critères propres, et répondre à vos besoins d'achat, de vente ou de location en toute sérénité.</p>
              <div class="d-grid gap-2 d-sm-flex justify-content-sm-center mb-5">
                <a class="btn btn-dark btn-lg px-4 me-sm-3 text-white" type="button" data-bs-toggle="modal" data-bs-target="#verticallyCentered">Rechercher</a>
                <button type="button" class="btn btn-outline-secondary btn-lg px-4"><a class="text-decoration-none text-secondary" href="/publier">Publier une annonce</a></button>
              </div>
            </div>
            <div class="overflow-hidden" style="max-height: 30vh;">
            </div>
          </div>
    </section>
    <!-- Hero Section End -->
    <!-- Banner Section Begin -->
    <div class="carousel slide" id="carouselExampleCaptions" data-ride="carousel">
        <section class="m-5">
            <div class="col-lg-12">
                <div class="section-title">
                    <h2>A la une</h2>
                </div>
            </div>
            <div class="container">
                        <div class="carousel-inner rounded-1 light">
            @foreach($alaune as $index=> $an)
            @if($index==0)
            <div class="carousel-item active" style="height:80vh;">
                <img class="d-flex w-100 h-100" src="{{$an->img}}" alt="First slide" style="">
                <div class="carousel-caption d-none d-md-block">
                  <h2 class="text-white">{{$an->name}}</h2>
                  <a class="text-decoration-none text-white font-weight-bold" href="/details/{{$an->id}}">More details</a>
                </div>
                <div class="carousel-indicators pt-3">
                    <button class="active" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
                  </div>
              </div>
            @elseif($index==1)
            <div class="carousel-item" style="height:80vh;">
                <img class="d-flex w-100 h-100" src="{{$an->img}}" alt="First slide">
                <div class="carousel-caption d-none d-md-block">
                  <h2 class="text-white">{{$an->name}}</h2>
                  <a class="text-decoration-none text-white" href="/details/{{$an->id}}">More details</a>
                </div>
                <div class="carousel-indicators mt-3">
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" aria-current="true" aria-label="Slide 1"></button>
                    <button class="active"  type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
                  </div>
              </div>
            @elseif($index==2)
            <div class="carousel-item" style="height:80vh;">
                <img class="d-block w-100 h-100" src="{{$an->img}}" alt="First slide">
                <div class="carousel-caption d-none d-md-block">
                  <h2 class="text-gray">{{$an->name}}</h2>
                  <a class="text-decoration-none text-dark" href="/details/{{$an->id}}">More details</a>
                </div>
                <div class="carousel-indicators mt-3">
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" aria-current="true" aria-label="Slide 1"></button>
                    <button  type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button class="active" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
                  </div>
              </div>
            @endif
       @endforeach
       <button class="carousel-control-prev bg-dark" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </button>
      <button class="carousel-control-next bg-dark" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </button>
        </div>
      </div>

        </section>
      <!-- Banner Section End -->

    <!-- Product Section Begin -->
    <section class="product spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <ul class="filter__controls">
                        <li data-filter=".new-arrivals">Toutes les annonces</li>
                    </ul>
                </div>
            </div>
            <div class="row">
                @foreach ($annonces as $annonce)
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="product__item">
                        <div class="product__item__pic set-bg" data-setbg="{{$annonce->img}}">
                            <ul class="product__hover">
                                <li><a href="/wishlist/{{$annonce->id}}"><img src="{{asset('mainassets/img/icon/heart.png')}}" alt=""></a></li>
                                            </ul>
                        </div>
                        <div class="product__item__text">
                            <h6><strong>{{$annonce->name}}</strong></h6>
                            <h6>{{$annonce->categorie}}</h6>
                            <a href="/details/{{$annonce->id}}" class="add-cart">+ plus des details</a>
                            <h5>{{$annonce->price}}DT</h5>

                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div >
                        {{$annonces->links()}}

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Product Section End -->
    <!-- Instagram Section Begin -->
    <section class="instagram spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="instagram__pic">
                        <div class="instagram__pic__item set-bg"
                            data-setbg="{{ asset('mainassets/img/instagram/instagram-1.jpg') }}"></div>
                        <div class="instagram__pic__item set-bg"
                            data-setbg="{{ asset('mainassets/img/instagram/instagram-2.jpg') }}"></div>
                        <div class="instagram__pic__item set-bg"
                            data-setbg="{{ asset('mainassets/img/instagram/instagram-3.jpg') }}"></div>
                        <div class="instagram__pic__item set-bg"
                            data-setbg="{{ asset('mainassets/img/instagram/instagram-4.jpg') }}"></div>
                        <div class="instagram__pic__item set-bg"
                            data-setbg="{{ asset('mainassets/img/instagram/instagram-5.jpg') }}"></div>
                        <div class="instagram__pic__item set-bg"
                            data-setbg="{{ asset('mainassets/img/instagram/instagram-6.jpg') }}"></div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="instagram__text">
                        <h2>Instagram</h2>
                        <p style="font-size: 19px">Rejoignez-nous sur instagram pour plus des actualités et nouuveautés .</p>
                        <h3>#MOM</h3>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Instagram Section End -->

    <!-- Latest Blog Section Begin -->
    <section class="latest spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <span>Actualités</span>
                        <h2>Nouveautés</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                @foreach ($blogs as $b)
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="blog__item">
                        <div class="blog__item__pic set-bg"
                            data-setbg="{{ asset('uploads') }}/{{$b->img}}"></div>
                        <div class="blog__item__text">
                            <span><img src="{{ asset('mainassets/img/icon/calendar.png') }}" alt="">{{$b->date}}</span>
                            <h5>{{$b->nom}}</h5>
                            <a class="text-decoration-none" href="/blogs-read/{{$b->id}}">Read More</a>
                        </div>
                    </div>
                </div>
                @endforeach

            </div>
        </div>
    </section>
    <!-- Latest Blog Section End -->
 @include('inc.footer')
