 <!-- Header -->
 <header id="header" class="header">

     <div class="header-middle p-0 bg-lightest xs-text-center">
         <div class="container pt-0 pb-0">
             <div class="row" style="align-items: center; display: flex;">
                 <div class="col-xs-12 col-sm-4 col-md-5">
                     <div class="widget no-border m-0">
                         <a class="menuzord-brand pull-left flip xs-pull-center" href="{{ url('/') }}">
                             <img src="images/logo-sekolah.png" alt="">
                             RA Al-Hidayah Logam
                         </a>
                     </div>
                 </div>
                 <div class="col-xs-12 col-sm-4 col-md-4">
                     <div class="widget no-border pull-right sm-pull-none sm-text-center mt-10 mb-10 m-0">
                         <ul class="list-inline">
                             <li><i class="fa fa-phone-square text-theme-color-sky font-36 mt-5 sm-display-block"></i>
                             </li>
                             <li>
                                 <a href="#" class="font-12 text-black text-uppercase">Hubungi Kami!</a>
                                 <h5 class="font-14 text-theme-color-blue m-0"> 0896-5500-6310</h5>
                             </li>
                         </ul>
                     </div>
                 </div>
                 <div class="col-xs-12 col-sm-4 col-md-3">
                     <div class="widget no-border pull-right sm-pull-none sm-text-center mt-10 mb-10 m-0">
                         <ul class="list-inline">
                             <li><i class="fa fa-clock-o text-theme-color-red font-36 mt-5 sm-display-block"></i></li>
                             <li>
                                 <a href="#" class="font-12 text-black text-uppercase">Kami Terbuka!</a>
                                 <h5 class="font-13 text-theme-color-blue m-0"> Mon-Fri 8:00-16:00</h5>
                             </li>
                         </ul>
                     </div>
                 </div>
             </div>
         </div>
     </div>
     <div class="header-nav">
         <div class="header-nav-wrapper navbar-scrolltofixed bg-theme-color-red border-bottom-theme-color-sky-2px">
             <div class="container">
                 <nav id="menuzord" class="menuzord bg-theme-colored pull-left flip menuzord-responsive">
                     <ul class="menuzord-menu {{ Request::segment(1) === null ? 'onepage-nav' : '' }}">
                         <li class="{{ Request::segment(1) === null ? 'active' : '' }}"><a
                                 href="{{ url('/') }}#home">Beranda</a></li>
                         <li><a href="{{ url('/') }}#tentang">Tentang</a></li>
                         <li><a href="{{ url('/') }}#kurikulum">Kurikulum</a></li>
                         <li><a href="{{ url('/') }}#pembelajaran">Metode Pembelajaran</a></li>
                         <li><a href="{{ url('/') }}#activities">Aktivitas</a></li>
                         <li><a href="{{ url('/') }}#gallery">Galeri</a></li>
                     </ul>
                     <ul class="pull-right flip hidden-sm hidden-xs">
                         <li>
                             <!-- Modal: Book Now Starts -->
                             <a class="btn btn-colored btn-flat bg-theme-color-sky text-white font-14 mt-0 p-25 pr-15 pl-15"
                                 href="/pendaftaran">Daftar Siswa</a>
                             <!-- Modal: Book Now End -->
                         </li>
                     </ul>
                     <div id="top-search-bar" class="collapse">
                         <div class="container">
                             <form role="search" action="#" class="search_form_top" method="get">
                                 <input type="text" placeholder="Type text and press Enter..." name="s"
                                     class="form-control" autocomplete="off">
                                 <span class="search-close"><i class="fa fa-search"></i></span>
                             </form>
                         </div>
                     </div>
                 </nav>
             </div>
         </div>
     </div>
 </header>
