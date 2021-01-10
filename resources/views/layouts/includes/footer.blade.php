<footer class="site-footer">
    <div class="footer-top bg-dark text-white-0_6 pt-5 paddingBottom-100">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 mt-5">
           <img src="assets/img/iof_globe.png" alt="Logo">
           <div class="margin-y-40">
             <p>
              Une voie pour votre avenir
            </p>
           </div>
            <ul class="list-inline">
              <li class="list-inline-item"><a class="iconbox bg-white-0_2 hover:primary" href=""><i class="ti-facebook"> </i></a></li>
              <li class="list-inline-item"><a class="iconbox bg-white-0_2 hover:primary" href=""><i class="ti-twitter"> </i></a></li>
              <li class="list-inline-item"><a class="iconbox bg-white-0_2 hover:primary" href=""><i class="ti-linkedin"> </i></a></li>
              <li class="list-inline-item"><a class="iconbox bg-white-0_2 hover:primary" href=""><i class="ti-pinterest"></i></a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 mt-5">
            <h4 class="h5 text-white">Contacts</h4>
            <div class="width-3rem bg-primary height-3 mt-3"></div>
            <ul class="list-unstyled marginTop-40">
              <li class="mb-3"><i class="ti-headphone mr-3"></i><a href="tel:+221774341664">+221774341664 </a></li>
              <li class="mb-3"><i class="ti-email mr-3"></i><a href="mailto:iofdakar@gmail.com">iofdakar@gmail.com</a></li>
              <li class="mb-3">
               <div class="media">
                <i class="ti-location-pin mt-2 mr-3"></i>
                <div class="media-body">
                  <span> Parcelles U17</span>
                </div>
               </div>
              </li>
            </ul>
          </div>

          <div class="col-lg-2 col-md-6 mt-5">
            <h4 class="h5 text-white">Liens rapides</h4>
            <div class="width-3rem bg-primary height-3 mt-3"></div>
            <ul class="list-unstyled marginTop-40">
              <li class="mb-2"><a href="page-about.html">A propos</a></li>
              <li class="mb-2"><a href="{{route('contact')}}">Contactez nous</a></li>
              <li class="mb-2"><a href="{{route('bourse')}}">Bourses</a></li>
              <li class="mb-2"><a href="{{route('orientation')}}">Orientations</a></li>
              <li class="mb-2"><a href="{{route('formation')}}">Formations Accélérées</a></li>
            </ul>
          </div>

          {{-- <div class="col-lg-4 col-md-6 mt-5">
            <h4 class="h5 text-white">Newslatter</h4>
            <div class="width-3rem bg-primary height-3 mt-3"></div>
            <div class="marginTop-40">
              <p class="mb-4">Subscribe to get update and information. Don't worry, we won't send spam!</p>
              <form class="marginTop-30" action="#" method="POST">
                <div class="input-group">
                  <input type="text" placeholder="Enter your email" class="form-control py-3 border-white" required="">
                  <div class="input-group-append">
                    <button class="btn btn-primary" type="submit">Subscribe</button>
                  </div>
                </div>
              </form>
            </div>
          </div> --}}

        </div> <!-- END row-->
      </div> <!-- END container-->
    </div> <!-- END footer-top-->

    <div class="footer-bottom bg-black-0_9 py-5 text-center">
      <div class="container">
        <p class="text-white-0_5 mb-0">&copy; 2020 Sayotagt. iof All rights reserved. Created by <a  href="mailto:sayotagt@gmail.com" target="_blunk">Sayotagt</a></p>
      </div>
    </div>  <!-- END footer-bottom-->
  </footer> <!-- END site-footer -->


  <div class="scroll-top">
    <i class="ti-angle-up"></i>
  </div>

      <script src="{{asset('assets/js/vendors.bundle.js')}}"></script>
      <script src="{{asset('assets/js/scripts.js')}}"></script>
    </body>
  </html>
