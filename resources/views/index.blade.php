@extends('layout/main')
 
@section('title', 'Home | hayVee')

@section('container')
    <!-- About -->
    <div class="container">
      <div class="row text-center mt-5">
        <div class="col"> 
          <h2>About Us</h2>
        </div>
      </div>

      <div class="row text-center mt-3">
        <div class="col">
          <p>Sejak didirikan pada 2019, hayVee berharap tidak hanya menjadi platform edukasi seputar kesehatan seksual dan mental khususnya isu mengenai HIV/AIDS, namun juga menjadi ruang aman sekaligus teman untuk hayFriends berbagi kisah dan dapat mengaktualisasikan diri tanpa harus resah akan diskriminasi. </p>
          <p>HayVee berkomitmen untuk menjadi wadah yang inklusif bagi hayFriends di manapun berada dengan berbagai latar belakang serta pilihan yang berbeda. Hingga hari ini hayVee selalu terbuka untuk tetap menjaga semangat kolaborasi baik dengan akademisi, praktisi, komunitas, sahabat penyintas, lembaga pemerintahan maupun organisasi kemasyarakatan. Demi satu misi yang sama, Indonesia tanpa stigma. </p>
        </div>
      </div>
    </div>
    <!-- Akhir About -->

    <!-- hayPedia -->
    <section id="hayPedia">
      <div class="container">
        <div class="row text-center mt-5 mb-3">
          <div class="col">
            <h2>hayPedia</h2>
          </div>
        </div>
        <div class="row justify-content-center">
          <div class="col-md-4 mb-3">
            <div class="card mt-3">
              <img src="img/hayPedia/dis1.jpg" class="card-img-top" alt="...">
              <div class="card-body">
              <a href="{{ url('blog') }}" class="card-text">Some quick example text to build on the card title</a>
              </div>
            </div>
          </div>
          <div class="col-md-4 mb-3">
            <div class="card mt-3">
              <img src="img/hayPedia/dis1.jpg" class="card-img-top" alt="...">
              <div class="card-body">
              <a href="{{ url('blog') }}" class="card-text">Some quick example text to build on the card title</a>
              </div>
            </div>
          </div>
          <div class="col-md-4 mb-3">
            <div class="card mt-3">
              <img src="img/hayPedia/dis1.jpg" class="card-img-top" alt="...">
              <div class="card-body">
              <a href="{{ url('blog') }}" class="card-text">Some quick example text to build on the card title</a>
              </div>
            </div>
          </div>
          <div class="col-md-4 mb-3">
            <div class="card mt-3">
              <img src="img/hayPedia/dis1.jpg" class="card-img-top" alt="...">
              <div class="card-body">
              <a href="{{ url('blog') }}" class="card-text">Some quick example text to build on the card title</a>
              </div>
            </div>
          </div>
          <div class="col-md-4 mb-3">
            <div class="card mt-3">
              <img src="img/hayPedia/dis1.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                 <a href="{{ url('blog') }}" class="card-text">Some quick example text to build on the card title</a>
              </div>
            </div>
          </div>
          <div class="col-md-4 mb-3">
            <div class="card mt-3">
              <img src="img/hayPedia/dis1.jpg" class="card-img-top" alt="...">
              <div class="card-body">
              <a href="{{ url('blog') }}" class="card-text">Some quick example text to build on the card title</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Akhir hayPedia -->

    <!-- hayDoc -->
    <section id="hayDoc">
      <div class="container">
        <div class="row text-center mt-5 mb-3">
          <div class="col">
            <h2>hayTalk</h2>
          </div>
        </div>
 
        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="img/hayPedia/dis1.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="img/hayPedia/dis1.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="img/hayPedia/dis1.jpg" class="d-block w-100" alt="...">
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-label="Slide 4"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
    <a href="{{ url('hayTalk') }}#hayTalk">
    <img src="img/hayPedia/dis1.jpg" class="d-block w-100" alt="...">
    </a>
      
    </div>
    <div class="carousel-item">
    <a href="{{ url('hayTalk') }}#hayTalk">
    <img src="img/hayPedia/dis1.jpg" class="d-block w-100" alt="...">
    </a>
    </div>
    <div class="carousel-item">
    <a href="{{ url('hayTalk') }}#hayTalk">
    <img src="img/hayPedia/dis1.jpg" class="d-block w-100" alt="...">
    </a>
    </div>
    <div class="carousel-item">
    <a href="{{ url('hayTalk') }}#hayTalk">
    <img src="img/hayPedia/dis1.jpg" class="d-block w-100" alt="...">
    </a>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
    </section>
    <!-- Akhir hayDoc -->

    <!-- Testimonial -->
    <section id="testimonial">
      <div class="container mb-5">
        <div class="row text-center mt-5 mb-3">
          <div class="col">
            <h2>Testimonial</h2>
          </div>
        </div>
      </div>
      <div class="row justify-content-center ms-4">
        <div class="col-md-4 m-3">
          <div class="card" style="width: 18rem;">
            <div class="card-body">
              <p class="card-text">"Terima kasih sudah menyediakan platform ini. Sangat senang akhirnya bisa ngeluarin keluh kesah dengan psikolog yang sangat atentif. Terima kasih banyak tim HayVee!”</p>
              <h6 class="card-subtitle mb-2 text-muted">FA, 27</h6>
            </div>
          </div>
        </div>
        <div class="col-md-4 mb-3">
          <div class="card" style="width: 18rem;">
            <div class="card-body">
              <p class="card-text">“Sangat membantu untuk proses konsultasi apalagi mengenai hal hal yang mungkin bagi sebagian orang malu untuk ke dokter secara langsung.”</p>
              <h6 class="card-subtitle mb-2 text-muted">LA, 34</h6>
            </div>
          </div>
        </div>
        <div class="col-md-4 mb-3">
          <div class="card" style="width: 18rem;">
            <div class="card-body">
              <p class="card-text">"Ruang yang aman ini nggak tiap hari bisa aku dapetin untuk sekadar berkeluh kesah/berbagi pengalaman perihal isu-isu sensitif di kehidupan sehari-hari. Haytalk memfasilitasi hal tsb”</p>
              <h6 class="card-subtitle mb-2 text-muted">AG, 28</h6>
            </div>
          </div>
        </div>
        <div class="col-md-4 mb-3">
          <div class="card" style="width: 18rem;">
            <div class="card-body">
              <p class="card-text">"Jujur seneng banget. Ngerasa lega akhirnya punya platform buat cerita dan bersyukur banget ga ada yang judge selama cerita :)"</p>
              <h6 class="card-subtitle mb-2 text-muted">As, 23</h6>
            </div>
          </div>
        </div>
        <div class="col-md-4 mb-3">
          <div class="card" style="width: 18rem;">
            <div class="card-body">
              <p class="card-text">"Merasa dapet pandangan2 baru dari cerita orang - orang, dan ngerasa gak sendiri untuk berjuang membenahi diri"</p>
              <h6 class="card-subtitle mb-2 text-muted">NA, 22</h6>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Akhir Testimonial -->

    <!-- Pagination -->
    <nav aria-label="Page navigation example">
      <ul class="pagination justify-content-center">
        <li class="page-item">
          <a class="page-link" href="#" aria-label="Previous">
            <span aria-hidden="true">&laquo;</span>
          </a>
        </li>
        <li class="page-item"><a class="page-link" href="#">1</a></li>
        <li class="page-item"><a class="page-link" href="#">2</a></li>
        <li class="page-item"><a class="page-link" href="#">3</a></li>
        <li class="page-item">
          <a class="page-link" href="#" aria-label="Next">
            <span aria-hidden="true">&raquo;</span>
          </a>
        </li>
      </ul>
    </nav>
    <!-- Akhir Pagination -->
    @endsection
