@extends('Page.Layouts.main')
@section('content')
    <div class="container mt-4">
      <h3 class="text-center">Pemasukan</h3>
      <div class="d-flex justify-content-between">
        <button type="button" class="btn btn-primary" id="modal" data-bs-toggle="modal" data-bs-target="#exampleModal">
          Tambah Pemasukan
        </button>
        <button class="btn btn-danger">Laporan Bulanan</button>
      </div>
        <table class="table">
            <thead>
              <tr>
                <th scope="col">No</th>
                <th scope="col">Tanggal Masuk</th>
                <th scope="col">Asal</th>
                <th scope="col">Nominal</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($pemasukans as $i=>$item)
                <tr>
                  <th scope="row">{{ $i+1 }}</th>
                  <td>{{ $item->tanggal_terima }}</td>
                  <td>{{ $item->asal }}</td>
                  <td>{{ number_format($item->nominal) }}</td>
                </tr>      
                @endforeach
            </tbody>
          </table>
    </div>
            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog modal-lg">
                <div class="modal-content">
                  <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Uang Masuk Kas Kartar</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">
                    <form class="row g-3" action="/uang-masuk" method="POST">
                      @csrf
                      <div class="col-md-6">
                        <label for="inputEmail4" class="form-label">Tanggal Masuk</label>
                        <input type="date" class="form-control" name="tanggal_terima" id="inputEmail4">
                      </div>
                      <div class="col-md-6">
                        <label for="inputPassword4" class="form-label">Asal</label>
                        <input type="text" class="form-control" name="asal" id="inputPassword4">
                      </div>
                      <div class="col-12">
                        <label for="inputAddress" class="form-label">Nominal</label>
                        <input type="number" class="form-control" name="nominal" id="inputAddress" placeholder="1234 Main St">
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