<?php

namespace App\Http\Controllers;

use App\Models\Guestbook;
use Illuminate\Http\Request;

class GuestbookController extends Controller
{
    //

    public function showView()
    {
        return view('guestbook.guestbook');
    }

    public function submit()
    {
        $guesBook = new Guestbook();
    }
}
