<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use LDAP\Result;

class AnimalController extends Controller
{
    public $animals = ['Kucing', 'Ayam', 'Ikan'];
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        echo "Menampilkan Seluruh Data Animals\n";
        foreach($this->animals as $animal){
            echo "- $animal\n";
        }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        // echo "Nama Hewan: $request->nama";
        // echo "\n";
        echo "Menambahkan Data Animals Baru\n";
        array_push($this->animals, $request->nama);
        echo "Menampilkan Seluruh Data Animals\n";
        foreach($this->animals as $animal){
            echo "- $animal\n";
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        //
        // echo "Nama Hewan: $request->nama";
        // echo "\n";
        echo "Mengupdate Data Animals id $id\n";
        $this->animals[$id] = $request->nama;
        echo "Menampilkan Seluruh Data Animals\n";
        foreach($this->animals as $animal){
            echo "- $animal\n";
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        //
        echo "Menghapus Data Animals id $id\n";
        unset($this->animals[$id]);
        echo "Menampilkan Seluruh Data Animals\n";
        foreach($this->animals as $animal){
            echo "- $animal\n";
        }
    }
}
