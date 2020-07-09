<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Prize extends Model
{
  /**
  * The table associated with the model.
  *
  * @var string
  */
 protected $table = 'prizes';
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
      'supplier_id', 'title', 'description', 'cost',
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
     return $this->Many('App\Models\Bundle');
 }

 public function supplier()
 {
     return $this->hasOne('App\Models\Supplier');
 }
}

}
