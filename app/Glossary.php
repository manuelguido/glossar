<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Glossary extends Model
{
    /**
    * Attributes
    */
    protected $table = 'glossaries';

    protected $primaryKey = 'glossary_id';
}
