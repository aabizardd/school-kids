<!-- Section: Courses -->
<section id="courses" data-bg-img="images/bg/p2.jpg">
    <div class="container">
        <div class="section-title text-center">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <h2 class="line-bottom-center mt-0">Metode Pembelajaran <span
                            class="text-theme-color-red">Kita</span></h2>
                    <div class="title-flaticon">
                        <i class="flaticon-charity-alms"></i>
                    </div>
                    <p>Model pembelajaran sentra adalah pendekatan pembelajaran yang dalam proses pembelajarannya
                        dilakukan di dalam lingkaran (Circle Times) dan sentra bermain</p>
                </div>
            </div>
        </div>
        <div class="row multi-row-clearfix">
            <div class="col-md-12">

                <div class="owl-carousel-3col" data-nav="true">

                    @foreach($learnings as $learning)

                    <div class="item">
                        <div class="campaign bg-white maxwidth500 mb-30">
                            <div class="thumb">
                                <img src="images/project/12.jpg" alt="" class="img-fullwidth">
                                <div class="campaign-overlay"></div>
                            </div>
                            <div class="course-details clearfix p-20 pt-15">

                                <h3 class="mt-0"><a class="text-theme-color-red"
                                        href="#">{{ $learning->learning_name }}</a></h3>
                                <ul class="review_text list-inline">
                                    <li>
                                        <div class="star-rating" title="Rated 5.00 out of 5"><span
                                                data-width="100%">5.00</span></div>
                                    </li>
                                </ul>
                                <p>{{$learning->learning_desc}}</p>

                            </div>
                        </div>
                    </div>

                    @endforeach


                </div>
            </div>
        </div>
    </div>
</section>