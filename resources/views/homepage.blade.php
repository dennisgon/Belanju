@extends('layout.app')

@section('title', 'Page Title')

@section('konten')
 @parent

<section id="isi" class="wow fadeIn data-wow-duration="0.1s" data-wow-delay="0.1s">
	<div class="row" id="inti-carousel">
		<div class="col-md-8">
			<div id="owl-example" class="owl-carousel">
			  <div> <img src="http://placehold.it/833x400" alt="Chania" width="833" height="400"> </div>
			  <div> <img src="http://placehold.it/833x400" alt="Chania" width="833" height="400"></div>
			  <div> <img src="http://placehold.it/833x400" alt="Chania" width="833" height="400"> </div>
			  <div> <img src="http://placehold.it/833x400" alt="Chania" width="833" height="400"> </div>
			  <div> <img src="http://placehold.it/833x400" alt="Chania" width="833" height="400"> </div>
			  <div> <img src="http://placehold.it/833x400" alt="Chania" width="833" height="400"> </div>
			  <div> <img src="http://placehold.it/833x400" alt="Chania" width="833" height="400"> </div>
			</div>
		</div>
	</div>
		<div class="col-md-4 pilihan-baju" >
			<div class="row">
				<div class="col-md-12 col-xs-6" >
						<div class="myhoverEffect">
						  <img src="{{URL::asset('image/pi3.jpg')}}" alt="" height="200px" width="384px" />
						  <div class="textSec">
						    <p>Find More</p>
						    <span class="border"></span>

						    <h2>FOR WOMAN</h2>
						  </div>
						</div>
				</div>
				<div class="col-md-12 col-xs-6" >
						<div class="myhoverEffect">
						  <img src="{{URL::asset('image/pi1.jpg')}}" alt="" height="200px" width="384px" />
						  <div class="textSec">
						    <p>Find More</p>
						    <span class="border"></span>

						    <h2>FOR MAN</h2>
						  </div>
						</div>
				</div>
			</div>
		</div>
	</div>
	<section id="hot-product wow fadeIn">
		<div class="row">
			<div class="row">
				<div class="col-md-12 title-h1">
					<h1><span>Hot Product</span></h1>
				</div>
			</div>
			<div class="row row-hot-product">
			<div class="row baju-row-show">
				<div class="col-md-3 baju-show ">
					<div class="make-3D-space">
						    <div class="product-card">
						        <div class="product-front">
						        	<div class="shadow"></div>
						            <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/245657/t-shirt.png" alt="" />
						            <div class="image_overlay"></div>
						            <a href="details"><div id="view_details">View details</div></a>
						            <div class="stats">        	
						                <div class="stats-container">
						                    <span class="product_price">$39</span>
						                    <span class="product_name">Adidas Originals</span>    
						                    <p>Men's running shirt</p>                                            
						                    
						                    <div class="product-options">
						                    <strong>SIZES</strong>
						                    <span>XS, S, M, L, XL, XXL</span>
						                    <strong>COLORS</strong>
						                    <div class="colors">
						                        <div class="c-blue"><span></span></div>
						                        <div class="c-red"><span></span></div>
						                        <div class="c-white"><span></span></div>
						                        <div class="c-green"><span></span></div>
						                    </div>
						                </div>                       
						                </div>                         
						            </div>
						        </div> 
						    </div>	
						</div>	
				</div>	
				<div class="col-md-3 baju-show ">
					<div class="make-3D-space">
						    <div class="product-card">
						        <div class="product-front">
						        	<div class="shadow"></div>
						            <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/245657/t-shirt.png" alt="" />
						            <div class="image_overlay"></div>
						            <a href="#"><div id="view_details">View details</div></a>
						            <div class="stats">        	
						                <div class="stats-container">
						                    <span class="product_price">$39</span>
						                    <span class="product_name">Adidas Originals</span>    
						                    <p>Men's running shirt</p>                                            
						                    
						                    <div class="product-options">
						                    <strong>SIZES</strong>
						                    <span>XS, S, M, L, XL, XXL</span>
						                    <strong>COLORS</strong>
						                    <div class="colors">
						                        <div class="c-blue"><span></span></div>
						                        <div class="c-red"><span></span></div>
						                        <div class="c-white"><span></span></div>
						                        <div class="c-green"><span></span></div>
						                    </div>
						                </div>                       
						                </div>                         
						            </div>
						        </div> 
						    </div>	
						</div>	
				</div>
				<div class="col-md-3 baju-show ">
					<div class="make-3D-space">
						    <div class="product-card">
						        <div class="product-front">
						        	<div class="shadow"></div>
						            <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/245657/t-shirt.png" alt="" />
						            <div class="image_overlay"></div>
						            <a href="#"><div id="view_details">View details</div></a>
						            <div class="stats">        	
						                <div class="stats-container">
						                    <span class="product_price">$39</span>
						                    <span class="product_name">Adidas Originals</span>    
						                    <p>Men's running shirt</p>                                            
						                    
						                    <div class="product-options">
						                    <strong>SIZES</strong>
						                    <span>XS, S, M, L, XL, XXL</span>
						                    <strong>COLORS</strong>
						                    <div class="colors">
						                        <div class="c-blue"><span></span></div>
						                        <div class="c-red"><span></span></div>
						                        <div class="c-white"><span></span></div>
						                        <div class="c-green"><span></span></div>
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
	</section>
	<section id="recent-product" class="wow fadeIn data-wow-duration="0.1s" data-wow-delay="0.3s">
		<div class="row" >
			<div class="row">
				<div class="col-md-12 title-h1">
					<h1><span>Recent Product</span></h1>
					<div class="row row-hot-product">
					<div class="row baju-row-show">
						<div class="col-md-3 baju-show ">
							<div class="make-3D-space">
								    <div class="product-card">
								        <div class="product-front">
								        	<div class="shadow"></div>
								            <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/245657/t-shirt.png" alt="" />
								            <div class="image_overlay"></div>
								            <a href="#"><div id="view_details">View details</div></a>
								            <div class="stats">        	
								                <div class="stats-container">
								                    <span class="product_price">$39</span>
								                    <span class="product_name">Adidas Originals</span>    
								                    <p>Men's running shirt</p>                                            
								                    
								                    <div class="product-options">
								                    <strong>SIZES</strong>
								                    <span>XS, S, M, L, XL, XXL</span>
								                    <strong>COLORS</strong>
								                    <div class="colors">
								                        <div class="c-blue"><span></span></div>
								                        <div class="c-red"><span></span></div>
								                        <div class="c-white"><span></span></div>
								                        <div class="c-green"><span></span></div>
								                    </div>
								                </div>                       
								                </div>                         
								            </div>
								        </div> 
								    </div>	
								</div>	
						</div>
						<div class="col-md-3 baju-show ">
							<div class="make-3D-space ">
								    <div class="product-card">
								        <div class="product-front">
								        	<div class="shadow"></div>
								            <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/245657/t-shirt.png" alt="" />
								            <div class="image_overlay"></div>
								            <a href="#"><div id="view_details">View details</div></a>
								            <div class="stats">        	
								                <div class="stats-container">
								                    <span class="product_price">$39</span>
								                    <span class="product_name">Adidas Originals</span>    
								                    <p>Men's running shirt</p>                                            
								                    
								                    <div class="product-options">
								                    <strong>SIZES</strong>
								                    <span>XS, S, M, L, XL, XXL</span>
								                    <strong>COLORS</strong>
								                    <div class="colors">
								                        <div class="c-blue"><span></span></div>
								                        <div class="c-red"><span></span></div>
								                        <div class="c-white"><span></span></div>
								                        <div class="c-green"><span></span></div>
								                    </div>
								                </div>                       
								                </div>                         
								            </div>
								        </div> 
								    </div>	
								</div>	
						</div>
						<div class="col-md-3 baju-show ">
							<div class="make-3D-space">
								    <div class="product-card">
								        <div class="product-front">
								        	<div class="shadow"></div>
								            <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/245657/t-shirt.png" alt="" />
								            <div class="image_overlay"></div>
								            <a href="#"><div id="view_details">View details</div></a>
								            <div class="stats">        	
								                <div class="stats-container">
								                    <span class="product_price">$39</span>
								                    <span class="product_name">Adidas Originals</span>    
								                    <p>Men's running shirt</p>                                            
								                    
								                    <div class="product-options">
								                    <strong>SIZES</strong>
								                    <span>XS, S, M, L, XL, XXL</span>
								                    <strong>COLORS</strong>
								                    <div class="colors">
								                        <div class="c-blue"><span></span></div>
								                        <div class="c-red"><span></span></div>
								                        <div class="c-white"><span></span></div>
								                        <div class="c-green"><span></span></div>
								                    </div>
								                </div>                       
								                </div>                         
								            </div>
								        </div> 
								    </div>	
								</div>	
						</div>
					</div>
				</section>
	<section class="wow fadeIn data-wow-duration="0.1s" data-wow-delay="0.3s">
		<div class="row">
			<div class="row">
				<div class="col-md-12 title-h1">
					<h1><span>Woman Product</span></h1>
					</div>
				</div>
			</div>
			<div class="row baju-row-show">
				<div class="col-md-3 baju-show">
					<div class="make-3D-space">
						    <div class="product-card">
						        <div class="product-front">
						        	<div class="shadow"></div>
						            <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/245657/t-shirt.png" alt="" />
						            <div class="image_overlay"></div>
						            <a href="#"><div id="view_details">View details</div></a>
						            <div class="stats">        	
						                <div class="stats-container">
						                    <span class="product_price">$39</span>
						                    <span class="product_name">Adidas Originals</span>    
						                    <p>Men's running shirt</p>                                            
						                    
						                    <div class="product-options">
						                    <strong>SIZES</strong>
						                    <span>XS, S, M, L, XL, XXL</span>
						                    <strong>COLORS</strong>
						                    <div class="colors">
						                        <div class="c-blue"><span></span></div>
						                        <div class="c-red"><span></span></div>
						                        <div class="c-white"><span></span></div>
						                        <div class="c-green"><span></span></div>
						                    </div>
						                </div>                       
						                </div>                         
						            </div>
						        </div> 
						    </div>	
						</div>	
				</div>
				<div class="col-md-3 baju-show">
					<div class="make-3D-space">
						    <div class="product-card">
						        <div class="product-front">
						        	<div class="shadow"></div>
						            <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/245657/t-shirt.png" alt="" />
						            <div class="image_overlay"></div>
						            <a href="#"><div id="view_details">View details</div></a>
						            <div class="stats">        	
						                <div class="stats-container">
						                    <span class="product_price">$39</span>
						                    <span class="product_name">Adidas Originals</span>    
						                    <p>Men's running shirt</p>                                            
						                    
						                    <div class="product-options">
						                    <strong>SIZES</strong>
						                    <span>XS, S, M, L, XL, XXL</span>
						                    <strong>COLORS</strong>
						                    <div class="colors">
						                        <div class="c-blue"><span></span></div>
						                        <div class="c-red"><span></span></div>
						                        <div class="c-white"><span></span></div>
						                        <div class="c-green"><span></span></div>
						                    </div>
						                </div>                       
						                </div>                         
						            </div>
						        </div> 
						    </div>	
						</div>	
				</div>
				<div class="col-md-3 baju-show">
					<div class="make-3D-space">
						    <div class="product-card">
						        <div class="product-front">
						        	<div class="shadow"></div>
						            <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/245657/t-shirt.png" alt="" />
						            <div class="image_overlay"></div>
						            <a href="#"><div id="view_details">View details</div></a>
						            <div class="stats">        	
						                <div class="stats-container">
						                    <span class="product_price">$39</span>
						                    <span class="product_name">Adidas Originals</span>    
						                    <p>Men's running shirt</p>                                            
						                    
						                    <div class="product-options">
						                    <strong>SIZES</strong>
						                    <span>XS, S, M, L, XL, XXL</span>
						                    <strong>COLORS</strong>
						                    <div class="colors">
						                        <div class="c-blue"><span></span></div>
						                        <div class="c-red"><span></span></div>
						                        <div class="c-white"><span></span></div>
						                        <div class="c-green"><span></span></div>
						                    </div>
						                </div>                       
						                </div>                         
						            </div>
						        </div> 
						    </div>	
						</div>	
				</div>
				<div class="col-md-3 baju-show">
					<div class="make-3D-space">
						    <div class="product-card">
						        <div class="product-front">
						        	<div class="shadow"></div>
						            <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/245657/t-shirt.png" alt="" />
						            <div class="image_overlay"></div>
						            <a href="#"><div id="view_details">View details</div></a>
						            <div class="stats">        	
						                <div class="stats-container">
						                    <span class="product_price">$39</span>
						                    <span class="product_name">Adidas Originals</span>    
						                    <p>Men's running shirt</p>                                            
						                    
						                    <div class="product-options">
						                    <strong>SIZES</strong>
						                    <span>XS, S, M, L, XL, XXL</span>
						                    <strong>COLORS</strong>
						                    <div class="colors">
						                        <div class="c-blue"><span></span></div>
						                        <div class="c-red"><span></span></div>
						                        <div class="c-white"><span></span></div>
						                        <div class="c-green"><span></span></div>
						                    </div>
						                </div>                       
						                </div>                         
						            </div>
						        </div> 
						    </div>	
						</div>	
				</div>
				<div class="col-md-3 baju-show">
					<div class="make-3D-space">
						    <div class="product-card">
						        <div class="product-front">
						        	<div class="shadow"></div>
						            <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/245657/t-shirt.png" alt="" />
						            <div class="image_overlay"></div>
						            <a href="#"><div id="view_details">View details</div></a>
						            <div class="stats">        	
						                <div class="stats-container">
						                    <span class="product_price">$39</span>
						                    <span class="product_name">Adidas Originals</span>    
						                    <p>Men's running shirt</p>                                            
						                    
						                    <div class="product-options">
						                    <strong>SIZES</strong>
						                    <span>XS, S, M, L, XL, XXL</span>
						                    <strong>COLORS</strong>
						                    <div class="colors">
						                        <div class="c-blue"><span></span></div>
						                        <div class="c-red"><span></span></div>
						                        <div class="c-white"><span></span></div>
						                        <div class="c-green"><span></span></div>
						                    </div>
						                </div>                       
						                </div>                         
						            </div>
						        </div> 
						    </div>	
						</div>	
				</div>
				<div class="col-md-3 baju-show">
					<div class="make-3D-space">
						    <div class="product-card">
						        <div class="product-front">
						        	<div class="shadow"></div>
						            <i class="material-icons more">more_horiz</i>
						            <div class="image_overlay"></div>
						            <a href="find.html"><div id="view_details">View More</div></a>
						        </div> 
						    </div>	
						</div>	
				</div>
			</div>
		</div>
	</section>
	<section class="wow fadeIn data-wow-duration="0.1s" data-wow-delay="0.3s">
		<div class="row">
			<div class="row">
				<div class="col-md-12 title-h1">
					<h1><span>Man Product</span></h1>
					</div>
				</div>
			</div>
			<div class="row baju-row-show">
				<div class="col-md-3 baju-show">
					<div class="make-3D-space">
						    <div class="product-card">
						        <div class="product-front">
						        	<div class="shadow"></div>
						            <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/245657/t-shirt.png" alt="" />
						            <div class="image_overlay"></div>
						            <a href="#"><div id="view_details">View details</div></a>
						            <div class="stats">        	
						                <div class="stats-container">
						                    <span class="product_price">$39</span>
						                    <span class="product_name">Adidas Originals</span>    
						                    <p>Men's running shirt</p>                                            
						                    
						                    <div class="product-options">
						                    <strong>SIZES</strong>
						                    <span>XS, S, M, L, XL, XXL</span>
						                    <strong>COLORS</strong>
						                    <div class="colors">
						                        <div class="c-blue"><span></span></div>
						                        <div class="c-red"><span></span></div>
						                        <div class="c-white"><span></span></div>
						                        <div class="c-green"><span></span></div>
						                    </div>
						                </div>                       
						                </div>                         
						            </div>
						        </div> 
						    </div>	
						</div>	
				</div>
				<div class="col-md-3 baju-show">
					<div class="make-3D-space">
						    <div class="product-card">
						        <div class="product-front">
						        	<div class="shadow"></div>
						            <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/245657/t-shirt.png" alt="" />
						            <div class="image_overlay"></div>
						            <a href="#"><div id="view_details">View details</div></a>
						            <div class="stats">        	
						                <div class="stats-container">
						                    <span class="product_price">$39</span>
						                    <span class="product_name">Adidas Originals</span>    
						                    <p>Men's running shirt</p>                                            
						                    
						                    <div class="product-options">
						                    <strong>SIZES</strong>
						                    <span>XS, S, M, L, XL, XXL</span>
						                    <strong>COLORS</strong>
						                    <div class="colors">
						                        <div class="c-blue"><span></span></div>
						                        <div class="c-red"><span></span></div>
						                        <div class="c-white"><span></span></div>
						                        <div class="c-green"><span></span></div>
						                    </div>
						                </div>                       
						                </div>                         
						            </div>
						        </div> 
						    </div>	
						</div>	
				</div>
				<div class="col-md-3 baju-show">
					<div class="make-3D-space">
						    <div class="product-card">
						        <div class="product-front">
						        	<div class="shadow"></div>
						            <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/245657/t-shirt.png" alt="" />
						            <div class="image_overlay"></div>
						            <a href="#"><div id="view_details">View details</div></a>
						            <div class="stats">        	
						                <div class="stats-container">
						                    <span class="product_price">$39</span>
						                    <span class="product_name">Adidas Originals</span>    
						                    <p>Men's running shirt</p>                                            
						                    
						                    <div class="product-options">
						                    <strong>SIZES</strong>
						                    <span>XS, S, M, L, XL, XXL</span>
						                    <strong>COLORS</strong>
						                    <div class="colors">
						                        <div class="c-blue"><span></span></div>
						                        <div class="c-red"><span></span></div>
						                        <div class="c-white"><span></span></div>
						                        <div class="c-green"><span></span></div>
						                    </div>
						                </div>                       
						                </div>                         
						            </div>
						        </div> 
						    </div>	
						</div>	
				</div>
				<div class="col-md-3 baju-show">
					<div class="make-3D-space">
						    <div class="product-card">
						        <div class="product-front">
						        	<div class="shadow"></div>
						            <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/245657/t-shirt.png" alt="" />
						            <div class="image_overlay"></div>
						            <a href="#"><div id="view_details">View details</div></a>
						            <div class="stats">        	
						                <div class="stats-container">
						                    <span class="product_price">$39</span>
						                    <span class="product_name">Adidas Originals</span>    
						                    <p>Men's running shirt</p>                                            
						                    
						                    <div class="product-options">
						                    <strong>SIZES</strong>
						                    <span>XS, S, M, L, XL, XXL</span>
						                    <strong>COLORS</strong>
						                    <div class="colors">
						                        <div class="c-blue"><span></span></div>
						                        <div class="c-red"><span></span></div>
						                        <div class="c-white"><span></span></div>
						                        <div class="c-green"><span></span></div>
						                    </div>
						                </div>                       
						                </div>                         
						            </div>
						        </div> 
						    </div>	
						</div>	
				</div>
				<div class="col-md-3 baju-show">
					<div class="make-3D-space">
						    <div class="product-card">
						        <div class="product-front">
						        	<div class="shadow"></div>
						            <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/245657/t-shirt.png" alt="" />
						            <div class="image_overlay"></div>
						            <a href="#"><div id="view_details">View details</div></a>
						            <div class="stats">        	
						                <div class="stats-container">
						                    <span class="product_price">$39</span>
						                    <span class="product_name">Adidas Originals</span>    
						                    <p>Men's running shirt</p>                                            
						                    
						                    <div class="product-options">
						                    <strong>SIZES</strong>
						                    <span>XS, S, M, L, XL, XXL</span>
						                    <strong>COLORS</strong>
						                    <div class="colors">
						                        <div class="c-blue"><span></span></div>
						                        <div class="c-red"><span></span></div>
						                        <div class="c-white"><span></span></div>
						                        <div class="c-green"><span></span></div>
						                    </div>
						                </div>                       
						                </div>                         
						            </div>
						        </div> 
						    </div>	
						</div>	
				</div>
				<div class="col-md-3 baju-show">
					<div class="make-3D-space">
						    <div class="product-card">
						        <div class="product-front">
						        	<div class="shadow"></div>
						            <i class="material-icons more">more_horiz</i>
						            <div class="image_overlay"></div>
						            <a href="#"><div id="view_details">View More</div></a>
						        </div> 
						    </div>	
						</div>	
				</div>
			</div>
		</section>
	</div>
</section>
@endsection