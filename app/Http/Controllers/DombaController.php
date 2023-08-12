<?php

namespace App\Http\Controllers;

use App\Models\Domba;
use App\Http\Requests\StoreDombaRequest;
use App\Http\Requests\UpdateDombaRequest;

class DombaController extends Controller
{
    public function index()
    {
        $data = Domba::all();
    }
    public function store(StoreDombaRequest $request)
    {

    }

    public function update(UpdateDombaRequest $request, Domba $domba)
    {

    }
    public function destroy(Domba $domba)
    {

    }
}
