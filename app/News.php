<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Support\Facades\Storage;

class News extends Model
{
    use Sluggable;
    
    protected $fillable = ['title', 'description', 'content'];

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }

    public static function add($fields)
    {
        $news = new static;
        $news->fill($fields);
        $news->save();

        return $news;
    }

    public function edit($fields)
    {
        $this->fill($fields);
        $this->save();
    }

    public function removeImage()
    {
        if($this->image != null){
            Storage::delete('uploads/'.$this->image);
        }
    }

    public function uploadImage($image)
    {
        if($image == null) {return;}
        
        $this->removeImage();
        $filename = str_random(10).'.'.$image->extension();
        $image->storeAs('uploads', $filename);
        $this->image = $filename;
        $this->save();
    }

    public function getImage()
    {
        if($this->image != null){
            return '/uploads/'.$this->image;
        }
    }

    public function remove()
    {
        $this->removeImage();
        $this->delete();
    }
}
