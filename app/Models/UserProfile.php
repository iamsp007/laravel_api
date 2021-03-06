<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Countries;

class UserProfile extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id',
        'profession',
        'company_name',
        'meeting_type',
    ];
    
    public function country()
    {
        return $this->belongsTo(Countries::userProfileCountry, 'country_id');
    }
}
