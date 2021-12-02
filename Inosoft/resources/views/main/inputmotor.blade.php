@extends('layout.dashboard.layout')

@section('main')
    <!-- MAIN -->
<div class="main">
    <!-- MAIN CONTENT -->
    <div class="main-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="panel">
                        <div class="panel-heading">
                            <h3 class="text-primary">Input Motor</h3>
                        </div>
                        <div class="panel-heading">
                            <form action="" encytpe="multipart/form-data" method="POST">
                                {{ csrf_field() }}
                                <div class="form-group">
                                    <label for="">Nama</label>
                                    <input type="text" class="form-control" name="nama" placeholder="Nama Mobil">
                                </div>
                                <div class="form-group">
                                    <label for="">Warna</label>
                                    <input type="text" class="form-control" name="warna" placeholder="Warna">
                                </div>
                                <div class="form-group">
                                    <label for="">Mesin</label>
                                    <input type="text" class="form-control" name="mesin" placeholder="Mesin">
                                </div>
                                <div class="form-group">
                                    <label for="">Kapasitas</label>
                                    <input type="text" class="form-control" name="kapasitas" placeholder="Kapasitas">
                                </div>
                                <div class="form-group">
                                    <label for="">Tipe</label>
                                    <input type="text" class="form-control" name="tipe" placeholder="Tipe">
                                </div>
                                <div class="form-group">
                                    <label for="">Harga</label>
                                    <input type="text" class="form-control" name="harga" placeholder="Harga">
                                </div>

                                <button type="submit" class="btn">Simpan</button>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END MAIN CONTENT -->
</div>
@endsection