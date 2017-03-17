<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    protected $fillable = ['review', 'updated_at', 'created_at'];

    /**
    * Prepares reviews for display
    * @return Json
    */
    public static function display()
    {
        return self::orderBy('updated_at', 'desc')->get()->toJson();
    }
}
