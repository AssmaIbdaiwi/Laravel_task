<?php

namespace App\Http\Controllers;
use App\Models\users;
use Illuminate\Http\Request;

class userscontroller extends Controller
{
 /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getall()
    {
       $data=users::all();
       return view('user',compact('data'));

    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getid()
    {$id=request('id');
       $data=users::where('id',$id)-> first();
       return view('getid',compact('data'));

    }





}
