
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Villes
        </h2>
    </x-slot>

    <div class="py-12">
        @if($role == "admin")
            <div class="row">
                <div class="col-lg-12 margin-tb text-center">

                    <div class="pull-right mb-2">
                        <a class="btn btn-success" href="{{ route('villes.create') }}"> Ajouter Ville</a>
                        <a class="btn btn-success" href="/villes/supprimer"> Villes supprimés</a>
                    </div>
                </div>
            </div>
        @endif

        @if ($message = Session::get('success'))
            <div class="alert alert-success">
                <p>{{ $message }}</p>
            </div>
        @endif

        <table class="table table-bordered">
            <tr>
                <th>Nom</th>
                <th width="400px">Action</th>
            </tr>
            @foreach ($villes as $ville)
            <tr>
                <td>{{ $ville->nom }}</td>
                <td>
                    <form action="{{ route('villes.destroy',$ville->id) }}" method="POST">
                        <a class="btn btn-info" href="{{ route('villes.show',$ville->id) }}">Afficher</a>
                        @if($role == "admin")
                            <a class="btn btn-primary" href="{{ route('villes.edit',$ville->id) }}">Modifier</a>
                            @csrf
                            @method('DELETE')

                            <button class="btn btn-danger" onclick="return confirm('êtes-vous sûr ?')" type="submit" class="btn btn-danger">Supprimer</button>
                        @endif
                    </form>
                </td>
            </tr>
            @endforeach
        </table>

    </div>
</x-app-layout>
