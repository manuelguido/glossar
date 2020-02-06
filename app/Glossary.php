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

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'user_id',
    ];

    /**
     * Get the temrs for the glossary.
     */
    public function terms()
    {
        return $this->hasMany('App\Term', 'glossary_id', 'glossary_id')->get();
    }

    /**
     * Get the user that owns the glossary.
     */
    public function user()
    {
        return $this->belongsTo('App\User', 'user_id', 'user_id')->get();
    }
}
