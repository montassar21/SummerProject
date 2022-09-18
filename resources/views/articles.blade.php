@include('inc.nav', ['num' =>$tot])
<!-- Breadcrumb Section Begin -->
    <section class="breadcrumb-option">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb__text">
                        <h4>MOM</h4>
                        <div class="breadcrumb__links">
                            <a href="/">Acceuil</a>
                            <span>Articles</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->

    <!-- Shop Section Begin -->
    <section class="shop spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="shop__sidebar">
                        <div class="shop__sidebar__search">
                            <form action="/searchArticle" method="post">
                                @csrf
                                <input type="text" placeholder="Search..." name="prod">
                                <button type="submit"><span class="icon_search"></span></button>
                            </form>
                        </div>
                        <div class="shop__sidebar__accordion">
                            <div class="accordion" id="accordionExample">
                                <div class="card">
                                    <div class="card-heading">
                                        <a data-toggle="collapse" data-target="#collapseOne">Categories</a>
                                    </div>
                                    <div id="collapseOne" class="collapse show" data-parent="#accordionExample">
                                        <div class="card-body">
                                            <div class="shop__sidebar__categories">
                                                <ul class="nice-scroll">
                                                    <li class="categorie"><a href="/article-categorie/Véhicules">Véhicules</a></li>
                                                    <li class="categorie"><a href="/article-categorie/Multimédias">Multimédias</a></li>
                                                    <li class="categorie"><a href="/article-categorie/Maison & jardin">Maison & jardin</a></li>
                                                    <li class="categorie"><a href="/article-categorie/Loisirs">Loisirs</a></li>
                                                    <li class="categorie"><a href="/article-categorie/Habillement">Habillement</a></li>
                                                    <li class="categorie"><a href="/article-categorie/Emplois">Emplois</a></li>
                                                    <li class="categorie"><a href="/article-categorie/Vacances">Vacances</a></li>
                                                    <li class="categorie"><a href="/article-categorie/publicité">publicité</a></li>
                                                    <li class="categorie"><a href="/articles">Autres</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">

                                    <div class="card-heading">
                                        <a data-toggle="collapse" data-target="#collapseOne">Ville</a>
                                    </div>
                                    <div class="card-body">
                                        <div class="shop__sidebar__categories scroll">
                                            <ul class="nice-scroll">
                                                <option></option>
                                    <li value="60c4e5c89676f6559c251f5d"><a href="/article-ville/Ariana">Ariana</a></li>
                                    <li value="60c4e5c89676f6559c251f5d"><a href="/article-ville/Bizerte">Bizerte</a></li>
                                    <li value="60c4e5c89676f6559c251f5d"><a href="/article-ville/Beja">Béja</a></li>
                                    <li value="60c4e5c89676f6559c251f5d"><a href="/article-ville/Gabes">Gabes</a></li>
                                    <li value="60c4e5c89676f6559c251f5d"><a href="/article-ville/Gafsa">Gafsa</a></li>
                                    <li value="60c4e5c89676f6559c251f5d"><a href="/article-ville/Jendouba">Jendouba</a></li>
                                    <li value="60c4e5c89676f6559c251f5d"><a href="/article-ville/Kairouan">Kairouan</a></li>
                                    <li value="60c4e5c89676f6559c251f5d"><a href="/article-ville/Kasserine">Kasserine</a></li>
                                    <li value="60c4e5c89676f6559c251f5d"><a href="/article-ville/Kebili">Kebili</a></li>
                                    <li value="60c4e5c89676f6559c251f5d"><a href="/article-ville/La Manouba">La Manouba</a></li>
                                    <li value="60c4e5c89676f6559c251f5d"><a href="/article-ville/Le Kef">Le Kef</a></li>
                                    <li value="60c4e5c89676f6559c251f5d"><a href="/article-ville/Mahdia">Mahdia</a></li>
                                    <li value="60c4e5c89676f6559c251f5d"><a href="/article-ville/Monastir">Monastir</a></li>
                                    <li value="60c4e5c89676f6559c251f5d"><a href="/article-ville/Medenine">Medenine</a></li>
                                    <li value="60c4e5c89676f6559c251f5d"><a href="/article-ville/Nabeul">Nabeul</a></li>
                                    <li value="60c4e5c89676f6559c251f5d"><a href="/article-ville/Sfax">Sfax</a></li>
                                    <li value="60c4e5c89676f6559c251f5d"><a href="/article-ville/Sidi Bouzid">Sidi Bouzid</a></li>
                                    <li value="60c4e5c89676f6559c251f5d"><a href="/article-ville/Siliana">Siliana</a></li>
                                    <li value="60c4e5c89676f6559c251f5d"><a href="/article-ville/Sousse">Sousse</a></li>
                                    <li value="60c4e5c89676f6559c251f5d"><a href="/article-ville/Tataouine">Tataouine</a></li>
                                    <li value="60c4e5c89676f6559c251f5d"><a href="/article-ville/Tozeur">Tozeur</a></li>
                                    <li value="60c4e5c89676f6559c251f5d"><a href="/article-ville/Tunis">Tunis</a></li>
                                    <li value="60c4e5c89676f6559c251f5d"><a href="/article-ville/Zaghouan">Zaghouan</a></li>
                                    <li value="60c4e5c89676f6559c251f5d"><a href="/article-ville/Autre">Autre</a></li>

                                            </ul>

                                        </div></div>
                                </div>
                                <div class="card">
                                    <div class="card-heading">
                                        <a data-toggle="collapse" data-target="#collapseSix">Prix</a>
                                    </div>
                                    <div id="collapseSix" class="collapse show" data-parent="#accordionExample">
                                        <div class="card-body">
                                            <div class="shop__sidebar__tags flex">
                                                <input class="mb-2 w-full rounded-md focus:outline-none bg-gray-200/70 text-xs  font-bold" type="number" placeholder="minimum" name="min">
                                                <input class="w-full rounded-md focus:outline-none bg-gray-200/70 text-xs  font-bold"   type="number" placeholder="maximum" name="max">

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-9">
                    <div class="shop__product__option">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <div class="shop__product__option__left">
                                    <p> 1–12 parmi 126 resultas</p>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <div class="shop__product__option__right">
                                    <p>Trier par Prix:</p>
                                    <select>
                                        <option value="">Faible à Elevé</option>
                                        <option value="">0 - 100</option>
                                        <option value="">101-1000</option>
                                        <option value="">1001-10000</option>
                                        <option value="">10001-100000</option>

                                    </select>
                                </div>
                            </div>
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
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="product__pagination">
                                <a class="active" href="#">1</a>
                                <a href="#">2</a>
                                <a href="#">3</a>
                                <span>...</span>
                                <a href="#">21</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Shop Section End -->
@include('inc.footer')
