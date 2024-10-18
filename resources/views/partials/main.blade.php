<main class="container">
        <table class="table">
            <thead>
                <th scope="col">
                    ID
                </th>
                <th scope="col">
                    Azienda
                </th>
                <th scope="col">
                    Stazione di partenza
                </th>
                <th scope="col">
                    Stazione di arrivo
                </th>
                <th scope="col">
                    Orario di partenza
                </th>
                <th scope="col">
                    Orario di arrivo
                </th>
                <th scope="col">
                    Codice Treno
                </th>
                <th scope="col">
                    Numero carrozze
                </th>
                <th scope="col">
                    In orario
                </th>
                <th scope="col">
                    Cancellato
                </th>
            </thead>
            <tbody>
                @foreach ($trains as $train)
                    <tr>
                        <th scope="row">
                            {{ $train->id }}
                        </th>
                        <td>
                            {{ $train->company }}
                        </td>
                        <td>
                            {{ $train->departure_station }}
                        </td>
                        <td>
                            {{ $train->arrival_station }}
                        </td>
                        <td>
                            {{ $train->departure_time }}
                        </td>
                        <td>
                            {{ $train->arrival_time }}
                        </td>
                        <td>
                            {{ $train->train_code }}
                        </td>
                        <td>
                            {{ $train->carriage_number }}
                        </td>
                        <td>
                            {{ $train->in_time ? 'Yes' : 'No' }}
                        </td>
                        <td>
                            {{ $train->canceled ? 'Yes' : 'No' }}
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
</main>