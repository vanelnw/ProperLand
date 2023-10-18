<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

use App\Models\Property; 

class Agent extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'email',
        'phone_number',
        'bio',
        'image'
    ];

    public function properties()
    {
        return $this->hasMany(Property::class);
    }

    public function imageUrl():string
    {
        return Storage::disk('public')->url($this->image);
    }

}
