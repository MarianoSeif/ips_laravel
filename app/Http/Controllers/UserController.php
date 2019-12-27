<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Http\Response;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getUsers()
    {
        $users = User::paginate(10);
        return view('user.user_index', ['users'=>$users,]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function createUser()
    {
        return view('user.user_create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function addUser(Request $request)
    {
        $request->validate([
           'userName'=>'required',
           'name'=>'required',
           'lastName'=>'required',
           'email'=>'required',
           'nationality'=>'required'
        ]);

        $user = new User();
        $user->userName = $request->input('userName');
        $user->name = $request->input('name');
        $user->lastName = $request->input('lastName');
        $user->email = $request->input('email');
        $user->nationality = $request->input('nationality');

        $user->save();
        return redirect()->route('getUsers')->with('status', 'User created!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  User  $user
     * @return \Illuminate\Http\Response
     */
    public function editUser(User $user)
    {
        return view('user.user_edit', ['user'=>$user]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  User  $user
     * @return \Illuminate\Http\Response
     */
    public function updateUser(Request $request, User $user)
    {
        $request->validate([
            'userName'=>'required',
            'name'=>'required',
            'lastName'=>'required',
            'email'=>'required',
            'nationality'=>'required',
        ]);

        $user->userName = $request->input('userName');
        $user->name = $request->input('name');
        $user->lastName = $request->input('lastName');
        $user->email = $request->input('email');
        $user->nationality = $request->input('nationality');

        $user->save();

        return redirect()->route('getUsers')->with('status', 'User data updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param User $user
     * @return \Illuminate\Http\Response
     * @throws \Exception
     */
    public function delUser(User $user)
    {
        $user->delete();
        return redirect()->route('getUsers')->with('status', 'User Deleted');
    }

    /**
     * Search in the database.
     *
     */
    public function searchUser(Request $request)
    {
        $searchKey=$request->input('value');
        $users=User::where('userName', 'LIKE', '%'.$searchKey.'%')
            ->orWhere('name', 'LIKE', '%'.$searchKey.'%')
            ->orWhere('lastName', 'LIKE', '%'.$searchKey.'%')
            ->orWhere('email', 'LIKE', '%'.$searchKey.'%')
            ->orWhere('nationality', 'LIKE', '%'.$searchKey.'%')
            ->paginate(10);

        if (!($users->count())){
            return view('notfound');
        }
        return view('user.user_index', ['users'=>$users]);
    }
}
