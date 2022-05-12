<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Hash;
use App\Models\Users;
use App\Models\adresses;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('login');
    }
    public function profil()
    {
        return view('profil');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $adresses = Adresses:: all();
        return view('sign',compact('adresses'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nom'=>'required|alpha',
            'prenom'=>'required|alpha',
            'pseudo'=>'required|alpha|min:5|max:10',
            'date'=>'required',
            'email'=>'required',
            'adresse'=>'required',
            'password' => 'required|confirmed|min:6'
        ]);

        $user = new Users();
        $user->nom = request('nom');
        $user->prenom = request('prenom');
        $user->date = request('date');
        $user->pseudo = request('pseudo');
        $user->email = request('email');
        $user->password = hash::make(request('password')) ;
        $user->adresse = request('adresse');
        $user->save();

       return redirect('login')->with('message','Success!!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
