<!-- header section strats -->
<header class="header_section">
      <div class="header_top">
        <div class="container-fluid header_top_container">

          <div class="contact_nav">
            <a href="">
              <i class="fa fa-map-marker" aria-hidden="true"></i>
              <span>
                Location
              </span>
            </a>
            <a href="">
              <i class="fa fa-phone" aria-hidden="true"></i>
              <span>
                Call : +01 123455678990
              </span>
            </a>
            <a href="">
              <i class="fa fa-envelope" aria-hidden="true"></i>
              <span>
                demo@gmail.com
              </span>
            </a>
          </div>
          <div class="social_box">
            <a href="">
              <i class="fa fa-facebook" aria-hidden="true"></i>
            </a>
            <a href="">
              <i class="fa fa-twitter" aria-hidden="true"></i>
            </a>
            <a href="">
              <i class="fa fa-linkedin" aria-hidden="true"></i>
            </a>
            <a href="">
              <i class="fa fa-instagram" aria-hidden="true"></i>
            </a>
          </div>
        </div>
      </div>
      <div class="header_bottom">
        <div class="container-fluid">
          <nav class="navbar navbar-expand-lg custom_nav-container ">
            <a class="navbar-brand " href="index.html"> Finter </a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class=""> </span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav  ">
                <li class="nav-item active">
                  <a class="nav-link" href="{{url('/')}}">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="about.html"> About</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="service.html">Services</a>
                </li>
                
                <li class="nav-item">
                  <a class="nav-link" href="contact.html">Contact Us</a>
                </li>

                
                




                @if (Route::has('login'))
                            
                                @auth
                                <x-app-layout>
                                </x-app-layout>
                                @else
                                <li class="nav-item">
                  <a class="nav-link" href="{{url('login')}}">
                    <i class="fa fa-user" aria-hidden="true"></i>
                    <span>
                      Login
                    </span>
                  </a>
                </li>

                                    @if (Route::has('register'))
                                    <li class="nav-item">
                  <a class="nav-link" href="{{url('register')}}"> Register </a>
                </li>
                                    @endif
                                @endauth
                          
                        @endif









                <form class="form-inline justify-content-center">
                  <button class="btn  my-2 my-sm-0 nav_search-btn" type="submit">
                    <i class="fa fa-search" aria-hidden="true"></i>
                  </button>
                </form>
              </ul>
            </div>
          </nav>
        </div>
      </div>
    </header>
    <!-- end header section -->