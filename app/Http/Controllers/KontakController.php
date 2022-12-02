<?php
namespace App\Http\Controllers;
use App\Models\Info;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;


class KontakController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kontak = Info::select('judul','isi')->where('tipe', 'kontak')->get();
        return view('admin.kontak.form',compact('kontak'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'telepone'=>'required',
            'email' =>'required',
        ]);
        $datatelepone = ['isi'=>$request->telepone];
        $dataemail = ['isi'=>$request->email];
        $kontaktelepone = Info::where('judul','Telepone')->update($datatelepone);
        $kontakemail = Info::where('judul','Email')->update($dataemail);
        Alert::success('Sukses', 'Kontak berhasil disimpan');
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
