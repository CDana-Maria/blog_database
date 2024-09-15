<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;

    protected $table = 'services';

    protected $fillable = [
        'id',
        'price',
        'sponsor_id',
        'description',
        'created_at'
    ];


    /**
     * The services that belong to the sponsors.
     */
    public function sponsor(){
        return $this->belongsTo(Sponsor::class, 'sponsor_id');
    }
/**
     * The services that belong to the organizator.
     */
    public function organizator(){
        return $this->belongsToMany(Organizator::class, ServiceOrganizator::class, 'service_id', 'id');
    }

}
