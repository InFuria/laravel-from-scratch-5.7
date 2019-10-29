<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    protected $fillable = [
        'completed', 'project_id','description'
    ];


    public function complete($completed = true)
    {
        $this->update(compact('completed'));
    }


    public function incomplete()
    {
        $this->complete(false);
    }


    public function project()
    {
        //Esta clase pertenece a la clase Project
        return $this->belongsTo('App\Project');
    }
}
