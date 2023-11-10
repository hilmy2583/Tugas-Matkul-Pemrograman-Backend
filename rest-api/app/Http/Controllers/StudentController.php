<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $students = Student::all();

        if($students->isEmpty()){
            return response()->json(204);
        }
        $data = [
            'message' => 'Get All Students',
            'data' => $students
        ];

        return response()->json($data, 200);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $validatedData = $request->validate([
            'nama' => 'required',
            'nim' => 'numeric|required',
            'email' => 'email|required',
            'jurusan' => 'required'
        ]);

        // $input = [
        //     'nama' => $request->nama,
        //     'nim' => $request->nim,
        //     'email' => $request->email,
        //     'jurusan' => $request->jurusan
        // ];

        $students = Student::create($validatedData);

        $data = [
            'message' => 'Student Is Created Succesfully',
            'data' => $students
        ];

        return response()->json($data, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $students = Student::find($id);

        if($students) {
            $data = [
                'message' => 'Get Detail Student',
                'data' => $students
            ];

            return response()->json($data, 200);
        }
        else {
            $data = [
                'message' => 'Student Not Found'
            ];

            return response()->json($data, 404);
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $students = Student::find($id);

        if($students) {
            $input = [
                'nama' => $request->nama ?? $students->nama,
                'nim' => $request->nim ?? $students->nim,
                'email' => $request->email ?? $students->email,
                'jurusan' => $request->jurusan ?? $students->jurusan
            ];

            $students->update($input);

            $data = [
                'message' => 'Student Is Succesfully To Update',
                'data' => $students
            ];

            return response()->json($data, 200);
        }
        else {
            $data = [
                'message' => 'Student Not Found'
            ];

            return response()->json($data, 404);
        }

        //Alternatif lain, bisa digunakan juga pada show dan destroy
        // if(! $students) {
        //     $data = [
        //         'message' => 'Student Not Found'
        //     ];

        //     return response()->json($data, 404);
        // }

        // $input = [
        //     'nama' => $request->nama ?? $students->nama,
        //     'nim' => $request->nim ?? $students->nim,
        //     'email' => $request->email ?? $students->email,
        //     'jurusan' => $request->jurusan ?? $students->jurusan
        // ];

        // $students->update($input);

        // $data = [
        //     'message' => 'Student Is Succesfully To Update',
        //     'data' => $students
        // ];

        // return response()->json($data, 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $students = Student::find($id);

        if($students) {
            $students->delete();

            $data = [
                'message' => 'Student Is Succesfully To Delete',
                'data' => $students
            ];

            return response()->json($data, 200);
        }
        else {
            $data = [
                'message' => 'Student Not Found'
            ];

            return response()->json($data, 404);
        }
    }
}
