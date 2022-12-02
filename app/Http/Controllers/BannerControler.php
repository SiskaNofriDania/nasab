<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use Illuminate\Http\Request;
use App\Models\Info;
use Illuminate\Console\View\Components\Alert as ComponentsAlert;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\File;
use RealRashid\SweetAlert\Facades\Alert;

class BannerControler extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $banner = Banner::select('judul','banner')->latest()->get();
        $banner = Banner::select('id','judul','banner','created_at','updated_at')->latest()->filter()->paginate(10);
        return view('admin/banner/index',compact('banner'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin/banner/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validateData = $request->validate([
            'judul'=> 'required',
            'banner' => 'required|mimes:jpg,jpeg,png',

        ]);

        if($request->file('banner')){
            $validateData['banner'] = $request->file('banner')->store('banner');
        }
        Banner::create($validateData);
        Alert::success('Sukses','Data berhasil ditambahkan');
        return redirect('/banner');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $banner = Banner::select('id','judul','banner','created_at')->whereId($id)->firstOrFail();
        return view('admin/banner/show',compact('banner'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $banner = Banner::select('id','judul','banner')->whereId($id)->firstOrFail();
        return view('admin/banner/edit',compact('banner'));

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
        $validateData = $request->validate([
            'judul'=>'required',
            'banner' =>'mimes:jpg,jpeg,png',
        ]);

        $banner = Banner::select('banner','id')->whereId($id)->first();
        if($request->file('banner')){
            $validateData['banner'] = $request->file('banner')->store('banner');
        }
        $banner->update($validateData);
        // Alert::success('Sukses','Data berhasil diubah');
        return redirect('/banner');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $banner = Banner::select('banner','id')->whereId($id)->firstOrFail();
        File::delete('upload/banner'. $banner->banner);
        $banner->delete();
        Alert::success('Sukses','Data berhasil dihapus');
        return response()->json(['icon'=>'success']);
    }
}
