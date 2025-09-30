<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

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
    public function showSignUpForm()
    {
        return view('simple-home');
    }

    public function signup(Request $request)
    {
        $request->validate([
            'name' => 'required|max:255',
            'email' => ['required', 'email'],
            'password' => [
                'required',
                'string',
                'min:8',
                'regex:/[a-z]/',
                'regex:/[A-Z]/',
                'regex:/[0-9]/',
            ],
        ]);
        $pageData['name']     = $request->name;
        $pageData['email']    = $request->email;
        $pageData['password'] = $request->password;

        return view('signup-success', $pageData);
    }
}
