<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BundlePrize extends Model
{
  /**
  * The table associated with the model.
  *
  * @var string
  */
 protected $table = 'bundleprizes';
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
      'bundle_id', 'prize_id',
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


 public function prize()
 {
     return $this->hasMany('App\Models\Prize');
 }
 public function bundle()
 {
     return $this->hasMany('App\Models\Bundle');
 }

}
