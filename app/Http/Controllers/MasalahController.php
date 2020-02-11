<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Masalah;
use Illuminate\Support\Facades\Response;
use Image;

class MasalahController extends Controller
{
    public function index()
    {
        return Masalah::all();
    }

    public function create(request $request)
    {

        // $image_file = $request->file('image');

        // $image = Image::make($image_file)->encode('data-url');

        $masalah = new Masalah;
        $masalah->image = $request->image;   
        $masalah->ruangan = $request->ruangan;
        $masalah->masalah = $request->masalah;

        $masalah->save();
        return "Data Have Been Created";
    }

    public function update(Request $request, $id)
    {
        $ruangan =  $request->ruangan;
        $masalah = $request->masalah;

        $masalah = Masalah::find($id);
        $masalah->ruangan = $request->ruangan;
        $masalah->masalah = $request->masalah;
        $masalah->save();

        return "Data Have Been Updated";
    }

    public function destroy($id)
    {
        $masalah = Masalah::find($id);
        $masalah->delete();

        return "Data Have Been Deleted";
    }
}
