<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cave extends Model
{
    // LINK THIS MODEL TO OUR DATABASE TABLE ---------------------------------    
    protected $table = 'caves';
    // MASS ASSIGNMENT -------------------------------------------------------
    // define which attributes are mass assignable (for security)
    // we only want these 2 attributes able to be filled
    protected $fillable = array('location', 'bear_id');    

    // DEFINE RELATIONSHIPS --------------------------------------------------
    public function bear() {
        return $this->belongsTo('App\Bear');
    }
}
