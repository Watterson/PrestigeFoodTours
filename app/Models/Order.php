<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
  /**
  * The table associated with the model.
  *
  * @var string
  */
 protected $table = 'orders';
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
      'user_id', 'stripe_transaction_id', 'stripe_transaction_id', 'amount',
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
 public function bundle()
 {
     return $this->hasOne('App\Models\Bundle');
 }

 public function prize()
 {
     return $this->hasMany('App\Models\Prize');
 }
 public function winner()
 {
     return $this->hasMany('App\Models\Winner');
 }
}
