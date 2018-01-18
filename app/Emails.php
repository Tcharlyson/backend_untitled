<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Emails extends Model
{
    public $timestamps = false;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'idUser', 'email', 'idType'
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [
        'idUser', 'idType'
    ];

    public function emails()
    {
        return $this->belongsTo('App\Users', 'idUser');
    }
}
