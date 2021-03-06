<?php

namespace App;

use App\Helper\DataViewer;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use DataViewer;

    public static $columns = [
        'ID', 'Booking', 'Driver',
        'Review', 'Rating', 'Customer', 'Created'
    ];

    /**
     * Get the bookings record associated with the user.
     */
    public function booking()
    {
        return $this->belongsTo(Booking::class);
    }

    /**
     * Get the drivers record associated with the user.
     */
    public function driver()
    {
        return $this->belongsTo(Driver::class);
    }
}
