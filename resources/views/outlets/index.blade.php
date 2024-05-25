<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>I'zaz Robbin</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
</head>
<body style="background: lightgray">

    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card border-0 shadow rounded">
                    <div class="card-body">
                        <a href="{{ route('outlets.create') }}" class="btn btn-md btn-success mb-3">TAMBAH DATA</a>
                        <table class="table table-bordered">
                            <tr>
                                <th>ID</th>
                                <th>Code</th>
                                <th>Name</th>
                                <th>Status</th>
                                <th>Address</th>
                                <th>Phone</th>
                                <th>Created_at</th>
                                <th>update_at</th>
                                <th>Action</th>
                            </tr>
                            @php 
                            $id =1;
                            @endphp
                            @foreach($outlets as $outlet)
                            <tr>
                                <td>{{ $id++ }}</td>
                                <td>{{ $outlet->code }}</td>
                                <td>{{ $outlet->name }}</td>
                                <td>{{ $outlet->status }}</td>
                                <td>{{ $outlet->address }}</td>
                                <td>{{ $outlet->phone }}</td>
                                <td>{{ $outlet->created_at }}</td>
                                <td>{{ $outlet->updated_at }}</td>
                                <td>
                                    <form onsubmit="return confirm('Apakah Anda Yakin ?');" action="{{ route('outlets.destroy', $outlet->id) }}" method="POST">
                                        <a href="{{ route('outlets.edit', $outlet->id) }}" class="btn btn-sm btn-primary">EDIT</a>
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-sm btn-danger">HAPUS</button>
                                    </form>
                            </tr>
                            @endforeach
                        </table>
                        {{ $outlets->links() }}
                    </div>
            
                    <footer style="position: fixed; bottom: 0; width: 100%; background-color: rgb(165, 245, 237); text-align:center;">
                        Laravel v{{ Illuminate\Foundation\Application::VERSION }} (PHP v{{ PHP_VERSION }}) by I'zaz Robbin Endriano
            </body>
            </html>