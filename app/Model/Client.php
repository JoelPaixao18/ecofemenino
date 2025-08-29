<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Client extends Model
{
    //
    use SoftDeletes;
    protected $fillable = [
        'name', 
        'email', 
        'phone', 
        'address', 
        'bi', 
        'bi_upload', 
        'driver_license', 
        'driver_license_upload'
    ];
    public function reserves()
    {
        return $this->hasMany(Reserve::class);
    }
}
