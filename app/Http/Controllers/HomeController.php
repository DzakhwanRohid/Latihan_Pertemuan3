<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
   public function index()
{
    $data = [
	      'username'        => 'Heroku',
	      'last_login'      => date('Y-m-d H:i:s'),
	      'list_pendidikan' => ['SD', 'SMP', 'SMA', 'S1', 'S2', 'S3']
	  ];
	  return view('home', $data);
}

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show(string $id)
    {
        //
    }

    public function edit(string $id)
    {
        //
    }

    public function update(Request $request, string $id)
    {
        //
    }

    public function destroy(string $id)
    {
        //
    }
}
