@extends('layout.app')

@section('title', 'Homepage')

@section('konten')
    @parent
    <!-- Cart view section -->
    <section id="checkout">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="checkout-area">
                        <form action="">
                            <div class="row">
                                <div class="col-md-8">
                                    <div class="checkout-left">
                                        <div class="panel-group" id="accordion">
                                            <!-- Coupon section -->

                                            <!-- Shipping Address -->
                                            <div class="panel panel-default aa-checkout-billaddress">
                                                <div class="panel-heading">
                                                    <h4 class="panel-title">
                                                        <a data-toggle="collapse" data-parent="#accordion" href="#collapseFour">
                                                            Alamat Pengiriman
                                                        </a>
                                                    </h4>
                                                </div>
                                                <div id="collapseFour" >
                                                    <div class="panel-body">
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <?php
                                                                $pengiriman = \App\Alamat::where('user_id', Auth::user()->id)->orWhere('status','primary')->firstOrFail();
                                                                ?>
                                                                <div class="aa-checkout-single-bill" style=" border: 1px solid #ccc; padding: 15px">
                                                                   {{$pengiriman->name}} <br>
                                                                    {{$pengiriman->alamat}}<br>
                                                                    {{$pengiriman->kota}}<br>
                                                                    {{$pengiriman->pos}}<br>
                                                                    {{$pengiriman->telepon}}<br>
                                                                </div>
                                                                    <div class="aa-checkout-single-bill" style=" border: 1px solid #ccc; padding: 15px">
                                                                        <a href="{{ route('alamat.show', Auth::user()->id)}}">
                                                                        <input type="button" value="Merubah Alamat" class="aa-browse-btn"/>
                                                                        </a>
                                                                    </div>
                                                            </div>

                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="checkout-right">
                                        <h4>Order Summary</h4>
                                        <div class="aa-order-summary-area">
                                            <table class="table table-responsive">
                                                <thead>
                                                <tr>
                                                    <th>Product</th>
                                                    <th>Total</th>
                                                    <th>Pengiriman</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                @foreach(Cart::content() as $row)
                                                <tr>
                                                    <td>{{$row->name}} <strong> x  {{$row->qty}}</strong></td>
                                                    <td>Rp {{$row->price}}</td>
                                                    <?php
                                                    $pengiriman = \App\Pengiriman::find($row->options->size)->first();
                                                    ?>
                                                    <td>{{$pengiriman->nama}}</td>
                                                </tr>
                                                @endforeach

                                                </tbody>
                                                <tfoot>
                                                <tr>
                                                    <th>Subtotal</th>
                                                    <td colspan="2">Rp {{Cart::subtotal()}}</td>
                                                </tr>
                                                {{--<tr>--}}
                                                    {{--<th>Tax</th>--}}
                                                    {{--<td>$35</td>--}}
                                                {{--</tr>--}}
                                                {{--<tr>--}}
                                                    {{--<th>Total</th>--}}
                                                    {{--<td>$785</td>--}}
                                                {{--</tr>--}}
                                                </tfoot>
                                            </table>
                                        </div>
                                        <h4>Order</h4>
                                        <div class="aa-payment-method">
                                            <input type="submit" value="Pesan" class="aa-browse-btn">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection