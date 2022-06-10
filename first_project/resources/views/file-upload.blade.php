<!DOCTYPE html>
<html>
<head>
  <title>Laravel 8 File Upload Example - Tutsmake.com</title>
 
  <meta name="csrf-token" content="{{ csrf_token() }}">
 
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
 
 
</head>
<body>
 
<div class="container mt-4">
 
  <h2 class="text-center">File Upload </h2>
 
      <form method="POST" enctype="multipart/form-data" id="upload-file" action="{{ url('store') }}" >
           @csrf      
          <div class="row">
 
              <div class="col-md-12">
                  <div class="form-group">
                      <input type="file" name="file" placeholder="Choose file" id="file">
                        @error('file')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                  </div>
              </div>
                
              <div class="col-md-12">
                  <button type="submit" class="btn btn-primary" id="submit">Submit</button>
              </div>
          </div>  
          {{-- <div class="alert alert-danger mt-1 mb-1">{{ $status }}</div>    --}}
      </form>
      @if ($message = Session::get('status'))
      <div class="alert alert-success">
          <p>{{ $message }}</p>
      </div>
  @endif
</div>
<table class="table">
    <thead class="thead-dark">
    <tr>
        <th scope="col">ID</th>
        <th scope="col">User name</th>

    </tr>
    </thead>
    <tbody>
    
    <tr>
      <td>{{trans('Title')}}</td>
      <td>{{trans('Title')}}</td>
     
    </tr>
    
    </tbody>
    
    </table>

</div>  
</body>
</html>