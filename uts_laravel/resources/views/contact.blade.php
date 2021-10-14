@extends('layouts.main')

@section('container')
<section id="contact"> 
    <div class="container">
        <div class="row text-center mb-3">
            <div class="col">
                <h2>Contact Me</h2>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-6">
                <form>
                    <div class="mb-3">
                      <label for="Name" class="form-label">Nama Lengkap</label>
                      <input type="Name" class="form-control" id="Name" aria-describedby="Name">
                      </div>
                    <div class="mb-3">
                        <label for="Email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="Email" aria-describedby="email">
                        </div>
                        
                    <div class="mb-3">
                        <label for="pesan" class="form-label">Pesan</label>
                        <textarea class="form-control" id="pesan" rows="3"></textarea>
                        </div>
                      
                    <button type="submit" class="btn btn-primary">Kirim</button>
                  </form>
            </div>
        </div>
    </div>
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#0d6efd" fill-opacity="1" d="M0,128L34.3,122.7C68.6,117,137,107,206,85.3C274.3,64,343,32,411,42.7C480,53,549,107,617,117.3C685.7,128,754,96,823,101.3C891.4,107,960,149,1029,165.3C1097.1,181,1166,171,1234,160C1302.9,149,1371,139,1406,133.3L1440,128L1440,320L1405.7,320C1371.4,320,1303,320,1234,320C1165.7,320,1097,320,1029,320C960,320,891,320,823,320C754.3,320,686,320,617,320C548.6,320,480,320,411,320C342.9,320,274,320,206,320C137.1,320,69,320,34,320L0,320Z"></path></svg>
</section>
@endsection