<!doctype html>
<html lang="en-US">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">

    <!-- Custom Css -->
    <link rel="stylesheet" href="<?php echo base_url('admintemplate/dist_view/css/style.css')?>" type="text/css" />

    <!-- Ionic icons -->
    <link href="https://unpkg.com/ionicons@4.2.0/dist/css/ionicons.min.css" rel="stylesheet">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900" rel="stylesheet">

    <title>Phinemo Merchant : Landing Page</title>
  </head>

  <body>

  <!-- NAVBAR -->
  <nav class="navbar navbar-default navbar-expand-lg fixed-top custom-navbar">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="icon ion-md-menu"></span>
    </button>
    <img src="<?php echo base_url('admintemplate/dist_view/img/phinemo.png')?>" width="200" height="35" class="img-fluid nav-logo-mobile" alt="Company Logo">
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <div class="container">
      	<img src="<?php echo base_url('admintemplate/dist_view/img/phinemo.png')?>" width="200" height="35" class="img-fluid nav-logo-desktop" alt="Company Logo">
        <ul class="navbar-nav ml-auto nav-right" data-easing="easeInOutExpo" data-speed="1250" data-offset="65">
          <li class="nav-item nav-custom-link btn btn-demo-small ">
            <a class="nav-link" href="<?php echo base_url()?>">Home <i class="icon ion-ios-arrow-forward icon-mobile"></i></a>
          </li>
          <li class="nav-item nav-custom-link">
            <a class="nav-link" href="#marketing">About <i class="icon ion-ios-arrow-forward icon-mobile"></i></a>
          </li>
          <li class="nav-item nav-custom-link">
            <a class="nav-link" href="#hero">Offers <i class="icon ion-ios-arrow-forward icon-mobile"></i></a>
          </li>
          <li class="nav-item nav-custom-link">
            <a class="nav-link" href="#testimonials">Features <i class="icon ion-ios-arrow-forward icon-mobile"></i></a>
          </li>
          <li class="nav-item nav-custom-link">
              <a class="nav-link" href="#profits">Profits <i class="icon ion-ios-arrow-forward icon-mobile"></i></a>
            </li>
            <li class="nav-item nav-custom-link">
                <a class="nav-link" href="#pricing">Pricing <i class="icon ion-ios-arrow-forward icon-mobile"></i></a>
              </li>
          <!-- <li class="nav-item nav-custom-link btn btn-demo-small">
            <a class="nav-link" href="#">Profits <i class="icon ion-ios-arrow-forward icon-mobile"></i></a>
          </li> -->
        </ul>
      </div>
    </div>
  </nav>
  <!-- END NAVBAR -->
  

    <!-- ABOUT -->
    <section id="marketing" style="padding-bottom:30px; background-color:#f6f8f9;">
        <div class="">
          <div class="row">
            <!-- <div class="col-md-5">
              <div class="content-box">
                <span>Organic Search Report</span>
                <h2>Search Insights</h2>
                <p>Grow your search traffic, research your competitors keywords and monitor your ranking in real time.</p>
                <a href="#" class="btn btn-regular">Start Free Trial</a>
              </div>
            </div> -->
            <div class="col-md-12 col-s-12 col-xs-12">
                <div class="text-center">
                    <img src="<?php echo base_url('admintemplate/dist_view/img/logo.jpg')?>" class="img-fluid" alt="Phinemo Merchant" width="200" style="max-width:100%;">
                    <h6>PHINEMO MERCHANT</h6>
                </div>
                
                <div class="text-center container content-box col-md-9">
                  <h1>Solusi Marketing Untuk Tour Operator</h1>
                  <br>
                  <h4><b>Tingkatkan penjualan produk tour anda melalui solusi integrated marketing dari Phinemo.</b></h4>
                  <p class="text-center" style="color:black" > Promosi kami lakukan secara digital guna menarik pelanggan baru dan meningkatkan
                      penjualan Anda. Misi kami adalah memberikan pemasaran digital yang
                      menguntungkan serta meningkatkan kesadaran masyarakat akan brand anda
                      menggunakan kehalian dan sumber daya kami.</p>
                </div>
            </div>
            
          </div>
        </div>
      </section>
    <!-- END ABOUT -->

    <!-- OFFERS -->
    <section id="hero" style="padding-top:0px; background-color:white;">
        <div class="container">
          <div class="row">

            <div class="col-md-7 content-box hero-content" style="padding-bottom:10px; margin-top:30px;">
              <h3 style="font-size:30px;"><b>Mengarahkan pengunjung kami ke Penawaran Produk Anda menggunakan Phinemo Marketing Solution</b></h3>
            </div>
            <div class="col-md-12 d-flex bd-highlight justify-content-md-center">
              <div class="col-md-4 p-2 flex-fill bd-highlight">
                  <img src="<?php echo base_url('admintemplate/dist_view/img/penawaran1.svg')?>" width="128" alt="" style="padding-bottom:10px;">
                  <h5><b>Dapatkan Lebih Banyak Pelanggan</b></h5><br>
                  <h5>Jangkau banyak pembaca dan dapatkan lead secara langsung
                      menuju website atau menghubungi Anda secara langsung</h5>
              </div>
              <div class="col-md-4 p-2 flex-fill bd-highlight">
                  <img src="<?php echo base_url('admintemplate/dist_view/img/penawaran2.svg')?>" width="128" alt="" style="padding-bottom:10px;">
                  <h5><b>Tingkatkan Eksposur Anda</b></h5><br>
                  <h5>Klaim Halaman Bisnis Anda untuk terhubung dengan pelanggan yang
                      mencari paket tour milik Anda</h5>
              </div>
              <div class="col-md-4 p-2 flex-fill bd-highlight">
                  <img src="<?php echo base_url('admintemplate/dist_view/img/penawaran3.svg')?>" width="128" alt="" style="padding-bottom:10px;">
                  <h5><b>Mendorong Kesadaran Merek</b></h5><br>
                  <h5>Bangun merek Anda dan tingkatkan penjualan dengan
                      kampanye pemasaran yang sesuai untuk Anda</h5>
              </div>
            </div>

          </div>
        </div>
    </section>
    <!-- END OFFERS -->

    <!-- FEATURES -->
    <section id="testimonials">
          <div class="container">
            <div class="row justify-content-md-center">

                <div class="col-md-12 d-flex bd-highlight">
                    <div class="col-md-4  p-2 flex-fill bd-highlight">
                        <img src="<?php echo base_url('admintemplate/dist_view/img/fitur1.svg')?>" width="100" height="100" alt="" style="padding-bottom:10px;">
                        <h4>Tour listing</h4> 
                        <p>List Produk Tour untuk
                            mempermudah traveler mencari
                            produk yang sesuai</p>
                    </div>
                    <div class="col-md-4  p-2 flex-fill bd-highlight">
                        <img src="<?php echo base_url('admintemplate/dist_view/img/fitur2.svg')?>" width="100" height="100" alt="" style="padding-bottom:10px;">
                         <h4>Filter Search</h4>
                         <p>Mempermudah mencari produk
                            berdasarkan harga, kategori dan
                            waktu</p>
                    </div>
                    <div class="col-md-4  p-2 flex-fill bd-highlight">
                           <img src="<?php echo base_url('admintemplate/dist_view/img/fitur3.svg')?>" width="100" height="100" alt="" style="padding-bottom:10px;">
                           <h4>Custome Content</h4>
                           <p>Fitur promosi melalui konten soft
                              selling untuk produk Anda di
                              Phinemo.com.</p>
                    </div>
                </div>
      
                <div class="col-md-12 d-flex bd-highlight">
                    <div class="col-md-4  p-2 flex-fill bd-highlight">
                        <img src="<?php echo base_url('admintemplate/dist_view/img/fitur4.svg')?>" width="100" height="100" alt="" style="padding-bottom:10px;">
                        <h4>Creative Banner</h4> 
                        <p>Iklan banner promo dengan link yang
                            khusus diarahkan ke produk Anda</p>
                    </div>
                    <div class="col-md-4  p-2 flex-fill bd-highlight">
                         <img src="<?php echo base_url('admintemplate/dist_view/img/fitur5.svg')?>" width="100" height="100" alt="" style="padding-bottom:10px;">
                         <h4>Bussiness Page</h4>
                         <p>Halaman khusus yang berisi produk
                            Anda dan dilengkapi dengan
                            informasi dasar Bisnis Anda</p>
                    </div>
                    <div class="col-md-4  p-2 flex-fill bd-highlight">
                           <img src="<?php echo base_url('admintemplate/dist_view/img/fitur6.svg')?>" width="100" height="100" alt="" style="padding-bottom:10px;">
                           <h4>Digital Campaign Program</h4>
                           <p>Promosi digital yang dilakukan
                              Phinemo untuk memaksimal
                              penjualan produk–produk Anda</p>
                    </div>
                </div>

            </div>
          </div>
    </section>
    <!-- END FEATURES-->

  <!-- PROFITS -->
  <section id="profits">
    <div class="container">
      <div class="row justify-content-md-center">
          
          <div class="col-md-4">
              <img src="<?php echo base_url('admintemplate/dist_view/img/keuntungan1.svg')?>" alt="" style="padding-bottom:10px;">
              <h5><b>Konsultasi Pribadi</b></h5><br>
              <h5>Kami mendukung dalam
                  merancang kampanye pemasaran
                  untuk memenuhi kebutuhan
                  promosi produk Anda.</h5>
          </div>
          
          <div class="col-md-4">
              <img src="<?php echo base_url('admintemplate/dist_view/img/keuntungan2.svg')?>" width="128" height="138" style="padding-bottom:10px;">
              <h5><b>Tidak Ada Biaya Administrasi</b></h5><br>
              <h5>Gunakan fitur mulai dari nol rupiah
                  namun tidak mengurangi potensi
                  untuk meningkatkan penjualan
                  produk Anda.</h5>
          </div>

          <div class="col-md-4">
              <img src="<?php echo base_url('admintemplate/dist_view/img/keuntungan3.svg')?>" width="128" height="138" alt="" style="padding-bottom:10px;">
              <h5><b>Penjualan dan Pelanggan Baru</b></h5><br>
              <h5>Pembaca kami lebih memilih
                  mengeluarkan bujet untuk traveling
                  dari pada yang lain serta selalu
                  merekomendasikan pengalaman
                  meraka kepada teman</h5>
            </div>

        
      </div>
    </div>
  </section>
  <!-- END PROFITS -->

  <!-- PRICING-->
  <section id="pricing" style="padding-top:60px; background-color:#f6f8f9;">
        <div class="container">
          <div class="row">

            <div class="col-md-6">
              <div class="pricing-box">
                <h3 class="text-center"><b>PAKET BASIC</b></h3>
                <h2 class="text-center">IDR 500.000/bulan</h2>
                <div class="divider-light"></div>
                <ul>
                  <li><i class="icon ion-md-checkmark-circle-outline"></i>50 List Produk Tour</li>
                  <li><i class="icon ion-md-checkmark-circle-outline"></i>2.000 Views Creative Banner</li>
                  <li><i class="icon ion-md-checkmark-circle-outline"></i>Free Digital Campaign Program By Phinemo</li>
                  <li><i class="icon "></i></li>
                  <li><i class="icon "></i></li>
                </ul>
                <div class="text-center">
                  <a href="#" class="btn btn-buy">Buy now</a>
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="pricing-box">
                <h3 class="text-center"><b>PAKET PROFESIONAL</b></h3>
                <h2 class="text-center">IDR 1.000.000/bulan</h2>
                <div class="divider-light"></div>
                <ul>
                  <li><i class="icon ion-md-checkmark-circle-outline"></i>Unlimited List Produk Tour</li>
                  <li><i class="icon ion-md-checkmark-circle-outline"></i>5.000 Views Creative Banner</li>
                  <li><i class="icon ion-md-checkmark-circle-outline"></i>1 Custome Content / Bulan</li>
                  <li><i class="icon ion-md-checkmark-circle-outline"></i>Bussiness Page</li>
                  <li><i class="icon ion-md-checkmark-circle-outline"></i>Free Digital Campaign Program By Phinemo</li>
                </ul>
                <div class="text-center">
                  <a href="#" class="btn btn-buy">Buy now</a>
                </div>
              </div>
            </div>
            
            <div class="col-md-12" style="margin-top:30px;">
              <div class="col-md-12 p-2"><h6><b>Untuk pemesanan dan Informasi lebih lanjut hubungi :</b></h6></div>
              <div class="col-md-12 d-flex bd-highlight">
                  <div class="col-md-4 p-2 flex-fill bd-highlight">
                      <h6><b>Soegeng</b></h6>
                      <ul>
                        <li>Email : <a href="soegeng@phinemomedia.com" target="blank">soegeng@phinemomedia.com</a></li>
                        <li>Phone : 085950291823</a></li>
                      </ul>
                    </div>
                    <div class="col-md-4 p-2 flex-fill bd-highlight">
                      <h6><b>Fahd</b></h6>
                      <ul>
                          <li>Email : <a href="fahd@phinemo.com" target="blank">fahd@phinemo.com</a></li>
                          <li>Phone : 081319321192</a></li>
                      </ul>
                  </div>
              </div>
            </div>

          </div>
        </div>
  </section>
  <!-- END PRICING-->

  <!-- C A L L  T O  A C T I O N -->
  <!-- <section id="call-to-action">
    <div class="container text-center">
      <h2>Increase your conversion rates now</h2>
      <div class="title-block">
        <p>Learn how to increase both your online and offline conversion rates and boost your sales and profits.</p>
        <a href="#" class="btn btn-regular">Get Started</a>
      </div>
    </div>
  </section> -->
  <!-- E N D  C A L L  T O  A C T I O N -->

  <!--  FOOTER  -->
  <footer style="background-color:#bfc6c9; padding-bottom: 0px;">
    <div class="container">
      <div class="row">
        <div class="col-md-12"><h5 style="color:black; margin: 0, auto;">Ready to grow with Phinemo? Talk to a Phinemo specialist, 9 a.m.–5:00 p.m. (CT) Mon–Fri.<b>Call (+62-24)33148134.</b></h5></div>
        
        <div class="col-md-4">
            <h6 style="color:black;">Semarang</h6>
            <ul>
              <li>Rukan Pemuda Mas B5/02</li>
              <li>Jl. Pemuda No. 150, Semarang Jawa Tengah</li>
              <li>T : +62-24 33148134</li>
              <li>E : contact@phinemo.com</li>
            </ul>
        </div>
        <div class="col-md-4">
            <h6 style="color:black;">Jakarta</h6>
            <ul>
              <li>Gedung Cyber 1 Unit 705</li>
              <li>Jl. Kuningan Barat No. 8, Jakarta Selatan</li>
              <li>T : +62-21 50201366</li>
            </ul>
        </div>

        <div class="col-md-12">
            <h6 style="color:black;">For general inquiries :</h6>
            <ul>
              <li>bizdev@phinemo.com</li>
            </ul>
        </div>
        
      </div> 
      <div class="divider"></div>
      <div class="row">
          <div class="col-md-12 col-xs-12 text-center">
            <a href="#"><i class="icon ion-logo-facebook"></i></a>
            <a href="#"><i class="icon ion-logo-instagram"></i></a>
            <a href="#"><i class="icon ion-logo-twitter"></i></a>
            <a href="#"><i class="icon ion-logo-youtube"></i></a>
          </div>

          <div class="col-md-12 col-xs-12">
              <div class="text-center" style="padding-bottom: 60px;">
                  <img src="<?php echo base_url('admintemplate/dist_view/img/logo.jpg')?>" class="img-fluid" alt="Phinemo Merchant" width="200" style="max-width:100%;">
                  <h6>PHINEMO MERCHANT</h6>
              </div>
          </div>   
      </div>
      <div class="col-md-12 col-xs-12" style="padding-bottom:10px;">
          <div class="text-center ">
              <h6>2018 &copy; All rights reserved. Made by 
                <a href="http://templune.com/" target="blank" class="external-links">Templune</a>
              </h6>
          </div>
      </div>
    </div>
  </footer>
  <!--  END FOOTER -->
    

    <!-- External JavaScripts -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
  </body>
</html>