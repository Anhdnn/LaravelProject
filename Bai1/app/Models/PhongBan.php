<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class PhongBan extends Model
{
    use HasFactory;
    protected $table = 'PhongBan';
    protected $primaryKey = 'idpb';
    protected $keyType = 'string';
    public function nhanvien():BelongsToMany {
        return $this->belongsToMany(NhanVien::class,'IDPB','IDPB');

    }

}
