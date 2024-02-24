<?php

namespace App\Http\Controllers;

use App\Models\kelaz;
use App\Models\student;
use Illuminate\Http\Request;

class DasboardStudentController extends Controller
{
    public function index()
    {

        $students = student::simplePaginate(5)->onEachSide(3);
        $title = "student";
        $filter = kelaz::all();
        return view('Dashboard.Siswa.all', compact('students','title','filter'));
    }
    
    public function filter(Request $request)
    {
        $kelasId = $request->input('kelas_id');

        $students = student::where('kelas_id', $kelasId)->paginate(5);
        $filter = kelaz::all();
        return view('Dashboard.Siswa.all', compact('students', 'filter'));
    }
    public function create()
    {
        return view('Dashboard/Siswa/add', [
            'title' => 'Add Student Data',
            "kelazs" =>kelaz::all()
        ]);
    }

    public function store(Request $request)
{
    $validated = $request->validate([
        'nis' => 'required',
        'nama' => 'required',
        'kelas_id' => 'required', 
        'tgl_lahir' => 'required',
        'hobi' => 'required',
    ]);

    $result = Student::create($validated);

    if($result){
        return redirect('dash/Siswa/all')->with('success', 'Data student berhasil ditambahkan');
    }
}

public function destroy($id){
    $student = Student::find($id);

    if(!$student){
        return redirect('dash/siswa/all')->with('error', 'Student not found');
    }

    $student->delete();

    return redirect('dash/siswa/all')->with('success', 'Student deleted successfully');
}

public function showDetail(Student $student)
{
    return view('Dashboard/Siswa/detail', [
        'title' => 'siswa Detail',
        'student' => $student,
    ]);
}

public function edit(Student $student)
{
    $kelazs = kelaz::all();

    return view('/Dashboard/Siswa/edit', [
        'title' => "Edit",
        'student' => $student,
        'kelazs' => $kelazs,
    ]);
}

public function update(Request $request, Student $student)
{
    $validatedData = $request->validate([
        'nis' => 'required',
        'nama' => 'required',
        'kelas_id' => 'required',
        'tgl_lahir' => 'required',
        'hobi' => 'required',
    ]);

    $result = $student->update($validatedData); // gunakan metode update pada model

    if ($result) {
        return redirect('/dash/siswa/all')->with('success', 'Data student berhasil diubah');
    } else {
        return redirect('/dash/siswa/all')->with('error', 'Gagal mengubah data student');
    }
}
}
