<?php

namespace App\Http\Controllers\Admin\Testimonials;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Testimonial;
use App\Http\Requests\Testimonials\TestimonialRequest;

class TestimonialsController extends Controller
{

    /**
    * Do not allow guest user to access methods in this class
    */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $waiting_testimonials = Testimonial::where('status', 'waiting')->paginate(15);
        $published_testimonials = Testimonial::where('status', 'published')->paginate(15);

        return view('admin.testimonials.testimonials_index', compact('waiting_testimonials', 'published_testimonials'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.testimonials.testimonial_create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(TestimonialRequest $request)
    {
        Testimonial::create([
            'content' => $request->get('content'),
            'ip'      => $_SERVER['REMOTE_ADDR'],
            'status'  => 'published'
        ]);

        flash('Testimonial added with sucessfully');

        return redirect()->route('admin-testimonials.index');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $testimonial = Testimonial::findOrFail($id);

        return view('admin.testimonials.testimonial_create', compact('testimonial'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(TestimonialRequest $request, $id)
    {
        $testimonial = Testimonial::findOrFail($id);

        $testimonial->update($request->all());

        flash('Testimonial updated');

        return redirect()->route('admin-testimonials.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $testimonial = Testimonial::find($id);

        if (is_null($testimonial))
        {
            return response()->json([
               'message' => 'Testimonial not found'
            ], 400);
        }

        $testimonial->delete();

        return response()->json([
           'message' => 'Testimonial deleted'
        ], 200);
    }

    /**
     * Change testimonial status to waiting
     */
    public function waiting($id)
    {
        $this->update_status($id, 'waiting');
    }

    /**
     * Change testimonial status to published
     */
    public function publish($id)
    {
        $this->update_status($id, 'published');
    }

    /**
     * Return json response to ajax request and change the status of the testimonial
     */
    private function update_status($id, $new_status)
    {
        $testimonial = Testimonial::find($id);

        if (is_null($testimonial))
        {
            return response()->json([
               'message' => 'Testimonial not found'
            ], 400);
        }

        $testimonial->status = $new_status;
        $testimonial->save();

        return response()->json([
           'message' => 'Status updated with success'
        ], 200);
    }
}
