@include('inc.nav', ['num' =>$tot])

    <!-- Blog Section Begin -->
    <section class="blog spad">
        <div class="container">
            <div class="row">
                @foreach ($blogs as $b)
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="blog__item">
                        <div class="blog__item__pic set-bg"
                            data-setbg="{{ asset('uploads') }}/{{$b->img}}"></div>
                        <div class="blog__item__text">
                            <span><img src="{{ asset('mainassets/img/icon/calendar.png') }}" alt="">{{$b->date}}</span>
                            <h5>{{$b->nom}}</h5>
                            <a class="text-decoration-none" href="/blogs-read">Read More</a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- Blog Section End -->
@include('inc.footer')
