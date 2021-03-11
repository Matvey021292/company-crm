<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Company extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'email', 'site', 'logo'];

    public $timestamps = false;

    /**
     * @return HasMany
     */
    public function employee(){
        return $this->hasMany('App\Models\Employee');
    }

}
