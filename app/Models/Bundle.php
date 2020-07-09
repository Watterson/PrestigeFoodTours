<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Bundle extends Model
{
  /**
  * The table associated with the model.
  *
  * @var string
  */
 protected $table = 'bundles';
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
      'title', 'description', 'start_date', 'end_date', 'total_entries', 'total_cost', 'total_profit',
  ];
  /**
   * Indicates if the model should be timestamped.
   *
   * @var bool
   */
  public $timestamps = true;

 /**
  * Get the Question for the Property.
  */
 public function question()
 {
     return $this->hasOne('App\Models\Question');
 }

 public function prize()
 {
     return $this->hasMany('App\Models\Prize');
 }
 public function order()
 {
     return $this->hasMany('App\Models\Order');
 }
 public function winner()
 {
     return $this->hasMany('App\Models\Winner');
 }
}
