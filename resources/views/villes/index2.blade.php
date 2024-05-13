
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Villes
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="row">
            <div class="col-lg-12 margin-tb text-center">

                <div class="pull-right mb-2">
                    <a class="btn btn-primary" href="{{ route('villes.index') }}"> Retour</a>
                </div>
            </div>
        </div>

        <table class="table table-bordered">
            <tr>
                <th>Nom</th>
            </tr>
            @foreach ($villes as $ville)
            <tr>
                <td>{{ $ville->nom }}</td>
            </tr>
            @endforeach
        </table>

    </div>
</x-app-layout>
