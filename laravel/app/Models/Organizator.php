<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Organizator extends Model
{
    use HasFactory;

    protected $table = 'organizators';

    protected $fillable = [
        'id',
        'name'
    ];

    /**
     * Get the contact associated with the organizator.
     */
    public function contact(){
        return $this->hasOne(Contact::class, 'contact_id');
    }

    /**
     * The organizator that belong to the service.
     */

    public function service(){
        return $this->belongsToMany(Service::class, ServiceOrganizator::class, 'organizator_id', 'id');
    }

}
