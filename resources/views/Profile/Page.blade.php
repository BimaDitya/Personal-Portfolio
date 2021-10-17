<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap Contributors">
    <meta name="generator" content="Hugo 0.88.1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">   
    <script src="https://unpkg.com/phosphor-icons"></script>
    <title>Bima Aditya | {{ $Title }}</title>

    <link href="/Style/Landing.css" rel="stylesheet">
  </head>
  <body  style="background-image: url('/public/storage/Img/Geometric-Leaves.PNG');">   
  <main>
    {{-- This Is Navbar --}}
    @foreach ($Landings as $Landing)      
    <nav class="navbar navbar-expand-md navbar-light" style="background: #4F86F7;">
        <div class="container">
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarText">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="btn btn-outline-light mx-2 nunito-font {{ ($Title === "Home") ? 'active' : '' }}" href="/">Home</a>
              </li>
              <li class="nav-item">
                <a class="btn btn-outline-light mx-2 nunito-font {{ ($Title === "Profile") ? 'active' : '' }}" href="/Profile">Profile</a>
              </li>
            </ul>
            <span class="navbar">
                <a class="navbar-brand fs-5 nunito-font text-light" href="/">{{ $Title }} Page</a>
            </span>
          </div>
        </div>
    </nav>
    @endforeach
    {{-- This Is Contents --}}
    @foreach ($Profiles as $Profile)
    <div class="container my-5 shadow-sm">
        <div class="row d-flex justify-content-center">
            <div class="col-sm-4 pt-3 d-flex justify-content-center">
                <img class="img-fluid rounded-circle" src="storage/Img/Profile.JPEG" alt="Photo Profile" width="256">
            </div>
        </div>
        <div class="row d-flex justify-content-center">
            <div class="col-sm-max py-2 text-center">
                <h2 class="josefin-color josefin-font fw-bold">{{ $Profile->Fullname }}</h2>
                <p class="nunito-font fs-5">{{ $Profile->Role }}</p>
            </div>
        </div>
    </div>
    <div class="container-fluids text-dark px-4 py-5 text-start" style="background-color: #4F86F7">
        <div class="row d-flex justify-content-center p-3">
            <h2 class="josefin-font josefin-color-1 display-6 fw-bold text-start">About Me</h2>
            <div class="container">
                <div class="row">
                  <div class="col text-center p-2">
                    <div class="card border-primary shadow-sm">
                        <div class="card-header nunito-font">Gender</div>
                        <div class="card-body">
                            <i class="ph-person-light" style="font-size: 2.5rem; color: #4F86F7;"></i>
                            <h6 class="card-title nunito-font fw-bold mt-2">{{ $Profile->Gender }}</h6>
                        </div>
                    </div>                  
                  </div>
                  <div class="col text-center p-2">
                    <div class="card border-primary shadow-sm">
                        <div class="card-header nunito-font">Birthday</div>
                        <div class="card-body">
                            <i class="ph-cake-light" style="font-size: 2.5rem; color: #4F86F7;"></i>
                            <h6 class="card-title nunito-font fw-bold mt-2">{{ $Profile->Birthday }}</h6>
                        </div>
                    </div>
                  </div>
                  <div class="col text-center p-2">
                    <div class="card border-primary shadow-sm">
                        <div class="card-header nunito-font">Address</div>
                        <div class="card-body">
                            <i class="ph-house-light" style="font-size: 2.5rem; color: #4F86F7;"></i>
                            <h6 class="card-title nunito-font fw-bold mt-2">{{ $Profile->Address }}</h6>
                        </div>
                    </div>
                  </div>
                </div>
                <h2 class="josefin-font josefin-color-1 mt-3 display-6 fw-bold text-start">Social Media</h2>
                <div class="row">
                  <div class="col text-center p-2">
                    <div class="card border-primary shadow-sm">
                        <div class="card-header nunito-font">Instagram</div>
                        <div class="card-body">
                            <i class="ph-instagram-logo-light" style="font-size: 2.5rem; color: #4F86F7;"></i>
                            <h6><a class="list-group-item list-group-item-action" href="{{ $Profile->Instagram }}">Instagram</a></h6>
                        </div>
                    </div>
                  </div>
                  <div class="col text-center p-2">
                    <div class="card border-primary shadow-sm">
                        <div class="card-header nunito-font">Github</div>
                        <div class="card-body">
                            <i class="ph-github-logo-light" style="font-size: 2.5rem; color: #4F86F7;"></i>
                            <h6><a class="list-group-item list-group-item-action" href="{{ $Profile->LinkedIn }}">Github</a></h6>
                        </div>
                    </div>
                  </div>
                </div>
              </div>
        </div>
    </div>
    @endforeach
  </main>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html