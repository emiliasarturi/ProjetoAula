<?php

namespace App;
use Illuminate\Database\Eloquent\Model;
use App\messages;

class Atividade extends Model
{
    protected $table = 'atividades';

    public function messages ()
    {
        return $this->hasMany(messages::class);
    }


}
