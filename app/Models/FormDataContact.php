<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class FormDataContact extends Model
{
    use HasFactory;
    protected $table = 'form_data_contact';
    protected $fillable = [
        'fn',
        'ln',
        'pa',
        'province',
        'cor',
        'relationship',
        'iempn',
        'ieea',
        'min',
        'address1',
        'postal1',
        'province1',
        'cor1',
        'iempn1',
        'ieea1',
        'pn',
        'address2',
        'postal2',
        'province2',
        'cor2',
        'iempn2',
        'ieea2',


        
        
    ];


}
