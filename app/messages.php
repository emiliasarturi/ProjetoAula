<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Atividade;

class messages extends Model
{
    protected $table = 'messages';

    public function atividade()
    {
        return $this->belongsTo(Atividade::class);
    }


}
