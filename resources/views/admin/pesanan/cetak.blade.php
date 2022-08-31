<!DOCTYPE html>
<html>
<head>
	<title>Data Pesanan RojoTani</title>
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
		<h5>Data Pesanan RojoTani</h4>
	</center>
 
	<table id="tabelData" class="table table-bordered">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>ID</th>
                        <th>Pembeli</th>
                        <th>Alamat</th>
                        <th>Produk</th>
                        <th>Jumlah</th>
                        <th>Harga</th>
                        <th>Subtotal</th>
                        <th>Total</th>
                        <th>Gambar</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no = 0;?>
                    @foreach ($pesanan as $item)
                    <tr>
                        <td> {{ ++$no }}</td>
                        <td> {{ $item->id }} </td>
                        <td> {{ $item->nama_pembeli }} </td>
                        <td> {{ $item->alamat }} </td>
                        <td> {{ $item->produk->nama }} </td>
                        <td> {{ $item->jumlah }} </td>
                        <td> Rp. {{ $item->harga }} </td>
                        <td> {{ $item->subtotal }} </td>
                        <td> {{ $item->total_bayar }} </td>
                        <td>
                            <img src="{{ asset('public/img/produk/'.$item->gambar) }}" width="60px" height="50px" alt="Img">    
                        </td>
                        <td> {{ $item->status_pesanan }} </td>
                       
                    </tr>
                    @endforeach

                </tbody>
            </table>
 
</body>
</html>