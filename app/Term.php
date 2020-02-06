<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Term extends Model
{
    /**
     * Attributes
     */
    protected $table = 'terms';

    protected $primaryKey = 'term_id';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'glossary_id',
    ];

    /**
     * Get the glossary that owns the term.
     */
    public function glossary()
    {
        return $this->belongsTo('App\Glossary');
    }
}
