<?php

namespace App\Http\Controllers;

use App\Models\Countr;
use App\Models\Ville;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Support\Facades\Auth;
use Maatwebsite\Excel\Facades\Excel;

class CountrController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $countrs = Countr::get();
        $role = Auth::user()->role;
        return view('countrs.index',compact('countrs','role'));
    }

    public function index2(): View
    {
        $countrs = Countr::where('deleted_at','<>',null)->withTrashed()->get();
        return view('countrs.index2',compact('countrs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        return view('countrs.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'nom' => 'required',
        ]);

        Countr::create($request->all());

        return redirect()->route('countrs.index')
                        ->with('success','Pays a été créé avec succès.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Countr $countr): View
    {
        $villes = Ville::with('pays')->where('countr_id',$countr->id)->get();
        return view('countrs.show',compact('countr','villes'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Countr $countr): View
    {
        return view('countrs.edit',compact('countr'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Countr $countr): RedirectResponse
    {
        $request->validate([
            'nom' => 'required',
        ]);

        $countr->update($request->all());

        return redirect()->route('countrs.index')
                        ->with('success','Pays a été modifié avec succès.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Countr $countr): RedirectResponse
    {
        $countr->delete();

        return redirect()->route('countrs.index')
                        ->with('success','Pays a été suprimé avec succès.');
    }
}
