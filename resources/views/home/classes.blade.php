<!-- Section: home-box -->
<section>
    <div class="container">
        <div class="section-content">
            <div class="row">

                @foreach ($classes as $class)
                @php
                $color = "";
                $color2 = "";
                    if($class->id == 1){
                        $color = "red";
                        $color2 = "yellow";
                    }elseif ($class->id == 2) {
                        $color = "yellow";
                        $color2 = "sky";
                    }else{
                        $color = "sky";
                        $color2 = "red";
                    }
                @endphp

                <div class="col-sm-6 col-md-4 maxwidth500 mb-sm-40 wow fadeInUp" data-margin-top="-140px" data-wow-duration="1s" data-wow-delay="0.1s">
                    <img class="img-fullwidth" src="images/about/1.jpg" alt="">
                    <div class="bg-theme-color-{{ $color }} border-1px p-20 pt-0 mb-sm-180">
                        <h3 class="text-white mt-20">Play Group</h3>
                        <table class="text-white">
                            <tr>
                                <td>Jadwal </td>
                                <td style="width: 20px">:</td>
                                <td>{{ $class->jadwal_kelas }}</td>
                            </tr>
                            <tr>
                                <td>Jam Pembelajaran </td>
                                <td>:</td>
                                <td>{{ $class->jam_masuk . " - " . $class->jam_keluar }}</td>
                            </tr>
                        </table>
                        <a href="#" class="btn btn-sm btn-theme-color-{{ $color2 }}">Rincian Biaya</a>
                    </div>
                </div>

                @endforeach
                
        

                

            </div>
        </div>
    </div>
</section>