<?php

namespace App\Http\Controllers\Admin\Pages;

use Illuminate\Http\Request;
use App\Http\Requests\Pages\PageRequest;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Page;

class PagesController extends Controller
{


    /**
      * Do not allow guest user to access methods in this class
      */
    public function __construct()
    {
        $this->middleware('auth');
    }



    /**
     * Display a listing of all available pages.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pages = Page::all();

        return view('admin.pages.page_index', compact('pages'));
    }

    /**
     * Show the form for editing a page
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $page = Page::findOrFail($id);

        return view('admin.pages.page_create', compact('page'));
    }

    /**
     * Update the page content.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(PageRequest $request, $id)
    {
        $page = Page::findOrFail($id);

        $page->description = $request->get('description');
        $page->content = $request->get('content');
        $page->save();

        flash('Page sucessfully updated');

        return redirect()->route('admin-pages.index');
    }
}
