<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Provide extends Model
{
    protected $fillable = ['title', 'description'];

    public function subscriptions()
    {       
        return $this->hasMany(Subscription::class);
    }

    public static function add($fields)
    {
        $prov = new static;
        $prov->fill($fields);
        $prov->save();

        return $prov;
    }

    public function edit($fields)
    {
        $this->fill($fields);
        $this->save();
    }

    public function removeImage()
    {
        if($this->icon != null){
            Storage::delete('uploads/'.$this->icon);
        }
    }

    public function uploadImage($image)
    {
        if($image == null) {return;}

        $this->removeImage();
        $filename = str_random(10).'.'.$image->extension();
        $image->storeAs('uploads', $filename);
        $this->icon = $filename;
        $this->save();
    }

    public function getImage()
    {
        if($this->icon != null){
            return '/uploads/'.$this->icon;
        }
    }

    public function remove()
    {
        $this->removeImage();
        $this->delete();
    }
}
