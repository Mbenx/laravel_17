<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Inventory;
use App\Models\Archive;

class InventoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Inventory::all();
        return view('inventory.home', [
            'data' => $data,
            'title' => "Inventory",
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('inventory.create',[
            'title' => "Insert Inventory"
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $req)
    {
        $inventory = Inventory::create([
            'name' => $req->inventory_name,
            'inventory_number' => $req->inventory_number
        ]);

        $last_inventory_id = $inventory->id;
        // dd($insertedId);

        // $last_inventory = Inventory::where('name', $req->inventory_name)
        // ->get()->last();

        // dd($last_inventory);
        Archive::create([
            'inventory_id' => $last_inventory_id,
            'name' => $req->archive_name,
            'archive_number' => $req->archive_number
        ]);

        return redirect('/inventory');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $inventory = Inventory::find($id);
        return view('inventory.show', [
            'data' => $inventory,
            'title' => "History Peminjam",
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $inventory = Inventory::where('id','=',$id)->first();
        $archive = Archive::where('inventory_id','=',$id)
        ->first();
        return view('inventory.edit', [
            'inventory' => $inventory,
            'archive' => $archive,
            'title' => "Edit Inventory",
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        Inventory::where('id','=',$request->inventory_id)->update([
            'name' => $request->inventory_name,
            'inventory_number' => $request->inventory_number
        ]);

        Archive::where('id','=',$request->archive_id)->update([
            'name' => $request->archive_name,
            'archive_number' => $request->archive_number
        ]);

        return redirect('/inventory');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // mass asignment

        Archive::where('inventory_id','=',$id)->delete();
        Inventory::where('id', '=', $id)->delete();



        return redirect("/inventory");
    }
}
