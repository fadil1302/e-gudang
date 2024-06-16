<?php

namespace App\Http\Controllers;

use App\Models\Gudang;
use Illuminate\Http\Request;
// use App\Models\Gudang;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class gudangController extends Controller
{
    public function gudang(){
        $data = Gudang::get();

        return view('gudang.index', compact('data'));
    }

     //create
     public function create(){
        return view('gudang.create');
    }

    public function store(Request $request){
        $validator = Validator::make($request->all(),[
            'nama' => 'required',
            'stock' => 'required',
        ]);

        if($validator->fails()) return redirect()->back()->withInput()->withErrors($validator);

        $data['name'] = $request->nama;
        $data['stock'] = $request->stock;


        Gudang::create($data);

        return redirect()->route('admin.gudang');
    }
    //create

    //edit
    public function edit(Request $request,$id){
        $data = Gudang::find($id);

        return view('gudang.edit', compact('data'));
    }

    public function update(Request $request,$id){
        $validator = Validator::make($request->all(),[
            'nama' => 'required',
            'stock' => 'required'
        ]);

        if($validator->fails()) return redirect()->back()->withInput()->withErrors($validator);

        $data['name'] = $request->nama;
        $data['stock'] = $request->stock;


        Gudang::whereId($id)->update($data);

        return redirect()->route('admin.gudang');
        }
        //edit
        
        //delete
        public function delete(Request $request,$id){
            $data = Gudang::find($id);
            
            if($data){
                $data->delete();
                }
            return redirect()->route('admin.gudang');
                }
    //delete
}
