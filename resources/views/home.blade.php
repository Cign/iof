@extends('layouts.app')
@section('content')





  <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
    </ol>

    <div class="carousel-inner">

      <div class="carousel-item height-90vh padding-y-80 active">
       <div class="bg-absolute" data-dark-overlay="5" style="background:url(assets/img/alone_boy.jpg) no-repeat"></div>
          <div class="container">
            <div class="row">
              <div class="col-lg-10 mx-auto text-center text-white">
                <h6 class="display-lg-4 font-weight-bold text-white animated slideInUp mb-0">
                  Obtenez des Bourses et Etudiez dans de grandes Universités à Dakar
                </h6>
                <h1 class="display-lg-3 font-weight-bold text-primary animated slideInUp">
                  Bourses Complètes & Demi-Bourses
                </h1>
                <a href="{{route('bourse')}}" class="btn btn-primary mt-3 mx-2 animated slideInUp">Bourses</a>
                <a href="#" class="btn btn-outline-white mt-3 mx-2 animated slideInUp">Inscrivez-vous !</a>
              </div>
            </div>
          </div>
      </div>

      <div class="carousel-item height-90vh padding-y-80">
       <div class="bg-absolute" data-dark-overlay="5" style="background:url(assets/img/imgstud.jpeg) no-repeat"></div>
          <div class="container">
            <div class="row">
              <div class="col-lg-10 mx-auto text-center text-white">
                <h6 class="display-lg-4 font-weight-bold text-white animated slideInUp">
                  Obtenez une certification en 6 mois et commencez à travailler dans le domaine de votre choix!
                </h6>
                <h1 class="display-lg-3 font-weight-bold text-primary animated slideInUp">
                  Formations accelérées
                </h1>
                <a href="{{route('formation')}}" class="btn btn-primary mt-3 mx-2 animated slideInUp">Foramtions accelérées</a>
                <a href="#" class="btn btn-outline-white mt-3 mx-2 animated slideInUp">Inscrivez-vous !</a>
              </div>
            </div>
          </div>
      </div>


      <div class="carousel-item height-90vh padding-y-80">
       <div class="bg-absolute" data-dark-overlay="5" style="background:url(assets/img/tit.jpg) no-repeat"></div>
          <div class="container">
            <div class="row">
              <div class="col-lg-10 mx-auto text-center text-white">
                <h5 class="display-lg-4 font-weight-bold text-white animated slideInUp">
                  Vous avez le BAC ou Le niveau Terminal ? Venez, les grandes Universités Dakaroises vous attendent avec des bourses !
                </h5>
                <h2 class="display-lg-3 font-weight-bold text-primary animated slideInUp">
                  Orientation
                </h2>
                <a href="{{route('orientation')}}" class="btn btn-primary mt-3 mx-2 animated slideInUp">Orientations</a>
                <a href="#" class="btn btn-outline-white mt-3 mx-2 animated slideInUp">Inscrivez-vous !</a>
              </div>
            </div>
          </div>
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
      <i class="ti-angle-left iconbox bg-black-0_5 hover:primary"></i>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
      <i class="ti-angle-right iconbox bg-black-0_5 hover:primary"></i>
    </a>
  </div>





  <section class="py-5 shadow-v2">
    <div class="container">
     <form class="row align-items-center" action="#" method="POST">
       <div class="col-lg-4">
         <h4>
           Trouvez une formation accélerée:
         </h4>
       </div>
       <div class="col-lg-3 mt-4 mt-lg-0">
         <select name="subject" class="form-control">
          <option disabled selected default>Votre niveau</option>
           <option value="BFEM">BFEM</option>
           <option value="TE">Terminale</option>
           <option value="BAC">BAC</option>
         </select>
       </div>
       <div class="col-lg-3 mt-4 mt-lg-0">
         <select name="" class="form-control">
          <option disabled selected default>Selectionner un domaine</option>
           <option value="Arts & Humanities">Comptabilité</option>
           <option value="Business & Management">Business & Management</option>
           <option value="Engineering & Technology">Informatique</option>
         </select>
       </div>

       <div class="col-lg-2 mt-4 mt-lg-0">
         <button class="btn btn-primary btn-block">Rechercher</button>
       </div>
     </form> <!-- END row-->
    </div> <!-- END container-->
  </section>





  <section class="padding-y-100">
    <div class="container">
     <div class="row">
      <div class="col-12 text-center">
        <h2 class="mb-4">
          Qu'est ce que nous vous offrons ?
        </h2>
        <div class="width-3rem height-4 rounded bg-primary mx-auto"></div>
      </div>
     </div> <!-- END row-->

     <div class="row">
      <div class="col-11 mx-auto">
       <div class="row align-items-center">
        <div class="col-lg-4 mr-auto mt-5 wow fadeIn">
          <img class="w-100" src="assets/img/orientation_duo.png" alt="">
        </div>
        <div class="col-lg-7 mt-5 wow fadeIn">
          <h4 class="h3 mb-4">
            <span class="text-primary d-md-block">Des bourses pour vos études</span>
            Vers de grandes Universités de Dakar
          </h4>
          <p>
            Lorsque nous vous orientons vers une de nos universités partenaires, vous obtenez automatiquement une bourse complète ou une demi-bourse QUELQUE SOIT VOTRE FILIERE !!
          </p>
          <a href="{{route('bourse')}}" class="btn btn-outline-primary mt-3">En savoir plus</a>
        </div>
       </div>
      </div>
     </div> <!-- END row-->

     <div class="row">
      <div class="col-lg-11 mx-auto">
       <div class="row align-items-center">
        <div class="col-lg-7 order-2 order-lg-1 mt-5 wow fadeIn">
          <h4 class="h3 mb-4">
            <span class="text-primary d-md-block">Des formations accelerées</span>
            En ligne ou en presentiel
          </h4>
          <p>
            Si vous souhaitez être employable en 6 mois ou moins, nous vous offrons des formations accélerées certifiantes afin de vous permettre de faire valoir vos compétences sur le marché du travail.
          </p>
          <a href="{{route('formation')}}" class="btn btn-outline-primary mt-3">En savoir plus</a>
        </div>
        <div class="col-lg-4 ml-auto order-1 order-lg-2 mt-5 wow fadeIn">
          <img class="w-100" src="assets/img/tit.jpg" alt="">
        </div>
       </div>
      </div>
     </div> <!-- END row-->

     <div class="row">
        <div class="col-11 mx-auto">
         <div class="row align-items-center">
          <div class="col-lg-4 mr-auto mt-5 wow fadeIn">
            <img class="w-100" src="assets/img/alone_boy.jpg" alt="orientation after graduation">
          </div>
          <div class="col-lg-7 mt-5 wow fadeIn">
            <h4 class="h3 mb-4">
              <span class="text-primary d-md-block">Orientation</span>
              Dans nos Universités partenaires
            </h4>
            <p>
              Pour trouver votre voie, votre métier idéal, nous vous conseillons et nous vous accompagnons dans tout votre processus de choix de formation.
            </p>
            <a href="{{route('orientation')}}" class="btn btn-outline-primary mt-3">En savoir plus</a>
          </div>
         </div>
        </div>
       </div> <!-- END row-->

    </div> <!-- END container-->
  </section>



