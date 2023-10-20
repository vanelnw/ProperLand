<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Support\Str;

use Illuminate\Database\Eloquent\Relations\BelongsToMany;

use App\Models\Option; 
use App\Models\Agent; 

class Property extends Model
{
    use HasFactory;

    protected $fillable = [
            "title",
            "description",
            "surface",
            "rooms",
            "bedrooms",
             "floor" ,
            "bathrooms",
            "price",
            "city",
            "address",
            "postal_code",
            "sold_or_rent",
            "agent_id"
    ];

    public function options(): BelongsToMany
    {
        return $this->belongsToMany(Option::class);
    }

    public function agent()
    {
        return $this->belongsTo(Agent::class);
    }

    public function getSlug():string{
        return Str::slug($this->title);
    }

    public function pictures()
    {
        return $this->hasMany(\App\Models\Picture::class);
    }

}
