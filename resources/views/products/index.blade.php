<!DOCTYPE html>
<html>
<head><title>Banjar Mart</title></head>
<body>
    <h1>Daftar Produk Banjar Mart</h1>
    <table border="1" cellpadding="6">
        <tr><th>Nama</th><th>Kategori</th><th>Harga</th><th>Stok</th></tr>
        @foreach ($products as $p)
        <tr>
            <td>{{ $p->nama_produk }}</td>
            <td>{{ $p->category->nama_kategori }}</td>
            <td>Rp {{ number_format($p->harga, 0, ',', '.') }}</td>
            <td>{{ $p->stok }}</td>
        </tr>
        @endforeach
    </table>
</body>
</html>