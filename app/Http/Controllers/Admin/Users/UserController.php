<?php

namespace App\Http\Controllers\Admin\Users;

use App\Http\Requests\Users\UserRequest;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

Use App\User;
use Illuminate\Support\Facades\Auth;

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
    public function store(UserRequest $request)
    {
        User::create($request->all());

        flash('Utilisateur créé avec succès');

        return redirect()->route('admin-users.index');
    }

    /**
     * Display form to edit user
     *
     * @param $id
     */
    public function edit($id)
    {

    }

    /**
     * Send modified data
     *
     * @param UserRequest $request
     */
    public function update(UserRequest $request)
    {

    }


    /**
     * Delete user
     *
     * @param $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy($id)
    {
        $user = User::find($id);

        if (is_null($user))
        {
            return response()->json([
                'message' => 'Utilisateur introuvable'
            ], 400);
        }
        else if ($user->id == Auth::id())
        {
            return response()->json([
                'message' => 'Vous ne pouvez pas vous supprimer'
            ], 400);
        }

        $user->delete();

        return response()->json([
            'message' => 'Utilisateur supprimé avec succès'
        ], 200);
    }
}
