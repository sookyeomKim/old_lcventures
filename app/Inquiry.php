<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Inquiry extends Model
{
    protected $fillable = ['iq_u_name', 'iq_c_name', 'iq_u_phone', 'iq_u_email', 'iq_cost', 'iq_content'];
}
