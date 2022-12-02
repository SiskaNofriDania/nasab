<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;
use App\Models\People;
use App\Models\User;

class AdminPeopleController extends Controller
{
    public function indexNasab(Request $request)
    {
        $data = [
            'people' => People::filter()->paginate(10),
            'auth'  => Auth::user()
        ];
        return view('user_nasab.kelolaData',$data);
    }
    public function index(Request $request)
    {
        $data = [
            'people' => People::filter()->paginate(10),
            'auth'  => Auth::user()
        ];
        return view('admin.people.kelolaPenggunaUtama',$data);
    }

    public function create(Request $request)
    {
        $data = [

        ];
        return view('admin.people.tambahPenggunaUtama',$data);
    }

    public function edit(Request $request, $uuid)
    {
        $data = [
            'people'=> People::where('uuid', $uuid)->firstOrFail(),
            'user'=> User::where('uuid_people', $uuid)->firstOrFail(),
        ];
        return view('admin.people.editPenggunaUtama',$data);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nama_ayah' => 'required',
            'nama_ibu' => 'required',
            'tahun_wafat' => 'nullable',
            'tahun_lahir' => 'required',
            'tanggal_wafat' => 'nullable',
            'tanggal_lahir' => 'required',
            'tanggal_pernikahan' => 'nullable',
            'nama' => 'required',
            'telepon' => 'required',
            'foto_profil' => 'nullable',
            'pekerjaan' => 'required',
            'jenis_kelamin'=> 'required',
            'alamat' => 'required',
        ]);

        $validatedData['uuid'] = Str::uuid();
        if($request->file('foto_profil')){
            $validatedData['foto_profil'] = $request->file('foto_profil')->store('post-foto_profil');
        }
        $people = People::create($validatedData);

        $user = User::create([
            'uuid' => Str::uuid(),
            'uuid_people' => $people->uuid,
            'username' => $request->username,
            'password' => bcrypt($request->password),
            'status_aktivasi' => $request->status_aktivasi ?? 0,
        ]);
        return redirect('/admin/people')->with('success','Pengguna Utama Berhasil Ditambahkan!');
    }

    public function update(Request $request, $uuid)
    {
        $validatedData = $request->validate([
            'nama_ayah' => 'required',
            'nama_ibu' => 'required',
            'tahun_wafat' => 'nullable',
            'tahun_lahir' => 'required',
            'tanggal_wafat' => 'nullable',
            'tanggal_lahir' => 'required',
            'tanggal_pernikahan' => 'nullable',
            'nama' => 'required',
            'telepon' => 'required',
            'foto_profil' => 'nullable',
            'pekerjaan' => 'required',
            'jenis_kelamin'=> 'required',
            'alamat' => 'required',
        ]);

        if($request->file('foto_profil')){
            $validatedData['foto_profil'] = $request->file('foto_profil')->store('post-foto_profil');
        }
        $people = People::where('uuid', $uuid)->update($validatedData);

        $aktivasi = ($request->status_aktivasi == '1') ? 1 : 0;
        $user = User::where('uuid_people', $uuid)
        ->update([

            //'uuid' => Str::uuid(),
            //'uuid_people' => $people->uuid,
            'username' => $request->username,
            'password' => bcrypt($request->password),
            'status_aktivasi' => $aktivasi,
        ]);
        return redirect('/admin/people')->with('success','Pengguna Utama Berhasil Diedit!');
    }

    public function destroy($uuid)
    {
        // People::destroy($people->uuid);
        // Users::destroy($users->uuid);
        $people = People::where('uuid', $uuid);
        $people->delete();
        $users = User::where('uuid_people', $uuid);
        $users->delete();
        return redirect('/admin/people')->with('success','Pengguna Utama Telah di Hapus');
    }
}
