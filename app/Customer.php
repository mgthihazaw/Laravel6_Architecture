<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $guarded = [];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function format()
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'created_by' => $this->user->email,
            'created_at' => $this->created_at,

        ];
    }
}