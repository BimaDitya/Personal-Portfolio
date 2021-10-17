<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap Contributors">
    <meta name="generator" content="Hugo 0.88.1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">   
    <title>Bima Aditya | {{ $Title }}</title>

    <link href="/Style/Landing.css" rel="stylesheet">
  </head>
  <body>   
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
              <a class="btn btn-outline-light mx-2 {{ ($Title === "Home") ? 'active' : '' }}" href="/">Home</a>
            </li>
            <li class="nav-item">
              <a class="btn btn-outline-light mx-2 {{ ($Title === "Profile") ? 'active' : '' }}" href="/Profile">Profile</a>
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
    @foreach ($Landings as $Landing)  
    <div class="container my-5">
        <div class="row p-4 d-flex justify-content-between rounded-5 shadow-sm">
          <div class="col-lg-7 p-3 p-lg-5">
              <h2 class="josefin-font josefin-color display-6 lh-sm fw-bold">Hi, I'm {{ $Landing->Name }}</h2>
              <p class="nunito-font manual-justify lh-sm lead fs-6 text-capitalize">{{ $Landing->Desc }}</p>
              <div class="d-grid d-md-flex justify-content-md-start">
                <a class="btn btn-outline-primary btn-md px-4" href="/Profile">See More</a>
              </div>
            </div>
          <div class="col-md-4 d-flex justify-content-start">
            <img class="img-fluid rounded-circle" src="storage/Img/Profile.JPEG" alt="Photo Profile" width="300">
          </div>
        </div>
    </div>
    <div class="container-fluids text-dark px-4 py-5 text-start" style="background-color: #4F86F7">
        <div class="p-4">
          <h2 class="col-lg-5 josefin-font josefin-color-1 display-6 fw-bold text-start">Gallery</h2>
          <div class="col mt-4 mx-auto">
            <div class="nunito-font row">
              <div class="col-sm-6">
                <div class="card shadow-sm">
                  <img src="/storage/Img/Photo_1.JPEG" class="p-2 card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="fw-bold card-title">Lonely Sprout</h5>
                  </div>
                </div>
              </div>
              <div class="col-sm-6">
                <div class="card shadow-sm">
                  <img src="/storage/Img/Photo_2.JPEG" class="p-2 card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="fw-bold card-title">Cityscape</h5>
                  </div>
                </div>
              </div>
            </div>
            <div class="nunito-font row">
              <div class="col-sm-6">
                <div class="card mt-4 shadow-sm">
                  <img src="/storage/Img/Photo_3.JPEG" class="p-2 card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="fw-bold card-title">Banner When Evening</h5>
                  </div>
                </div>
              </div>
              <div class="col-sm-6">
                <div class="card mt-4 shadow-sm">
                  <img src="/storage/Img/Photo_4.JPEG" class="p-2 card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="fw-bold card-title">Bus Stop Sign</h5>
                  </div>
                </div>
              </div>
            </div>
            <div class="nunito-font row">
              <div class="col-sm-6">
                <div class="card mt-4 shadow-sm">
                  <img src="/storage/Img/Photo_5.JPEG" class="p-2 card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="fw-bold card-title">White Light</h5>
                  </div>
                </div>
              </div>
              <div class="col-sm-6">
                <div class="card mt-4 shadow-sm">
                  <img src="/storage/Img/Photo_6.JPEG" class="p-2 card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="fw-bold card-title">My Workspace</h5>
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