@extends('layout/main')
 
@section('title', 'hayPedia | hayVee')

@section('container')
   <!-- About -->
   <div class="container">
      <div class="row text-center mt-5">
        <div class="col">
          <h2>hayPedia</h2>
        </div>
      </div>

      <div class="row text-center mt-3">
        <div class="col">
          <p>Temukan berbagai artikel menarik dari hayVee tentang kesehatan seksual dan kesehatan mental yang sudah dikurasi oleh profesional.</p>
        </div>
      </div>
    </div>
    <!-- Akhir About -->

    <!-- hayPedia -->
    <section id="hayPedia">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-3 mb-3">
            <div class="card mt-3">
              <img src="img/hayPedia/dis1.jpg" class="card-img-top" alt="...">
              <div class="card-body text-center">
                <a href="{{ url('blog') }}" class="card-text">Some quick example text to build on the card title</a>
              </div>
            </div>
          </div>
          <div class="col-md-3 mb-3">
            <div class="card mt-3">
              <img src="img/hayPedia/dis1.jpg" class="card-img-top" alt="...">
              <div class="card-body text-center">
                <a href="{{ url('blog') }}" class="card-text">Some quick example text to build on the card title</a>
              </div>
            </div>
          </div>
          <div class="col-md-3 mb-3">
            <div class="card mt-3">
              <img src="img/hayPedia/dis1.jpg" class="card-img-top" alt="...">
              <div class="card-body text-center">
                <a href="{{ url('blog') }}" class="card-text">Some quick example text to build on the card title</a>
              </div>
            </div>
          </div>
          <div class="col-md-3 mb-3">
            <div class="card mt-3">
              <img src="img/hayPedia/dis1.jpg" class="card-img-top" alt="...">
              <div class="card-body text-center">
                <a href="{{ url('blog') }}" class="card-text">Some quick example text to build on the card title</a>
              </div>
            </div>
          </div>
          <div class="col-md-3 mb-3">
            <div class="card mt-3">
              <img src="img/hayPedia/dis1.jpg" class="card-img-top" alt="...">
              <div class="card-body text-center">
                <a href="{{ url('blog') }}" class="card-text">Some quick example text to build on the card title</a>
              </div>
            </div>
          </div>
          <div class="col-md-3 mb-3">
            <div class="card mt-3">
              <img src="img/hayPedia/dis1.jpg" class="card-img-top" alt="...">
              <div class="card-body text-center">
                <a href="{{ url('blog') }}" class="card-text">Some quick example text to build on the card title</a>
              </div>
            </div>
          </div>
          <div class="col-md-3 mb-3">
            <div class="card mt-3">
              <img src="img/hayPedia/dis1.jpg" class="card-img-top" alt="...">
              <div class="card-body text-center">
                <a href="{{ url('blog') }}" class="card-text">Some quick example text to build on the card title</a>
              </div>
            </div>
          </div>
          <div class="col-md-3 mb-3">
            <div class="card mt-3">
              <img src="img/hayPedia/dis1.jpg" class="card-img-top" alt="...">
              <div class="card-body text-center">
                <a href="{{ url('blog') }}" class="card-text">Some quick example text to build on the card title</a>
              </div>
            </div>
          </div>
          <div class="col-md-3 mb-3">
            <div class="card mt-3">
              <img src="img/hayPedia/dis1.jpg" class="card-img-top" alt="...">
              <div class="card-body text-center">
                <a href="{{ url('blog') }}" class="card-text">Some quick example text to build on the card title</a>
              </div>
            </div>
          </div>
          <div class="col-md-3 mb-3">
            <div class="card mt-3">
              <img src="img/hayPedia/dis1.jpg" class="card-img-top" alt="...">
              <div class="card-body text-center">
                <a href="{{ url('blog') }}" class="card-text">Some quick example text to build on the card title</a>
              </div>
            </div>
          </div>
          <div class="col-md-3 mb-3">
            <div class="card mt-3">
              <img src="img/hayPedia/dis1.jpg" class="card-img-top" alt="...">
              <div class="card-body text-center">
                <a href="{{ url('blog') }}" class="card-text">Some quick example text to build on the card title</a>
              </div>
            </div>
          </div>
          <div class="col-md-3 mb-3">
            <div class="card mt-3">
              <img src="img/hayPedia/dis1.jpg" class="card-img-top" alt="...">
              <div class="card-body text-center">
                <a href="{{ url('blog') }}" class="card-text">Some quick example text to build on the card title</a>
              </div>
            </div>
          </div>

      </div>
    </section>
    <!-- Akhir hayPedia -->

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