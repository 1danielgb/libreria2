<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Editorial extends Model
{
    protected $table="editoria";

	protected $PrimaryKey="id_editoria";

	protected $fillable=['nombre', 'telefono'];
}
