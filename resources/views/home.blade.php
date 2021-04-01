@extends('layouts.index')
@section('content')
{{-- SECTION 1 --}}
<section class="page-section clearfix">
    <div class="container">
      <div class="intro">
        <img class="intro-img img-fluid mb-3 mb-lg-0 rounded" src="img/intro.jpg" alt="">
        <div class="intro-text left-0 text-center bg-faded p-5 rounded">
          <h2 class="section-heading mb-4">
            <span class="section-heading-upper">{{$titre1}}</span>
            <span class="section-heading-lower">{{$titre2}}</span>
          </h2>
          <p class="mb-3">{{$text1}}
          </p>
          <div class="intro-button mx-auto">
            <a class="btn btn-primary btn-xl" href="#">{{$butt1}}</a>
          </div>
        </div>
      </div>
    </div>
  </section>

  {{-- SECTION 2 --}}

  <section class="page-section cta">
    <div class="container">
      <div class="row">
        <div class="col-xl-9 mx-auto">
          <div class="cta-inner text-center rounded">
            <h2 class="section-heading mb-4">
              <span class="section-heading-upper">{{$titre3}}</span>
              <span class="section-heading-lower">{{$titre4}}</span>
            </h2>
            <p class="mb-0">{{$text2}}</p>
          </div>
        </div>
      </div>
    </div>
  </section>

@endsection