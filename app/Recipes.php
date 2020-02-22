<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Recipes extends Model
{
    //
    protected $guarded = array('id');

    // 以下を追記
    public static $rules = array(
        'title' => 'required',
        'materials' => 'required',
        'method' => 'required',
    );

    protected $table = 'recipes';

    public function user() // 単数形
    {
        return $this->belongsTo('App\User');
    }
}
