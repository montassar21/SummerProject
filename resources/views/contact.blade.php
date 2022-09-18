@include('inc.nav', ['num' =>$tot])

    <!-- Map Begin -->
    <div class="map">
        <iframe src="https://www.google.com/maps/d/embed?mid=1-hEVY85c4l82NLPrUz7pKZfGkTo&ehbc=2E312F" width="640" height="480"></iframe>
    </div>
    <!-- Map End -->

    <!-- Contact Section Begin -->
    <section class="contact spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <div class="contact__text">
                        <div class="section-title">
                            <span>Information</span>
                            <h2>Contactez nous</h2>
                            <p>Pour plus des informations ou reclamations n'hesitez pas de nous contacter.</p>
                        </div>
                        <ul>
                            <li>
                                <h4>Tunisie</h4>
                                <p>La Manouba, ENSI<br />+216 53 224 190</p>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="contact__form">
                        <form action="/send" method="POST">
                            @csrf
                            @if(Session::has('Error'))
                            <div class="alert alert-success">{{Session::get('Error')}}</div>
                            @endif
                            @if(Session::has('Success'))
                            <div class="alert alert-success">{{Session::get('Success')}}</div>
                                                @endif
                            <div class="row">
                                <div class="col-lg-6">
                                    <input type="text" placeholder="Nom" name="nom">
                                </div>
                                <div class="col-lg-6">
                                    <input type="text" placeholder="Email" name="email">
                                </div>
                                <div class="col-lg-12">
                                    <textarea placeholder="Message" name="text"></textarea>
                                    <button type="submit" class="site-btn">Envoyer message</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Contact Section End -->
@include('inc.footer')
