<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Profile;
class ProfileController extends Controller
{
    public function index()
    {
        $profiles = Profile::all();

        return view('profile.index', compact('profiles'));
    }

    public function create()
    {
        $profile = Profile::all();

        return view('profile.create', compact('profile'));
    }

    public function store(Request $request)
    {
         Profile::create([
            'nama' => $request->nama,
            'usia' => $request->usia,
            'tempat_lahir' => $request->tempat_lahir,
            'tgl_lahir' => $request->tgl_lahir,
            'jenis_kelamin' => $request->jenis_kelamin,
            'hobi' => $request->hobi
        ]);

        return redirect(route('profile'));
    }
    
    public function destroy($id)
    {
        $profile = Profile::findOrFail($id);
        $profile->delete();

        return redirect()->back();
    }

    public function edit($id)
    {
        $profile = Profile::findOrFail($id);

        return view('profile.edit', compact('profile'));
    }

    public function update(Request $request, $id)
    {
        $profile = Profile::where('id', $id)->first();

        $profile->nama = $request->input('nama');
        $profile->usia = $request->input('usia');
        $profile->tempat_lahir = $request->input('tempat_lahir');
        $profile->tgl_lahir = $request->input('tgl_lahir');
        $profile->jenis_kelamin = $request->input('jenis_kelamin');
        $profile->hobi = $request->input('hobi');

        $profile->save();

        return redirect(route('profile'));
    }

    public function show($id)
    {
        $profile = Profile::findOrFail($id);

        return view('profile.detail', compact('profile'));
    }
}
