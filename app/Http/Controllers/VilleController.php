<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Ville;
use App\Models\VilleUser;
use App\Models\Countr;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Support\Facades\Auth;

class VilleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $villes = Ville::get();
        $role = Auth::user()->role;
        return view('villes.index',compact('villes','role'));
    }
    public function index2(): View
    {
        $villes = Ville::where('deleted_at','<>',null)->withTrashed()->get();
        return view('villes.index2',compact('villes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $pays = Countr::get();
        $users = User::get();
        return view('villes.create',compact('pays','users'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'nom' => 'required',
            'countr_id' => 'required',
        ]);
        $ville = Ville::create($request->all());

        foreach($request->user_id as $user){
            VilleUser::create(["ville_id"=>$ville->id,"user_id"=>$user]);
        }

        return redirect()->route('villes.index')
                        ->with('success','Ville a été créé avec succès.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Ville $ville): View
    {
        $ville = Ville::with('pays')->where('id',$ville->id)->first();
        $ville_users = VilleUser::with('users')->where('ville_id',$ville->id)->get();

        return view('villes.show',compact('ville','ville_users'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Ville $ville): View
    {
        $pays = Countr::get();
        $users = User::with('VilleUser')->get();
        $ville_users = VilleUser::with('users')->select('user_id')->where('ville_id',$ville->id)->get();
        return view('villes.edit',compact('pays','ville','users','ville_users'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Ville $ville): RedirectResponse
    {
        $request->validate([
            'nom' => 'required',
            'countr_id' => 'required',
        ]);

        $ville->update($request->all());
        VilleUser::where('ville_id',$ville->id)->delete();
        foreach($request->user_id as $user){
            VilleUser::create(["ville_id"=>$ville->id,"user_id"=>$user]);
        }

        return redirect()->route('villes.index')
                        ->with('success','Ville a été modifié avec succès.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Ville $ville): RedirectResponse
    {
        $ville->delete();

        return redirect()->route('villes.index')
                        ->with('success','Ville a été suprimé avec succès.');
    }
}
