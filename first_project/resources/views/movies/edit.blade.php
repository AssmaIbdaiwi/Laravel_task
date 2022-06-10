<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Edit Movie Form</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" >
</head>
<style>
    strong{
        color:red;
        padding: 10px;
        /* background-color: rgba(0, 0, 0, 0.929) */
    }
    form{
        color:white;
        background-color: rgba(0, 0, 0, 0.871)
        
    }
    h2{
        color:white;  
        padding: 10px;
    }
    #image{
        color:white;
        background-color: rgba(0, 0, 0, 0.929) ;
        padding: 10px; 
    }
    #name{
        color:white;
        padding: 10px;
        background-color: rgba(0, 0, 0, 0.929)  
    }
    #desc{
        color:white;
        padding: 10px;
        background-color: rgba(0, 0, 0, 0.929)  
    }
    #gen{
        color:white;
        padding: 10px;
        background-color: rgba(0, 0, 0, 0.929)  
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
<div class="container mt-2">
<div class="row">
<div class="col-lg-12 margin-tb">
<div class="pull-left">
<h2>Edit Movie</h2>
</div>
<div class="pull-right">
<a class="btn btn-primary" href="{{ route('movies.index') }}" enctype="multipart/form-data"> Back</a>
</div>
</div>
</div>
@if(session('status'))
<div class="alert alert-success mb-1 mt-1">
{{ session('status') }}
</div>
@endif
<form action="{{ route('movies.update',$movie->id) }}" method="POST" enctype="multipart/form-data">
@csrf
@method('PUT')
<div class="row">
<div class="col-xs-12 col-sm-12 col-md-12">
<div class="form-group">
<strong>Movie Name:</strong>
<input type="text" name="movie_name" id="name" value="{{ $movie->movie_name }}" class="form-control" placeholder="Movie Name">
@error('movie_name')
<div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
@enderror
</div>
</div>
{{--  --}}

<div class="col-xs-12 col-sm-12 col-md-12">
    <div class="form-group">
        <strong>Movie Image:</strong>
        <input type="file" name="image" placeholder="Choose image" id="image" class="form-control" value="{{ $movie->movie_image_path, $movie->movie_image_name}}">
          @error('image')
          <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
          @enderror
    </div>
</div>






{{--  --}}
<div class="col-xs-12 col-sm-12 col-md-12">
<div class="form-group">
<strong>Movie Description:</strong>
<input type="text" name="movie_description" id="desc" class="form-control" placeholder="Movie Description" value="{{ $movie->movie_description }}">
@error('movie_description')
<div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
@enderror
</div>
</div>
<div class="col-xs-12 col-sm-12 col-md-12">
<div class="form-group">
<strong>Movie Genre:</strong>
<input type="text" name="movie_genre" id="gen" value="{{ $movie->movie_genre }}" class="form-control" placeholder="Movie Genre">
@error('movie_genre')
<div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
@enderror
</div>
</div>
<button type="submit" class="btn btn-primary ml-3">Submit</button>
</div>
</form>
</div>
</body>
</html>