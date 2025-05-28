<h2 style="color:#2563eb;">Reporte de Ciudades y Ciudadanos</h2>
@foreach($reportData as $ciudad)
    <div style="margin-bottom: 20px;">
        <h3 style="color:#16a34a;">{{ $ciudad->name }}</h3>
        @if($ciudad->citizens->count())
            <ul>
                @foreach($ciudad->citizens as $citizen)
                    <li>{{ $citizen->first_name }} {{ $citizen->last_name }}</li>
                @endforeach
            </ul>
        @else
            <p style="color:#dc2626;">Sin ciudadanos registrados.</p>
        @endif
    </div>
@endforeach
