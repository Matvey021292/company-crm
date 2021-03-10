<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Employer extends Model
{
    use HasFactory;
    use HasFactory;

    protected $fillable = ['name', 'email', 'lastname', 'phone', 'company_id'];

    public $timestamps = false;

    /**
     * @return HasOne
     */
    public function company(): HasOne
    {
        return $this->hasOne('App\Models\Company', 'id', 'company_id');
    }
}
