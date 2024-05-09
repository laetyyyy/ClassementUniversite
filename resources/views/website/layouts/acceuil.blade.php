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

  <section class="probootstrap-section">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="probootstrap-flex-block">
            <div class="probootstrap-text probootstrap-animate">
              <h3>À propos de l'Application</h3>
              <p>L'application de notation des universités du Togo est une plateforme en ligne conçue pour fournir aux utilisateurs des informations transparentes et pertinentes sur les établissements d'enseignement supérieur du pays. Notre objectif est d'aider les étudiants, les parents et les professionnels de l'éducation à prendre des décisions éclairées en matière d'enseignement supérieur en leur fournissant des classements basés sur différents critères.</p>
            </div>
            <div class="probootstrap-image probootstrap-animate" style="background-image: url(assets/img/slider_5.jpeg)">
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="probootstrap-section" id="probootstrap-counter">
    <div class="container">

      <div class="row">
        <div class="col-md-3 col-sm-6 col-xs-6 col-xxs-12 probootstrap-animate">
          <div class="probootstrap-counter-wrap">
            <div class="probootstrap-icon">
              <i class="icon-university"></i>
            </div>
            <div class="probootstrap-text">
              <span class="probootstrap-counter">
                <!-- Remplacez le nombre de 20203 par le nombre total d'universités répertoriées sur votre plateforme -->
                <span class="js-counter" data-from="0" data-to="20203" data-speed="5000" data-refresh-interval="50">1</span>
              </span>
              <span class="probootstrap-counter-label">Universités Répertoriées</span>
            </div>
          </div>
        </div>
        <div class="col-md-3 col-sm-6 col-xs-6 col-xxs-12 probootstrap-animate">
          <div class="probootstrap-counter-wrap">
            <div class="probootstrap-icon">
              <i class="icon-users2"></i>
            </div>
            <div class="probootstrap-text">
              <span class="probootstrap-counter">
                <!-- Remplacez le nombre de 139 par le nombre total d'enseignants certifiés sur votre plateforme -->
                <span class="js-counter" data-from="0" data-to="139" data-speed="5000" data-refresh-interval="50">1</span>
              </span>
              <span class="probootstrap-counter-label">Enseignants Certifiés</span>
            </div>
          </div>
        </div>
        <div class="col-md-3 col-sm-6 col-xs-6 col-xxs-12 probootstrap-animate">
          <div class="probootstrap-counter-wrap">
            <div class="probootstrap-icon">
              <i class="icon-library"></i>
            </div>
            <div class="probootstrap-text">
              <span class="probootstrap-counter">
                <!-- Remplacez le pourcentage de 99 par le pourcentage d'étudiants passant à l'université -->
                <span class="js-counter" data-from="0" data-to="99" data-speed="5000" data-refresh-interval="50">1</span>%
              </span>
              <span class="probootstrap-counter-label">Réussite Universitaire</span>
            </div>
          </div>
        </div>
        <div class="col-md-3 col-sm-6 col-xs-6 col-xxs-12 probootstrap-animate">

          <div class="probootstrap-counter-wrap">
            <div class="probootstrap-icon">
              <i class="icon-smile2"></i>
            </div>
            <div class="probootstrap-text">
              <span class="probootstrap-counter">
                <!-- Remplacez le pourcentage de 100 par le pourcentage de satisfaction des parents -->
                <span class="js-counter" data-from="0" data-to="100" data-speed="5000" data-refresh-interval="50">1</span>%
              </span>
              <span class="probootstrap-counter-label">Satisfaction des Parents</span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>





@endsection
