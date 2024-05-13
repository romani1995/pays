
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="row">
            <div class="col-lg-12 margin-tb mb-4">
                <a class="btn btn-primary" href="{{ route('countrs.index') }}"> Retour</a>
            </div>
        </div>

        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group mb-4">
                    <strong>Pays:</strong>
                    <br>
                    {{ $countr->nom }}
                </div>
                <div class="form-group">
                    <strong>Villes:</strong>
                    <br>
                    @foreach ($villes as $ville)
                        {{ $ville->nom }}
                        <br>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
