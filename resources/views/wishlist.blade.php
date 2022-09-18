
@include('inc.nav', ['num' =>$tot])
  <!-- Breadcrumb Section Begin -->
   <section class="breadcrumb-option">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb__text">
                    <h4>Favories</h4>
                    <div class="breadcrumb__links">
                        <a href="/">Acceuil</a>
                        <a href="/articles">Articles</a>
                        <span>Favories</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Breadcrumb Section End -->

<!-- Shopping Cart Section Begin -->
<section class="shopping-cart spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="shopping__cart__table">
                    <table>
                        <thead>
                            <tr>
                                <th>Article</th>
                                <th>img</th>
                                <th>Total</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                         @foreach ($wishes as $w)
                         <tr>

                            <td class="product__cart__item">
                      <h5>{{$w->name}}</h5>
                      <h6>{{$w->proper}}</h6>
                      <h6>{{$w->telProper}}</h6>
                            </td>
                            <td class="product__cart__item">
                                <div class="product__cart__item__pic">
                                    <img src="{{$w->img}}"
                                        width="200" alt="">
                                </div>
                            </td>
                            <td class="product__cart__item">
                                <h5>{{$w->prix}}</h5>
                            </td>
                            <td class="product__cart__item">
                                <a href="/supprimerWish/{{$w->id}}" class="btn btn-danger text-decoration-none">Supprimer</a>
                            </td>

                        </tr>
                         @endforeach

                        </tbody>
                    </table>
                </div>
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-6">
                        <div class="continue__btn">
                            <a class="text0decoration-none" href="/">Continuer la recherche</a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>
<!-- Shopping Cart Section End -->


@include('inc.footer')
