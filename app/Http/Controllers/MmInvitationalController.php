<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


use App\Http\Requests;
use App\Http\Requests\OsaRequest;
use App\Http\Controllers\Controller;

class MmInvitationalController extends Controller
{
    public function osa(OsaRequest $request)
    {
        dd('ok');
    }
}
