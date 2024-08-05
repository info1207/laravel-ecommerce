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
							<td> <a href="/products" rel="nofollow" width="250px" height="200px"><img src="{{ url('/img/homefunwari.jpg')}}" alt="homefunwari" title="Roti Tawar"></a> </td>
							<td> <a href="/products" rel="nofollow"><img src="{{ url('/img/homefunwarisandwich.jpg')}}" alt="homefunwarisandwich" title="Funwari Sandwich"></a> </td>
							<td> <a href="/products" rel="nofollow"><img src="{{ url('/img/homeroticake.jpg')}}" alt="homeroticake" title="Cake"></a> </td>
						</tr>
					</table>
					<table>
						<tr>
							<td> <a href="/products" rel="nofollow" width="250px" height="200px"><img src="{{ url('/img/homerotiisi.jpg')}}" alt="homerotiisi" title="Roti Isi"></a> </td>
							<td> <a href="/products" rel="nofollow"><img src="{{ url('/img/homerotimanis.jpg')}}" alt="homerotimanis" title="Roti Manis"></a> </td>
							<td> <a href="/products" rel="nofollow"><img src="{{ url('/img/homerotisobek.jpg')}}" alt="homerotisobek" title="Roti Sobek"></a> </td>
						</tr>
					</table>
					<table>
						<tr>
							<td> <a href="/products" rel="nofollow" width="250px" height="200px"><img src="{{ url('/img/homerotistick.jpg')}}" alt="homerotistick" title="Roti Stik"></a> </td>
							<td> <a href="/products" rel="nofollow"><img src="{{ url('/img/homerotitawar.jpg')}}" alt="homerotitawar" title="Roti Tawar"></a> </td>
							<td> <a href="/products" rel="nofollow"><img src="{{ url('/img/homesandiwchisi.jpg')}}" alt="homesandiwchisi" title="Sandwich Isi"></a> </td>
						</tr>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
