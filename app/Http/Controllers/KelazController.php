<?php


namespace App\Http\Controllers;

use App\Models\kelaz;
use Illuminate\Http\Request;

class KelazController extends Controller
{
    public function index()
    {
         return view('layouts/grade/all', [
            "title" => "kelaz",
            "kelaz" => kelaz::all()
        ]);
    }

    public function create()
    {
        return view('layouts.grade.add', [
            'title' => 'Add Student Data',
            "kelazs" =>kelaz::all()
        ]);
    }

    public function store(Request $request)
{
    $validated = $request->validate([
        'nama' => 'required',
    ]);

    $result = kelaz::create($validated);

    if($result){
        return redirect('/kelaz/all')->with('success', 'Data student berhasil ditambahkan');
    }
}

public function destroy($id){
    $kelas = kelaz::find($id);

    if(!$kelas){
        return redirect('/kelaz/all')->with('error', 'Student not found');
    }

    $kelas->delete();

    return redirect('/kelaz/all')->with('success', 'Student deleted successfully');
}

public function edit(kelaz $kelaz)
{return view('layouts.grade.edit', [
        'title' => "Edit",
        'kelaz' => $kelaz,
    ]);
}

public function update(Request $request, kelaz $kelaz)
    {
        $validatedData = $request->validate([
            'nama' => 'required',
        ]);

        $result = $kelaz->update($validatedData); // gunakan metode update pada model

        if ($result) {
            return redirect('/kelaz/all')->with('success', 'Data student berhasil diubah');
        } else {
            return redirect('/kelaz/all')->with('error', 'Gagal mengubah data student');
        }
    }
    
    
}

