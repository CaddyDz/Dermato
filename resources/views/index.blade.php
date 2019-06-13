@extends('layouts.master')

@section('content')
  <section class="slider">
      <div class="demo-2">
          <div id="slider" class="sl-slider-wrapper">
              <div class="sl-slider">
                  <div class="sl-slide" data-orientation="horizontal" data-slice1-rotation="-25" data-slice2-rotation="-25" data-slice1-scale="2" data-slice2-scale="2">
                      <div class="sl-slide-inner">
                          <div class="bg-img bg-img-1"></div>
                          <div class="content">
                              <h2>Un savoir-faire précis <br>au service du bien-être <br> et de la santé.</h2>
                              
                              <a href="{{ url('/services/savoir-precis') }}" class="btn-turquaz-lg">Savoir Plus</a> </div>
                          <!-- end content -->
                      </div>
                      <!-- end sl-slide-inner -->
                  </div>
                  <!-- end sl-slide -->
                  <div class="sl-slide" data-orientation="vertical" data-slice1-rotation="10" data-slice2-rotation="-15" data-slice1-scale="1.5" data-slice2-scale="1.5">
                      <div class="sl-slide-inner">
                          <div class="bg-img bg-img-2"></div>
                          <div class="content">
                              <h2>
                                Des solutions  <br> novatrices <br> en Dermatologie <br> et Dermatologie <br> Esthétique.
                              </h2>
                              
                              <a href="{{ url('/services/des-solutions-novatrices-en-dermatologie-et-dermatologie-esthetique') }}" class="btn-turquaz-lg">Savoir Plus</a> </div>
                          <!-- end content -->
                      </div>
                      <!-- end sl-slide-inner -->
                  </div>
                  <!-- end sl-slide -->
                <div class="sl-slide" data-orientation="horizontal" data-slice1-rotation="3" data-slice2-rotation="3" data-slice1-scale="2" data-slice2-scale="1">
                      <div class="sl-slide-inner">
                          <div class="bg-img bg-img-3"></div>
                          <div class="content">
                              <h2>
                                Restaurer et <br>maintenir la jeunesse de votre<br>peau et de votre corp.
                              </h2>
                              
                              <a href="{{ url('/services/retrouver-une-belle-peau') }}" class="btn-turquaz-lg">Savoir Plus</a> </div>
                          <!-- end content -->
                      </div>
                      <!-- end sl-slide-inner -->
                  </div>
                  <!-- end sl-slide -->
                  <div class="sl-slide" data-orientation="horizontal" data-slice1-rotation="3" data-slice2-rotation="3" data-slice1-scale="2"
                    data-slice2-scale="1">
                    <div class="sl-slide-inner">
                        <div class="bg-img bg-img-4"></div>
                        <br><br><br><br><br>
                        <div class="content">
                            <h2>
                                Identifier les problèmes <br> de la peau.
                            </h2>
                            
                            <a href="{{ url('/services/identifier-les-problemes-de-la-peau') }}" class="btn-turquaz-lg">Savoir Plus</a> </div>
                        <!-- end content -->
                    </div>
                    <!-- end sl-slide-inner -->
                </div>
                <!-- end sl-slide -->
              </div>
              <!-- sl-slider -->
              <nav id="nav-arrows" class="nav-arrows"> <span class="nav-arrow-prev">Précédent</span> <span class="nav-arrow-next">Suivant</span> </nav>
              <!-- end nav-arrows -->
              <nav id="nav-dots" class="nav-dots"> <span class="nav-dot-current"></span> <span></span> <span></span> <span></span> </nav>
              <!-- end nav-dots -->
          </div>
          <!-- end sl-slider-wrapper -->
      </div>
      <!-- end demo2 -->
  </section>
  <!-- end slider -->
  {{-- @include('partials.appointment') --}}
  <section class="home-services text-center">
      <div class="container">
          <div class="row">
              <div class="col-xs-12">
                  <div class="title-box">
                      <h2>Spécialités</h2>
                  </div>
                  <!-- end title-box -->
              </div>
              <!-- end col-12 -->
              <div class="col-md-3 col-sm-6 col-xs-12">
                  <div class="content">
                      <div class="line">
                          <div class="icon"><img src="images/icon1.png" alt="Icon"> </div>
                      </div>
                      <h3>Dermatologie Esthetique</h3>
                      <p>LA DERMATOLOGIE ESTHÉTIQUE EST UN ENSEMBLE D'ACTES MÉDICAUX VISANT À AMÉLIORER L'APPARENCE PHYSIQUE D'UNE PERSONNE</p>
                  </div>
                  <!-- end content -->
              </div>
              <!-- end col-3 -->
              <div class="col-md-3 col-sm-6 col-xs-12">
                  <div class="content">
                      <div class="line">
                          <div class="icon"><img src="images/icon2.png" alt="Icon"></div>
                      </div>
                      <h3>Dermatologie Médicale</h3>
                      <p>LE DERMATOLOGUE EST LE SPÉCIALISTE DE LA SANTÉ ET DE LA BEAUTÉ DE LA PEAU, CHEVEAUX ET ONGLES.</p>
                  </div>
                  <!-- end content -->
              </div>
              <!-- end col-3 -->
              <div class="col-md-3 col-sm-6 col-xs-12">
                  <div class="content">
                      <div class="line">
                          <div class="icon"><img src="images/icon3.png" alt="Icon"></div>
                      </div>
                      <h3>Chirurgie Dermatologique</h3>
                      <p>LA CHIRURGIE DERMATOLOGIQUE FAIT PARTIE INTÉGRANTE DE LA CHIRURGIE PLASTIQUE ET RECONSTRUCTRICE.</p>
                  </div>
                  <!-- end content -->
              </div>
              <!-- end col-3 -->
              <div class="col-md-3 col-sm-6 col-xs-12">
                  <div class="content">
                      <div class="icon"><img src="images/icon4.png" alt="Icon"></div>
                      <h3>Allergologie</h3>
                      <p>UNE RÉPONSE SPÉCIFIQUE ANORMALE DE L'ORGANISME À SON ENVIRONNEMENT NORMALEMENT BIEN TOLÉRÉ.</p>
                  </div>
                  <!-- end content -->
              </div>
              <!-- end col-3 -->
              {{-- <div class="col-xs-12"> <a href="#" class="btn-turquaz-md">cliquez pour tous</a> </div> --}}
              <!-- end col-12 -->
          </div>
          <!-- end row -->
      </div>
      <!-- end container -->
  </section>
  <!-- end home-services -->
  @include('partials.widgets')
  <!-- end box-content -->
  <section class="latest-news">
      <div class="container">
          <div class="row">
              <div class="col-xs-12 text-center">
                  <div class="title-box">
                      <h2>Actualités</h2>
                      <h5>Découvrez les derniers traitements et offres</h5>
                  </div>
                  <!-- end title-box -->
              </div>
              <!-- end col-12 -->
              <div class="col-md-6 col-xs-12">
                  <div class="left">
                      <div class="article-image"><img src="images/soins-specifiques.jpg" alt="Image"> </div>
                      <img src="images/rated-article.png" alt="Image" class="rated-article">
                      {{-- hydratation du visage --}}
                      <h3><strong>Hydratation</strong> du visage</h3>
                      <small>Publié <strong>14 Juillet </strong>Par Dr. Al Tubor</small>
                      <p>L'hydratation de la peau est le geste de base pour préserver la jeunesse et la beauté de son visage. Quels sont les signes de la déshydratation, comment choisir sa crème, quels rituels adopter en fonction des saisons?</p>
                      <a href="#" class="btn-turquaz-md" style="visibility: hidden;">Lire la suite</a> </div>
                  <!-- end left -->
              </div>
              <!-- end col-6 -->
              <div class="col-md-6 col-xs-12">
                  <div class="right">
                      <div class="article-image"><img src="images/fermete-de-visage.jpg" alt="Image"></div>
                      <img src="images/rated-article.png" alt="Image" class="rated-article">
                      {{-- Fermete de visage --}}
                      <h3><strong>Fermette</strong> du visage</h3>
                      <small>Publié <strong>30 Juin </strong>Par Dr. Al Tubor</small>
                      <p>Le temps est sans aucun doute le premier facteur du relâchement de notre visage, causant à notre peau la perte de sa fermeté et de son élasticité.</p>
                      <a href="#" class="btn-turquaz-md" style="visibility: hidden;">Lire la suite</a> </div>
                  <!-- end right -->
              </div>
              <!-- end col-6 -->
          </div>
          <!-- end row -->
      </div>
      <!-- end container -->
  </section>
  <!-- end latest-news -->
  {{-- @include('checkup') --}}
  {{-- @include('partials.cabinet') --}}
  {{-- @include('departments') --}}
  {{-- @include('sponsors') --}}
  @include('partials.doctor')
@endsection
