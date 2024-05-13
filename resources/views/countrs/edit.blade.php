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

        <form action="{{ route('countrs.update',$countr->id) }}" method="POST">
            @csrf
            @method('PUT')

             <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 mb-4">
                    <div class="form-group">
                        <strong>Nom:</strong>
                        <input type="text" name="nom" value="{{ $countr->nom }}" class="form-control" placeholder="Nom">
                    </div>
                </div>
                <div class="text-center">
                    <a class="btn btn-primary" href="{{ route('countrs.index') }}"> Retour</a>
                    <button type="submit"  onclick="return confirm('êtes-vous sûr ?')" class="btn btn-primary">Modifier</button>
                </div>
            </div>

        </form>
    </div>
</x-app-layout>
