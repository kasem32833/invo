<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Client::latest()->paginate(10);

        return view('client.index')->with('clients', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('client.create');
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
            'name' => 'required|max:255|string',
            'username' => 'required|max:255|string|unique:clients,username',
            'email' => 'required|max:255|string|email|unique:clients,email',
            'phone' => 'max:255|string',
            'country' => 'max:255|string',
            'status' => 'not_in:none|string|',
            'thumbnail' => 'image',

        ]);

        $thumb = null;

        if(!empty($request->file('thumbnail'))){
            $thumb = time() . '-' . $request->file('thumbnail')->getClientOriginalName();
            $request->file('thumbnail')->storeAs('public/uploads', $thumb);
        }



        // =============a method for sending data to database===========

        Client::create([
            'name'  => $request->name,
            'username'  => $request->username,
            'email'  => $request->email,
            'phone' => $request->phone,
            'country' => $request->country,
            'thumbnail' => $thumb,
            'status' => $request->status,
        ]);

        //==============another new method===============
        // $client = new Client();

        // $client->name = $request->name;
        // $client->username = $request->username;
        // $client->email = $request->email;
        // $client->phone = $request->phone;
        // $client->country = $request->country;
        // $client->status = $request->status;

        // $client->save();


        // Client::create($request->only(['name','username','email','phone','country','status']));

         return redirect()->route('client.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function show(Client $client)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function edit(Client $client)
    {
        return view('client.edit')->with([
            'client' => $client
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Client $client)
    {
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function destroy(Client $client)
    {
        //
    }
}
