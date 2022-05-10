<?php

namespace NCLP\Http\Controllers;

use NCLP\Models\Circular;
use NCLP\Models\Gallery;

class GuestController extends Controller
{
    public function home()
    {
        $banners =  Gallery::where('type', 'banner')->get();
        $stripes =  Gallery::where('type', 'stripe')->get();
        $circulars = Circular::paginate(10);

        return view('index', ['banners' => $banners, 'stripes' => $stripes, 'circulars' => $circulars]);
    }
}
