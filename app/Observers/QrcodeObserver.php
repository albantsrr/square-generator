<?php

namespace App\Observers;

use App\Models\Qrcode;
use Illuminate\Support\Facades\Auth;

class QrcodeObserver
{
    /**
     * Handle the Qrcode "created" event.
     *
     * @param  \App\Models\Qrcode  $qrcode
     * @return void
     */
    public function created(Qrcode $qrcode)
    {
        $qrcode->user_id = Auth::id();
        $qrcode->save();
    }

    /**
     * Handle the Qrcode "updated" event.
     *
     * @param  \App\Models\Qrcode  $qrcode
     * @return void
     */
    public function updated(Qrcode $qrcode)
    {
        //
    }

    /**
     * Handle the Qrcode "deleted" event.
     *
     * @param  \App\Models\Qrcode  $qrcode
     * @return void
     */
    public function deleted(Qrcode $qrcode)
    {
        //
    }

    /**
     * Handle the Qrcode "restored" event.
     *
     * @param  \App\Models\Qrcode  $qrcode
     * @return void
     */
    public function restored(Qrcode $qrcode)
    {
        //
    }

    /**
     * Handle the Qrcode "force deleted" event.
     *
     * @param  \App\Models\Qrcode  $qrcode
     * @return void
     */
    public function forceDeleted(Qrcode $qrcode)
    {
        //
    }
}