{{--
  <section class="padding-y-100 bg-light">
    <div class="container">
      <div class="row">
       <div class="col-12 text-center mb-5">
         <h2 class="mb-4">
          Formations populaires
        </h2>
        <div class="width-3rem height-4 rounded bg-primary mx-auto"></div>
       </div>
        <div class="col-12">
         <div class="owl-carousel arrow-on-hover" data-state-outer-class="py-3" data-space="30" data-arrow="true" data-loop="true">
           <div class="card shadow-v3 hover:parent">
            <img class="card-img-top" src="assets/img/360x220/1.jpg" alt="">
            <div class="card-body">
              <h4>
                Comptabilité
              </h4>
              <p class="text-primary">
                Western Governors University
              </p>
              <p class="mb-0">
                Investig atones demns traivg sed vunt lectoes legere
              </p>
            </div>
            <div class="d-flex justify-content-between align-items-center border-top position-relative p-4">
             <span class="d-inline-block bg-primary text-white px-4 py-1 rounded-pill">
               $576
             </span>
              <div class="group">
                <button class="btn btn-opacity-primary iconbox iconbox-sm mr-2">
                  <i class="ti-heart"></i>
                </button>
                <button class="btn btn-opacity-primary iconbox iconbox-sm">
                  <i class="ti-share"></i>
                </button>
              </div>
              <a href="#" class="position-absolute btn btn-primary btn-sm left-20 hover:show">
                View Details
              </a>
            </div>
          </div>

          <div class="card shadow-v3 hover:parent">
            <img class="card-img-top" src="assets/img/360x220/2.jpg" alt="">
            <div class="card-body">
              <h4>
                Ressources Humaines
              </h4>
              <p class="text-primary">
                Cedarville University
              </p>
              <p class="mb-0">
                Investig atones demns traivg sed vunt lectoes legere
              </p>
            </div>
            <div class="d-flex justify-content-between align-items-center border-top position-relative p-4">
             <span class="d-inline-block bg-primary text-white px-4 py-1 rounded-pill">
               $576
             </span>
              <div class="group">
                <button class="btn btn-opacity-primary iconbox iconbox-sm mr-2">
                  <i class="ti-heart"></i>
                </button>
                <button class="btn btn-opacity-primary iconbox iconbox-sm">
                  <i class="ti-share"></i>
                </button>
              </div>
              <a href="#" class="position-absolute btn btn-primary btn-sm left-20 hover:show">
                View Details
              </a>
            </div>
          </div>

          <div class="card shadow-v3 hover:parent">
            <img class="card-img-top" src="assets/img/360x220/3.jpg" alt="">
            <div class="card-body">
              <h4>
                Génie Logiciel
              </h4>
              <p class="text-primary">
                University of Connecticut
              </p>
              <p class="mb-0">
                Investig atones demns traivg sed vunt lectoes legere
              </p>
            </div>
            <div class="d-flex justify-content-between align-items-center border-top position-relative p-4">
             <span class="d-inline-block bg-primary text-white px-4 py-1 rounded-pill">
               $576
             </span>
              <div class="group">
                <button class="btn btn-opacity-primary iconbox iconbox-sm mr-2">
                  <i class="ti-heart"></i>
                </button>
                <button class="btn btn-opacity-primary iconbox iconbox-sm">
                  <i class="ti-share"></i>
                </button>
              </div>
              <a href="#" class="position-absolute btn btn-primary btn-sm left-20 hover:show">
                View Details
              </a>
            </div>
          </div>

          <div class="card shadow-v3 hover:parent">
            <img class="card-img-top" src="assets/img/360x220/4.jpg" alt="">
            <div class="card-body">
              <h4>
                Développement Personnel
              </h4>
              <p class="text-primary">
                University of Connecticut
              </p>
              <p class="mb-0">
                Investig atones demns traivg sed vunt lectoes legere kurus quodk
              </p>
            </div>
            <div class="d-flex justify-content-between align-items-center border-top position-relative p-4">
             <span class="d-inline-block bg-primary text-white px-4 py-1 rounded-pill">
               $576
             </span>
              <div class="group">
                <button class="btn btn-opacity-primary iconbox iconbox-sm mr-2">
                  <i class="ti-heart"></i>
                </button>
                <button class="btn btn-opacity-primary iconbox iconbox-sm">
                  <i class="ti-share"></i>
                </button>
              </div>
              <a href="#" class="position-absolute btn btn-primary btn-sm left-20 hover:show">
                View Details
              </a>
            </div>
          </div>

          <div class="card shadow-v3 hover:parent">
            <img class="card-img-top" src="assets/img/360x220/5.jpg" alt="">
            <div class="card-body">
              <h4>
                Génie Civil
              </h4>
              <p class="text-primary">
                University of Connecticut
              </p>
              <p class="mb-0">
                Investig atones demns traivg sed vunt lectoes legere kurus quodk
              </p>
            </div>
            <div class="d-flex justify-content-between align-items-center border-top position-relative p-4">
             <span class="d-inline-block bg-primary text-white px-4 py-1 rounded-pill">
               $576
             </span>
              <div class="group">
                <button class="btn btn-opacity-primary iconbox iconbox-sm mr-2">
                  <i class="ti-heart"></i>
                </button>
                <button class="btn btn-opacity-primary iconbox iconbox-sm">
                  <i class="ti-share"></i>
                </button>
              </div>
              <a href="#" class="position-absolute btn btn-primary btn-sm left-20 hover:show">
                View Details
              </a>
            </div>
          </div>
         </div>
        </div>
        <div class="col-12 mt-5 text-center">
          <a href="#" class="btn btn-primary">
            See All Degrees
          </a>
        </div>
      </div> <!-- END row-->
    </div> <!-- END container-->
  </section> --}}

  <section>
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-6 bg-cover bg-center text-white padding-y-80" style="background:url(assets/img/960x560/1.jpg) no-repeat">
          <div class="padding-x-lg-100 wow pulse">
            <h2 class="text-white mb-4">
              Les Admissions sont ouvertes pour 2020/2021
            </h2>
            <p>
              Nous vous faisons intégrer de grandes Universités à Dakar
            </p>
            <a href="#" class="btn btn-white mt-4">Incription</a>
          </div>
        </div>
        <div class="col-md-6 bg-cover bg-center text-white padding-y-80" style="background:url(assets/img/960x560/2.jpg) no-repeat">
          <div class="padding-x-lg-100 wow pulse">
            <h2 class="text-white mb-4">
              Les Orientations on débutées pour 2020/2021
            </h2>
            <p>
              Grandes Universités, Bourses complètes et Demi-Bourses sont au rendez-vous venez vite !!
            </p>
            <a href="#" class="btn btn-white mt-4">Incription</a>
          </div>
        </div>
      </div>
    </div> <!-- END container-->
  </section>





  {{-- <section class="padding-y-100 bg-cover" data-dark-overlay="6" style="background:url(assets/img/college/2.jpg) no-repeat">
    <div class="container">
      <div class="row text-center text-white">

        <div class="col-lg-3 col-md-6 mt-5 wow zoomIn" data-wow-delay=".1s">
          <p class="ec-counter display-4 text-primary font-weight-semiBold mb-0" data-to="520" data-speed="3000">
            520
          </p>
          <p class="lead">
            Online Courses
          </p>
        </div>

        <div class="col-lg-3 col-md-6 mt-5 wow zoomIn" data-wow-delay=".2s">
          <p class="ec-counter display-4 text-primary font-weight-semiBold mb-0" data-to="690" data-speed="3000">
            690
          </p>
          <p class="lead">
            Trusted Tutors
          </p>
        </div>

        <div class="col-lg-3 col-md-6 mt-5 wow zoomIn" data-wow-delay=".3s">
          <p class="ec-counter display-4 text-primary font-weight-semiBold mb-0" data-to="485645" data-speed="3000">
            485645
          </p>
          <p class="lead">
            Online Students
          </p>
        </div>

        <div class="col-lg-3 col-md-6 mt-5 wow zoomIn" data-wow-delay=".4s">
          <p class="ec-counter display-4 text-primary font-weight-semiBold mb-0" data-to="5409" data-speed="3000">
            5409
          </p>
          <p class="lead">
            Success Stories
          </p>
        </div>

      </div> <!-- END row-->
    </div> <!-- END container-->
  </section> --}}



  {{-- <section class="padding-y-100 bg-light-v5">
    <div class="container">
      <div class="row">

        <div class="col-12 text-center">
          <h2 class="mb-4">
            Top Online Colleges
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
                Western Governors University
              </h4>
              <p>
                <i class="ti-location-pin"></i> United States
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
                University of Maryland College Park
              </h4>
              <p>
                <i class="ti-location-pin"></i> United States
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
                Georgia Southern University
              </h4>
              <p>
                <i class="ti-location-pin"></i> United States
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
                Cedarville University
              </h4>
              <p>
                <i class="ti-location-pin"></i> United States
              </p>
            </div>
          </div>
        </div>
      </div> <!-- END row-->
    </div> <!-- END container-->
  </section> --}}





  {{-- <section class="padding-y-100" style="background:url(assets/img/1920/718.jpg)">
    <div class="container">
      <div class="row">

        <div class="col-12 text-center mb-5">
          <h2 class="mb-4 text-white">
            Reviews by Students
          </h2>
          <div class="width-3rem height-4 rounded bg-white mx-auto"></div>
        </div>

        <div class="col-12 text-white">
          <div class="owl-carousel arrow-black arrow-square" data-items-tablet="1" data-items="1" data-arrow="true" data-autoplay="false" >
           <div class="row">
             <div class="col-lg-8 text-center mx-auto">
              <img class="iconbox iconbox-xxl mx-auto" src="assets/img/avatar/4.jpg" alt="">
              <p class="text-white-0_7 mt-4">
                Investig ationes demons travge vuntke lectores legere wlruis quodk legunt saepius claritas esta consectet adipi sicing keelit, sed do eiusmod tempor incididunt heel labore edolore tempor incididunt ut labore etdolore.
              </p>
              <h4 class="mt-4">
                Sagred Al Jubayer
              </h4>
              <p class="text-white">
                Student
              </p>
             </div>
           </div> <!-- END row-->
           <div class="row">
             <div class="col-lg-8 text-center mx-auto">
              <img class="iconbox iconbox-xxl mx-auto" src="assets/img/avatar/5.jpg" alt="">
              <p class="text-white-0_7 mt-4">
                Investig ationes demons travge vuntke lectores legere wlruis quodk legunt saepius claritas esta consectet adipi sicing keelit, sed do eiusmod tempor incididunt heel labore edolore tempor incididunt ut labore etdolore.
              </p>
              <h4 class="mt-4">
                Anny
              </h4>
              <p class="text-white">
                Student
              </p>
             </div>
           </div> <!-- END row-->
           <div class="row">
             <div class="col-lg-8 text-center mx-auto">
              <img class="iconbox iconbox-xxl mx-auto" src="assets/img/avatar/6.jpg" alt="">
              <p class="text-white-0_7 mt-4">
                Investig ationes demons travge vuntke lectores legere wlruis quodk legunt saepius claritas esta consectet adipi sicing keelit, sed do eiusmod tempor incididunt heel labore edolore tempor incididunt ut labore etdolore.
              </p>
              <h4 class="mt-4">
                Watson
              </h4>
              <p class="text-white">
                Student
              </p>
             </div>
           </div> <!-- END row-->
          </div>
        </div> <!-- END col-12 -->
      </div> <!-- END row-->
    </div> <!-- END container-->
  </section> --}}





  {{-- <section class="padding-y-100 bg-light-v2">
    <div class="container">
      <div class="row">

        <div class="col-lg-7 mx-auto text-center mb-5">
          <h2 class="mb-4">
            Quick Guide to Online Colleges
          </h2>
          <p class="font-size-18">
            Before exploring online colleges, every potential student should read about and
            understand the basics of remote learning, financial aid, quality control and the
            institutions themselves.
          </p>
        </div>

       <div class="col-lg-6 my-2">
         <div class="card">
           <div class="card-header p-3 px-md-5 bg-primary border-0">
             <h4 class="text-white mb-0">
               Types of Online Colleges
             </h4>
           </div> <!-- END card-header-->
           <div class="card-body p-4 px-md-5">
             <div id="accordion-2" class="accordion-style-2">

              <div class="accordion-item border-bottom wow slideInUp">
               <a href="#acc2_1" class="accordion__title h6 py-3" data-toggle="collapse" aria-expanded="true">
                <span class="accordion__icon float-right ml-3">
                  <i class="ti-plus"></i>
                  <i class="ti-minus"></i>
                </span>
                 Traditional colleges and universities
               </a>
                <div id="acc2_1" class="collapse show" data-parent="#accordion-2" style="">
                  <div class="p-0">
                     <p>
                       Investig ationes demons trave runt lectoes legere kliusa quod thlegunt saepius claritas Investig ationes.
                     </p>
                  </div>
                </div>
              </div> <!-- END accordion-item-->

              <div class="accordion-item border-bottom wow slideInUp">
               <a href="#acc2_2" class="accordion__title h6 py-3 collapsed" data-toggle="collapse" aria-expanded="true">
                <span class="accordion__icon float-right ml-3">
                  <i class="ti-plus"></i>
                  <i class="ti-minus"></i>
                </span>
                 Primarily for-profit online colleges
               </a>
                <div id="acc2_2" class="collapse" data-parent="#accordion-2">
                  <div class="p-0">
                     <p>
                       Investig ationes demons trave runt lectoes legere kliusa quod thlegunt saepius claritas Investig ationes.
                     </p>
                  </div>
                </div>
              </div> <!-- END accordion-item-->

              <div class="accordion-item border-bottom wow slideInUp">
               <a href="#acc2_3" class="accordion__title h6 py-3 collapsed" data-toggle="collapse" aria-expanded="false">
                <span class="accordion__icon float-right ml-3">
                  <i class="ti-plus"></i>
                  <i class="ti-minus"></i>
                </span>
                 Community and junior colleges
               </a>
                <div id="acc2_3" class="collapse" data-parent="#accordion-2" style="">
                  <div class="p-0">
                     <p>
                       Investig ationes demons trave runt lectoes legere kliusa quod thlegunt saepius claritas Investig ationes.
                     </p>
                  </div>
                </div>
              </div> <!-- END accordion-item-->

              <div class="accordion-item wow slideInUp">
               <a href="#acc2_5" class="accordion__title h6 py-3 collapsed" data-toggle="collapse" aria-expanded="false">
                <span class="accordion__icon float-right ml-3">
                  <i class="ti-plus"></i>
                  <i class="ti-minus"></i>
                </span>
                 Programmatic or subject accreditation
               </a>
                <div id="acc2_5" class="collapse" data-parent="#accordion-2" style="">
                  <div class="p-0">
                     <p>
                       Investig ationes demons trave runt lectoes legere kliusa quod thlegunt saepius claritas Investig ationes.
                     </p>
                  </div>
                </div>
              </div> <!-- END accordion-item-->

            </div> <!-- END accordion-2-->
           </div> <!-- END card-body-->
         </div> <!-- END card-->
       </div> <!-- END col-lg-6 -->

       <div class="col-lg-6 my-2">
         <div class="card">
           <div class="card-header p-3 px-md-5 bg-primary border-0">
             <h4 class="text-white mb-0">
               Online Learning Modes
             </h4>
           </div> <!-- END card-header-->
           <div class="card-body p-4 px-md-5">
             <div id="accordion-2_1" class="accordion-style-2">

              <div class="accordion-item border-bottom wow slideInUp">
               <a href="#acc2_6" class="accordion__title h6 py-3 collapsed" data-toggle="collapse" aria-expanded="false">
                <span class="accordion__icon float-right ml-3">
                  <i class="ti-plus"></i>
                  <i class="ti-minus"></i>
                </span>
                 Student loans
               </a>
                <div id="acc2_6" class="collapse" data-parent="#accordion-2_1" style="">
                  <div class="p-0">
                     <p>
                       Investig ationes demons trave runt lectoes legere kliusa quod thlegunt saepius claritas Investig ationes.
                     </p>
                  </div>
                </div>
              </div> <!-- END accordion-item-->

              <div class="accordion-item border-bottom wow slideInUp">
               <a href="#acc2_7" class="accordion__title h6 py-3" data-toggle="collapse" aria-expanded="true">
                <span class="accordion__icon float-right ml-3">
                  <i class="ti-plus"></i>
                  <i class="ti-minus"></i>
                </span>
                 Student grants
               </a>
                <div id="acc2_7" class="collapse show" data-parent="#accordion-2_1" style="">
                  <div class="p-0">
                     <p>
                       Investig ationes demons trave runt lectoes legere kliusa quod thlegunt saepius claritas Investig ationes.
                     </p>
                  </div>
                </div>
              </div> <!-- END accordion-item-->

              <div class="accordion-item border-bottom wow slideInUp">
               <a href="#acc2_8" class="accordion__title h6 py-3 collapsed" data-toggle="collapse" aria-expanded="false">
                <span class="accordion__icon float-right ml-3">
                  <i class="ti-plus"></i>
                  <i class="ti-minus"></i>
                </span>
                 Scholarships
               </a>
                <div id="acc2_8" class="collapse" data-parent="#accordion-2_1" style="">
                  <div class="p-0">
                     <p>
                       Investig ationes demons trave runt lectoes legere kliusa quod thlegunt saepius claritas Investig ationes.
                     </p>
                  </div>
                </div>
              </div> <!-- END accordion-item-->

              <div class="accordion-item wow slideInUp">
               <a href="#acc2_9" class="accordion__title h6 py-3 collapsed" data-toggle="collapse" aria-expanded="false">
                <span class="accordion__icon float-right ml-3">
                  <i class="ti-plus"></i>
                  <i class="ti-minus"></i>
                </span>
                 National accreditation
               </a>
                <div id="acc2_9" class="collapse" data-parent="#accordion-2_1" style="">
                  <div class="p-0">
                     <p>
                       Investig ationes demons trave runt lectoes legere kliusa quod thlegunt saepius claritas Investig ationes.
                     </p>
                  </div>
                </div>
              </div> <!-- END accordion-item-->

            </div> <!-- END accordion-2_1-->
           </div> <!-- END card-body-->
         </div> <!-- END card-->
       </div> <!-- END col-lg-6 -->
      </div> <!-- END row-->
    </div> <!-- END container-->
  </section> --}}

  {{-- <section class="padding-y-100 bg-cover bg-center jarallax" data-primary-overlay="8" style="background:url(assets/img/1920/530.jpg)">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 mx-auto text-center text-white">
          <h2 class="text-white mb-4">
            Getting Started with Online Degrees
          </h2>
          <p class="font-size-18">
            In 2017, there were 5.5 million students in the United States enrolled in either partial or fully online programs. Nearly one out of every three college students in the
            United States is enrolled in at least one online class.
          </p>
          <a href="#" class="btn btn-white mx-2 mt-3">Take The Tour</a>
          <a href="#" class="btn btn-outline-white mx-2 mt-3">Join Now</a>
        </div>
      </div> <!-- END row-->
    </div> <!-- END container-->
  </section> --}}
@endsection
