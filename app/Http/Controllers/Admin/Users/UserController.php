<?php

namespace App\Http\Controllers\Admin\Users;

use App\Http\Requests\Users\UserRequest;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

Use App\User;

class UserController extends Controller
{

    /**
     * Do not allow guest user to access methods in this class
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display the list of users
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::paginate(15);

        return view('admin.users.user_index', compact('users'));
    }

    /**
     * Display form to create a new user
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create()
    {
        return view('admin.users.user_create');
    }

    /**
     * Verify with UserRequest that the form is valid
     * Save the user in the database
     *
     * @param UserRequest $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function postCreate(UserRequest $request)
    {
        User::create($request->all());

        flash('User added !');

        return redirect()->route('userList');
    }

    public function delete($id)
    {
        $user = User::findOrFail($id);

        $user->delete($id);

        flash('Utilisateur supprimé avec succès');

        return redirect()->route('userList');
    }
}
