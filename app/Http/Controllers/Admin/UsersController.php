<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Candidates;
use App\Models\Users;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

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
        $users= Users::get();
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
            'username' => 'required',
            'password' => 'required',
            'is_admin' => 'nullable',
        ]);
        //handle file upload

        //for deleting image use unlink() function.
        //for storing image

        $users = new Users();
        $users->name = $request->name;
        $users->username = $request->username;
        $users->password = $request->password;
        $users->is_admin = $request->is_admin;
        $users->save();
        return back()->with('users_created', 'Users has been created successfully!');
    }

    public function getUsers()
    {
        $users = Users::orderBy('id', 'DESC')->get();
        return view('userss', compact('users'));
    }

    public function getUsersById($id)
    {
        $users = Users::where('id', $id)->first();
        return view('\Backend\Users\view-users', compact('users'));
    }

    public function deleteUsers($id)
    {
        $users = Users::findOrFail($id);

        $users->delete();
        return back()->with('users_deleted', 'Users has been deleted successfully');
    }


    public function editUsers($id)
    {
        $users = Users::find($id);
        return view('\Backend\Users\edit-users', compact('users'));
    }

    public function updateUsers(Request $request)
    {

        $users = Users::find($request->id);
        $users->name = $request->name;
        $users->username = $request->username;
        $users->password = $request->password;
        $users->year = $request->year;



        $users->update();
        return redirect('users')->with('users_updated', "Users has been updated successfully");

    }
}
