
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Pays
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="row">
            <div class="col-lg-12 margin-tb text-center">

                <div class="pull-right mb-2">
                    <a class="btn btn-primary" href="{{ route('countrs.index') }}"> Retour</a>
                </div>
            </div>
        </div>

        <table class="table table-bordered">
            <tr>
                <th>Nom</th>
            </tr>
            @foreach ($countrs as $countr)
            <tr>
                <td>{{ $countr->nom }}</td>
            </tr>
            @endforeach
        </table>

    </div>
</x-app-layout>
