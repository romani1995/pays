<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('villes.store') }}" method="POST">
            @csrf

             <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 mb-4">
                    <div class="form-group">
                        <strong>Nom:</strong>
                        <input type="text" name="nom" class="form-control" placeholder="Nom">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12 mb-4">
                    <div class="form-group">
                        <strong>Pays:</strong>
                        <select name="countr_id" class="form-control" >
                            @foreach ($pays as $p)
                                <option value="{{$p->id}}">{{$p->nom}}</option>
                            @endforeach
                          </select>
                    </div>
                </div>
                    <div class="form-group mb-4">
                        <strong>Personnes:</strong>
                        <select name="user_id[]" class="form-control" multiple>
                            @foreach ($users as $u)
                                <option value="{{$u->id}}">{{$u->name}}</option>
                            @endforeach
                          </select>
                    </div>

                <div class="text-center">
                    <a class="btn btn-primary" href="{{ route('villes.index') }}"> Retour</a>
                    <button type="submit" class="btn btn-primary">Ajouter</button>
                </div>
            </div>

        </form>
    </div>
</x-app-layout>
