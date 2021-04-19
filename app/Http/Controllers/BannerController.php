<?php

namespace App\Http\Controllers;

use App\Model\Banner\BannerMaterial;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use yajra\Datatables\Datatables;

class BannerController extends Controller
{

    public function index()
    { }

    // Tambah Material
    public function add_material(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'price' => 'required',
        ]);

        DB::table('banner_materials')->insert([
            'name'     => $request->name,
            'price'    => $request->price
        ]);

        return redirect()->route('banner')
            ->with('success', 'Bahan disimpan');
    }

    // Tambah Material
    public function edit_material($id)
    {
        $data = DB::table('banner_materials')->find($id);

        return view('admin.banner.edit')
            ->with('data', $data);
    }

    // update Material
    public function update_material(Request $request)
    {
        DB::table('banner_materials')->where('id', $request->id)->update([
            'name'      => $request->name,
            'price'     => $request->price
        ]);
        return redirect()->route('banner')
        ->with('success', 'Bahan berhasil di ubah');
    }

    // delete material
    public function delete_material($id)
    {
        $data = DB::table('banner_materials')->where('id', $id);
        $data->delete();
        return redirect()->route('banner')
            ->with('success', 'Bahan telah di hapus');
    }


    public function json_material()
    {
        $query = BannerMaterial::query()->orderBy('id', 'desc');
        return Datatables::of($query)
            ->addIndexColumn()
            ->addColumn('action', function ($query) {
                $btn = '<div class="btn-group btn-group-sm mr-2 ml-lg-auto" role="group" aria-label="Table row actions">
			<a type="button" href="/admin/banner/edit-material-banner/' . $query->id . '" class="iframe cboxElement btn btn-white">
			  <i class="material-icons">edit</i>
			</a>
			<a type="button" href="/admin/banner/delete-material-banner/' . $query->id . '" Onclick="return ConfirmDelete();" id="name" data-name="'. $query->name .'"  class="btn btn-danger">
			  <i class="material-icons">delete</i>
			</a></div>';

                return $btn;
            })
            ->make(true);
    }
}
