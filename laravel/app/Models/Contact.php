<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;

    protected $table = 'contacts';

    protected $fillable =[
        'id',
        'organizator_id',
        'phone_number',
        'email',
        'address',
        'created_at'
    ];

     /**
     * Get the organizator that owns the contact.
     */
    public function organizator(){
        return $this->belongsTo(Organizator::class, 'contact_id', 'id');
    }

}
