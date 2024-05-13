
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <a class="btn btn-primary" href="{{ route('villes.index') }}"> Retour</a>
            </div>
        </div>

        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Ville:</strong>
                    {{ $ville->nom }}
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Pays:</strong>
                    @if($ville->pays != null)
                        {{ $ville->pays->nom }}
                    @endif
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Personnes :</strong>
                    @if($ville_users != null)
                        @foreach ($ville_users as $users)
                            @if($users != null)
                                @foreach ($users->users as $user)
                                    {{$user->name}} -
                                @endforeach
                            @endif
                        @endforeach
                    @endif
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
