@extends('layouts.app')

@section('content')

@if ($errors->any())
<div class="pt-3">
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $item)
            <li>{{ $item }}</li>
            @endforeach
        </ul>
    </div>
</div>
@endif

<div class="container spark-screen">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading"><h3>Contact</h3></div>
                    <div class="panel-body">
                        <table>
                            <tr>
                                <td>
                                    <p><span style="text-decoration: underline;"><em><strong><b>Cabang Subang</b></strong></em></span></p><p>Griya Pondok Indah No. 15, Jl. Arif Rahman Hakim Tegal Kelapa, Kel. Dangdeur, Kec. Subang</p>
                                </td>
                                <td>
                                    <p><span style="text-decoration: underline;"><em><strong><b>Cabang Klari</b></strong></em></span></p><p>Jl. Perum Puri Kosambi 1 No. 7, RT. 001 / RW. 018, Desa Duren, Kec. Klari, Kab Karawang</p>
                                </td>
                                <td>
                                    <p><span style="text-decoration: underline;"><em><strong><b>Cabang Purwakarta</b></strong></em></span></p><p>Jl. Raya Sadang Subang No. 15 Kav Pemda, RT. 005/RW. 05, Kel. Ciseureuh,  Purwakarta</p>
                                </td>
                                <td>
                                    <p><span style="text-decoration: underline;"><em><strong><b>Cabang Karawang</b></strong></em></span></p><p>Jl. Desa Sari Mulya, RT. 012 / RW. 05, Desa Sari Mulya, Kec. Kota Baru, Kab. Karawang</p>
                                </td>
                                <td>
                                    <p><span style="text-decoration: underline;"><em><strong><b>Cabang Ciputat</b></strong></em></span></p><p>Jl. Ciputat Raya Gang Buntu No. 49,  Kec. Ciputat Timur, Kota Tangerang Selatan</p>
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container spark-screen">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading"><h3>Contact us through this form!</h3></div>
                    <div class="panel-body">
                        <!-- START FORM -->
                        <form action="{{ url('contact')}}" method='post'>
                        {{ csrf_field() }}
                            <div class="container">
                                <div class="my-3 p-3 bg-body rounded shadow-sm">
                                    <div class="mb-3 row">
                                        <label for="name" class="col-sm-1 col-form-label">Nama</label>
                                        <div class="col-sm-5">
                                            <input type="text" class="form-control" name='name' id="name">
                                        </div>
                                    </div>
                                    <div class="mb-3 row">
                                        <label for="email" class="col-sm-1 col-form-label">Email</label>
                                        <div class="col-sm-5">
                                            <input type="text" class="form-control" name='email' id="email">
                                        </div>
                                    </div>
                                    <div class="mb-3 row">
                                        <label for="phone" class="col-sm-1 col-form-label">Phone</label>
                                        <div class="col-sm-5">
                                            <input type="phone" class="form-control" name='phone' id="phone">
                                        </div>
                                    </div>
                                    <div class="mb-3 row">
                                        <label for="message" class="col-sm-1 col-form-label">Message</label>
                                        <div class="col-sm-5">
                                            <input type="message" class="form-control" name='message' id="message">
                                        </div>
                                    </div>
                                    <div class="mb-10 row">
                                        <label for="submit" class="col-sm-1 col-form-label"></label>
                                        <div class="col-sm-5"><button type="submit" class="btn btn-primary" name="submit"><i class="fa fa-btn fa-envelope"></i>SUBMIT</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                        <!-- AKHIR FORM -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
