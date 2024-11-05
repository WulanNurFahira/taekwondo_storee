@extends('layouts.master')
@section('title','DetailPenjualan')
@section('content')

<div class="container-fluid py-4">
    <div class="row">
      <div class="col-md-6">
        <div class="card my-4">
          <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
            <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
              <h6 class="text-white text-capitalize ps-3">Add Cart Keranjang</h6>
            </div>
          </div>
          <div class="card-body px-0 pb-2">
            <form action="/detailpenjualan/simpan" class="mx-3" method="post" autocomplete="off">
                @csrf

                  <!-- id penjualan -->
                   <input type="hidden" name="penjualan_id" value="{{ $penjualan_id }}">

                  <div class="mb-3">
                    <label for="id_produk" class="form-label">Produk</label>
                    <select class="form-control" name="id_produk" id="id_produk">
                      <option value="" slected>Pilih produk</option>
                    @foreach($produk as $produk)
                      <option value="{{ $produk->id }}" data-harga="{{ $produk->harga }}">{{ $produk->nama_produk }}</option>
                    @endforeach
                    </select>
                  </div>

                  <div class="mb-3">
                    <label for="harga">Harga</label>
                    <input type="number" name="harga" id="harga" class="form-control" required readonly>
                  </div>

                  <div class="mb-3">
                    <label for="jumlah_produk">Jumlah Beli</label>
                    <input type="number" name="jumlah_produk" id="jumlah_produk" class="form-control" oninput="bebas()" required>
                  </div>
                  
                  <div class="mb-3">
                    <label for="subtotal">Total</label>
                    <input type="number" name="subtotal" id="subtotal" class="form-control" required>
                  </div>
                  
                  <button type="submit" class="btn btn-info mx-3 ">Isi Keranjang</button>
              </form>
            </div>
          </div>
      </div>
      <div class="col-md-6">
      <div class="card">
      <div class="card-body">
        <h2 class="card-title"> 
        <h3>Keranjang</h3>
        </h2>
        <div class="table-responsive">
          <table class="table">
            <thead>
              <tr>
                <th> No. </th>
                <th> Nama Produk </th>
                <th> Harga </th>
                <th> Jumlah Beli </th>
                <th> Total </th>
                <th> Action </th>
              </tr>
            </thead>
            <tbody>
            @foreach($detail_penjualan as $detail_penjualan)
            <tr>
              <td>{{ $loop->iteration }}</td>
              <td>{{ $detail_penjualan->produk->nama_produk }}</td>
              <td>{{ number_format($detail_penjualan->produk->harga) }}</td>
              <td>{{ $detail_penjualan->jumlah_produk }}</td>
              <td>{{ number_format($detail_penjualan->subtotal) }}</td>
              <td>
                  <a class="btn btn-danger btn-sm" href="/detailpenjualan/{{ $detail_penjualan->id }}/delete"
                      onclick="return confirm('yakin mau di hapus ?')">Delete</a>
              </td>
            </tr>
              @endforeach
            </tbody>
          </table>
          <form action="" method="POST">
            @csrf

            <div class="mb-3">
              <label for="total" class="form-label">Total</label>
              <input type="number" class="form-control" name="total" value="{{ $subtotal }}" readonly>
            </div>

            <div class="mb-3">
              <label for="total_bayar" class="form-label">total_bayar</label>
              <input type="number" class="form-control" name="total_bayar" required>
            </div>

            <div class="mb-3">
              <label for="kembalian" class="form-label">Kembalian</label>
              <input type="number" class="form-control" name="kembalian" readonly>
            </div>
            
          </form>
        </div>
      </div>
    </div>
      </div>
    </div>
</div>

<script>
    // Ambil elemen dropdown dan input harga
    const produkDropdown = document.getElementById('id_produk');
    const hargaInput = document.getElementById('harga');

    // Tambahkan event listener untuk mendeteksi perubahan di dropdown produk
    produkDropdown.addEventListener('change', function() {
      const selectedOption = produkDropdown.options[produkDropdown.selectedIndex];
      const harga = selectedOption.getAttribute('data-harga');

        if (harga) {
            hargaInput.value = harga;
        } else {
            hargaInput.value = '';
        }
    });
</script>

<script>
    function bebas() {
        const harga = document.getElementById('harga').value;
        const jumlahProduk = document.getElementById('jumlah_produk').value;

        const subtotal = harga * jumlahProduk;

        document.getElementById('subtotal').value = subtotal;
        
    }
</script>

<script>
function sweet(){
  Swal.fire({
  title: "Berhasil!",
  text: "session('berhasil')",
  icon: "success"
});
}
</script>


@endsection