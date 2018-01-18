<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Users extends Model
{
    public $timestamps = false;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'lastname', 'firstname', 'idGroup'
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [
        'idGroup',
    ];

    public function emails()
    {
        return $this->hasMany('App\Emails', 'idUser');
    }

    public function phoneNumbers()
    {
        return $this->hasMany('App\PhoneNumbers', 'idUser');
    }

    public function groups()
    {
        return $this->belongsTo('App\Groups');
    }
}
