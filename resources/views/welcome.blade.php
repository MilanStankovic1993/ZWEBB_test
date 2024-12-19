<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pretraga železničkih linija</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <style>
        .spinner-container {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5);
            display: flex;
            justify-content: center;
            align-items: center;
            z-index: 9999;
            visibility: hidden;
        }
        .spinner-border {
            width: 3rem;
            height: 3rem;
        }
        .transfer-button {
            padding-top: 2rem;
        }
    </style>
</head>
<body>
    <div id="spinner" class="spinner-container">
        <div class="spinner-border text-primary" role="status">
            <span class="visually-hidden">Loading...</span>
        </div>
    </div>
    <div class="container mt-5">
        <h1 class="text-center mb-4">Pretraga železničkih linija</h1>
        <form id="searchForm">
            <div class="row mb-3">
                <div class="col-md-5">
                    <label for="fromStation" class="form-label">Od stanice:</label>
                    <select class="form-select" id="fromStation" name="from_station" required>
                        <option value="" disabled selected>Izaberite početnu stanicu</option>
                        @foreach ($stations as $station)
                            <option value="{{ $station['id'] }}">{{ $station['name'] }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="transfer-button col-md-2 d-flex align-items-center justify-content-center">
                    <button type="button" class="btn btn-secondary" id="swapStations" title="Zameni stanice">
                        &#8644;
                    </button>
                </div>
                <div class="col-md-5">
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
        $('#swapStations').on('click', function() {
            const fromValue = $('#fromStation').val();
            const toValue = $('#toStation').val();

            $('#fromStation').val(toValue);
            $('#toStation').val(fromValue);
        });

        $('#searchForm').on('submit', function(event) {
            event.preventDefault();

            const fromStation = $('#fromStation').val();
            const toStation = $('#toStation').val();

            const spinner = document.getElementById('spinner');

            spinner.style.visibility = 'visible';
            document.body.style.pointerEvents = 'none';

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
                    spinner.style.visibility = 'hidden';
                    document.body.style.pointerEvents = 'auto';
                    let html = '';
                    $.each(response, function(linija, stavke) {
                        if (Array.isArray(stavke) && stavke.length > 0) {
                            const pocetnaStanica = stavke[0].od_stanice_naziv;
                            const krajnjaStanica = stavke[stavke.length - 1].do_stanice_naziv;
                            const nazivLinije = stavke[0].naziv_linije;

                            html += `<h3>${nazivLinije} (${pocetnaStanica} -> ${krajnjaStanica})</h3>  <!-- Prikaz prvih i poslednjih stanica -->
                                     <table class="table table-bordered">
                                         <thead>
                                             <tr>
                                                 <th>Polazak</th>
                                                 <th>Dolazak</th>
                                             </tr>
                                         </thead>
                                         <tbody>`;
                            stavke.forEach(item => {
                                html += `
                                    <tr>
                                        <td>${item.od_stanice_naziv} u ${item.vreme_polaska}</td>
                                        <td>${item.do_stanice_naziv} u ${item.vreme_dolaska}</td>
                                    </tr>
                                `;
                            });
                            html += '</tbody></table>';
                        } else {
                            html += `<span>${stavke}</span>`;
                        }
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
