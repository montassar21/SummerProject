@include('inc.nav', ['num' =>$tot])

    <!-- About Section Begin -->
    <section class="about spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="about__pic">
                        <img src="{{ asset('mainassets/img/mom.png') }}" style="width:100%;height:50vh;" alt="">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-6">
                    <div class="about__item">
                        <h4>Qui sommes-nous ?</h4>
                        <p>Nous mettons à dispositions des Tunisiens le plus large choix d’annonces afin de leur faciliter la recherche d’un bien selon leurs critères propres, et répondre à vos besoins d'achat, de vente ou de location en toute sérénité.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6">
                    <div class="about__item">
                        <h4>Qu'est ce qu'on fait ?</h4>
                        <p>Notre mission est d’offrir à chacun de nos utilisateurs, une expérience simple et efficace afin qu’ils concrétisent leurs projets d’achat.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6">
                    <div class="about__item">
                        <h4>Nous rejoindre .</h4>
                        <p>
                            Retrouvez un large choix de locations,de ventes ou d'achats de toute la tunisie.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- About Section End -->
@include('inc.footer')
