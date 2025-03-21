@extends('layout/app')

@section('contenuto')
    <div class="container">
        <div class="row row-cols-1">
            @foreach($trains as $train)
                <div class="col mb-5">
                <div class="card">
                      <div class="card-header bg-danger text-white">
                        {{ $train->azienda }}
                      </div>
                      <div class="card-body d-flex justify-content-between aign-items-center">
                        <div>
                            <h5 class="card-title">{{ $train->stazione_partenza }}</h5>
                            <h6 class="card-text">{{ $train->orario_partenza }}</h6>
                        </div>
                        <div>
                            <h5 class="card-title">{{ $train->stazione_arrivo }}</h5>
                            <h6 class="card-text">{{ $train->orario_arrivo }}</h6>
                        </div>
                        <p><strong>Codice treno</strong><br>{{ $train->codice_treno }}</p>
                        <p><strong>Totale carrozze</strong><br>{{ $train->totale_carrozze }}</p>
                        <p><strong>Stato</strong><br> 
                            @if($train->cancellato)
                                Cancellato
                            @elseif(!$train->in_orario)
                                In ritardo
                            @else
                                In orario
                            @endif
                        </p>
                      </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection