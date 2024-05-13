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

        <form action="{{ route('villes.update',$ville->id) }}" method="POST">
            @csrf
            @method('PUT')

             <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 mb-4">
                    <div class="form-group">
                        <strong>Nom:</strong>
                        <input type="text" name="nom" value="{{ $ville->nom }}" class="form-control" placeholder="Nom">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12 mb-4">
                    <div class="form-group">
                        <strong>Pays:</strong>
                        <select name="countr_id" class="form-control" >
                            @foreach ($pays as $p)
                                @if($ville->countr_id == $p->id)
                                    <option value="{{$p->id}}" selected>{{$p->nom}}</option>
                                @else
                                    <option value="{{$p->id}}">{{$p->nom}}</option>
                                @endif
                            @endforeach
                          </select>
                    </div>
                </div>
                <div class="form-group mb-4">
                    <strong>Personnes:</strong>
                    <select name="user_id[]" class="form-control" multiple>
                        @foreach ($users as $u)
                            @if($ville_users->where('user_id',$u->id)->first() == null)
                                <option value="{{$u->id}}">{{$u->name}}</option>
                            @else
                                <option value="{{$u->id}}" selected>{{$u->name}}</option>
                            @endif
                        @endforeach
                      </select>
                </div>
                <div class="text-center">
                    <a class="btn btn-primary" href="{{ route('villes.index') }}"> Retour</a>
                    <button type="submit"  onclick="return confirm('êtes-vous sûr ?')" class="btn btn-primary">Modifier</button>
                </div>
            </div>

        </form>
    </div>
</x-app-layout>
