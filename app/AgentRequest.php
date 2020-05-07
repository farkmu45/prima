<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AgentRequest extends Model
{
    protected $table = 'agent_requests';

    protected $guarded = ['id'];

    public function user()
    {
        return $this->belongsTo('users');
    }
}
