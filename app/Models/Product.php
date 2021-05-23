<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory; 

    protected $guarded = [];

    public function media()
    {
        return $this->belongsToMany(Media::class);
    }

    public function getImageAttribute()
    {
        // if($this->media?->first()){
        //     $path = $this->media->first()->path;
        //     return "/storage/" . $path;
            $first_media = $this->media()->first();
            if($first_media){
                $path = $first_media->path;
                return "/storage/" . $path;
            }

            return null;
    }
    
}
