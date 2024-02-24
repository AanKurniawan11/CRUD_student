<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Models\kelaz;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index()
    {
         return view('Student/all',[
            "title" => "student",
            "students" => student::all()
        ]);
    }

     public function create()
    {
        return view('Student.add', [
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
        return redirect('/dash/siswa/all')->with('success', 'Data student berhasil ditambahkan');
    }
}

public function destroy($id){
    $student = Student::find($id);

    if(!$student){
        return redirect('/dash/siswa/all')->with('error', 'Student not found');
    }

    $student->delete();

    return redirect('/dash/siswa/all')->with('success', 'Student deleted successfully');
}



    public function showDetail(Student $student)
    {
        return view('student.detail', [
            'title' => 'Student Detail',
            'student' => $student,
        ]);
    }


    public function edit(Student $student)
    {
        $kelazs = kelaz::all();

        return view('student.edit', [
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
            return redirect('dash/siswa/all')->with('success', 'Data student berhasil diubah');
        } else {
            return redirect('dash/siswa/all')->with('error', 'Gagal mengubah data student');
        }
    }
    
    }