<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\KritikSaran;

class KritikSaranController extends Controller
{
    public function index()
    {
        return KritikSaran::all();
    }

    public function create(request $request)
    {
        $kritiksaran = new KritikSaran;
        $kritiksaran->ruangan = $request->ruangan;
        $kritiksaran->kritik = $request->kritik;
        $kritiksaran->saran = $request->saran;

        $kritiksaran->save();
        return "Data Have Been Created";
    }

    public function update(Request $request, $id)
    {
        $ruangan =  $request->ruangan;
        $kritik = $request->kritik;
        $saran = $request->saran;

        $kritiksaran = Material::find($id);
        $kritiksaran->ruangan = $request->ruangan;
        $kritiksaran->kritik = $request->kritik;
        $kritiksaran->saran = $request->saran;
        $kritiksaran->save();

        return "Data Have Been Updated";
    }

    public function destroy($id)
    {
        $kritiksaran = KritikSaran::find($id);
        $kritiksaran->delete();

        return "Data Have Been Deleted";
    }
}
