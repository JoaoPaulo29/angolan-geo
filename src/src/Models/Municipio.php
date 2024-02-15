<?php

// app/Models/Municipio.php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Municipio extends Model
{
    protected $fillable = ['name', 'provincia_id'];

    public function provincia()
    {
        return $this->belongsTo(Provincia::class);
    }
}
