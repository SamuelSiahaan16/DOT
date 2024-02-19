<?php

namespace App\Http\Controllers\Admin;

use App\Models\Barang;
use Illuminate\Http\Request;
use App\Models\KategoriBarang;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class BarangController extends Controller
{
    public function __construct(){
        $this->middleware(function ($request, $next) {
            if(Auth::check()){
                return $next($request);
            } else {
                return redirect()->route('index');
            }
        });
    }

    public function index()
    {
        $collection = Barang::get();
        return view('page.admin.barang.main', compact('collection'));
    }

    public function create()
    {
        $categories = KategoriBarang::get();
        return view('page.admin.barang.create',['barang'=>new Barang,'categories'=>$categories]);
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [ 
            'deskripsi' => 'nullable',
            'harga' => 'required|numeric',
            'kategori_id' => 'required|exists:kategori,id',
        ]);

        if ($validator->fails()) {
            $errors = $validator->errors();
            if ($errors->has('nama')) {
                return response()->json([
                    'alert' => 'error',
                    'message' => $errors->first('nama')
                ]);
            }
        }

        $data = new Barang;
        $data->nama = $request->nama;
        $data->deskripsi = $request->deskripsi;
        $data->harga = $request->harga;
        $data->kategori_id = $request->kategori_id;
        $data->save();

        return response()->json([
            'alert' => 'success',
            'message' => 'Barang '.$data->nama.' berhasil disimpan'
        ]);
    }

    public function edit($id)
    {  
        $barang = Barang::findOrFail($id);
        $categories = KategoriBarang::get(); 
        return view('page.admin.barang.create', compact('barang', 'categories'));
    }


    public function update(Request $request, Barang $barang)
    {
        $validator = Validator::make($request->all(), [
            'nama' => 'required|unique:barang,nama,'.$barang->id,
            'deskripsi' => 'nullable',
            'harga' => 'required|numeric',
            'kategori_id' => 'required|exists:kategori,id',
        ]);

        if ($validator->fails()) {
            $errors = $validator->errors();
            if ($errors->has('nama')) {
                return response()->json([
                    'alert' => 'error',
                    'message' => $errors->first('nama')
                ]);
            }
        }

        $barang->nama = $request->nama;
        $barang->deskripsi = $request->deskripsi;
        $barang->harga = $request->harga;
        $barang->kategori_id = $request->kategori_id;
        $barang->update();

        return response()->json([
            'alert' => 'success',
            'message' => 'Barang '.$barang->nama.' berhasil diupdate'
        ]);
    }

    public function delete(Barang $id)
    {
        $id->delete();
        return response()->json([
            'alert'=>'success',
            'message'=>'Barang '.$id->nama.' berhasil dihapus'
        ]);
    }

    
}