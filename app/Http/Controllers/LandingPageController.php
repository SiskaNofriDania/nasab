<?php
namespace App\Http\Controllers;


use App\Models\Banner;
use App\Models\Info;
use App\Models\Landingpage;
use Illuminate\Console\View\Components\Alert as ComponentsAlert;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\File;
use RealRashid\SweetAlert\Facades\Alert;



use Illuminate\Http\Request;

class LandingPageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()

    {
        $banner = Banner::select('judul','banner')->latest()->get();
        $banner = Banner::select('id','judul','banner')->latest()->paginate(10);
        $info = Info::select('judul','isi')->where('tipe','info')->get();
        $kontak = Info::select('judul','isi')->where('tipe', 'kontak')->get();
        $tentang = Info::select('isi')->where('tipe', 'tentang')->first();
        // $info = Info::select('id','judul','isi')->whereId($id)
       // $info = Info::where('tipe==info')->get();
        return view('landingpage',compact('banner','info','kontak','tentang'));
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

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

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
        //
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
