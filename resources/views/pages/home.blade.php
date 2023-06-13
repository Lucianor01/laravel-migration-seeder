@extends('layout.app')

@section('titlePage')
    Comics DC | Details
@endsection

@section('content')
    <section>
        <div class="container">
            <h1 class="text-center text-uppercase">Treni</h1>
            <table
                class="table table-success table-striped-columns table-hover table-bordered border-dark text-center align-middle">
                <thead class="align-middle"">
                    <tr>
                        <th>Azienda</th>
                        <th>Stazione di partenza</th>
                        <th>Stazione di arrivo</th>
                        <th>Orario di partenza</th>
                        <th>Orario di arrivo</th>
                        <th>Codice Treno</th>
                        <th>Numero Carrozza</th>
                        <th>In orario</th>
                        <th>Cancellato</th>
                    </tr>
                </thead>
                <tbody class="table-group-divider">
                    @foreach ($trains as $item)
                        <tr>
                            <td>{{ $item->company }}</td>
                            <td>{{ $item->departure_station }}</td>
                            <td>{{ $item->arrival_station }}</td>
                            <td>{{ date('d/m/Y H:i:s', strtotime($item->departure_time)) }}</td>
                            <td>{{ date('d/m/Y H:i:s', strtotime($item->arrival_time)) }}</td>
                            <td>{{ $item->train_code }}</td>
                            <td>{{ $item->wagons_number }}</td>
                            <td>{{ $item->on_time ? 'Si' : 'No' }}</td>
                            <td>{{ $item->cancelled ? 'Si' : 'No' }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </section>
@endsection
