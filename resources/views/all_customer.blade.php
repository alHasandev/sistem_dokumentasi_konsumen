<table border="1">
    <thead>
        <tr>
            <th>Nama</th>
            <th>Email</th>
            <th>Pekerjaan</th>
            <th>Edit</th>
            <th>Hapus</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($all_customer as $customer)
        <tr>
            <td>{{ $customer->name }}</td>
            <td>{{ $customer->email }}</td>
            <td>{{ $customer->occupation }}</td>
            <td><a href="{{route(('edit'), $customer->id )}}">Edit</a></td>
            <td><a href="{{route(('delete'), $customer->id )}}">Hapus</a></td>
        </tr>
        @endforeach
    </tbody>
</table>