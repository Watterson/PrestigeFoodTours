<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Answer extends Model
{
  /**
  * The table associated with the model.
  *
  * @var string
  */
 protected $table = 'answers';
 /**
   * The primary key associated with the table.
   *
   * @var string
   */
  protected $primaryKey = 'id';
  /**
   * The attributes that are mass assignable.
   *
   * @var array
   */
  protected $fillable = [
      'question_id', 'title', 'correct',
  ];
  /**
   * Indicates if the model should be timestamped.
   *
   * @var bool
   */
  public $timestamps = true;
  /**
  * Get the property which the booking was made for.
  */
 public function question()
 {
     return $this->belongsTo('App\Models\Question');
 }
}
