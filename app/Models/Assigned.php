<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use App\Models\Booking;
use App\Models\User;
use Illuminate\Database\Eloquent\Model;

class Assigned extends Model
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'sname',
        'serviceid',
        'userid',
        'status'
    ];
    
    public function user()
    {
        return $this->belongsTo(User::class, 'userid', 'id');
    }
    
    public function booking()
    {
        return $this->belongsTo(Booking::class, 'serviceid', 'id');
    }
    
    public function employeebooking()
{
    return $this->belongsTo(Booking::class, 'serviceid', 'id')->where('status', '=', 'assigned');
}

}