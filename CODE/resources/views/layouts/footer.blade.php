  <footer>
      <div class="container">
          <div class="row">
              <div class="col-lg-12">
                  <ul class="social-icons">
                      <li><a href="#">Facebook</a></li>
                      <li><a href="#">Twitter</a></li>
                      <li><a href="#">Behance</a></li>
                      <li><a href="#">Linkedin</a></li>
                      <li><a href="#">Dribbble</a></li>
                  </ul>
              </div>
              <div class="col-lg-12">
                  <div class="copyright-text">
                      <p>Copyright 2024.

                          <!-- | Design: <a rel="nofollow" href="https://templatemo.com" target="_parent">TemplateMo</a></p> -->
                  </div>
              </div>
          </div>
      </div>
  </footer>


  <script src="{{asset('vendor/jquery/jquery.min.js')}}"></script>
  <script src="{{asset('vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>


  <script src="{{asset('assets/js/custom.js')}}"></script>
  <script src="{{asset('assets/js/owl.js')}}"></script>
  <script src="{{asset('assets/js/slick.js')}}"></script>
  <script src="{{asset('assets/js/isotope.js')}}"></script>
  <script src="{{asset('assets/js/accordions.js')}}"></script>

  <script language="text/Javascript">
      cleared[0] = cleared[1] = cleared[2] = 0; //set a cleared flag for each field
      function clearField(t) { //declaring the array outside of the
          if (!cleared[t.id]) { // function makes it static and global
              cleared[t.id] = 1; // you could use true and false more typing
              t.value = '';
              t.style.color = '#fff';
          }
      }
  </script>