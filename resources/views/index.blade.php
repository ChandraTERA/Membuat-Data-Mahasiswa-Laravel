

<!DOCTYPE html>
<html lang="en">
<head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" type="text/css">
      <link rel="icon" href="{{ asset('AdminLTE/dist/img/user8-128x128.jpg') }}">
      <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}" type="text/css">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <title>Index</title>
</head>
<body>

    <div class="container-fluid" style="padding-top: 129px;">
        <div class="tambah-data">
            <a href="{{ route('upload.create') }}" >
                {{-- <i class="fa-solid fa-plus fa-beat" style="font-size: 50px"></i> --}}
                <i class="fa-solid fa-plus fa-beat" style="font-size: 50px"></i>
            </a>
            <a href="{{ route('register') }}" >
                {{-- <i class="fa-solid fa-plus fa-beat" style="font-size: 50px"></i> --}}
                <i class="fa-regular fa-user" style="font-size: 50px"></i>
            </a>

        </div>
        
        
    <div class="container">
        <table style="; border-collapse: collapse; text-align:center">
                <thead style="background-color: green; color: white;">
                    <tr style="border-bottom: 1px solid #000;">
                        <th style="padding: 8px;">Picture</th>
                        <th style="padding: 8px;">ID</th>
                        <th style="padding: 8px;">Username</th>
                        <th style="padding: 8px;">Name</th>
                        <th style="padding: 8px;">Privilege</th>
                        <th style="padding: 8px;">Buat Waktu</th>
                        <th style="padding: 8px;">Perbaharui Waktu</th>
                        <th style="padding: 8px;">Waktu Hari Ini</th>
                        <th style="padding: 8px;">Aksi</th>
                    </tr>
                </thead>
                <tbody style="background-color: yellow;">
                    @foreach ($foto as $row)
                    {{-- @php $path = Storage::url('images/'.$img->path);@endphp --}}
                    <tr style="border-bottom: 1px solid #000; color:aliceblue;">
                        {{-- <td style="padding: 8px;">{{ $row->picture }}</td> --}}
                        <!-- Gunakan perulangan untuk menampilkan setiap gambar -->
                            {{-- <img src="{{ asset('storage/uploads/'.$gambar->foto) }}" alt="Gambar"> --}}
                            <td style="padding: 8px;"><img src="{{ asset('uploads/'.$row->picture) }}" width="200" height="150"></td>
                            {{-- <td style="padding: 8px;"><img src="image/{{ $row->$foto }}" alt="Foto"></td> --}}
                        <td style="padding: 8px; background-color:aqua; color:#181818;">{{ $row->id }}</td>
                        <td style="padding: 8px;">{{ $row->username }}</td>
                        <td style="padding: 8px;">{{ $row->name}}</td>
                        <td style="padding: 8px;">{{ $row->privilege }}</td>
                        <td style="padding: 8px;">{{ $row->created_at }}</td>
                        <td style="padding: 8px;">{{ $row->updated_at }}</td>
                        <td style="padding: 8px;">{{ $row->formatted_waktu_hari_ini }}</td>
                        <td>    
                            <center>
                                <a href="{{ url('layouts/edit/' . $row->id) }}" type="button" class="btn btn-info btn-sm mt-2">
                                    <i class="fa fa-pencil" aria-hidden="true"></i>
                                </a>
                                <!-- Tambahan: Tombol hapus -->
                                <form action="{{ route('hapus.destroy', $row->id) }}" method="POST" style="display: inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm mt-2" onclick="return confirm('Apa anda yakin hapus data tersebut ???')">
                                        <i class="fa fa-trash" aria-hidden="true"></i>
                                    </button>
                                </form>
                            </center>
                        </td>
                        
                        
                        {{-- <td>    
                            <center>
                                <a href="{{ route('update.update', ['id' => $row->id]) }}" type="button" class="btn btn-info btn-sm mt-2">
                                    <i class="fa fa-pencil" aria-hidden="true"></i>
                                </a>
                                <a href="{{ route('hapus', ['id' => $row->id]) }}" type="button" class="btn btn-danger btn-sm mt-2" onClick="return confirm('Apa anda yakin hapus data tersebut ???')">
                                    <i class="fa fa-trash" aria-hidden="true"></i>
                                </a>
                            </center>
                        </td> --}}
                        {{-- <td>    
                            <center>
                                <a href="{{ route('update.update', ['id' => $row->id]) }}" type="button" class="btn btn-info btn-sm mt-2">
                                    <i class="fa fa-pencil" aria-hidden="true"></i>
                                </a>
                                <form action="{{ route('hapus', ['id' => $row->id]) }}" method="POST" style="display: inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm mt-2" onclick="return confirm('Apa anda yakin hapus data tersebut ???')">
                                        <i class="fa fa-trash" aria-hidden="true"></i>
                                    </button>
                                </form>
                            </center>
                        </td> --}}
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>