<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AnimalController extends Controller
{
    public $animals = ['Kucing', 'Ayam', 'Ikan'];
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        echo "Menampilkan Seluruh Data Animals\n<br>";
        foreach($this->animals as $animal){
            echo "- $animal\n<br>";
        }
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
        // echo "Nama Hewan: $request->nama";
        // echo "\n<br>";
        echo "Menambahkan Data Animals Baru\n<br>";
        array_push($this->animals, $request->nama);
        echo "Menampilkan Seluruh Data Animals\n<br>";
        foreach($this->animals as $animal){
            echo "- $animal\n<br>";
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
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
        // echo "Nama Hewan: $request->nama";
        // echo "\n<br>";
        echo "Mengupdate Data Animals id $id\n<br>";
        $this->animals[$id] = $request->nama;
        echo "Menampilkan Seluruh Data Animals\n<br>";
        foreach($this->animals as $animal){
            echo "- $animal\n<br>";
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        //
        echo "Menghapus Data Animals id $id\n<br>";
        unset($this->animals[$id]);
        echo "Menampilkan Seluruh Data Animals\n<br>";
        foreach($this->animals as $animal){
            echo "- $animal\n<br>";
        }
    }
}
