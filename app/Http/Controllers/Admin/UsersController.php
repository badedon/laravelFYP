<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Candidates;
use App\Models\User;
use Illuminate\Http\Request;


class UsersController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth:sanctum', 'verified', 'is_admin']);
    }
    public function index()
    {
        //
    }
    public function usersAdmin()
    {
        $users= User::get();
        return view('\Backend\Users\user',compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function createUsers(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'password' => 'required',
            'is_admin' => 'nullable',
        ]);
        //handle file upload

        //for deleting image use unlink() function.
        //for storing image

        $users = new User();
        $users->name = $request->name;
        $users->email = $request->email;
        $users->password = $request->password;
        $users->is_admin = $request->is_admin;
        $users->save();
        return back()->with('users_created', 'Users has been created successfully!');
    }

    public function getUsers()
    {
        $users = User::orderBy('id', 'DESC')->get();
        return view('userss', compact('users'));
    }

    public function getUsersById($id)
    {
        $users = User::where('id', $id)->first();
        return view('\Backend\Users\view-users', compact('users'));
    }

    public function deleteUsers($id)
    {
        $users = User::findOrFail($id);

        $users->delete();
        return back()->with('users_deleted', 'Users has been deleted successfully');
    }


    public function editUsers($id)
    {
        $users = User::find($id);
        return view('\Backend\Users\edit-users', compact('users'));
    }

    public function updateUsers(Request $request)
    {

        $users = User::find($request->id);
        $users->name = $request->name;
        $users->username = $request->username;
        $users->password = $request->password;
        $users->year = $request->year;



        $users->update();
        return redirect('users')->with('users_updated', "Users has been updated successfully");

    }
}
