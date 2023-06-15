@extends('Page.Layouts.main')
@section('content')
    <div class="container">
        <h3 class="text-center">Uang Keluar</h3>
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary mb-3" data-bs-toggle="modal" data-bs-target="#pengeluaran">
          Tambah Pengeluaran
        </button>
        <h5>Sisa Saldo : <span>Rp. {{ number_format($saldo->saldo) }}</span></h5>
        <table class="table">
            <thead>
              <tr>
                <th scope="col">No</th>
                <th scope="col">Keluar Untuk</th>
                <th scope="col">Nominal</th>
                <th scope="col">Tanggal</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($pengeluarans as $i=>$keluar)
              <tr>
                <th scope="row">{{ $i+1 }}</th>
                <td>{{ $keluar->keluar_kepada }}</td>
                <td>{{ $keluar->nominal }}</td>
                <td>{{ $keluar->tanggal_keluar }}</td>
              </tr>
              @endforeach
            </tbody>
          </table>
    </div>
              <!-- Modal -->
              <div class="modal fade" id="pengeluaran" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h1 class="modal-title fs-5" id="exampleModalLabel">Pengeluaran</h1>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                          <form class="row g-3" action="/uang-keluar" method="POST">
                            @csrf
                            <div class="col-md-6">
                              <label for="inputEmail4" class="form-label">Keluar Kepada</label>
                              <input type="text" class="form-control" name="keluar_kepada" id="inputEmail4">
                            </div>
                            <div class="col-md-6">
                              <label for="inputPassword4" class="form-label">Jumlah</label>
                              <input type="number" class="form-control" name="nominal" max="{{ $saldo->saldo }}" id="">
                            </div>
                            <div class="col-12">
                              <label for="inputAddress" class="form-label">Tanggal</label>
                              <input type="date" class="form-control" name="tanggal_keluar" id="inputAddress">
                            </div>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                      <button type="submit" class="btn btn-primary">Save changes</button>
                    </div>
                  </form>
                  </div>
                </div>
              </div>
@endsection