<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form method="post" action="{{ route('pegawai.create') }}">
        @csrf
        <div>
            Masukkan Nama
            <input type="text" name="name">
        </div>
        <div>
            Masukkan Posisi
            <input type="text" name="posisi">
        </div>
        <div>
            Masukkan Gaji
            <input type="text" name="gaji">
        </div>
        <div>
            <button type="submit">Insert Data</button>
        </div>
    </form>

    <table border="1">
        <thead>
            <tr>
                <th>Nama</th>
                <th>Posisi</th>
                <th>Gaji</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($pegawaiList as $data)
            <tr>
                <td>{{ $data->name }}</td>
                <td>{{ $data->posisi }}</td>
                <td>{{ $data->gaji }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>

</html>
