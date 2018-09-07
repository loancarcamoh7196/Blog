<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

use Laracasts\Flash\Flash;
use App\Http\Requests\UserRequest;



class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //Lista indexada de usuarios

        $users = User::orderBy('id','ASC')->paginate(20);

        return view('admin.users.index')->with('users',$users);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //Agregar un nuevo usuario

        return view('admin.users.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(UserRequest $request)
    {
        //
        
        $user = new User($request->all());
        $user->password = bcrypt($request->password);
        try
        {
            $user->save();
            Flash("Se ha registrado el usuario: ".$user->name." de forma exitosa.",'sucess')->important();  
        } catch(Exception $e){
            Flash("Error: ".$e,'warning')->important();  
        }
        return redirect()->route('users.index');
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

        $user = User::find($id);

        return view('admin.users.edit')->with('user',$user);  
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

        $user = User::find($id);

        $user->name = $request->name;
        $user->email = $request->email;
        $user->type =  $request->type;

        $user->save();

        Flash("Se ha editado exitosamente usuario : ".$user->name,'sucess')->important();

        return redirect()->route('users.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::find($id);

        $user->delete();

        Flash("Se ha borrado existosamente el usuario: ".$user->name,'error')->important();

        return redirect()->route('users.index');
    }
}
