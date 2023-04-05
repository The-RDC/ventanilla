<?php

namespace App\Http\Controllers;

use App\Models\solicitud_vacaciones;
use App\Http\Requests\Storesolicitud_vacacionesRequest;
use App\Http\Requests\Updatesolicitud_vacacionesRequest;

class SolicitudVacacionesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Storesolicitud_vacacionesRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(solicitud_vacaciones $solicitud_vacaciones)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(solicitud_vacaciones $solicitud_vacaciones)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Updatesolicitud_vacacionesRequest $request, solicitud_vacaciones $solicitud_vacaciones)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(solicitud_vacaciones $solicitud_vacaciones)
    {
        //
    }
}
