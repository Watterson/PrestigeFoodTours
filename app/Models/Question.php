<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
  /**
  * The table associated with the model.
  *
  * @var string
  */
 protected $table = 'questions';
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
      'bundle_id', 'title', 'category',
  ];
  /**
   * Indicates if the model should be timestamped.
   *
   * @var bool
   */
  public $timestamps = true;
  /**
  * Get the location where the property is from.
  */
 public function competition()
 {
     return $this->belongsTo('App\Models\Competition');
 }
 /**
  * Get the Bookings for the Property.
  */
 public function answer()
 {
     return $this->hasMany('App\Models\Answer');
 }
}
