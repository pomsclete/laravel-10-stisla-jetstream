<table>
    <thead>
    <tr>
        <th>NUMERO</th>
        <th>PRENOM</th>
        <th>NOM</th>
        <th>TELEPHONE</th>
        <th>EMAIL</th>
        <th>FORMATION</th>
        <th>DATE DE TELECHARGEMENT</th>
    </tr>
    </thead>
    <tbody>
    @php $i=1;  @endphp
    @foreach($brochures as $fact)
        <tr>
            <td>{{ $i }}</td>
            <td>{{ $fact->prenom }}</td>
            <td>{{  $fact->nom }}</td>
            <td>{{ $fact->telephone }}</td>
            <td>{{ $fact->email }}</td>
            <td>{{ $fact->titre }}</td>
            <td>{{ date_fr($fact->created_at) }}</td>
        </tr>
        @php $i++;  @endphp
    @endforeach
    </tbody>
</table>
