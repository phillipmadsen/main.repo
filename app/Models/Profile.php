<?php

namespace App\Models;
use Eloquent;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $fillable = [ ];
    protected $primaryKey = 'id';
    protected $table = 'profile';

    public function user() {
        return $this->belongsTo(App\User::class);
    }

}
