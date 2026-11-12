<?php

namespace App\Http\Controllers;

use App\Models\Kelas;
use Illuminate\Http\Request;

class KelasController extends Controller
{
    /**
     * Display a listing of the resource.
     */

        public function index()
        {
            $kelas = Kelas::all();
            return view("kelas.index", compact("kelas"));
        }

        public function create()
        {
            return view("kelas.create");
        }


    public function store(Request $request)
    {
        $request->validate([
            "nama_kelas"=> "required",
        ]);

        Kelas::create([
            'nama_kelas' => $request->nama_kelas,
        ]);

        return redirect('kelas');
    }


    // public function index()
    // {
    //     $kelas = kelas::all();
    //     return view("pages.kelas.index", compact("kelas"));
    // }

    // /**
    //  * Show the form for creating a new resource.
    //  */
    // public function create()
    // {
    //     return view("pages.kelas.create");
    // }

    // /**
    //  * Store a newly created resource in storage.
    //  */
    // public function store(Request $request)
    // {
    //     $request->validate([
    //         "nama_kelas" => 'required',
    //     ]);

    //     Kelas::create([
    //         'nama_kelas' => $request->nama_kelas,
    //     ]);

    //     return redirect('/kelas');
    // }

    // /**
    //  * Display the specified resource.
    //  */
    // public function show(Kelas $kelas)
    // {
    //     //
    // }

    // /**
    //  * Show the form for editing the specified resource.
    //  */
    // public function edit($id)
    // {
    //     $kelas = Kelas::findOrFail($id);
    //     return view('pages.kelas.edit', compact('kelas'));
    // }

    // /**
    //  * Update the specified resource in storage.
    //  */
    // public function update(Request $request, $id)
    // {
    //     $request->validate([
    //         'nama_kelas' => 'required',
    //     ]);

    //     $kelas = Kelas::findOrFail($id);
    //     $kelas->update([
    //         'nama_kelas' => $request->nama_kelas,
    //     ]);

    //     return redirect('/kelas');
    // }

    // /**
    //  * Remove the specified resource from storage.
    //  */
    // public function destroy($id)
    // {
    //     $kelas = Kelas::findOrFail($id);
    //     $kelas->delete();

    //     return redirect('/kelas');
    // }
}
