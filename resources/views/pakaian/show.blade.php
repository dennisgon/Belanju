@extends('layout.app')

@section('title', 'Profile')

@section('konten')
    <link rel="stylesheet" href="{{URL::asset('bower_resources/raty/lib/jquery.raty.css')}}">
    <script src="{{URL::asset('bower_resources/raty/lib/jquery.raty.js')}}"></script>

    <section id="aa-product-details">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="aa-product-details-area">
                        <div class="aa-product-details-content">
                            <div class="row">
                                <!-- Modal view slider -->
                                <div class="col-md-5 col-sm-5 col-xs-12">
                                    <div class="aa-product-view-slider">
                                        <div id="demo-1" class="simpleLens-gallery-container">
                                            <div class="simpleLens-container">
                                                <div class="simpleLens-big-image-container"><a data-lens-image="{{asset($pakaian->gambars()->where('StatusGambar','=','pertama')->firstOrFail()->gambar)}}" class="simpleLens-lens-image"><img src="{{asset($pakaian->gambars()->where('StatusGambar','=','pertama')->firstOrFail()->gambar)}}" class="simpleLens-big-image"></a></div>
                                            </div>
                                            <div class="simpleLens-thumbnails-container">
                                                @foreach($pakaian->gambars()->where('StatusGambar','!=','pertama')->get() as $gambar)
                                                <a data-big-image="{{asset($gambar->gambar)}}" data-lens-image="{{asset($gambar->gambar)}}" class="simpleLens-thumbnail-wrapper" href="#">
                                                    <img src="{{asset($gambar->gambar)}}" width="45px" height="55px">
                                                </a>
                                                @endforeach
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <!-- Modal view content -->
                                <div class="col-md-7 col-sm-7 col-xs-12">
                                    <div class="aa-product-view-content">
                                        <h3>{{$pakaian->namaPakaian}}</h3>
                                        <p>Toko: <a href="{{route('toko.show', $pakaian->toko()->firstOrFail()->nama)}}">{{$pakaian->toko()->firstOrFail()->nama}}</a></p>
                                        <div class="aa-price-block">
                                            <span class="aa-product-view-price">Rp {{$pakaian->hargaSatuan}}</span>
                                            <p class="aa-product-avilability">Stok:
                                                @if($pakaian->stok >0)
                                                <span>Tersedia</span></p>
                                                @else
                                                <span>Tidak Tersedia</span></p>
                                                @endif
                                        </div>
                                        <p>{{$pakaian->deskripsiSingkat}}</p>
                                        <h4>Ukuran</h4>
                                        <div class="aa-prod-view-size">
                                            <p>Panjang: {{$pakaian->panjang}}</p>
                                            <p>Lebar: {{$pakaian->lebar}}</p>
                                        </div>
                                        <h4>Warna: {{$pakaian->warna}}</h4>

                                        <div class="aa-prod-quantity">
                                            <form action="">
                                                <select id="" name="">
                                                    <option selected="1" value="0">1</option>
                                                    <option value="1">2</option>
                                                    <option value="2">3</option>
                                                    <option value="3">4</option>
                                                    <option value="4">5</option>
                                                    <option value="5">6</option>
                                                </select>
                                            </form>
                                            <p class="aa-prod-category">
                                                Category: <a href="#">Polo T-Shirt</a>
                                            </p>
                                        </div>
                                        <div class="aa-prod-view-bottom">
                                            <a class="aa-add-to-cart-btn" >Add To Cart</a>
                                            <a class="aa-add-to-cart-btn" href="#" data-toggle="modal" data-target="#myModal">Message</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="aa-product-details-bottom">
                            <ul class="nav nav-tabs" id="myTab2">
                                <li><a href="#description" data-toggle="tab">Description</a></li>
                                <li><a href="#review" data-toggle="tab">Reviews</a></li>
                            </ul>

                            <!-- Tab panes -->
                            <div class="tab-content">
                                <div class="tab-pane fade in active" id="description">
                                  <p>{{$pakaian->deskripsiPakaian}}</p>
                                </div>
                                <div class="tab-pane fade " id="review">
                                    <div class="aa-product-review-area">
                                        <h4>2 Reviews for T-Shirt</h4>
                                        <ul class="aa-review-nav">
                                            @foreach($pakaian->komentars()->get() as $komen)
                                            <li>
                                                <div class="media">
                                                    <div class="media-left">
                                                        <a href="#">
                                                            <img class="media-object" src="{{$komen->user()->firstOrFail()->foto}}" alt="user image">
                                                        </a>
                                                    </div>
                                                    <div class="media-body">
                                                        <h4 class="media-heading"><strong>{{$komen->user()->firstOrFail()->username}}</strong> - <span>{{$komen->created_at}}</span></h4>
                                                        <div class="aa-product-rating">
                                                            @for ($i = 0; $i < $komen->ratting; $i++)
                                                            <span class="fa fa-star"></span>
                                                            @endfor
                                                        </div>
                                                        <p>{{$komen->pesan}}</p>
                                                    </div>
                                                </div>
                                            </li>
                                            @endforeach
                                        </ul>
                                        <h4>Add a review</h4>
                                        <div class="aa-your-rating">
                                        <div id="rate"></div>
                                        </div>

                                        <!-- review form -->
                                        {{--<form class="aa-review-form">--}}
                                            <div class="form-group">
                                                <label for="message">Your Review</label>
                                                <textarea class="form-control" rows="3" id="message"></textarea>
                                            </div>
                                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                            <button class="btn btn-default " id="test">Submit</button>
                                        {{--</form>--}}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <script>

                            $(document).ready(function(){
                                $('#rate').raty({ starType: 'i' });
                                $('#test').click(function () {
                                    $.ajax({
                                        url: "{{route('komentar.store')}}",
                                        type: 'POST',
                                        data: {
                                            '_token': $('input[name=_token]').val(),
                                            'message':$("#message").val(),
                                            'ratting':$('#rate').raty('score'),
                                            'produk_id':{{$pakaian->id}}
                                        },beforeSend: function(xhr){xhr.setRequestHeader('X-CSRF-TOKEN', $("#token").attr('content'));},
                                        success: function(result) {
                                            location.reload();
                                        }
                                    })

                                });
                            });
                        </script>
                        <!-- Related product -->
                        <div class="aa-product-related-item">
                            <h3>Related Products</h3>
                            <ul class="aa-product-catg aa-related-item-slider">
                                <!-- start single product item -->
                                <li>
                                    <figure>
                                        <a class="aa-product-img" href="#"><img src="img/man/polo-shirt-2.png" alt="polo shirt img"></a>
                                        <a class="aa-add-card-btn"href="#"><span class="fa fa-shopping-cart"></span>Add To Cart</a>
                                        <figcaption>
                                            <h4 class="aa-product-title"><a href="#">Polo T-Shirt</a></h4>
                                            <span class="aa-product-price">$45.50</span><span class="aa-product-price"><del>$65.50</del></span>
                                        </figcaption>
                                    </figure>
                                    <div class="aa-product-hvr-content">
                                        <a href="#" data-toggle="tooltip" data-placement="top" title="Add to Wishlist"><span class="fa fa-heart-o"></span></a>
                                        <a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><span class="fa fa-exchange"></span></a>
                                        <a href="#" data-toggle2="tooltip" data-placement="top" title="Quick View" data-toggle="modal" data-target="#quick-view-modal"><span class="fa fa-search"></span></a>
                                    </div>
                                    <!-- product badge -->
                                    <span class="aa-badge aa-sale" href="#">SALE!</span>
                                </li>
                                <!-- start single product item -->
                                <li>
                                    <figure>
                                        <a class="aa-product-img" href="#"><img src="img/women/girl-2.png" alt="polo shirt img"></a>
                                        <a class="aa-add-card-btn"href="#"><span class="fa fa-shopping-cart"></span>Add To Cart</a>
                                        <figcaption>
                                            <h4 class="aa-product-title"><a href="#">Lorem ipsum doller</a></h4>
                                            <span class="aa-product-price">$45.50</span>
                                        </figcaption>
                                    </figure>
                                    <div class="aa-product-hvr-content">
                                        <a href="#" data-toggle="tooltip" data-placement="top" title="Add to Wishlist"><span class="fa fa-heart-o"></span></a>
                                        <a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><span class="fa fa-exchange"></span></a>
                                        <a href="#" data-toggle2="tooltip" data-placement="top" title="Quick View" data-toggle="modal" data-target="#quick-view-modal"><span class="fa fa-search"></span></a>
                                    </div>
                                    <!-- product badge -->
                                    <span class="aa-badge aa-sold-out" href="#">Sold Out!</span>
                                </li>
                                <!-- start single product item -->
                                <li>
                                    <figure>
                                        <a class="aa-product-img" href="#"><img src="img/man/t-shirt-1.png" alt="polo shirt img"></a>
                                        <a class="aa-add-card-btn"href="#"><span class="fa fa-shopping-cart"></span>Add To Cart</a>
                                    </figure>
                                    <figcaption>
                                        <h4 class="aa-product-title"><a href="#">T-Shirt</a></h4>
                                        <span class="aa-product-price">$45.50</span>
                                    </figcaption>
                                    <div class="aa-product-hvr-content">
                                        <a href="#" data-toggle="tooltip" data-placement="top" title="Add to Wishlist"><span class="fa fa-heart-o"></span></a>
                                        <a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><span class="fa fa-exchange"></span></a>
                                        <a href="#" data-toggle2="tooltip" data-placement="top" title="Quick View" data-toggle="modal" data-target="#quick-view-modal"><span class="fa fa-search"></span></a>
                                    </div>
                                    <!-- product badge -->
                                    <span class="aa-badge aa-hot" href="#">HOT!</span>
                                </li>
                                <!-- start single product item -->
                                <li>
                                    <figure>
                                        <a class="aa-product-img" href="#"><img src="img/women/girl-3.png" alt="polo shirt img"></a>
                                        <a class="aa-add-card-btn"href="#"><span class="fa fa-shopping-cart"></span>Add To Cart</a>
                                        <figcaption>
                                            <h4 class="aa-product-title"><a href="#">Lorem ipsum doller</a></h4>
                                            <span class="aa-product-price">$45.50</span><span class="aa-product-price"><del>$65.50</del></span>
                                        </figcaption>
                                    </figure>
                                    <div class="aa-product-hvr-content">
                                        <a href="#" data-toggle="tooltip" data-placement="top" title="Add to Wishlist"><span class="fa fa-heart-o"></span></a>
                                        <a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><span class="fa fa-exchange"></span></a>
                                        <a href="#" data-toggle2="tooltip" data-placement="top" title="Quick View" data-toggle="modal" data-target="#quick-view-modal"><span class="fa fa-search"></span></a>
                                    </div>
                                </li>
                                <!-- start single product item -->
                                <li>
                                    <figure>
                                        <a class="aa-product-img" href="#"><img src="img/man/polo-shirt-1.png" alt="polo shirt img"></a>
                                        <a class="aa-add-card-btn"href="#"><span class="fa fa-shopping-cart"></span>Add To Cart</a>
                                        <figcaption>
                                            <h4 class="aa-product-title"><a href="#">Polo T-Shirt</a></h4>
                                            <span class="aa-product-price">$45.50</span><span class="aa-product-price"><del>$65.50</del></span>
                                        </figcaption>
                                    </figure>
                                    <div class="aa-product-hvr-content">
                                        <a href="#" data-toggle="tooltip" data-placement="top" title="Add to Wishlist"><span class="fa fa-heart-o"></span></a>
                                        <a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><span class="fa fa-exchange"></span></a>
                                        <a href="#" data-toggle2="tooltip" data-placement="top" title="Quick View" data-toggle="modal" data-target="#quick-view-modal"><span class="fa fa-search"></span></a>
                                    </div>
                                </li>
                                <!-- start single product item -->
                                <li>
                                    <figure>
                                        <a class="aa-product-img" href="#"><img src="img/women/girl-4.png" alt="polo shirt img"></a>
                                        <a class="aa-add-card-btn"href="#"><span class="fa fa-shopping-cart"></span>Add To Cart</a>
                                        <figcaption>
                                            <h4 class="aa-product-title"><a href="#">Lorem ipsum doller</a></h4>
                                            <span class="aa-product-price">$45.50</span><span class="aa-product-price"><del>$65.50</del></span>
                                        </figcaption>
                                    </figure>
                                    <div class="aa-product-hvr-content">
                                        <a href="#" data-toggle="tooltip" data-placement="top" title="Add to Wishlist"><span class="fa fa-heart-o"></span></a>
                                        <a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><span class="fa fa-exchange"></span></a>
                                        <a href="#" data-toggle2="tooltip" data-placement="top" title="Quick View" data-toggle="modal" data-target="#quick-view-modal"><span class="fa fa-search"></span></a>
                                    </div>
                                    <!-- product badge -->
                                    <span class="aa-badge aa-sold-out" href="#">Sold Out!</span>
                                </li>
                                <!-- start single product item -->
                                <li>
                                    <figure>
                                        <a class="aa-product-img" href="#"><img src="img/man/polo-shirt-4.png" alt="polo shirt img"></a>
                                        <a class="aa-add-card-btn"href="#"><span class="fa fa-shopping-cart"></span>Add To Cart</a>
                                        <figcaption>
                                            <h4 class="aa-product-title"><a href="#">Polo T-Shirt</a></h4>
                                            <span class="aa-product-price">$45.50</span><span class="aa-product-price"><del>$65.50</del></span>
                                        </figcaption>
                                    </figure>
                                    <div class="aa-product-hvr-content">
                                        <a href="#" data-toggle="tooltip" data-placement="top" title="Add to Wishlist"><span class="fa fa-heart-o"></span></a>
                                        <a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><span class="fa fa-exchange"></span></a>
                                        <a href="#" data-toggle2="tooltip" data-placement="top" title="Quick View" data-toggle="modal" data-target="#quick-view-modal"><span class="fa fa-search"></span></a>
                                    </div>
                                    <!-- product badge -->
                                    <span class="aa-badge aa-hot" href="#">HOT!</span>
                                </li>
                                <!-- start single product item -->
                                <li>
                                    <figure>
                                        <a class="aa-product-img" href="#"><img src="img/women/girl-1.png" alt="polo shirt img"></a>
                                        <a class="aa-add-card-btn"href="#"><span class="fa fa-shopping-cart"></span>Add To Cart</a>
                                        <figcaption>
                                            <h4 class="aa-product-title"><a href="#">This is Title</a></h4>
                                            <span class="aa-product-price">$45.50</span><span class="aa-product-price"><del>$65.50</del></span>
                                        </figcaption>
                                    </figure>
                                    <div class="aa-product-hvr-content">
                                        <a href="#" data-toggle="tooltip" data-placement="top" title="Add to Wishlist"><span class="fa fa-heart-o"></span></a>
                                        <a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><span class="fa fa-exchange"></span></a>
                                        <a href="#" data-toggle2="tooltip" data-placement="top" title="Quick View" data-toggle="modal" data-target="#quick-view-modal"><span class="fa fa-search"></span></a>
                                    </div>
                                    <!-- product badge -->
                                    <span class="aa-badge aa-sale" href="#">SALE!</span>
                                </li>
                            </ul>
                            <!-- quick view modal -->
                            <div class="modal fade" id="quick-view-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                            <div class="row">
                                                <!-- Modal view slider -->
                                                <div class="col-md-6 col-sm-6 col-xs-12">
                                                    <div class="aa-product-view-slider">
                                                        <div class="simpleLens-gallery-container" id="demo-1">
                                                            <div class="simpleLens-container">
                                                                <div class="simpleLens-big-image-container">
                                                                    <a class="simpleLens-lens-image" data-lens-image="img/view-slider/large/polo-shirt-1.png">
                                                                        <img src="img/view-slider/medium/polo-shirt-1.png" class="simpleLens-big-image">
                                                                    </a>
                                                                </div>
                                                            </div>
                                                            <div class="simpleLens-thumbnails-container">
                                                                <a href="#" class="simpleLens-thumbnail-wrapper"
                                                                   data-lens-image="img/view-slider/large/polo-shirt-1.png"
                                                                   data-big-image="img/view-slider/medium/polo-shirt-1.png">
                                                                    <img src="img/view-slider/thumbnail/polo-shirt-1.png">
                                                                </a>
                                                                <a href="#" class="simpleLens-thumbnail-wrapper"
                                                                   data-lens-image="img/view-slider/large/polo-shirt-3.png"
                                                                   data-big-image="img/view-slider/medium/polo-shirt-3.png">
                                                                    <img src="img/view-slider/thumbnail/polo-shirt-3.png">
                                                                </a>

                                                                <a href="#" class="simpleLens-thumbnail-wrapper"
                                                                   data-lens-image="img/view-slider/large/polo-shirt-4.png"
                                                                   data-big-image="img/view-slider/medium/polo-shirt-4.png">
                                                                    <img src="img/view-slider/thumbnail/polo-shirt-4.png">
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Modal view content -->
                                                <div class="col-md-6 col-sm-6 col-xs-12">
                                                    <div class="aa-product-view-content">
                                                        <h3>T-Shirt</h3>
                                                        <div class="aa-price-block">
                                                            <span class="aa-product-view-price">$34.99</span>
                                                            <p class="aa-product-avilability">Avilability: <span>In stock</span></p>
                                                        </div>
                                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officiis animi, veritatis quae repudiandae quod nulla porro quidem, itaque quis quaerat!</p>
                                                        <h4>Size</h4>
                                                        <div class="aa-prod-view-size">
                                                            <a href="#">S</a>
                                                            <a href="#">M</a>
                                                            <a href="#">L</a>
                                                            <a href="#">XL</a>
                                                        </div>
                                                        <div class="aa-prod-quantity">
                                                            <form action="">
                                                                <select name="" id="">
                                                                    <option value="0" selected="1">1</option>
                                                                    <option value="1">2</option>
                                                                    <option value="2">3</option>
                                                                    <option value="3">4</option>
                                                                    <option value="4">5</option>
                                                                    <option value="5">6</option>
                                                                </select>
                                                            </form>
                                                            <p class="aa-prod-category">
                                                                Category: <a href="#">Polo T-Shirt</a>
                                                            </p>
                                                        </div>
                                                        <div class="aa-prod-view-bottom">
                                                            <a href="#" class="aa-add-to-cart-btn"><span class="fa fa-shopping-cart"></span>Add To Cart</a>
                                                            <a href="#" class="aa-add-to-cart-btn">View Details</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div><!-- /.modal-content -->
                                </div><!-- /.modal-dialog -->
                            </div>
                            <!-- / quick view modal -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- / product category -->


    <!-- Subscribe section -->
    <section id="aa-subscribe">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="aa-subscribe-area">
                        <h3>Subscribe our newsletter </h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ex, velit!</p>
                        <form action="" class="aa-subscribe-form">
                            <input type="email" name="" id="" placeholder="Enter your Email">
                            <input type="submit" value="Subscribe">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- / Subscribe section -->

    <!-- footer -->
    <footer id="aa-footer">
        <!-- footer bottom -->
        <div class="aa-footer-top">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="aa-footer-top-area">
                            <div class="row">
                                <div class="col-md-3 col-sm-6">
                                    <div class="aa-footer-widget">
                                        <h3>Main Menu</h3>
                                        <ul class="aa-footer-nav">
                                            <li><a href="#">Home</a></li>
                                            <li><a href="#">Our Services</a></li>
                                            <li><a href="#">Our Products</a></li>
                                            <li><a href="#">About Us</a></li>
                                            <li><a href="#">Contact Us</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-6">
                                    <div class="aa-footer-widget">
                                        <div class="aa-footer-widget">
                                            <h3>Knowledge Base</h3>
                                            <ul class="aa-footer-nav">
                                                <li><a href="#">Delivery</a></li>
                                                <li><a href="#">Returns</a></li>
                                                <li><a href="#">Services</a></li>
                                                <li><a href="#">Discount</a></li>
                                                <li><a href="#">Special Offer</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-6">
                                    <div class="aa-footer-widget">
                                        <div class="aa-footer-widget">
                                            <h3>Useful Links</h3>
                                            <ul class="aa-footer-nav">
                                                <li><a href="#">Site Map</a></li>
                                                <li><a href="#">Search</a></li>
                                                <li><a href="#">Advanced Search</a></li>
                                                <li><a href="#">Suppliers</a></li>
                                                <li><a href="#">FAQ</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-6">
                                    <div class="aa-footer-widget">
                                        <div class="aa-footer-widget">
                                            <h3>Contact Us</h3>
                                            <address>
                                                <p> 25 Astor Pl, NY 10003, USA</p>
                                                <p><span class="fa fa-phone"></span>+1 212-982-4589</p>
                                                <p><span class="fa fa-envelope"></span>dailyshop@gmail.com</p>
                                            </address>
                                            <div class="aa-footer-social">
                                                <a href="#"><span class="fa fa-facebook"></span></a>
                                                <a href="#"><span class="fa fa-twitter"></span></a>
                                                <a href="#"><span class="fa fa-google-plus"></span></a>
                                                <a href="#"><span class="fa fa-youtube"></span></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- footer-bottom -->
        <div class="aa-footer-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="aa-footer-bottom-area">
                            <p>Designed by <a href="http://www.markups.io/">MarkUps.io</a></p>
                            <div class="aa-footer-payment">
                                <span class="fa fa-cc-mastercard"></span>
                                <span class="fa fa-cc-visa"></span>
                                <span class="fa fa-paypal"></span>
                                <span class="fa fa-cc-discover"></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- / footer -->
    <!-- Login Modal -->
    <div class="modal fade" id="login-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4>Login or Register</h4>
                    <form class="aa-login-form" action="">
                        <label for="">Username or Email address<span>*</span></label>
                        <input type="text" placeholder="Username or email">
                        <label for="">Password<span>*</span></label>
                        <input type="password" placeholder="Password">
                        <button class="aa-browse-btn" type="submit">Login</button>
                        <label for="rememberme" class="rememberme"><input type="checkbox" id="rememberme"> Remember me </label>
                        <p class="aa-lost-password"><a href="#">Lost your password?</a></p>
                        <div class="aa-register-now">
                            Don't have an account?<a href="account.html">Register now!</a>
                        </div>
                    </form>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div>

    <!-- Trigger the modal with a button -->
    <!-- Modal -->
    <div id="myModal" class="modal fade" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Message</h4>
                </div>
                <form method="POST" action="{{route('pesan.store')}}">
                    {{ csrf_field() }}
                    <div class="modal-body">

                        <div class="form-group">
                            <label for="subjek">Subjek:</label>
                            <input type="text" class="form-control" id="subjek" name="subjek">
                        </div>
                        <div class="form-group">
                            <label for="pesan">Pesan:</label>
                            <textarea class="form-control" rows="5" id="pesan" name="pesan"></textarea>
                        </div>
                        <input type="hidden" value="{{Auth::user()->id}}" name="useri">
                        <input type="hidden" value="{{$pakaian->toko()->firstOrFail()->id}}" name="toko">


                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <input type="submit" class="btn btn-default" value="Kirim"/>
                    </div>
                </form>
            </div>

        </div>
    </div>
@endsection