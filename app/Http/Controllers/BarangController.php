<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Item;

class BarangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $barang = DB::table('m_barang')->get(); //query bulder
        // dd($barang);
        $barang = Item::all(); //menggunakan kelas model
        // return view('barang.index', ['barang' => $barang]);
        return view('barang.index', compact('barang')); //bisa pakai fungsi jika nama sama 
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
        $request->validate([
                'nama_barang' => 'required',
                'harga_barang' => 'required|integer',
                'tipe_barang' => 'required',
                'warna_barang' => 'required',
            ]);

        // $barang = new Item;
        // $barang->nama_barang = $request->nama;
        // $barang->harga_barang = $request->harga;
        // $barang->tipe_barang = $request->tipe;
        // $barang->warna_barang = $request->warna;

        // $barang->save();
        
        // Item::create([
        //     'nama_barang' => $request->nama,
        //     'harga_barang' => $request->harga,
        //     'tipe_barang' => $request->tipe,
        //     'warna_barang' => $request->warna
        // ]);
        
        // dd($request->all());

        Item::create($request->all());

        return redirect('/barang')->with('status','Data barang sukses ditambahkan');
    }
    // public function messages()
    // {
    //     return [
    //         'nama_barang.required' => 'Nama barang harus diisi',
    //         'harga_barang.required' => 'Harga barang harus diisi',
    //         'harga_barang.integer' => 'Harga barang harus berisi angka',
    //         'tipe_barang.required' => 'Tipe barang harus diisi',
    //         'warna_barang.required' => 'Warna barang harus diisi',
    //     ];
    // }
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

        $barang = Item::find($id);
        // echo $barang;
        // $user = DB::table('items')->find('id_barang'->$id);
        // echo $user;
        return view('barang.edit', compact('barang'));
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
        
        // $barang = new Item;
        // $barang->id_barang 
        Item::destroy($id);
        // return $id;
        return redirect('/barang')->with('status','Data barang sukses dihapus');
    }
}
