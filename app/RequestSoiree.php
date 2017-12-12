<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RequestSoiree extends Model
{
    protected $table = 'request_soiree';

    protected $fillable = ['email', 'name'];

    public $timestamps = false;

    public function accept()
    {
        $this->status = 1;
        return $this->save();
    }

    public function reject()
    {
        $this->status = 0;
        return $this->save();
    }
}
