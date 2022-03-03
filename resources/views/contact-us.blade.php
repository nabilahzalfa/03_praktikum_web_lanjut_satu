@extends('layouts.app')

@section('content')
<div class="container" style="background-color: white; padding: 13px 0; margin-top: 30px;">
        <div class="row">
            <div class="col peding-100" style="padding: 120px;">
            <h1>Kontak Kami</h1>
            <p>
                Silahkan tinggalkan pesan anda, pada kolom yang tersedia.
            </p>
            </div>
    
            <div class="col peding-30" style="padding: 50px;">
            <form method="post" action="#">
                
                <div class="form-group">
                <label for="">Nama Anda:</label>
                <input type="text" class="form-control" name="nama" placeholder="Masukkan Nama">
                </div>
    
                <div class="form-group">
                <label for="">E-mail Anda:</label>
                <input type="email" class="form-control" name="email" placeholder="Masukkan Email">
                </div>
    
                <div class="form-group">
                <label for="">Pesan Anda:</label>
                <textarea name="pesan" class="form-control" cols="30" rows="7"></textarea>
                </div>
                <br>
                <input class="btn btn-primary" type="submit" value="POST">
            </form>
            </div>
        </div>
    </div>
@endsection