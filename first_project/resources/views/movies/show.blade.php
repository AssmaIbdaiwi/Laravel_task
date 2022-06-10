<!doctype html>
<html lang="en">

<head>
  <title>Title</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<style>
  h5 {
    color: red;
    background-color: rgba(0, 0, 0, 0.929)
  }

  td {
    color: white;
    background-color: rgba(0, 0, 0, 0.929)
  }

  h2 {
    color: ;
    padding: 10px;
  }

  #c {
    margin-left: 3%;
    margin-top: 15%
  }

  #bt {
    margin-left: 2%;
    margin-bottom: 2%
  }
</style>

<body style="background-image: url('{{asset('storage/movies/'.$movie->movie_image_name)}}');background-repeat: no-repeat;  background-attachment: fixed;
  background-size: cover;">
  {{-- navbar --}}
  <nav class="navbar navbar-dark justify-content-between" style="background-color:black;">
    <a class="navbar-brand" href="#">
      <img src="https://upload.wikimedia.org/wikipedia/commons/7/7a/Logonetflix.png" width=100></a>
    <form class="form-inline">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </nav>


      <div class="col-lg-12 margin-tb">
        <div class="pull-left">
          <h2> </h2>
        </div>

        <div class="card w-50" style="width: 20rem;background-color: rgba(0, 0, 0, 0.929); height:250px;color:white"
          id="c">
          {{-- <img src="" class="card-img-top" alt="..."> --}}
          <div class="card-body">
            <h5 class="card-title">{{ $movie->movie_name }}</h5>
            <ul class="list-group list-group-flush">
              <li class="list-group-item" style="background-color: rgba(0, 0, 0, 0.929);color:white;border-color:white">
                {{ $movie->movie_genre }}</li>
            </ul>
            <p class="card-text">{{ $movie->movie_description }}</p>
          </div>
          <div class="pull-left">
            <a class="btn btn-outline-primary" href="{{ route('movies.index') }}" enctype="multipart/form-data" id="bt">
              Back</a>
          </div>
        </div>
      </div>
        {{-- {!! $movies->links() !!} --}}
        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
          integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
        </script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
          integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
        </script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
          integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
        </script>
</body>

</html>