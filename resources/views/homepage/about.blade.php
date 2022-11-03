@extends('layouts.homepage.templatehomepage')
@section('content')
<!-- Halaman About -->
<div class="container">
  <div class="row">
    <div class="col">
    <img src="{{asset('images/kunci.jpg') }}" alt="foto produk" class="card-img-top">  
      <div class="container" style="background-color: #add8e6;">
      <h1 class="text-center"><strong>OMAH BATIK 78</strong></h1>
      <h4 class="text-center">TOKO BATIK ONLINE YANG BERKUALITAS DAN TERPERCAYA DI JEMBER</h4></div>
      <hr>
      <h5>Toko Batik 78 Melayani pemesanan aneka pakaian batik dan peralatan batik, hubungi :<strong> 081-370-587-320</strong></h5>
        <div class="col-md-12 text-center">
            <button type="button" class="btn btn-primary" href="https://wa.me/6281370587320?text=Saya%20tertarik%20untuk%20merental%20mobil%20Anda">WhatsApp</button>
            <button type="button" class="btn btn-primary" href="tel:+6281370587320">Telephone</button>
        </div>
  <!-- Kelebihan Rental -->
  <br>
  <h4 class="text-center">OUR SERVICE</h4>
  <h6 class="text-center">-----Trusted Jember Batik Store-----</h6>
  <div class="row mt-4">
    <div class="col col-md-12 col-sm-12 mb-4">
    </div>
    <div class="col-md-4">
      <div class="card mb-4 shadow-sm">
        <div class="card-body">
            <p class="card-text"><h2 class="text-center"><b>text</b></h2><br>
            <img src="{{asset('images/pict1.jpg') }}" alt="foto produk" class="card-img-top">
            <h7 class="text-justify">text</h7></p>
        </div>
      </div>
    </div>
    <div class="col-md-4">
      <div class="card mb-4 shadow-sm">
        <div class="card-body">
            <p class="card-text"><h2 class="text-center"><b>text</b></h2><br>
            <img src="{{asset('images/pict2.jpg') }}" alt="foto produk" class="card-img-top">
              <h7 class="text-justify">text</h7></p>
        </div>
      </div>
    </div>
    <div class="col-md-4">
      <div class="card mb-4 shadow-sm">
        <div class="card-body">
            <p class="card-text"><h2 class="text-center"><b>text</b></h2><br>
            <img src="{{asset('images/pict3.jpg') }}" alt="foto produk" class="card-img-top">
              <h7 class="text-justify">text</h7></p>
        </div>
      </div>
    </div>
  </div>
    </div>
  </div>
</div>
<!-- akhir Halaman About -->
@endsection