@extends('layouts.app')

@section('content')
    <h1>Pretraga železničkih linija</h1>

    <form id="searchForm">
        @csrf
        <div class="form-group">
            <label for="od">Od stanice</label>
            <input type="text" id="od" name="od" class="form-control">
        </div>
        <div class="form-group">
            <label for="do">Do stanice</label>
            <input type="text" id="do" name="do" class="form-control">
        </div>
        <button type="submit" class="btn btn-primary">Pretraži</button>
    </form>

    <div id="results">
        @if(isset($linije))
            @foreach($linije as $linija)
                <p>{{ $linija->odStanica->naziv }} - {{ $linija->doStanica->naziv }} ({{ $linija->departure_time }} - {{ $linija->arrival_time }})</p>
            @endforeach
        @endif
    </div>
@endsection

@section('scripts')
    <script>
        $(document).ready(function() {
            $('#searchForm').submit(function(e) {
                e.preventDefault();
                $.ajax({
                    url: "{{ route('linije.search') }}",
                    type: 'GET',
                    data: $(this).serialize(),
                    success: function(response) {
                        $('#results').html(response);
                    }
                });
            });
        });
    </script>
@endsection
