<nav class="navbar navbar-expand-lg navbar-light sticky-top py-3 d-block" data-navbar-on-scroll="data-navbar-on-scroll">
        <div class="container"><a class="navbar-brand" href="homepage" ><img src="assets/img/favicons/logoMogrammer.png" height="50" alt="" /></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"> </span></button>
          <div class="collapse navbar-collapse border-top border-lg-0 mt-4 mt-lg-0" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto pt-2 pt-lg-0 font-base">
              <li class="nav-item px-2 btn-outline-primary"><a class="nav-link active" aria-current="page" href="homepage">Beranda</a></li>
              <li class="nav-item px-2 btn-outline-primary"><a class="nav-link" aria-current="page" href="tutorial">Tutorial</a></li>
              <li class="nav-item px-2 btn-outline-primary"><a class="nav-link" aria-current="page" href="forum">Forum</a></li>
              <li class="nav-item px-2 btn-outline-primary"><a class="nav-link" aria-current="page" href="kuis">Kuis</a></li>
              @auth
                @if (Auth::user()->is_admin)
                <li class="nav-item px-2 btn-outline-primary"><a class="nav-link" aria-current="page" href="home">Admin</a></li>    
                @endif
            @endauth
            </ul>
            @if(!Auth::check())
              <a class="btn btn-primary order-1 order-lg-0" href="{{route('register')}}">Daftar</a>
            @else
            
            <div class="dropdown">
              <button class="btn  dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
              <img class="card-img-top" style="width: 40px;" src="{{ asset('assets/img/gallery/profile.png')}}" alt="courses" />  
              </button>
              <ul class="dropdown-menu">
                <li>
                  <form action="{{route('logout')}}" method="post">
                    @csrf
                    <button class="btn btn-outline-dark" type="submit" class="btn ">Keluar</button>
                  </form> 
                </li>
              </ul>
            </div>
            @endif
            <!-- <form class="d-flex my-3 d-block d-lg-none">
              <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" />
              <button class="btn btn-outline-primary" type="submit">Search</button>
            </form> -->
            <!-- <div class="dropdown d-none d-lg-block">
              <button class="btn btn-outline-light ms-2" id="dropdownMenuButton1" type="submit" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-search text-800"></i></button>
              <ul class="dropdown-menu dropdown-menu-lg-end" aria-labelledby="dropdownMenuButton1" style="top:55px">
                <form>
                  <input class="form-control" type="search" placeholder="Search" aria-label="Search" />
                </form>
              </ul>
            </div> -->
          </div>
        </div>
      </nav>