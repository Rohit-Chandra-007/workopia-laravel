<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Job extends Model
{
    use HasFactory;
    // if the table name is different from the model name, you can specify it like this
    protected $table = 'job_listings';

    protected $fillable = [
        'user_id',
        'title',
        'description',
        'salary',
        'tags',
        'job_type',
        'remote',
        'requirement',
        'responsibility',
        'benefit',
        'address',
        'city',
        'state',
        'zipcode',
        'contact_email',
        'contact_phone',
        'company_name',
        'company_description',
        'company_logo',
        'company_website',
    ];

    /**
     * Relationship between Job and User
     * Get the user that owns the Job
     */

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
