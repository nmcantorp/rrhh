<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Persona;

class UserController extends Controller
{
    public function index()
    {
    	$personas = Persona::orderBy('id_persona','ASC')->paginate(5);

    	return view('admin.index')->with('personas', $personas);
    }

    public function show($id)
    {
    	$persona = Persona::find($id);

    	return view('admin.show')->with('persona',$persona);
    }
}
