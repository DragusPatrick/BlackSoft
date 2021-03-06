<?php

namespace App;

use App\Helper\DataViewer;
use Illuminate\Database\Eloquent\Model;

class Driver extends Model
{

    use DataViewer;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'partener_id', 'name', 'phone', 'vehicle_id', 'city_id', 'birthday', 'genter'
    ];

    public static $columns = [
        'ID', 'City', 'Name', 'Vehicle',
        'Fleet Operator', 'Phone', 'Birthday', 'Created'
    ];

    /**
     * Get the projects record associated with the user.
     */
    public function booking()
    {
        return $this->hasMany(Booking::class);
    }

    /**
     * Get the projects record associated with the user.
     */
    public function vehicle()
    {
        return $this->belongsTo(Vehicle::class);
    }

    /**
     * Get the projects record associated with the user.
     */
    public function review()
    {
        return $this->hasMany(Review::class);
    }

    /**
     * Get the projects record associated with the user.
     */
    public function fleet_operator()
    {
        return $this->belongsTo(FleetOperator::class);
    }
}
