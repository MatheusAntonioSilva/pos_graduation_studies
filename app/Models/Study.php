<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Study extends Model
{
    public $fillable = [
        'description',
        'date_init',
        'date_finish',
        'status',
        'area_id'
    ];

    public function area()
    {
        return $this->belongsTo(Area::class, 'area_id', 'id');
    }

    public function countStudiesInDelay() {
        return $this->where('status', 'Em atraso')->count();
    }

    public function countStudiesInProgress() {
        return $this->where('status', 'Em andamento')->count();
    }

    public function countStudiesFinalized() {
        return $this->where('status', 'Finalizado')->count();
    }

}