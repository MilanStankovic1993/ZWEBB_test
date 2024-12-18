<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pretraga železničkih linija</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <meta name="csrf-token" content="{{ csrf_token() }}">
</head>
<body>
    <div class="container mt-5">
        <h1 class="text-center mb-4">Pretraga železničkih linija</h1>
        <form id="searchForm">
            <div class="row mb-3">
                <div class="col-md-6">
                    <label for="fromStation" class="form-label">Od stanice:</label>
                    <select class="form-select" id="fromStation" name="from_station" required>
                        <option value="" disabled selected>Izaberite početnu stanicu</option>
                        @foreach ($stations as $station)
                            <option value="{{ $station['id'] }}">{{ $station['name'] }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="col-md-6">
                    <label for="toStation" class="form-label">Do stanice:</label>
                    <select class="form-select" id="toStation" name="to_station" required>
                        <option value="" disabled selected>Izaberite krajnju stanicu</option>
                        @foreach ($stations as $station)
                            <option value="{{ $station['id'] }}">{{ $station['name'] }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="text-center">
                <button type="submit" class="btn btn-primary">Pretraži</button>
            </div>
        </form>
        <div id="searchResults" class="mt-5"></div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script>
    $(document).ready(function() {
        $('#searchForm').on('submit', function(event) {
            event.preventDefault();

            const fromStation = $('#fromStation').val();
            const toStation = $('#toStation').val();

            if (!fromStation || !toStation) {
                alert('Molimo odaberite obe stanice.');
                return;
            }
            $.ajax({
                url: '/search',
                method: 'POST',
                data: {
                    from_station: fromStation,
                    to_station: toStation,
                    _token: $('meta[name="csrf-token"]').attr('content')
                },
                success: function(response) {
                    let html = '';
                    $.each(response, function(linija, stavke) {
                        let ruta = [];
                        if(Array.isArray(stavke)) {
                            stavke.forEach(item => {
                                if (!ruta.includes(item.od_stanice_naziv)) {
                                    ruta.push(item.od_stanice_naziv);
                                }
                                if (!ruta.includes(item.do_stanice_naziv)) {
                                    ruta.push(item.do_stanice_naziv);
                                }
                            });
                        }

                        let rutaString = ruta.join(' -> ');

                        if(Array.isArray(stavke)) {
                            html += `<h3>Ruta: ${rutaString}</h3><table class="table table-bordered"><thead><tr><th>Polazak</th><th>Dolazak</th><th>Međustanice</th></tr></thead><tbody>`;
                            let ruta = [];
                            stavke.forEach(item => {
                                if (!ruta.includes(item.od_stanice_naziv)) {
                                    ruta.push(item.od_stanice_naziv);
                                }
                                if (!ruta.includes(item.do_stanice_naziv)) {
                                    ruta.push(item.do_stanice_naziv);
                                }
                                html += `
                                    <tr>
                                        <td>${item.od_stanice_naziv} u ${item.vreme_polaska}</td>
                                        <td>${item.do_stanice_naziv} u ${item.vreme_dolaska}</td>
                                        <td>${item.od_stanice_naziv} -> ${item.do_stanice_naziv}</td>
                                    </tr>
                                `;
                            });
                        } else {
                            html += `<span>${stavke}</span>`;
                        }
                        html += '</tbody></table>';
                    });
                    $('#searchResults').html(html);
                },
                error: function(xhr) {
                    alert('Došlo je do greške prilikom pretrage.');
                    console.error(xhr.responseText);
                }
            });
        });
    });
    </script>
</body>
</html>
