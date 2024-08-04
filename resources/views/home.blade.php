@extends('layouts.app')

@section('content')
<div class="container spark-screen">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading"><h3>Cari Tahu Produk Kami</h3></div>
                <div class="panel-body">
					<table>
						<tr>
							<td> <a href="/products" rel="nofollow" width="250px" height="200px"><img src="{{ url('/img/homefunwari.jpg')}}" alt="Deskripsi Gambar" title="Deskripsi Gambar"></a> </td>
							<td> <a href="/products" rel="nofollow"><img src="{{ url('/img/homefunwarisandwich.jpg')}}" alt="Deskripsi Gambar" title="Deskripsi Gambar"></a> </td>
							<td> <a href="/products" rel="nofollow"><img src="{{ url('/img/homeroticake.jpg')}}" alt="Deskripsi Gambar" title="Deskripsi Gambar"></a> </td>
						</tr>
					</table>
					<table>
						<tr>
							<td> <a href="/products" rel="nofollow" width="250px" height="200px"><img src="{{ url('/img/homerotiisi.jpg')}}" alt="Deskripsi Gambar" title="Deskripsi Gambar"></a> </td>
							<td> <a href="/products" rel="nofollow"><img src="{{ url('/img/homerotimanis.jpg')}}" alt="Deskripsi Gambar" title="Deskripsi Gambar"></a> </td>
							<td> <a href="/products" rel="nofollow"><img src="{{ url('/img/homerotisobek.jpg')}}" alt="Deskripsi Gambar" title="Deskripsi Gambar"></a> </td>
						</tr>
					</table>
					<table>
						<tr>
							<td> <a href="/products" rel="nofollow" width="250px" height="200px"><img src="{{ url('/img/homerotistick.jpg')}}" alt="Deskripsi Gambar" title="Deskripsi Gambar"></a> </td>
							<td> <a href="/products" rel="nofollow"><img src="{{ url('/img/homerotitawar.jpg')}}" alt="Deskripsi Gambar" title="Deskripsi Gambar"></a> </td>
							<td> <a href="/products" rel="nofollow"><img src="{{ url('/img/homesandiwchisi.jpg')}}" alt="Deskripsi Gambar" title="Deskripsi Gambar"></a> </td>
						</tr>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
