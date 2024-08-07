<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Spatie\Activitylog\Traits\LogsActivity;
 use HasApiTokens, HasFactory, Notifiable;


 
class Registro extends Model
{
  use LogsActivity;
  protected	$table = 'registros';
  protected	$primaryKey = 'id';

  public $timestamps = false;

  protected $fillable = ['nombre','categoria','subcategoria','framework','foto','enlace'];
  protected static $logOnlyDirty = true;

  public function getUrlPathAttribute()
    {
        Storage::url($this->path);
    }
     
}



