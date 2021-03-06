<?php

namespace App\Http\Controllers;

use App\Models\Dosen;
use Illuminate\Http\Request;

class DosenController extends Controller
{
    public function index()
    {
        $data = Dosen::all();

        return view('dosen/index', compact('data'));
    }

    public function create()
    {
        return view('dosen/add');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'nik'=>'required|unique:dosen',
            'nama_dosen'=>'required|min:10',
            'umur'=>'required|number'
        ]);
        Dosen::create($request->all());
        return redirect(url('data-dosen'));
    }

    public function destroy(Dosen $id)
    {
        $id->delete();
        return redirect(url('data-dosen'));
    }
}
