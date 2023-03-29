<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\NhanVien;
use App\Models\PhongBan;
use App\Models\User;

use App\Models\Role;

use Illuminate\Support\Facades\Redis;
class NhanVienController extends Controller
{
    protected $nhanvien;
    public function __construct()
    {
        $this->nhanvien = new NhanVien();

    }
    public function GetAllNV(){
        $title = 'Danh Sach';
        $users = NhanVien::all();
        // $users = $this->nhanvien->getAllNhanVien();
        return view('table', compact('title','users'));
    }
    public function GetNV(){
        $title = 'Nhan Vien';
        Redis::set('name', 'Taylor');
        $name = 'Ngọc Anh';
        // $name = Redis::get('name');
        return view('dashboard', compact('title','name'));
    }
    public function GetViewAdd(){
        $title = 'Them nhan vien';
        return view('addnv', compact('title'));
    }
    public function AddNV(Request $request){

        $vali = $request->validate([
            'idnv' =>'required',
            'idpb' =>'required',
            'diachi' =>'required',
            'hoten' =>'required',
            ],['required' =>'Bat buoc nhap']);
        $data=[
            $request->idnv,
            $request->hoten,
            $request->idpb,
            $request->diachi
         ];
        $check = $this->nhanvien->addNV($data);
        if($check){
            return $this->GetAllNV();
        }
    }
    public function TestAdd(){
        $users = Role::find(1)->pivot();
        foreach($users as $user){
           echo $user;        
        }
        dd($users);

        // $nhanvien = PhongBan::where('MoTa', 'Team PHP')->get();
 
        // $posts = NhanVien::whereBelongsTo($nhanvien)->get();
        // dd($posts);
    }

}
