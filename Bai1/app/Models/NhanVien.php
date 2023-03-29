<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class NhanVien extends Model
{
    protected $table = 'NhanVien';
    protected $primaryKey = 'idnv';
    protected $keyType = 'string';
    use HasFactory;
    public function getAllNhanVien(){
        // $users = DB::select('SELECT * from NhanVien ');
        $users = DB::table($this->table)->where('diachi','Da Nang')->get();
        // $users = DB::table('NhanVien')->orderBy('idnv')->cursorPaginate(3);
        return $users;
    }
    public function addNV($data){
        $check = DB::insert('INSERT INTO NhanVien (IDNV,HoTen, IDPB,DiaChi)
        VALUES (?,?,?,?)',$data);
        return $check;
    }
    public function phongban():BelongsTo{
        return $this->belongsTo(PhongBan::class,'IDPB','IDPB')->withDefault();
    }
    public function post():HasMany {
        return $this->hasMany(Post::class,'IDNV','IDNV');
    }
}
