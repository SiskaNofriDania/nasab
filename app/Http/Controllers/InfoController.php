<?php

namespace App\Http\Controllers;

use App\Models\Info;
use App\Models\Banner;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;


class InfoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $info = Info::select('id','tipe','judul','isi')->where('tipe','info')->latest()->filter()->paginate(10);
        return view('admin.info.index', compact('info'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.info/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'judul'=> 'required',
            'isi' => 'required',
        ]);

        Info::create([
            'tipe' =>'info',
            'judul' => $request->judul,
            'isi' => $request->isi,

        ]);

        Alert::success('Sukses','Data berhasil ditambahkan');
        return redirect('/info');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        // $info = Info::select('tipe','judul','isi')->whereId($id)->firstOrFail();
        // return view('/landingpage',compact('info'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $info = Info::select('id','judul','isi')->whereId($id)->firstOrFail();
        return view('admin.info.edit',compact('info'));
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
            'judul'=>'required',
        ]);

        $data = [
            'judul'=>$request->judul,
            'isi'=>$request->isi
        ];
        $info = Info::select('judul','id')->whereId($id)->first();
        $info->update($data);
        if($info->save())
        {
            return redirect()->back()->with('success','Info berhasil diedit.!!!');
        }else{
            return redirect()->back()->with('failed','Info gagal diedit.!!!!');
        }
        return redirect('/info');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $info = Info::select('id')->whereId($id)->firstOrFail();
        $info->delete();
       Alert::success('Sukses','Data berhasil dihapus');
        return redirect('/info');

    }
    public function info($judul)
    {
        $this->NoPesanan();
        $info = Info::where('judul',$judul)->get();
        return view('info.judul',[
            "title" => 'judul',
             "infos" => $info,
        ]);
    }
}
