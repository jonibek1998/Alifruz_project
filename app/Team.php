<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    protected $fillable = ['name', 'text', 'position'];

    public static function add($fields)
    {
        $service = new static;
        $service->fill($fields);
        $service->save();

        return $service;
    }

    public function edit($fields)
    {
        $this->fill($fields);
        $this->save();
    }

    public function removeImage()
    {
        if($this->avatar != null){
            Storage::delete('uploads/'.$this->avatar);
        }
    }

    public function uploadImage($avatar)
    {
        if($avatar == null) {return; }

        $this->removeImage();
        $filename = str_random(10).'.'.$avatar->extension();
        $avatar->storeAs('uploads', $filename);
        $this->avatar = $filename;
        $this->save();
    }

    public function getImage()
    {
        if($this->avatar != null){
            return '/uploads/'.$this->avatar;
        }
    }

    public function remove()
    {
        $this->removeImage();
        $this->delete();
    }
}
