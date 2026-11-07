<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function kajian(){
        return $this->hasMany(Kajian::class);
    }

    public function Province(){
        return $this->belongsTo(Province::class, 'provinsi');
    }
    public function regency(){
        return $this->belongsTo(Regency::class, 'kabupaten');
    }
    public function district(){
        return $this->belongsTo(District::class, 'kecamatan');
    }
    public function village(){
        return $this->belongsTo(Village::class, 'desa');
    }

    public function indoregion()
    {
        return $this->belongsTo(Indoregion::class);
    }
}

