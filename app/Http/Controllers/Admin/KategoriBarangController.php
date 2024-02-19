<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request; 
use App\Models\KategoriBarang;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class KategoriBarangController extends Controller
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
        $collection = KategoriBarang::get();
        return view('page.admin.kategori.main', compact('collection'));
    }

    public function create()
    { 
        return view('page.admin.kategori.create',['kategoriBarang'=>new KategoriBarang]);
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'nama' => 'required|unique:kategori',
        ]);
        if($validator->fails()){
            $errors = $validator->errors();
            if($errors->has('nama')){
                return response()->json([
                    'alert'=>'error',
                    'message'=>$errors->first('nama')
                ]);
            }
        }

        $data = new KategoriBarang;
        $data->nama = $request->nama;
        $data->save();
        return response()->json([
            'alert'=>'success',
            'message'=>'Kategori '.$data->nama.' berhasil disimpan'
        ]);
    }

    public function edit(KategoriBarang $id)
    { 
        return view('page.admin.kategori.create',['kategoriBarang'=>$id]);
    }

    public function update(Request $request, KategoriBarang $id)
    {
        $validator = Validator::make($request->all(), [
            'nama' => 'required|unique:kategori',
        ]);
        if($validator->fails()){
            $errors = $validator->errors();
            if($errors->has('nama')){
                return response()->json([
                    'alert'=>'error',
                    'message'=>$errors->first('nama')
                ]);
            }
        }
        
        $id->nama = $request->nama;
        $id->update();
        return response()->json([
            'alert'=>'success',
            'message'=>'Kategori '.$id->nama.' berhasil diupdate'
        ]);
    }

    public function delete(KategoriBarang $id)
    {
        $id->delete();
        return response()->json([
            'alert'=>'success',
            'message'=>'Kategori '.$id->nama.' berhasil dihapus'
        ]);
    }
}