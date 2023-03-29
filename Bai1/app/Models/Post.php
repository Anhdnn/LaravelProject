<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Post extends Model
{
    protected $table = 'Post';
    public function nhanvien():BelongsTo {
        return $this->belongsTo(NhanVien::class,'IDNV','IDNV')->withDefault([
            'IDNV'=>'aiupvn',
            'IDPB'=>'ECS'
        ]);
    }

}
