<!-- Section: Courses -->
<section id="pembelajaran" data-bg-img="images/bg/p2.jpg">
    <div class="container">
        <div class="section-title text-center">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <h2 class="line-bottom-center mt-0">Metode Pembelajaran <span class="text-theme-color-red">Kita</span>
                    </h2>
                    <div class="title-flaticon">
                        <i class="flaticon-charity-alms"></i>
                    </div>
                    <p>Model pembelajaran sentra adalah pendekatan pembelajaran yang dalam proses pembelajarannya
                        dilakukan di dalam lingkaran (Circle Times) dan sentra bermain</p>
                </div>
                <div class="col-12">
                    <div style="width: 80%;" class="mx-auto">
                        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel" interval="15000"
                            pause="hover" style="border-radius: 5px;">
                            <!-- Indicators -->
                            <ol class="carousel-indicators">
                                <li data-target="#carousel-example-generic" data-slide-to="0" class="active">
                                </li>
                                <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                                <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                                <li data-target="#carousel-example-generic" data-slide-to="3"></li>
                                <li data-target="#carousel-example-generic" data-slide-to="4"></li>
                                <li data-target="#carousel-example-generic" data-slide-to="5"></li>
                            </ol>

                            <!-- Wrapper for slides -->
                            <div class="carousel-inner" role="listbox">
                                <div class="item active">
                                    <img src="/images/pembelajaran/sentra-persiapan.jpg" alt="TK-A">
                                </div>
                                <div class="item">
                                    <img src="/images/pembelajaran/sentra-balok.jpg" alt="TK-A">
                                </div>
                                <div class="item">
                                    <img src="/images/pembelajaran/sentra-bahan-alam.jpg" alt="TK-A">
                                </div>
                                <div class="item">
                                    <img src="/images/pembelajaran/sentra-imtaq.jpg" alt="TK-A">
                                </div>
                                <div class="item">
                                    <img src="/images/pembelajaran/sentra-bermain-peran.jpg" alt="TK-A">
                                </div>
                                <div class="item">
                                    <img src="/images/pembelajaran/sentra-seni.jpg" alt="TK-A">
                                </div>
                            </div>
                            <!-- Controls -->
                            <a class="left carousel-control" href="#carousel-example-generic" role="button"
                                data-slide="prev">
                                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="right carousel-control" href="#carousel-example-generic" role="button"
                                data-slide="next">
                                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row multi-row-clearfix">
            <div class="col-md-12">

                <div class="owl-carousel-3col" data-nav="true">

                    @foreach ($learnings as $learning)
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
                                    <p>{{ $learning->learning_desc }}</p>

                                </div>
                            </div>
                        </div>
                    @endforeach


                </div>
            </div>
        </div>
    </div>
</section>
