@extends('layouts.index')
@section('content')

<section class="page-section cta">
    <div class="container">
      <div class="row">
        <div class="col-xl-9 mx-auto">
          <div class="cta-inner text-center rounded">
            <h2 class="section-heading mb-5">
                <span class="section-heading-upper">{{$titre1}}</span>
                <span class="section-heading-lower">{{$titre2}}</span>
            </h2>
            @foreach ($tabl as $table)
                <ul class="list-unstyled list-hours mb-5 text-left mx-auto">
                    <li class="list-unstyled-item list-hours-item d-flex">
                    {{$table->jour}}
                    <span class="ml-auto">{{$table->heur}}</span>
                    </li>
                </ul>
            @endforeach

            <p class="address mb-5">
              <em>
                <strong>{{$adres1}}</strong>
                <br>
                {{$adres2}}
              </em>
            </p>
            <p class="mb-0">
              <small>
                <em>{{$adres3}}</em>
              </small>
              <br>
              {{$num}}
            </p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="page-section about-heading">
    <div class="container">
      <img class="img-fluid rounded about-heading-img mb-3 mb-lg-0" src="img/about.jpg" alt="">
      <div class="about-heading-content">
        <div class="row">
          <div class="col-xl-9 col-lg-10 mx-auto">
            <div class="bg-faded rounded p-5">
              <h2 class="section-heading mb-4">
                <span class="section-heading-upper">{{$titre3}}</span>
                <span class="section-heading-lower">{{$titre4}}</span>
              </h2>
              <p>{{$text1}}</p>
              <p class="mb-0">We guarantee that you will fall in
                <em>lust</em>
                with our decadent blends the moment you walk inside until you finish your last sip. Join us for your daily routine, an outing with friends, or simply just to enjoy some alone time.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>



@endsection