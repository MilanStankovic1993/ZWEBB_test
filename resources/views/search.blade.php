<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pretraga linija</title>
    <!-- Dodajte Bootstrap ili neki drugi CSS framework po izboru -->
</head>
<body>
    <div class="container">
        <h1>Rezultati pretrage</h1>

        <!-- Forma za unos stanica -->
        <form method="GET" action="{{ route('search') }}">
            <div class="form-group">
                <label for="from">Od stanice:</label>
                <input type="text" id="from" name="from" class="form-control" value="{{ old('from', $from) }}">
            </div>
            <div class="form-group">
                <label for="to">Do stanice:</label>
                <input type="text" id="to" name="to" class="form-control" value="{{ old('to', $to) }}">
            </div>
            <button type="submit" class="btn btn-primary">Pretraži</button>
        </form>

        <h2>Linije između {{ $from }} i {{ $to }}:</h2>

        @if($lines->isEmpty())
            <p>Nema linija za ovaj unos.</p>
        @else
            <table class="table">
                <thead>
                    <tr>
                        <th>Od stanice</th>
                        <th>Do stanice</th>
                        <th>Vrijeme polaska</th>
                        <th>Vrijeme dolaska</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($lines as $line)
                        <tr>
                            <td>{{ $line->fromStation->name }}</td>
                            <td>{{ $line->toStation->name }}</td>
                            <td>{{ $line->departure_time }}</td>
                            <td>{{ $line->arrival_time }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @endif
    </div>
</body>
</html>
