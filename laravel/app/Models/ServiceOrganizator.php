<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ServiceOrganizator extends Model
{
    use HasFactory;

    protected $table = 'organizator_service';

    protected $fillable = [
        'id',
        'service_id',
        'organizator_id'
    ];


    /**
     * Assign serviceOrganizator to services.
     */
    public function services()
    {
        return $this->hasMany(Service::class, 'service_id');
    }

    /**
     * Assign serviceOrganizator to organizators.
     */

    public function organizators()
    {
        return $this->hasMany(Organizator::class, 'organizator_id');
    }

}
