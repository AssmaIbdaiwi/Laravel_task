@extends('master')
@section('content')

<form method="get" action="calculator">
@csrf
    <div class="form-row">
      <div class="form-group col-md-6">
        <label for="inputEmail4">First number</label>
        <input type="text" class="form-control" id="firstnumber" name="firstnumber" 
        
       value= "<?= $_GET['firstnumber']; ?>">
      </div>
      <div class="form-group col-md-6">
        <label for="inputPassword4">Second number</label>
        <input type="text" class="form-control" id="secondnumber" name="secondnumber"
        value= "<?= $_GET['secondnumber']; ?>">
      </div>
    </div>
    
    <input name="Math" type="submit" class="btn btn-primary" value="add" />
    <input name="Math" type="submit" class="btn btn-primary" value="sub" />
    <input name="Math" type="submit" class="btn btn-primary" value="mult" />
    <input name="Math" type="submit" class="btn btn-primary" value="div" />


  </form>

<p>{{$results}}</p>

@endsection