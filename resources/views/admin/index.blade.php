@extends('layouts.admin')
@section('content')
    <div class="container">
        <div class="border p-4">
            <div class="row mb-4">
                <div class="col-md-6">
                    <button class="btn btn-primary mr-2">Buku Besar</button>
                    <button class="btn btn-light">Receiving</button>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <form class="form-inline">
                        <div class="border p-2">
                            <input type="date" class="form-control mr-3" name="start-date">----
                            <input type="date" class="form-control ml-3" name="end-date">
                        </div>
                    </form>
                </div>
            </div>
            {{-- end date --}}
            <table class="table">
                <thead>
                    <tr>
                        <th class="border">Type</th>
                        <th class="border">Debit</th>
                        <th class="border">Kredit</th>
                        <th class="border">Saldo</th>
                    </tr>
                </thead>
                <tbody class="border">
                    <tr data-toggle="collapse" data-target="#penjualan">
                        <td><i class="fas fa-chevron-right" style="margin-right:10px;"></i>Penjualan</td>
                        <td>Rp 10.000.000</td>
                        <td>Rp 2.000.000</td>
                        <td>Rp 8.000.000</td>
                    </tr>

                    <tr id="penjualan" class="collapse">
                        <td colspan="4">
                            <table class="table">
                                <tr>
                                    <td>Barang A</td>
                                    <td>50</td>
                                </tr>
                                <tr>
                                    <td>Barang B</td>
                                    <td>50</td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                    <tr>
                        <td><i class="fas fa-chevron-right" style="margin-right:10px;"></i>Pajak</td>
                        <td>-</td>
                        <td>Rp 200.000</td>
                        <td>Rp 7.800.000</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
@endsection
@section('js')
    <script>
        $('.clickable').click(function() {
            $(this).toggleClass('active');
        });
    </script>
@endsection
