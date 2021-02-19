<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subscription extends Model
{
    public function provide()
    {
        return $this->belongsTo(Provide::class);
    }
    protected $fillable = ['name', 'email', 'phone'];

    public function setProvideId($id)
    {
        if($id == null) {return;}

        $this->provide_id = $id;
        $this->save();;
    }

    public function getFreight()
    {
        if($this->provide != null){
            return $this->provide->title;
        }
        return 'No Freights';
    }
}
