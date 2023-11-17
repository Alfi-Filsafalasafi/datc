<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <!-- font awesome 5 -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <!-- Css Aos -->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <!-- carousel -->
    <link rel="stylesheet" href="{{asset('css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/owl.theme.default.min.css')}}">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/4.5.6/css/ionicons.min.css">
    <link rel="stylesheet" href="{{asset('css/style_carousel.css')}}">
    <link rel="shortcut icon" href="{{asset('logo/logo-biru.png')}}" />


	<title>Dwi Achmad Tax Consulting</title>
    <style>
    .custom-section {
    background: linear-gradient(rgba(1,58,99, 0.78), rgba(1,42,74, 0.78)), url("{{asset('img/bg-home.jpg')}}");
    background-size: cover;
    background-repeat: no-repeat;
    color: #fff;
    padding-top:50px;
  }
    </style>

  </head>
  <body>
    <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-real">
        <div class="container">
            <a class="navbar-brand" href="#"><img src="{{asset('logo/logo.png')}}" width="48" alt="" srcset=""></a>
            @if(auth()->check())
                <a class="nav-link text-white" href="{{ route('home') }}">Dashboard Admin</a>
            @endif
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="#home">HOME</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="#profile">PROFILE</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="#jasa">JASA</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="#portfolio">PORTOFOLIO</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="#peraturan">PERATURAN PERPAJAKAN</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="#artikel">ARTIKEL</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="#footer">HUBUNGI KAMI</a>
                </li>
                </ul>
            </div>
        </div>
    </nav>

    <section id="home" class="custom-section mt-5 py-5">
      <div class="container mt-5 py-5">
        <div class="row">
          <div class="col-md-12 text-left konten-header">
            <h1 class="title">DWI ACHMAD TAX CONSULTING</h1>
            <span class="desc-title">Tax Consultans, Financial Advisory, Management Consultans, and Tax Academy</span> <br>
            <h5 class="license mt-2">License Number : KEP-4253/IP.A/PJ/2018</h5>
            <h5 class="license pb-5">License Number : KEP-4887/IP.A/PJ/2019</h5>
          </div>
        </div>
      </div>
    </section>
    @if(session()->has('success'))
    <div class="container">
        <div class="alert alert-success alert-dismissible fade show  mt-4" role="alert">
            <strong>Berhasil Menyimpan!</strong> Terima kasih telah mengirim pesan kepada kami
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    </div>
    @endif
    @if ($errors->any())
    <div class="container">
        <div class="alert alert-danger alert-dismissible fade show  mt-4" role="alert">
            <strong>Gagal Menyimpan!</strong> Silahkan check kesalahan pada <a href="#footer">footer</a>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    </div>
    @endif
    <section id="profile">
        <div class="container pt-5 pb-5">
            <h1 class="pt-5">DATC</h1>
            <h4 class="text-secondary mb-5">Founder Profile</h4>
            <div class="row my-4" data-aos="fade-left" data-aos-duration="1500">
                <div class="col-sm-3 col-md-2">
                    <img src="{{asset('img/person2.jpg')}}" class="img-fluid foto-pimpinan">
                </div>
                <div class="col-sm-9 col-md-10">
                    <h5 class="mt-3 mt-sm-0">Achmad Zakki Nur, S.Pn., M.Ak., BKP., C.H., C.Ht.</h5>
                    <div class="row">
                        <div class="col">
                        <b>Riwayat Pendidikan</b>
                            <ul>
                                <li>S1 – Perpajakan (Fakultas Ilmu Administrasi Universitas Brawijaya) </li>
                                <li>S2 – Magister Akuntansi (Fakultas Pascasarjana Universitas Gajayana Malang)</li>
                            </ul>
                        </div>
                        <div class="col">
                        <b>Riwayat Pekerjaan</b>
                            <ul>
                                <li>Owner Dwi Achmad Tax Consulting (2021-Sekarang)</li>
                                <li>Dosen Luar Program Vokasi Universitas Brawijaya (2022-Sekarang)</li>
                                <li>Instruktur Brevet Perpajakan (di Cipta Sarana Cendikia, DATC, IKPI)</li>
                                <li>Dosen LP3I Ngawi (2020-2021)</li>
                                <li>Kantor Akuntan Publik Thoufan dan Rosyid (2016-2022)</li>
                                <li>PT Semen Indonesia (Persero) Tbk (Magang)</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <hr class="garis-pembatas">
            <div class="row my-4" data-aos="fade-right" data-aos-duration="1500">
                <div class="col-sm-9 col-md-10 order-1 order-md-0">
                    <h5 class="mt-3 mt-md-0">Mulyo Dwi Atmojo, S.Pn, BKP</h5>
                    <div class="row">
                        <div class="col">
                        <b>Riwayat Pendidikan</b>
                            <ul>
                                <li>Master’s degree in Tax Policy and Administration from University of Indonesia, 2000;</li>
                                <li>Master’s degree in Tax Policy and Administration from University of Indonesia, 2000;</li>
                            </ul>
                        </div>
                        <div class="col">
                        <b>Riwayat Pekerjaan</b>
                            <ul>
                                <li>Master’s degree in Tax Policy and Administration from University of Indonesia, 2000;</li>
                                <li>Master’s degree in Tax Policy and Administration from University of Indonesia, 2000;</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3 col-md-2 text-right justify-content-end order-0 order-md-1">
                    <img src="{{asset('img/person2.jpg')}}" class="img-fluid foto-pimpinan">
                </div>
            </div>
        </div>
    </section>
    <section id="jasa" class="bg-second">
        <div class="container pt-2 pb-2">
            <h1 class="text-center mt-5 pt-5 mb-5">JASA KAMI</h1>
            <div class="row justify-content-center pt-3">
                <div class="col-md-4 my-3 text-center jasa">
                    <img src="{{asset('icon/review.png')}}" class="icon-jasa" alt="">
                    <h5 class="mt-4 text-justify">Penyusunan dan Review Laporan Keuangan Bulanan / Tahunan</h5>
                    <p class="text-justify">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Animi illo voluptas aspernatur ducimus inventore. Maiores eos error est odit alias nostrum nulla unde consequuntur laborum magnam.</p>
                </div>
                <div class="col-md-4 my-3 text-center jasa">
                    <img src="{{asset('icon/pendampingan.png')}}" class="icon-jasa" alt="">
                    <h5 class="mt-4 text-justify">Pendampingan Kewajiban Pajak Bulanan </h5>
                    <p class="text-justify">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Animi illo voluptas aspernatur ducimus inventore. Maiores eos error est odit alias nostrum nulla unde consequuntur laborum magnam.</p>
                </div>
                <div class="col-md-4 my-3 text-center jasa">
                    <img src="{{asset('icon/pendampingan1.png')}}" class="icon-jasa" alt="">
                    <h5 class="mt-4 text-justify">Pendampingan Kewajiban Pajak Tahunan</h5>
                    <p class="text-justify">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Animi illo voluptas aspernatur ducimus inventore. Maiores eos error est odit alias nostrum nulla unde consequuntur laborum magnam.</p>
                </div>
                <div class="col-md-4 my-3 text-center jasa">
                    <img src="{{asset('icon/review-wajib.png')}}" class="icon-jasa" alt="">
                    <h5 class="mt-4 text-justify">Review atas Kewajiban Perpajakan</h5>
                    <p class="text-justify">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Animi illo voluptas aspernatur ducimus inventore. Maiores eos error est odit alias nostrum nulla unde consequuntur laborum magnam.</p>
                </div>
                <div class="col-md-4 my-3 text-center jasa">
                    <img src="{{asset('icon/pendampingan-pemeriksaan.png')}}" class="icon-jasa" alt="">
                    <h5 class="mt-4 text-justify">Pendampingan Pemeriksaan Pajak</h5>
                    <p class="text-justify">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Animi illo voluptas aspernatur ducimus inventore. Maiores eos error est odit alias nostrum nulla unde consequuntur laborum magnam.</p>
                </div>
                <div class="col-md-4 my-3 text-center jasa">
                    <img src="{{asset('icon/perencanaan.png')}}" class="icon-jasa" alt="">
                    <h5 class="mt-4 text-justify">Perencanaan Pajak</h5>
                    <p class="text-justify">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Animi illo voluptas aspernatur ducimus inventore. Maiores eos error est odit alias nostrum nulla unde consequuntur laborum magnam.</p>
                </div>
                <div class="col-md-4 my-3 text-center jasa">
                    <img src="{{asset('icon/penalty.png')}}" class="icon-jasa" alt="">
                    <h5 class="mt-4 text-justify">Pendampingan Permohonan Penghapusan Sanksi Bunga / Denda / Kenaikan</h5>
                    <p class="text-justify">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Animi illo voluptas aspernatur ducimus inventore. Maiores eos error est odit alias nostrum nulla unde consequuntur laborum magnam.</p>
                </div>
                <div class="col-md-4 my-3 text-center jasa">
                    <img src="{{asset('icon/administrasi.png')}}" class="icon-jasa" alt="">
                    <h5 class="mt-4 text-justify">Pendampingan Administasi Perpajakan</h5>
                    <p class="text-justify">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Animi illo voluptas aspernatur ducimus inventore. Maiores eos error est odit alias nostrum nulla unde consequuntur laborum magnam.</p>
                </div>
                <div class="col-md-4 my-3 text-center jasa">
                    <img src="{{asset('icon/pelatihan.png')}}" class="icon-jasa" alt="">
                    <h5 class="mt-4 text-justify">Pelatihan Perpajakan dan Akuntansi</h5>
                    <p class="text-justify">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Animi illo voluptas aspernatur ducimus inventore. Maiores eos error est odit alias nostrum nulla unde consequuntur laborum magnam.</p>
                </div>
                <div class="col-md-4 my-3 text-center jasa">
                    <img src="{{asset('icon/sistem-informasi.png')}}" class="icon-jasa" alt="">
                    <h5 class="mt-4 text-justify">Penyusunan Sistem Informasi Perpajakan</h5>
                    <p class="text-justify">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Animi illo voluptas aspernatur ducimus inventore. Maiores eos error est odit alias nostrum nulla unde consequuntur laborum magnam.</p>
                </div>
            </div>
        </div>
    </section>
    <section id="portfolio">
        <div class="container mt-2">
            <h5 style="visibility:hidden;">Ui</h5>
            <h1 class="text-center mt-5 pt-5 mb-5">PORTOFOLIO KAMI</h1>
            <div class="row justify-content-center">
                <div class="col-12 col-md-10 col-lg-8">
                    <table class="table table-striped jasa">
                        <thead class="bg-real text-white">
                            <tr>
                            <th scope="col">No</th>
                            <th scope="col">Sektor Usaha</th>
                            <th scope="col">Lokasi Usaha</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>Perusahaan Kontraktor</td>
                                <td>ini lokasinya</td>
                            </tr>
                            <tr>
                                <th scope="row">2</th>
                                <td>Developer dan Real Estate</td>
                                <td>ini lokasinya</td>
                            </tr>
                            <tr>
                                <th scope="row">3</th>
                                <td>Jasa Transportasi</td>
                                <td>ini lokasinya</td>
                            </tr>
                            <tr>
                                <th scope="row">4</th>
                                <td>Supermarket dan Retail Makanan</td>
                                <td>ini lokasinya</td>
                            </tr>
                            <tr>
                                <th scope="row">5</th>
                                <td>Pengelolaan Limbah dan Sampah</td>
                                <td>ini lokasinya</td>
                            </tr>
                            <tr>
                                <th scope="row">6</th>
                                <td>Perusahaan Advertising</td>
                                <td>ini lokasinya</td>
                            </tr>
                            <tr>
                                <th scope="row">7</th>
                                <td>Perusahaan Pengelolaan Kayu</td>
                                <td>ini lokasinya</td>
                            </tr>
                            <tr>
                                <th scope="row">8</th>
                                <td>Jasa Automotive</td>
                                <td>ini lokasinya</td>
                            </tr>
                            <tr>
                                <th scope="row">9</th>
                                <td>Koperasi</td>
                                <td>ini lokasinya</td>
                            </tr>
                            <tr>
                                <th scope="row">10</th>
                                <td>Jasa Pelabuhan dan Pelayaran</td>
                                <td>ini lokasinya</td>
                            </tr>
                            <tr>
                                <th scope="row">11</th>
                                <td>Jasa Penilaian Publik</td>
                                <td>ini lokasinya</td>
                            </tr>
                            <tr>
                                <th scope="row">12</th>
                                <td>Rumah makan,resto, dll</td>
                                <td>ini lokasinya</td>
                            </tr>
                            <tr>
                                <th scope="row">13</th>
                                <td>Jasa Catering</td>
                                <td>ini lokasinya</td>
                            </tr>
                            <tr>
                                <th scope="row">14</th>
                                <td>Toko Bahan Bangunan</td>
                                <td>ini lokasinya</td>
                            </tr>
                            <tr>
                                <th scope="row">15</th>
                                <td>Manufaktur</td>
                                <td>ini lokasinya</td>
                            </tr>
                            <tr>
                                <th scope="row">16</th>
                                <td>Perusahaan Penjual Alat Komunikasi (Handphone)</td>
                                <td>ini lokasinya</td>
                            </tr>
                            <tr>
                                <th scope="row">17</th>
                                <td>Perusahaan Penjualan Barang Elektronik</td>
                                <td>ini lokasinya</td>
                            </tr>
                            <tr>
                                <th scope="row">18</th>
                                <td>Tempat Hiburan</td>
                                <td>ini lokasinya</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
    <section id="peraturan" class=" bg-second mt-5 pb-5">
        <div class="container mt-3">
            <h5 style="visibility:hidden;">Ui</h5>
            <h1 class="text-center mt-5 pt-5 mb-4">PERATURAN PERPAJAKAN</h1>
            <div class="row justify-content-center mb-3">
                <div class="col-12 col-md-10 col-lg-8">
                    <table class="table table-striped jasa">
                        <thead class="bg-real text-white">
                            <tr>
                            <th scope="col">No</th>
                            <th scope="col">Uraian</th>
                            <th scope="col">Source</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>Perusahaan Kontraktor</td>
                                <td>ini lokasinya</td>
                            </tr>
                            <tr>
                                <th scope="row">2</th>
                                <td>Developer dan Real Estate</td>
                                <td>ini lokasinya</td>
                            </tr>
                            <tr>
                                <th scope="row">3</th>
                                <td>Jasa Transportasi</td>
                                <td>ini lokasinya</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
    <section class="ftco-section" id="artikel">
			<div class="container">
				<div class="row">
					<h1 class="heading-section mb-3 pb-md-2">ARTIKEL</h1>
					<div class="col-md-12">
						<div class="featured-carousel owl-carousel">
							@forelse($artikels as $artikel)
                            <div class="item">
								<div class="blog-entry">
									<img src="{{asset('img/artikel/'.$artikel->img)}}" alt="" height="128">
		              				<div class="text border border-top-0 p-3">
										<h5>{{$artikel->judul}}</h5>
										<p style="font-size:12px">{{$artikel->deskripsi}}</p>
										<div class="d-flex align-items-center mt-2">
                                            @if(trim($artikel->isi) == '' || $artikel->isi === null)
											<p class="mb-0 mr-2"><a href="{{$artikel->link}}" target="_blank" class="btn btn-sm btn-warning">Read More <span class="ion-ios-arrow-round-forward"></span></a></p>
											@else
                                            <p class="mb-0 mr-2"><a href="{{route('detail_artikel', ['id' => $artikel->id])}}" class="btn btn-sm btn-warning">Read More <span class="ion-ios-arrow-round-forward"></span></a></p>
                                            @endif
                                            <span style="font-size:12px">{{ \Carbon\Carbon::parse($artikel->updated_at)->format('j M Y') }}</span>
										</div>
		              				</div>
		            			</div>
							</div>
                            @empty
                            @endforelse
						</div>
					</div>
				</div>
			</div>
		</section>
    <section class="bg-footer text-white py-5" id="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-lg-4 my-3">
                    <img src="{{asset('logo/logo.png')}}" width="64" alt="" srcset="">
                    <p class="mt-3 mb-0"><b>Dwi Achmad Tax Consulting</b></p>
                    <p class="mt-0">Tax Consultans, Financial Advisory, Management Consultans, and Tax Academy</p>
                </div>
                <div class="col-md-4 col-lg-3 my-3">
                    <h5 class="mb-3">Ikuti Kami</h5>
                    <a href="" class="text-white"><i class="fab fa-facebook fa-2x mr-3"></i></a>
                    <a href="" class="text-white"><i class="fab fa-instagram fa-2x mr-3"></i></a>
                    <a href="" class="text-white"><i class="fab fa-youtube fa-2x mr-3"></i></a>
                </div>
                <div class="col-md-12 col-lg-5 my-3">
                    <h5 class="mb-3">Hubungi Kami</h5>
                    <form action="{{route('hubungi_kami.store')}}" method="POST" id="hubungi_kami">
                    @csrf
                        <div class="form-group">
                            <input type="text" name="nama" value="{{ old('nama') }}" class="form-control @error('nama') is-invalid @enderror" id="nama" aria-describedby="emailHelp" placeholder="Masukkan nama" >
                            @error('nama')
                                <small class="text-warning">{{$message}}</small>
                            @enderror
                        </div>
                        <div class="form-group">
                            <input type="email" name="email" value="{{ old('email') }}" class="form-control @error('email') is-invalid @enderror" id="email" aria-describedby="emailHelp" placeholder="Masukkan email">
                            @error('email')
                                <small class="text-warning">{{$message}}</small>
                            @enderror
                        </div>
                        <div class="form-group">
                            <textarea class="form-control @error('pesan') is-invalid @enderror" name="pesan" id="exampleFormControlTextarea1" rows="3" placeholder="Tulis pesan Anda di sini...">{{ old('pesan') }}</textarea>
                            @error('pesan')
                                <small class="text-warning">{{$message}}</small>
                            @enderror
                        </div>
                        <button type="submit" class="btn btn-sm btn-warning float-right">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <div class="fixed-bottomk">
        <button class="btn btn-warning rounded-circle py-3 px-3 floating">
        <a href="https://wa.me/message/JZ72P5I6ZQIQB1" class="text-white" target="_blank"><i class="fas fa-headset" style="font-size:36px"></i></a>
        </button>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
    <!-- OWL Carousel -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>

    <!-- animation -->
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        const galleryImg = document.querySelectorAll('.jasa')

        galleryImg.forEach((img, i) => {
        img.dataset.aos = 'fade-down'
        img.dataset.aosDelay = i * 50
        img.dataset.aosDuration =  1000
        })
      AOS.init({
        once: true, // whether animation should happen only once - while scrolling down
      });
      
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.9.1/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.9.1/TextPlugin.min.js"> //animasi</script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.9.1/ScrollTrigger.min.js"></script>
    <script src="{{asset('js/owl.carousel.min.js')}}"></script>
    <script src="{{asset('js/main.js')}}"></script>
    <script src="{{asset('js/jquery.min.js')}}"></script>
    <script src="{{asset('js/popper.js')}}"></script>
    
    <script>
      gsap.registerPlugin(TextPlugin, ScrollTrigger);
      //gsap.registerPlugin(TextPlugin, FormPlugin); contoh jika lebih dari satu plugin
      gsap.from('.konten-header', {duration:1, x:-50, opacity: 0, delay: 0.5, ease:'back'})
    </script>
    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>
    -->
  </body>
</html>