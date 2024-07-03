<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Upload;
use App\Models\LoginAth;
use App\Models\RegisAth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\UploadFotoController;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Auth;
// use App\Http\Controllers\UploadFotoController;

class UploadFotoController extends Controller
{
    public function index() {
        // $foto = Upload::select('id', 'username', 'name')->get();
        $foto = Upload::all();

        foreach ($foto as $row) {
            $waktu_hari_ini = \Carbon\Carbon::now('Asia/Jakarta');
            $row->formatted_waktu_hari_ini = $waktu_hari_ini->format('Y-m-d H:i:s');
        }
        
        

        return view ('index', compact('foto'));
    }

    public function show($id)
    {
        $data = Upload::findOrFail($id); // Mengambil data berdasarkan ID dari database
        return view('layouts.show', compact('data')); // Mengirimkan data ke view untuk ditampilkan
    }


    public function create()
    {
        return view('layouts.create'); // Ganti 'layouts.create' dengan nama view yang sesuai
    }


    public function store(Request $request)
{   
    $request->validate([
        'picture' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', // Validasi untuk tipe dan ukuran file foto
        'username' => 'required',
        'name' => 'required',
        'privilege' => 'required',
    ]);

    if ($request->hasFile('picture')) {
        $file = $request->file('picture');
        $fileName = time() . '_' . $file->getClientOriginalName();
        $file->move(public_path('uploads'), $fileName);

        // Simpan informasi foto ke dalam database jika diperlukan
        $data = new Upload;
        $data->picture = $fileName; // Simpan nama file foto ke dalam kolom 'picture'
        $data->username = $request->input('username'); // Isi kolom 'username' dengan data dari form
        $data->name = $request->input('name'); // Isi kolom 'name' dengan data dari form
        $data->privilege = $request->input('privilege'); // Isi kolom 'privilege' dengan data dari form
        $data->save();

        return redirect()->route('tampilin.index')->with('message', 'Foto berhasil diunggah dan data berhasil ditambahkan');
    } 
    // else {
    //     return redirect()->back()->with('error', 'Tidak ada foto yang diunggah.');
    // }
}

public function edit($id)
{
    $data = Upload::find($id);
    return view('layouts.edit', compact('data'));
}


public function update(Request $request, $id)
{
    try {
        $data = Upload::find($id);

        $request->validate([
            'picture' => 'image|mimes:jpeg,png,jpg,gif|max:2048', // Diubah menjadi tidak wajib required
            'username' => 'required',
            'name' => 'required',
            'privilege' => 'required',
        ]);

        if ($request->hasFile('picture')) {
            $file = $request->file('picture');
            $fileName = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('uploads'), $fileName);
            $data->picture = $fileName;
        }

        $data->username = $request->input('username');
        $data->name = $request->input('name');
        $data->privilege = $request->input('privilege');
        $data->save();

        return redirect()->route('tampilin.index')->with('message', 'Data berhasil diperbarui');
    } catch (\Exception $e) {
        return redirect()->back()->with('error', 'Terjadi kesalahan: ' . $e->getMessage())->withInput();
    }
}


public function destroy($id)
{
    try {
        $data = Upload::findOrFail($id); // Mencari data berdasarkan ID
        
        $data->delete(); // Menghapus data

        return redirect()->route('tampilin.index')->with('message', 'Data berhasil dihapus');
    } catch (\Exception $e) {
        return redirect()->back()->with('error', 'Terjadi kesalahan: ' . $e->getMessage());
    }
}


}


class RegisterController extends Controller {
    public function showRegisterForm() {
        return view('auth.registered');
    }

    public function registerInput(Request $request) {
        $request->validate([
            'username' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:registrasion',
            'password' => 'required|string|min:8|confirmed',
        ]);

        $registrasion  = new RegisAth();
        $registrasion->username = $request->username;
        $registrasion->email = $request->email;
        $registrasion->password = bcrypt($request->password);
        $registrasion->save();

        if($registrasion->wasRecentlyCreated){
            return redirect()->route('success')->with('success', 'Pendaftaran berhasil!');
        } else {
            return back()->withErrors(['error' => 'Pendaftaran gagal. Silakan coba lagi.']);
        }
    }
}