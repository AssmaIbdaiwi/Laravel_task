<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
      
<table class="table">
<thead class="thead-dark">
<tr>
    <th scope="col">ID</th>
    <th scope="col">User name</th>
    <th scope="col">Email</th>
</tr>
</thead>
<tbody>
  @foreach ($Registration as $registration)
  <tr>
      <td>{{ ++$i }}</td>
      <td>{{ $registration->name }}</td>
      <td>{{ $registration->email }}</td>
      <td>
          <form action="{{ route('registration.destroy',$registration->id) }}" method="POST">

              <a class="btn btn-info" href="{{ route('registration.show',$registration->id) }}">Show</a>

              <a class="btn btn-primary" href="{{ route('registration.edit',$registration->id) }}">Edit</a>

              @csrf
              @method('DELETE')

              <button type="submit" class="btn btn-danger">Delete</button>
          </form>
      </td>
  </tr>
  @endforeach

</tbody>

</table>