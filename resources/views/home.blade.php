@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')
    <p>Welcome to this zira shop admin panel.</p>
    <p>Selamat Datang Kembali</p>

    <div class="container-fluid">
  <div class="px-lg-5">

    <!-- For demo purpose -->
    <div class="row py-2">
      <div class="col-lg-4 mx-auto">
        <div class="text-black p-8 shadow-sm rounded banner">
          <h1 class="display-4">CAT WARNA</h1>
          <p class="lead">NODROP</p>
          <p class="lead">"CAT PELAPIS ANTI BOCOR"</p>
        </div>
      </div>
    </div>
    <!-- End -->

    <div class="row">
      <!-- Gallery item -->
      <div class="col-xl-3 col-lg-4 col-md-6 mb-4">
        <div class="bg-white rounded shadow-sm"><img src="https://res.cloudinary.com/mhmd/image/upload/v1556294929/matthew-hamilton-351641-unsplash_zmvozs.jpg" alt="" class="img-fluid card-img-top">
          <div class="p-4">
            <h5> <a href="#" class="text-dark">Red paint cup</a></h5>
            <p class="small text-muted mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
            <div class="d-flex align-items-center justify-content-between rounded-pill bg-light px-3 py-2 mt-4">
              <p class="small mb-0"><i class="fa fa-picture-o mr-2"></i><span class="font-weight-bold">JPG</span></p>
              <div class="badge badge-danger px-3 rounded-pill font-weight-normal">New</div>
            </div>
          </div>
        </div>
      </div>
      <!-- End -->

      <!-- Gallery item -->
      <div class="col-xl-3 col-lg-4 col-md-6 mb-4">
        <div class="bg-white rounded shadow-sm"><img src="https://res.cloudinary.com/mhmd/image/upload/v1556294927/cody-davis-253928-unsplash_vfcdcl.jpg" alt="" class="img-fluid card-img-top">
          <div class="p-4">
            <h5> <a href="#" class="text-dark">Blorange</a></h5>
            <p class="small text-muted mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
            <div class="d-flex align-items-center justify-content-between rounded-pill bg-light px-3 py-2 mt-4">
              <p class="small mb-0"><i class="fa fa-picture-o mr-2"></i><span class="font-weight-bold">PNG</span></p>
              <div class="badge badge-primary px-3 rounded-pill font-weight-normal">Trend</div>
            </div>
          </div>
        </div>
      </div>
      <!-- End -->

      <!-- Gallery item -->
      <div class="col-xl-3 col-lg-4 col-md-6 mb-4">
        <div class="bg-white rounded shadow-sm"><img src="https://res.cloudinary.com/mhmd/image/upload/v1556294928/nicole-honeywill-546848-unsplash_ymprvp.jpg" alt="" class="img-fluid card-img-top">
          <div class="p-4">
            <h5> <a href="#" class="text-dark">And She Realized</a></h5>
            <p class="small text-muted mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
            <div class="d-flex align-items-center justify-content-between rounded-pill bg-light px-3 py-2 mt-4">
              <p class="small mb-0"><i class="fa fa-picture-o mr-2"></i><span class="font-weight-bold">JPG</span></p>
              <div class="badge badge-warning px-3 rounded-pill font-weight-normal text-white">Featured</div>
            </div>
          </div>
        </div>
      </div>
      <!-- End -->

      <!-- Gallery item -->
      <div class="col-xl-3 col-lg-4 col-md-6 mb-4">
        <div class="bg-white rounded shadow-sm"><img src="https://res.cloudinary.com/mhmd/image/upload/v1556294927/dose-juice-1184444-unsplash_bmbutn.jpg" alt="" class="img-fluid card-img-top">
          <div class="p-4">
            <h5> <a href="#" class="text-dark">DOSE Juice</a></h5>
            <p class="small text-muted mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
            <div class="d-flex align-items-center justify-content-between rounded-pill bg-light px-3 py-2 mt-4">
              <p class="small mb-0"><i class="fa fa-picture-o mr-2"></i><span class="font-weight-bold">JPEG</span></p>
              <div class="badge badge-success px-3 rounded-pill font-weight-normal">Hot</div>
            </div>
          </div>
        </div>
      </div>
      <!-- End -->

      <!-- Gallery item -->
      <div class="col-xl-3 col-lg-4 col-md-6 mb-4">
        <div class="bg-white rounded shadow-sm"><img src="https://res.cloudinary.com/mhmd/image/upload/v1556294926/cody-davis-253925-unsplash_hsetv7.jpg" alt="" class="img-fluid card-img-top">
          <div class="p-4">
            <h5> <a href="#" class="text-dark">Pineapple</a></h5>
            <p class="small text-muted mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
            <div class="d-flex align-items-center justify-content-between rounded-pill bg-light px-3 py-2 mt-4">
              <p class="small mb-0"><i class="fa fa-picture-o mr-2"></i><span class="font-weight-bold">PNG</span></p>
              <div class="badge badge-primary px-3 rounded-pill font-weight-normal">New</div>
            </div>
          </div>
        </div>
      </div>
      <!-- End -->

      <!-- Gallery item -->
      <div class="col-xl-3 col-lg-4 col-md-6 mb-4">
        <div class="bg-white rounded shadow-sm"><img src="https://res.cloudinary.com/mhmd/image/upload/v1556294928/tim-foster-734470-unsplash_xqde00.jpg" alt="" class="img-fluid card-img-top">
          <div class="p-4">
            <h5> <a href="#" class="text-dark">Yellow banana</a></h5>
            <p class="small text-muted mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
            <div class="d-flex align-items-center justify-content-between rounded-pill bg-light px-3 py-2 mt-4">
              <p class="small mb-0"><i class="fa fa-picture-o mr-2"></i><span class="font-weight-bold">JPG</span></p>
              <div class="badge badge-warning px-3 rounded-pill font-weight-normal text-white">Featured</div>
            </div>
          </div>
        </div>
      </div>
      <!-- End -->

      <!-- Gallery item -->
      <div class="col-xl-3 col-lg-4 col-md-6 mb-4">
        <div class="bg-white rounded shadow-sm"><img src="https://res.cloudinary.com/mhmd/image/upload/v1556294927/mike-meyers-737494-unsplash_yd11yq.jpg" alt="" class="img-fluid card-img-top">
          <div class="p-4">
            <h5> <a href="#" class="text-dark">Teal Gameboy</a></h5>
            <p class="small text-muted mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
            <div class="d-flex align-items-center justify-content-between rounded-pill bg-light px-3 py-2 mt-4">
              <p class="small mb-0"><i class="fa fa-picture-o mr-2"></i><span class="font-weight-bold">JPEG</span></p>
              <div class="badge badge-info px-3 rounded-pill font-weight-normal">Hot</div>
            </div>
          </div>
        </div>
      </div>
      <!-- End -->

      <!-- Gallery item -->
      <div class="col-xl-3 col-lg-4 col-md-6 mb-4">
        <div class="bg-white rounded shadow-sm"><img src="https://res.cloudinary.com/mhmd/image/upload/v1556294930/ronald-cuyan-434484-unsplash_iktjid.jpg" alt="" class="img-fluid card-img-top">
          <div class="p-4">
            <h5> <a href="#" class="text-dark">Color in Guatemala.</a></h5>
            <p class="small text-muted mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
            <div class="d-flex align-items-center justify-content-between rounded-pill bg-light px-3 py-2 mt-4">
              <p class="small mb-0"><i class="fa fa-picture-o mr-2"></i><span class="font-weight-bold">PNG</span></p>
              <div class="badge badge-warning px-3 rounded-pill font-weight-normal text-white">Featured</div>
            </div>
          </div>
        </div>
      </div>
      <!-- End -->

    </div>
    <div class="py-5 text-right"><a href="#" class="btn btn-dark px-5 py-3 text-uppercase">Show me more</a></div>
  </div>
</div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop

