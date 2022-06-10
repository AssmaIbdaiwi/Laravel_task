<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Laravel 8 CRUD Tutorial From Scratch</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" >
</head>
<style>
th{
    color:red;
    background-color: rgba(0, 0, 0, 0.929)
}
td{
    color:white;
    background-color: rgba(0, 0, 0, 0.929)
}
h2{
    color:white;  
    padding: 10px;
}
#delete{
   margin-right: 10px;
   margin-left: 50px;
}


</style>
<body style="background-image: url('https://www.phoneworld.com.pk/wp-content/uploads/2020/10/seo-watch-free-link-preview.jpg');background-repeat: no-repeat;  background-attachment: fixed;
background-size: cover;">
{{-- navbar --}}
<nav class="navbar navbar-dark justify-content-between">
    <a class="navbar-brand" href="#">
    <img src="https://gfx4arab.com/wp-content/uploads/2020/09/Netflix-Logo.wine_.png"style="width:100px;"></a>
    <form class="form-inline">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </nav>

{{--  --}}
<div class="container mt-2">
<div class="row">
<div class="col-lg-12 margin-tb">
<div class="pull-left">
<h2>Movies  </h2>
</div>
<div class="pull-right mb-2">
<a class="btn btn-success" href="{{ route('movies.create') }}"> Add Movie</a>
</div>
</div>
</div>
@if ($message = Session::get('success'))
<div class="alert alert-success">
<p>{{ $message }}</p>
</div>
@endif
<table class="table table-bordered">
<tr>
{{-- <th>S.No</th> --}}
<th>Movie name</th>
<th>Movie image</th>
<th>Movie description</th>
<th>Movie genre</th>
<th width="280px">Action</th>
</tr>

@foreach ($movies as $movie)
<tr>
{{-- <td>{{ $movie->id }}</td> --}}
<td>{{ $movie->movie_name }}</td>
<td>   <img src="{{asset('storage/movies/'.$movie->movie_image_name)}}" width="70" height="70" alt=""></td>
<td>{{ Str::limit($movie->movie_description,30) }}<a href="{{route('movies.show',$movie->id)}}">see more</a></td>
<td>{{ $movie->movie_genre }}</td>
<td>

<form action="{{ route('movies.destroy',$movie->id) }}" method="Post">
 
<a class="btn btn-primary edit" id="delete" href="{{ route('movies.edit',$movie->id) }}">Edit</a>
@csrf
@method('DELETE')
<button type="submit"  class="btn btn-danger">Delete</button>
</form>
</td>
</tr>
@endforeach
</table>
{!! $movies->links() !!}
</body>
</html>