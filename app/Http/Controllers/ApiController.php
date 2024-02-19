<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use Illuminate\Http\Request;
use App\Models\KategoriBarang;
use App\Http\Resources\BarangResource;
use App\Http\Resources\KategoriBarangResource;

class ApiController extends Controller
{
    public function index(Request $request)
    { 
        return response()->json(
            BarangResource::collection(
                Barang::where('nama', 'like', '%' . $request->keywords . '%')->paginate(5)
            )
        );
    }

    public function show($barang_id)
    {
        $barang = Barang::find($barang_id);
        if(!$barang){
            return response()->json(['message'=>'No Data!'], 404);
        }
        
        return new BarangResource($barang);
    }

    public function indexKategori(Request $request)
    { 
        return response()->json(
            KategoriBarangResource::collection(
                KategoriBarang::where('nama','like','%'.$request->keywords.'%')->paginate(5)
            )
        );
    }

    public function showKategori($kategori_id)
    {
        $kategori = KategoriBarang::find($kategori_id);
        if(!$kategori){
            return response()->json(['message'=>'No Data!'], 404);
        }

        return new KategoriBarangResource($kategori);
    }
}