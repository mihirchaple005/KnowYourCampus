<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Chirp extends Model
{
    use HasFactory;

    protected $fillable = [
        'message',
    ];
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
    public function chirpable()
    {
        return $this->morphTo();
    }
    
public function image()
{
    return $this->belongsTo(Image::class);
}


}
