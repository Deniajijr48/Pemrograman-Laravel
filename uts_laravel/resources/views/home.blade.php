@extends('layouts.main')

@section('container')

    <!-- Jumbotron -->
    <div class="jumbotron text-center" >
        <img src="img/{{ $image }}" alt="deni ramadhan" width="200" class="rounded-circle img-thumbnail" />
        <h1 class="display-4">Deni Ramadhan</h1>
        <p class="lead">Mahasiswa Teknik Informatika Unesa</p>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
          <path
            fill="#ffffff"
            fill-opacity="1"
            d="M0,192L40,176C80,160,160,128,240,117.3C320,107,400,117,480,144C560,171,640,213,720,202.7C800,192,880,128,960,122.7C1040,117,1120,171,1200,181.3C1280,192,1360,160,1400,144L1440,128L1440,320L1400,320C1360,320,1280,320,1200,320C1120,320,1040,320,960,320C880,320,800,320,720,320C640,320,560,320,480,320C400,320,320,320,240,320C160,320,80,320,40,320L0,320Z"
          ></path>
        </svg>
      </div>
      <!-- About -->
      <section id="about">
        <div class="container">
          <div class="row text-center fs-3 mb-3">
            <div class="col">
              <h2>About Me</h2>
            </div>
          </div>
          <div class="row justify-content-center fs-4">
            <div class="col-md-4">
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit pariatur, cum ex nihil impedit esse optio accusamus quaerat et commodi deserunt? Natus voluptatum corrupti minima eligendi fugiat iusto deserunt labore?</p>
            </div>
            <div class="col-md-4">
              <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus, illo nesciunt dignissimos autem nam laudantium. Voluptate cupiditate, doloribus sequi minima impedit aliquid adipisci mollitia quis voluptates quae esse
                temporibus quaerat, soluta minus!
              </p>
            </div>
          </div>
        </div>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
          <path
            fill="#00ffff"
            fill-opacity="1"
            d="M0,192L40,176C80,160,160,128,240,117.3C320,107,400,117,480,144C560,171,640,213,720,202.7C800,192,880,128,960,122.7C1040,117,1120,171,1200,181.3C1280,192,1360,160,1400,144L1440,128L1440,320L1400,320C1360,320,1280,320,1200,320C1120,320,1040,320,960,320C880,320,800,320,720,320C640,320,560,320,480,320C400,320,320,320,240,320C160,320,80,320,40,320L0,320Z"
          ></path>
        </svg>
      </section>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    </body>
    @endsection