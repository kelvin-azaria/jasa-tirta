<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreBridgeRequest;
use App\Models\Bridge;
use Illuminate\Http\Request;

class BridgeController extends Controller
{

    public function index()
    {
        $bridges = Bridge::paginate(10);
        return view('pages.admins_dashboard.bridge.index',[
            'bridges' => $bridges
        ]);
    }

    public function create()
    {
        return view('pages.admins_dashboard.bridge.create');
    }

    public function show($id)
    {
        $bridge = Bridge::find($id);
        return view('pages.admins_dashboard.bridge.show', ['bridge' => $bridge]);
    }

    public function store(StoreBridgeRequest $request)
    {
        $validated = $request->validated();
        
        Bridge::create($validated);

        return redirect()->route('admin.bridge.index')
            ->with('success','Data berhasil ditambahkan');
    }

    public function edit($id)
    {
        $bridge = Bridge::find($id);
        //check if data exist
        if (is_null($bridge)) {
            return redirect()->route('admin.bridge.index')
                ->with('warning','Terjadi kesalahan saat membuka data');
        }

        return view('pages.admins_dashboard.bridge.edit',['bridge' => $bridge]);
    }

    public function update(StoreBridgeRequest $request, $id)
    {
        $bridge = Bridge::find($id);

        if (is_null($bridge)) {
            return redirect()->route('admin.bridge.index')
                ->with('warning','Terjadi kesalahan saat mengubah data');
        }

        $validated = $request->validated();
        
        $bridge->name = $validated['name'];
        $bridge->phone = $validated['phone'];
        $bridge->bbo_username = $validated['bbo_username'];

        $bridge->save();

        return redirect()->route('admin.bridge.index')
            ->with('success','Data berhasil diubah');
    }

    public function destroy($id)
    {
        $bridge = Bridge::find($id);

        if (is_null($bridge)) {
            return redirect()->back()
                ->with('warning','Terjadi kesalahan saat menghapus data');
        }

        $bridge->delete();

        return redirect()->route('admin.bridge.index')
            ->with('success','Data berhasil dihapus');
    }
}
