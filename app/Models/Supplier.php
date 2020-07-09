<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
{
  /**
  * The table associated with the model.
  *
  * @var string
  */
 protected $table = 'suppliers';
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
      'title', 'description', 'contact', 'email', 'landline', 'mobile', 'address',
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
 public function prize()
 {
     return $this->hasMany('App\Models\Prize');
 }

 
}
