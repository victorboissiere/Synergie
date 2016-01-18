<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Auth, Session;

class BasicAPIController extends Controller
{
    /**
     * Check if the user is logged in.
     *
     * @return \Illuminate\Http\Response
     */
    public function checkauth()
    {
        return response()->json([
          'guest' => Auth::guest(), // check if user logged in
          'dir'   => env('UPLOAD_DIR', 'files') //upload dir for file manager
        ]);
    }

}
