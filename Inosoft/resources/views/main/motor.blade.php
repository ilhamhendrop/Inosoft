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
                            <h3 class="text-primary">Motor</h3>
                            <a href="{{ route('input_motor') }}" class="btn" style="float: right;"><i class="lnr lnr-pencil"></i></a>
                        </div>
                        <div class="panel-heading">
                            <div class="table-responsive">
                                <table class="table table-bordered table-hover table-striped">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama</th>
                                            <th>Warna</th>
                                            <th>Mesin</th>
                                            <th>Kapasitas</th>
                                            <th>Tipe</th>
                                            <th>Harga</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        
                                    </tbody>

                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END MAIN CONTENT -->
</div>

@endsection