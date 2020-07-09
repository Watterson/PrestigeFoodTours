<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Winner extends Model
{
  /**
  * The table associated with the model.
  *
  * @var string
  */
 protected $table = 'winners';
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
      'user_id', 'order_id', 'bundle_id', 'notified', 'collected',
  ];
  /**
   * Indicates if the model should be timestamped.
   *
   * @var bool
   */
  public $timestamps = true;

 /**
  * Get the Bundle that the user ordered.
  */
 public function order()
 {
     return $this->hasOne('App\Models\Order');
 }

 public function user()
 {
     return $this->hasOne('App\Models\User');
 }
 public function bundle()
 {
     return $this->hasOne('App\Models\Bundle');
 }
}
