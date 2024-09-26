<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;
use App\Models\Siswa;

class SiswaController extends Controller
 {
    /**
     * Display a listing of the resource.
     */
    public function index(request $request)
    {
        $data['a'] = $request->get('a');
        $data['siswa'] = Siswa::where('nama','like','%' . $data['a'] . '%')
         ->orWhere('kelas','like','%' . $data['a'] . '%')
         ->orWhere('alamat','like','%' . $data['a'] . '%')
         ->orWhere('ekstrakulikuler','like','%' . $data['a'] . '%')
         ->get();
        return view('siswa.index',$data);

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data['title'] = 'Tambah Siswa';
        return view('siswa.create',$data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
{
    $validatedData = $request->validate([
        'nama' => 'required',
        'kelas' => 'required',
        'alamat' => 'required',
        'ekstrakulikuler' => 'required',
    ]);

    
   

    Siswa::create([
        'nama' => $request->nama, 
        'kelas' => $request->kelas,
        'alamat' => $request->alamat,
        'ekstrakulikuler' => $request->ekstrakulikuler,
    ]);
  

    return redirect('siswa')->with('success', 'siswa berhasil ditambahkan');
}


    /**2
     * Display the specified resource.
     */
    public function show(string $id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $siswa = Siswa::findOrFail($id); 
        return view('siswa.edit', compact('siswa'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Siswa $siswa)
    {
        $validatedData = $request->validate([
            'nama' => 'required',
            'kelas' => 'required',
            'alamat' => 'required',
            'ekstrakulikuler' => 'required',
            
        ]);
    
        // Langsung update data siswa menggunakan object yang diterima
        $siswa->nama = $validatedData['nama'];
        $siswa->kelas = $validatedData['kelas'];
        $siswa->alamat = $validatedData['alamat'];
        $siswa->ekstrakulikuler = $validatedData['ekstrakulikuler'];


        $siswa->save();
        return redirect()->back()->with('success', 'Data berhasil diupdate!');
    }
    

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $siswa = Siswa::where('id',$id);
        $siswa->delete();
        return redirect('siswa')->with('success','siswa berhasil di hapus');
    }

    public function biodataku(){
        $nama = 'Ronaldo';
        $ekstrakulikuler = ['sepak bola'];
        return view('biodata',['nama' => $nama, 'ekstrakulikuler' => $ekstrakulikuler]);
    }


    /*public function input()
    {
        return view('siswa.input');
    }*/

    /*public function enter(Request $request)
    {
        $validateData =$request->validate([
            'nama_lengkap' =>'required',
            'asrama' =>'required',
            'tempat_lahir' => 'required',
            'tanggal_lahir' => 'required',
            'jenis_kelamin' => 'required',
            'alamat' => 'required',
            'kontak' => 'required',
        ]);

        $siswa = new data();
        $siswa->asrama = $request->asrama;
        $siswa->tempat_lahir = $request->tempat_lahir;
        $siswa->tanggal_lahir = $request->tanggal_lahir;
        $siswa->jenis_kelamin = $request->jenis_kelamin;
        $siswa->alamat = $request->alamat;
        $siswa->kontak = $request->kontak;
        $siswa->save();
    
        return redirect()->route('siswa.input');
    }
        public function input()
         {
            return view('siswa.input',compact ('siswa'));
         };*/
    
}
