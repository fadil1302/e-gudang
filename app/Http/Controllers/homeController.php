<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class homeController extends Controller
{
    public function dashboard(){
        return view('dashboard');
    }

    //login
    public function login(){
        return view('login');
    }
    public function dologin(Request $request){
        dd($request->all());
        // Lakukan validasi inputan dari form
        $validasi = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        // Coba untuk melakukan login
        if (auth()->attempt($validasi)) {
            // Jika berhasil, redirect ke halaman dashboard
            return redirect()->route('index');
        }

        // Jika tidak berhasil, kembali ke halaman login dengan pesan error
        return back()->withErrors([
            'email' => 'Email tidak ada.',
        ]);
    }

    //login
    public function index(){
        $data = User::get();

        return view('index', compact('data'));
    }

    //create
    public function create(){
        return view('create');
    }

    public function store(Request $request){
        $validator = Validator::make($request->all(),[
            'email' => 'required|email',
            'nama' => 'required',
            'password' => 'required'
        ]);

        if($validator->fails()) return redirect()->back()->withInput()->withErrors($validator);

        $data['email'] = $request->email;
        $data['name'] = $request->nama;
        $data['password'] = Hash::make($request->password);

        User::create($data);

        return redirect()->route('index');
    }
    //create

    //edit
    public function edit(Request $request,$id){
        $data = User::find($id);

        return view('edit', compact('data'));
    }

    public function update(Request $request,$id){
        $validator = Validator::make($request->all(),[
            'email' => 'required|email',
            'nama' => 'required',
            'password' => 'nullable'
        ]);

        if($validator->fails()) return redirect()->back()->withInput()->withErrors($validator);

        $data['email'] = $request->email;
        $data['name'] = $request->nama;
        if($request->password){
            $data['password'] = Hash::make($request->password);
        }

        User::whereId($id)->update($data);

        return redirect()->route('index');
        }
        //edit
        
        //delete
        public function delete(Request $request,$id){
            $data = User::find($id);
            
            if($data){
                $data->delete();
                }
            return redirect()->route('index');
                }
    //delete
}
