@extends('website.layouts.base')

@section('content')
<style>
    .flexslider {
    max-height: 60vh; /* Définir la hauteur maximale à 50% de la hauteur de la fenêtre */
    overflow: hidden; /* Cacher tout contenu dépassant de la hauteur maximale */
}
/* CSS pour positionner le titre h1 au centre de chaque diapositive */
.probootstrap-slider-text {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    color: #fff; /* Couleur du texte */
    text-align: center;
    z-index: 1; /* Assure que le titre est au-dessus de l'image de fond */
}

.probootstrap-slider-text h1 {
    font-size: 3em; /* Taille de la police */
    font-weight: bold; /* Poids de la police */
}






</style>
<section class="flexslider">
    <ul class="slides">
      <li style="background-image: url(assets/img/slider_1.jpeg)" class="overlay">
        <div class="container">
          <div class="row">
            <div class="col-md-8 col-md-offset-2">
              <div class="probootstrap-slider-text text-center">
                <h1 class="">Les Meilleurs Classements</h1>
              </div>
            </div>
          </div>
        </div>
      </li>
      <li style="background-image: url(assets/img/slider_2.jpg)" class="overlay">
        <div class="container">
          <div class="row">
            <div class="col-md-8 col-md-offset-2">
              <div class="probootstrap-slider-text text-center">
                <h1 class="">L’éducation, c’est la vie</h1>
              </div>
            </div>
          </div>
        </div>

      </li>
      <li style="background-image: url(assets/img/slider_3.jpg)" class="overlay">
        <div class="container">
          <div class="row">
            <div class="col-md-8 col-md-offset-2">
              <div class="probootstrap-slider-text text-center">
                <h1 class="">Trouver les meilleurs Universites et Notez Les</h1>
              </div>
            </div>
          </div>
        </div>
      </li>
    </ul>
</section>

  <section class="probootstrap-section probootstrap-section-colored">
    <div class="container">
      <div class="row">
        <div class="col-md-12 text-left section-heading probootstrap-animate">
          <h2>Classsement des Universités</h2>
        </div>
      </div>
    </div>
  </section>


  <section class="probootstrap-section probootstrap-bg-white probootstrap-border-top">
    <div class="container">
      <div class="row">
        @foreach($universites as $university)
        <div class="col-md-6">
          <div class="probootstrap-service-2 probootstrap-animate">
            <div class="row">
              <div class="col-md-14">
                <div class="image">
                  <img src="{{ asset($university->photo) }}" alt="University Photo" class="img-fluid">
                </div>
              </div>
              <div class="col-md-40">
                <div class="text">
                  <h3>{{ $university->name }}</h3>
                  <p><strong>Address:</strong> {{ $university->adresse }}</p>
                  <p><strong>Description:</strong> {{ $university->description }}</p>
                  <p><strong>Contact:</strong> {{ $university->contact }}</p>
                  <p><a href="{{ route('universite.details', ['id' => $university->id]) }}" class="btn btn-primary">View Details</a></p>
                </div>
              </div>
            </div>
          </div>
        </div>
        @endforeach
      </div>
    </div>
  </section>

@endsection
