<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Autor extends Model
{
    protected $table="autor";

	protected $PrimaryKey="id_autor";

	protected $fillable=['nombre'];
}
