<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Discord extends Model
{
    use HasFactory;

    protected $table = 'discords';

    public function getWhoWhere()
    {
        $who = $this->find(1)->who_nah;
        $where = $this->find(1)->where_nah;
        return 'Who ' . $who . '   Where ' . $where;
    }
    public function getWho()
    {
        return $this->find(1)->who_nah;
    }
    public function getWhere()
    {
        return $this->find(1)->where_nah;
    }
    public function getWhen()
    {
        return $this->find(1)->when_nah;
    }
    public function getHow()
    {
        return $this->find(1)->how_nah;
    }
}
