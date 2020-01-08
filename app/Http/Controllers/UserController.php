<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function getUsers (){
        $users = User::all();
        return response()->json($users);
    }
    public function index()
    {
        // pagination data
        $users = User::paginate(10);
        return view('users.index', ['users' => $users]);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request, $id)
    {
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = $request->password;
        $user->save();
        return response()->json($user);
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        //  return $request;
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = $request->password;
       
        $user->save();
        // return redirect()->route('users.index');
        // return response()->json($users);
        return response()->json($user);
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = User::find($id);
        return response()->json([
            'user' => $user
        ]);
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
        return response()->json($user);
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
         return $request;
        $user = User::find($id);
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = $request->password;
        $user->save();
        return response()->json($user);
        // $name = $request->name;
        // $email = $request->email;
        // $password = $request->password;
        // $user = User::find($id);
        // $user->update([
        //     'name' => $name,
        //     'email' => $email,
        //     'password' => bcrypt($password),
        // ]);
        // return response()->json([
        //     'status' => '200',
        //     'message' => 'updated',
        //     'data' => ['user' => $user],
        // ]);
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // return response()->json($id);
        //
        $user = User::find($id);
        $user->delete();
        // return redirect()->route('users.index');
        // $user = User::find($id);
        // $user->delete();
        return response()->json("ok");
    }
}
