<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class quanHangHoa extends Model
{
    use HasFactory;
    protected $table ='quanlyHangHoa';
    public $timestamps =false;
    protected $fillable =[
       'TenDanhMuc','DanhMucThietYeu'
    ];
}
