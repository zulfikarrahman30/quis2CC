<?php

namespace App\Http\Controllers;
use App\Models\Barang;
use Illuminate\Http\Request;

class BarangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Barang::paginate(5);
        return view('barang.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return view('barang.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate(
            [
            'nama_barang'=>'required'
           ,'kode_barang'=>'required'
           ,'qty'=>'required'
           ,'harga'=>'required'
           ,'kategori_barang'=>'required'
           ]);//fungsieloquentuntukmenambahdata
           Barang::create($request->all());
           return redirect('barang');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $barang=Barang::find($id);
        return view('barang.detail',compact('barang'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $barang=Barang::find($id);
        return view('barang.edit',compact('barang'));
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
        $request->validate(
            [
            'nama_barang'=>'required'
           ,'kode_barang'=>'required'
           ,'qty'=>'required'
           ,'harga'=>'required'
           ,'kategori_barang'=>'required'
           ]);//fungsieloquentuntukmenambahdata
             Barang::find($id)->update($request->all());
           return redirect('barang');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Barang::find($id)->delete();
        return redirect('barang');
    }

    public function cari(Request $request)
    {
    	$object = $request->cari;
    	$barang='';
    	$search = Barang::where('kategori_barang',$object)
    					->orWhere('nama_barang',$object)
    					->orWhere('kode_barang',$object)
    					->get();
    	if(!$search->isEmpty())
    	{
    		$barang = $search;
    		return view('barang.hasil',compact('barang','object'));
    	}else
    	{
    		return 'barang '.$object.' yang anda cari tidak ada! <a class="btn btn-success mt-3" href="'.url('/').'">Home</a>';
    	}
    }
}
