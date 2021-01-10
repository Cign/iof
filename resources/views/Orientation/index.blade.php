@extends('layouts.app')
@section('content')
<div class="padding-y-60 bg-cover" data-dark-overlay="6" style="background:url(assets/img/1920/658_2.jpg) no-repeat">
    <div class="container">
      <h2 class="text-white">
        Orientations
      </h2>
      <ol class="breadcrumb breadcrumb-double-angle text-white bg-transparent p-0">
      <li class="breadcrumb-item"><a href="{{route('home')}}">Acueil</a></li>
        <li class="breadcrumb-item"><a href="#">Orientation</a></li>
      </ol>
    </div>
  </div>



  <section class="paddingTop-50 paddingBottom-100 bg-light-v2">
    <div class="container">
      <div class="row">
        <div class="col-lg-9 mt-5">
         <div class="card align-items-start shadow-v1 p-5">
           {{-- <ul class="list-inline text-gray">
             <li class="list-inline-item mr-3">
               <i class="ti-file mr-1"></i>
               Event
             </li>
             <li class="list-inline-item mr-3">
               <i class="ti-time mr-1"></i>
               18 Aug 2018
             </li>
             <li class="list-inline-item mr-3">
               <i class="ti-location-pin mr-1"></i>
               Room:102, block: A, New auditorium building
             </li>
           </ul> --}}
           <h4 class="mb-4">
             Comment se passe les orientations
           </h4>
           <p>
             Pour bénéficier de nos bourses, il faut entrer en contact avec le cabinet IOF en remplissant le formulaire ci-dessous ou en nous contactant par email ou par téléphone ici.
             <br>
             Ensuite, il faut ouvrir un dossier à 10.000 fcfa.
             <br>
             Après cela il faut subire un entretien pour votre orientation et votre choix de filière.
             <br>
             Une fois avoir choisi une filière et une école, vous êtes orienté et vous aurez accès à une bourse ou une demi-bourse.
           </p>
           {{-- <p>
              Investig tiones demons travge wunt ectores legere lkurus quod legunt saepiu clartas est consectetur adipi sicing elitsed kdo eusmod tempor cididunt. Investig tiones demons travge wunt ectores legere lkurus quod legunt saepiu clartas est consectetur adipi sicing elitsed kdo eusmod tempor cididunt.
           </p> --}}
           <ul class="list-unstyled list-style-icon list-icon-check my-3 font-weight-semiBold">
              <li>Inscription en ligne <a href="{{route('orientation')}}">ici</a> </li>
              <li>Ouverture du dossier à 10.000 Fcfa</li>
              <li>Un entretien pour vous accompagner et vous conseiller</li>
              <li>Toutes les filières concernées</li>
           </ul>
           <a href="page-notice.html" class="btn btn-primary mt-4">S'inscrire pour une séance d'orientation</a>
         </div>
        </div>
        <div class="col-lg-3 mt-5">
          <div class="card shadow-v1">
            <div class="card-header border-bottom">
             <h4 class="mb-0">Espace publicitaire</h4>
            </div>
            <div class="card-body">
              {{-- <ul class="list-unstyled">
                 <li class="mb-3"><a href="">All Courses (80)</a></li>
                 <li class="mb-3"><a href="">Web Development (28)</a></li>
                 <li class="mb-3"><a href="">Mobile Apps (4)</a></li>
                 <li class="mb-3"><a href="">Business (10)</a></li>
                 <li class="mb-3"><a href="">IT &amp; Software (22)</a></li>
                 <li class="mb-3"><a href="">Data Science (6)</a></li>
                 <li class="mb-3"><a href="">Design (16) </a></li>
               </ul> --}}
            </div>
          </div>
        </div>
      </div> <!-- END row-->
    </div> <!-- END container-->
  </section>

<section class="padding-y-100 bg-light-v5">
    <div class="container">
      <div class="row">

        <div class="col-12 text-center">
          <h2 class="mb-4">
            Quelques Universités Partenaires
          </h2>
          <div class="width-3rem height-4 rounded bg-primary mx-auto"></div>
        </div>
      </div> <!-- END row-->

      <div class="row mt-4">
        <div class="col-lg-6 mt-4 wow slideInUp" data-wow-delay=".1s">
          <div class="list-card align-items-center height-100p m-0 shadow-v1">
            <div class="col-md-4 p-4 p-md-5 border-right text-center">
              <img src="assets/img/logos/1.jpg" alt="">
            </div>
            <div class="col-md-8 p-4 p-md-5">
              <h4>
                European Management
              </h4>
              <p>
                <i class="ti-location-pin"></i> Dakar, SENEGAL
              </p>
            </div>
          </div>
        </div>
        <div class="col-lg-6 mt-4 wow slideInUp" data-wow-delay=".2s">
          <div class="list-card align-items-center height-100p m-0 shadow-v1">
            <div class="col-md-4 p-4 p-md-5 border-right text-center">
              <img src="assets/img/logos/2.jpg" alt="">
            </div>
            <div class="col-md-8 p-4 p-md-5">
              <h4>
                Amdi
              </h4>
              <p>
                <i class="ti-location-pin"></i> Dakar, SENEGAL
              </p>
            </div>
          </div>
        </div>
        <div class="col-lg-6 mt-4 wow slideInUp" data-wow-delay=".1s">
          <div class="list-card align-items-center height-100p m-0 shadow-v1">
            <div class="col-md-4 p-4 p-md-5 border-right text-center">
              <img src="assets/img/logos/3.jpg" alt="">
            </div>
            <div class="col-md-8 p-4 p-md-5">
              <h4>
                2IFA
              </h4>
              <p>
                <i class="ti-location-pin"></i> Dakar, SENEGAL
              </p>
            </div>
          </div>
        </div>
        <div class="col-lg-6 mt-4 wow slideInUp" data-wow-delay=".2s">
          <div class="list-card align-items-center height-100p m-0 shadow-v1">
            <div class="col-md-4 p-4 p-md-5 border-right text-center">
              <img src="assets/img/logos/4.jpg" alt="">
            </div>
            <div class="col-md-8 p-4 p-md-5">
              <h4>
                Cefas
              </h4>
              <p>
                <i class="ti-location-pin"></i> Dakar, SENEGAL
              </p>
            </div>
          </div>
        </div>
      </div> <!-- END row-->
    </div> <!-- END container-->
  </section>
@endsection
