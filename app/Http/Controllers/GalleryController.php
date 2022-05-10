<?php

namespace NCLP\Http\Controllers;

use NCLP\Models\Circular;
use NCLP\Models\Gallery;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Input;

class GalleryController extends Controller
{


    public function indexBanner(){
        if (Gate::allows('login')) {

            $galleries = Gallery::where('type', 'banner')->get();

            return view('pages.galleries.banner.banner', ['galleries' => $galleries]);
        }
        else return redirect()->back()->with('info-error','Permission denied!');

    }

    public function addBanner(){
        if (Gate::allows('login')) {

            return view('pages.galleries.banner.banner_add');
        }
        else return redirect()->back()->with('info-error','Permission denied!');

    }

    public function indexSTC($stc){
        if (Gate::allows('login')) {

            $galleries = Gallery::where('type', 'stc')
                ->where('stc_id', $stc)->get();

            return view('pages.galleries.stripe.stripe', ['galleries' => $galleries]);
        }
        else return redirect()->back()->with('info-error','Permission denied!');

    }

    public function indexSTCAlbums()
    {
        if (Gate::allows('login')) {

            $galleries = Gallery::where('type', 'stc')
                ->where('stc_id', $stc)->get();

            return view('pages.galleries.stripe.stripe', ['galleries' => $galleries]);
        }
        else return redirect()->back()->with('info-error','Permission denied!');
    }

    public function addSTCPhoto(){
        if (Gate::allows('login')) {

            $stcs = Auth::user()->getSTCs();

            return view('pages.galleries.stc.stc_add', ['stcs' => $stcs]);
        }
        else return redirect()->back()->with('info-error','Permission denied!');

    }

    public function indexCircular(){
        if (Gate::allows('login')) {

            $circulars = Circular::paginate(100);

            return view('pages.galleries.circular.circular', ['circulars' => $circulars]);
        }
        else return redirect()->back()->with('info-error','Permission denied!');

    }

    public function addCircular(){
        if (Gate::allows('login')) {

            return view('pages.galleries.circular.circular_add');
        }
        else return redirect()->back()->with('info-error','Permission denied!');

    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'photo' => 'required|image',
            'type' => 'required',
        ]);

        $photo = Input::file('photo');


        $photo->move('gallery', $photo->getClientOriginalName());

        $gallery = new Gallery();
        $gallery->photo = $photo->getClientOriginalName();
        $gallery->type = $request->type;
        $gallery->save();

        if($request->type == 'banner') {
            return redirect()->route('gallery.banner.index')->with('info-success', 'Successfully Added!');
        }
        elseif ($request->type == 'stripe') {
            return redirect()->route('gallery.stripe.index')->with('info-success', 'Successfully Added!');
        }
    }

    public function storeCircular(Request $request)
    {
        $this->validate($request, [
            'title' => 'required|string',
            'circular' => 'required|mimes:pdf',
        ]);

        $file = Input::file('circular');


        $file->move('gallery', $file->getClientOriginalName());

        $circular = new Circular();
        $circular->circular = $file->getClientOriginalName();
        $circular->title = $request->title;
        $circular->save();

        return redirect()->route('gallery.circular.index')->with('info-success', 'Successfully Added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \NCLP\Models\Gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function show(Gallery $gallery)
    {
        //
    }

    public function showCircular($circular)
    {
        $circular = Circular::find($circular);

        $headers = [
            'Content-Type' => 'application/pdf',
        ];
         $file = public_path() . "/gallery/" . $circular->circular;

        return response()->download($file, 'filename.pdf', $headers);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \NCLP\Models\Gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function edit(Gallery $gallery)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \NCLP\Models\Gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Gallery $gallery)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param   $gallery
     * @return \Illuminate\Http\Response
     */
    public function destroy($gallery)
    {
        $gallery = Gallery::find($gallery);
        if (Gate::allows('login')) {
            $gallery->delete();
            return redirect()->back()->with('info-success','Successfully Deleted!');
        }
        else return redirect()->back()->with('info-error','Permission denied!');
    }

    public function destroyCircular($circular)
    {
        $circular = Circular::find($circular);
        if (Gate::allows('login')) {
            $circular->delete();
            return redirect()->back()->with('info-success','Successfully Deleted!');
        }
        else return redirect()->back()->with('info-error','Permission denied!');
    }
}
