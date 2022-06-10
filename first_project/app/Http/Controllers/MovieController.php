<?php

namespace App\Http\Controllers;
use App\Models\Movie;
use Illuminate\Http\Request;

class MovieController extends Controller
{
    public function index()
{
    $data['movies'] = Movie::orderBy('id','desc')->paginate(5);
    return view('movies.index', $data);
    }





    public function create()
    {
    return view('movies.create');
    }

    public function store(Request $request)
{



$request->validate([
'movie_name' => 'required',
'movie_description' => 'required',
'movie_genre' => 'required',
'image' => 'required|mimes:png,jpeg,jpg,jfif,webp|max:2048'
]);

 
$request->file('image')->storeAs('public/movies',$request->image->getClientOriginalName());

$movie = new Movie;
$movie->movie_name = $request->movie_name;
$movie->movie_description = $request->movie_description;
$movie->movie_genre = $request->movie_genre;
$movie->movie_image_name=$request->image->getClientOriginalName();
$movie->movie_image_path= $request->file('image')->store('public/movies');
$movie->save();
return redirect()->route('movies.index')
->with('success','Movie has been created successfully.');
}


public function show(Movie $movie)
{
return view('movies.show',compact('movie'));
}




public function edit(Movie $movie)
{
return view('movies.edit',compact('movie'));
}

public function update(Request $request, $id)
{
$request->validate([
    'movie_name' => 'required',
    'movie_description' => 'required',
    'image' => 'required|mimes:png,jpeg,jpg,jfif,webp|max:2048',
    'movie_genre' => 'required'
]);

$request->file('image')->storeAs('public/movies',$request->image->getClientOriginalName());

$movie = Movie::find($id);
$movie->movie_name = $request->movie_name;
$movie->movie_image_name=$request->image->getClientOriginalName();
$movie->movie_image_path= $request->file('image')->store('public/movies');
$movie->movie_description = $request->movie_description;
$movie->movie_genre = $request->movie_genre;
$movie->save();
return redirect()->route('movies.index')
->with('success','Movie Has Been updated successfully');
}


public function destroy(Movie $movie)
{
$movie->delete();
return redirect()->route('movies.index')
->with('success','Movie has been deleted successfully');
}
}












