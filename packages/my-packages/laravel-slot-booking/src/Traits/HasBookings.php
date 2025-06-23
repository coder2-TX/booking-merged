<?php

namespace Khadija\LaravelSlotBooking\Traits;

use Khadija\LaravelSlotBooking\Models\Booking;

trait HasBookings
{
    public function bookings()
    {
        return $this->morphMany(Booking::class, 'bookable');
    }
}