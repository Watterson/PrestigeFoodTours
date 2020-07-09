<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Refund extends Model
{
  /**
  * The table associated with the model.
  *
  * @var string
  */
 protected $table = 'refunds';
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
      'user_id', 'order_id', 'stripe_transaction_id', 'stripe_transaction_id', 'amount',
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
}
