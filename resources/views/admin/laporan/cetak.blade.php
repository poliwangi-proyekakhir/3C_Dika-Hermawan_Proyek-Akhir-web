<!DOCTYPE html>
<html>
<head>
	<title>Laporan Transaksi Penjualan RojoTani</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
	<style type="text/css">
		table tr td,
		table tr th{
			font-size: 9pt;
		}
	</style>
	<center>
		<h5>Laporan Transaksi Penjualan RojoTani</h4>
	</center>
 
	<table class="table table-bordered">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Pembeli</th>
                <th>Alamat</th>
                <th>Tanggal Pesan</th>
                <th>Produk</th>
                <th>Jenis Produk</th>
                <th>Total Bayar</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>
            <?php $no = 0;?>
            @foreach ($laporan as $item)

            <tr>
                <td>{{ ++$no }}</td>
                <td>{{ $item->nama_pembeli }}</td>
                <td>{{ $item->alamat }}</td>
                <td>{{ $item->created_at }}</td>
                <td>{{ $item->produk->nama }}</td>
                <td>{{ $item->produk->jenis }}</td>
                <td>{{ $item->total_bayar }}</td>
                <td>{{ $item->status_pesanan }}</td>
            </tr>
            @endforeach

        </tbody>
    </table>
 
</body>
</html>