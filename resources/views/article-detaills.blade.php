@include('inc.nav', ['num' =>$tot])

    <!-- Shop Details Section Begin -->
    @foreach ($article as  $a)
    <section class="shop-details">
        <div class="product__details__pic">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="product__details__breadcrumb">
                            <a href="/">Acceuil</a>
                            <a href="/articles">Articles</a>
                            <span>Detailes d'article</span>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <ul class="nav nav-tabs" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" data-toggle="tab" href="#tabs-1" role="tab">
                                    <div class="product__thumb__pic set-bg" data-setbg="{{$a->img1}}">
                                    </div>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#tabs-2" role="tab">
                                    <div class="product__thumb__pic set-bg" data-setbg="{{$a->img2}}">
                                    </div>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#tabs-3" role="tab">
                                    <div class="product__thumb__pic set-bg" data-setbg="{{$a->img3}}">
                                    </div>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#tabs-4" role="tab">
                                    <div class="product__thumb__pic set-bg" data-setbg="{{$a->img4}}">
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </div>
                <div class="col-lg-6 col-md-9">
                    <div class="tab-content">
                        <div class="tab-pane active" id="tabs-1" role="tabpanel">
                            <div class="product__details__pic__item">
                                <img src="{{$a->img1}}" alt="">
                            </div>
                        </div>
                        <div class="tab-pane" id="tabs-2" role="tabpanel">
                            <div class="product__details__pic__item">
                                <img src="{{$a->img}}" alt="">
                            </div>
                        </div>
                        <div class="tab-pane" id="tabs-3" role="tabpanel">
                            <div class="product__details__pic__item">
                                <img src="{{$a->img2}}" alt="">
                            </div>
                        </div>
                        <div class="tab-pane" id="tabs-4" role="tabpanel">
                            <div class="product__details__pic__item">
                                <img src="{{$a->img3}}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
        <div class="product__details__content">
            <div class="container">
                <div class="row d-flex justify-content-center">
                    <div class="col-lg-8">
                        <div class="product__details__text">
                            <h3>{{$a->name}}</h3>
                            <h4 sstyle="color:grey;">{{$a->categorie}}</h4>
                            <h3>{{$a->price}}DT</h3>
                            <p>{{$a->description}}</p>


                            <div class="product__details__btns__option">
                                <a href="/wishlist/{{$a->id}}"><i class="fa fa-heart"></i> add to wishlist</a>
                            </div>
                            <div class="product__details__last__option">
                                <h5><span>{{$a->username}}</span></h5>

                                <h3 class="mb-5">{{$a->telephone}}</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @endforeach
    <!-- Shop Details Section End -->
@include('inc.footer')
