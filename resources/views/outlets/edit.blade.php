<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Data Post - IZAZ</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body style="background: lightgray">

    <div class="container mt-5 mb-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card border-0 shadow rounded">
                    <div class="card-body">
                        <form action="{{ route('outlets.update', $outlets->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')

                            <div class="form-group">
                                <label style="font-family: Georgia, 'Times New Roman', Times, serif">Code</label>
                                <input type="text" class="mb-2 form-control @error('code') is-invalid @enderror" name="code" value="{{ ($outlets->code) }}">
                            
                                @error('code')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label style="font-family: Georgia, 'Times New Roman', Times, serif">Nama</label>
                                <input type="text" class="mb-2 form-control @error('name') is-invalid @enderror" name="name" value="{{ ($outlets->name) }}">  
                               
                                @error('name')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label style="font-family: Georgia, 'Times New Roman', Times, serif">Status</label>
                                <select class="mb-2 form-control @error('status') is-invalid @enderror" name="status">
                                    <option value="berlangsung">Berlangsung</option>
                                    <option value="selesai">Selesai</option>
                                </select>
                                @error('status')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            

                            <div class="form-group">
                                <label style="font-family: Georgia, 'Times New Roman', Times, serif">Address</label>
                                <input type="text" class="mb-2 form-control @error('address') is-invalid @enderror" name="address" value="{{ ($outlets->address) }}">
                            
                                @error('address')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label style="font-family: Georgia, 'Times New Roman', Times, serif">Phone</label>
                                <input type="text" class="mb-2 form-control @error('phone') is-invalid @enderror" name="phone" value="{{ ($outlets->phone) }}">
                            
                                @error('phone')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <button type="submit" class="btn btn-md btn-primary mt-2">SIMPAN</button>
                            <button type="reset" class="btn btn-md btn-warning mt-2">RESET</button>

                        </form> 
                    </div>
    
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="https://cdn.ckeditor.com/4.13.1/standard/ckeditor.js"></script>
<footer style="position: fixed; bottom: 0; width: 100%; background-color: rgb(165, 245, 237); text-align:center;">
    Laravel v{{ Illuminate\Foundation\Application::VERSION }} (PHP v{{ PHP_VERSION }}) by I'zaz Robbin Endriano
</footer>
</body>
</html>