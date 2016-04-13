{{-- @foreach ($products->chunk(4) as $chunk) --}}

<!-- Filter ============================================= -->
					<ul id="shop-filter" class="clearfix">

						<li class="activeFilter"><a href="#" data-filter="*">Show All</a></li>
						<li><a href="#" data-filter=".shop-qnique">Qnique</a></li>
						<li><a href="#" data-filter=".shop-hqf">Hand Quilting Frames</a></li>
						<li><a href="#" data-filter=".shop-acc">Accessories</a></li>
						<li><a href="#" data-filter=".shop-machine">Machine Quilting</a></li>
						<li><a href="#" data-filter=".shop-truecut">TrueCut</a></li>

					</ul><!-- #portfolio-filter end -->

					<div id="portfolio-shuffle">
						<i class="icon-random"></i>
					</div>

					<div class="clear"></div>

<div id="shop-layout" class="clearfix">

<article class="shop-item shop-hqf">

@foreach ($products as $product)
<div class="product clearfix">

	<div class="product-image">
		<div class="fslider" data-arrows="false">
			<div class="flexslider">
				<div class="slider-wrap">
					   
					{{--   		@foreach ($products as $product)
							<div class="slide">
							<a href="{!! action('ShopController@product', [$product->id]) !!}">
							<img src="{!! $product->primary_image !!}" alt=""></a>
							</div>
             				@endforeach --}}
		  	
           @if($product->primary_image)
                        <img src="{!! $product->primary_image !!}" class="img-responsive" alt="Image">
            @endif
 
				</div>
			</div>
		</div>
		<div class="product-overlay">
			<a href="#" class="add-to-cart"><i class="icon-shopping-cart"></i><span> Add to Cart</span></a>
			<a href="{!! asset('/frontend/include/ajax/shop-item.php') !!}" class="item-quick-view" data-lightbox="ajax"><i class="icon-zoom-in2"></i><span> Quick View</span></a>
		</div>
	</div>
	<div class="product-desc">
		<div class="product-title"><h3><a href="{!! action('ShopController@product', [$product->id]) !!}">
		{!! $product->name !!}</a></h3></div>
		<div class="product-price">Our Price:{!! $product->price !!}</div>
		<div class="product-sku">SKU:{!! $product->upc !!}</div>
		
		<div class="product-rating">
			<i class="icon-star3"></i>
			<i class="icon-star3"></i>
			<i class="icon-star3"></i>
			<i class="icon-star-empty"></i>
			<i class="icon-star-empty"></i>
		</div>
	</div>
</div>
@endforeach 
</article>


<article class="shop-item shop-machine">
 @foreach ($products as $product)
<div class="product clearfix">

	<div class="product-image">
		<div class="fslider" data-arrows="false">
			<div class="flexslider">
				<div class="slider-wrap">
					   
					{{--   		@foreach ($products as $product)
							<div class="slide">
							<a href="{!! action('ShopController@product', [$product->id]) !!}">
							<img src="{!! $product->primary_image !!}" alt=""></a>
							</div>
             				@endforeach --}}
		  	
           @if($product->primary_image)
                        <img src="{!! $product->primary_image !!}" class="img-responsive" alt="Image">
            @endif
 
				</div>
			</div>
		</div>
		<div class="product-overlay">
			<a href="#" class="add-to-cart"><i class="icon-shopping-cart"></i><span> Add to Cart</span></a>
			<a href="{!! asset('/frontend/include/ajax/shop-item.php') !!}" class="item-quick-view" data-lightbox="ajax"><i class="icon-zoom-in2"></i><span> Quick View</span></a>
		</div>
	</div>
	<div class="product-desc">
		<div class="product-title"><h3><a href="{!! action('ShopController@product', [$product->id]) !!}">
		{!! $product->name !!}</a></h3></div>
		<div class="product-price">Our Price:{!! $product->price !!}</div>
		<div class="product-sku">SKU:{!! $product->upc !!}</div>
		
		<div class="product-rating">
			<i class="icon-star3"></i>
			<i class="icon-star3"></i>
			<i class="icon-star3"></i>
			<i class="icon-star-empty"></i>
			<i class="icon-star-empty"></i>
		</div>
	</div>
</div>
@endforeach 
</article>


<article class="shop-item shop-acc">
			@foreach ($products as $product)
<div class="product clearfix">

	<div class="product-image">
		<div class="fslider" data-arrows="false">
			<div class="flexslider">
				<div class="slider-wrap">
					   
					{{--   		@foreach ($products as $product)
							<div class="slide">
							<a href="{!! action('ShopController@product', [$product->id]) !!}">
							<img src="{!! $product->primary_image !!}" alt=""></a>
							</div>
             				@endforeach --}}
		  	
           @if($product->primary_image)
                        <img src="{!! $product->primary_image !!}" class="img-responsive" alt="Image">
            @endif
 
				</div>
			</div>
		</div>
		<div class="product-overlay">
			<a href="#" class="add-to-cart"><i class="icon-shopping-cart"></i><span> Add to Cart</span></a>
			<a href="{!! asset('/frontend/include/ajax/shop-item.php') !!}" class="item-quick-view" data-lightbox="ajax"><i class="icon-zoom-in2"></i><span> Quick View</span></a>
		</div>
	</div>
	<div class="product-desc">
		<div class="product-title"><h3><a href="{!! action('ShopController@product', [$product->id]) !!}">
		{!! $product->name !!}</a></h3></div>
		<div class="product-price">Our Price:{!! $product->price !!}</div>
		<div class="product-sku">SKU:{!! $product->upc !!}</div>
		
		<div class="product-rating">
			<i class="icon-star3"></i>
			<i class="icon-star3"></i>
			<i class="icon-star3"></i>
			<i class="icon-star-empty"></i>
			<i class="icon-star-empty"></i>
		</div>
	</div>
</div>
@endforeach 		 
</article>

<article class="shop-item shop-qnique">
@foreach ($products as $product)
<div class="product clearfix">

	<div class="product-image">
		<div class="fslider" data-arrows="false">
			<div class="flexslider">
				<div class="slider-wrap">
					   
					{{--   		@foreach ($products as $product)
							<div class="slide">
							<a href="{!! action('ShopController@product', [$product->id]) !!}">
							<img src="{!! $product->primary_image !!}" alt=""></a>
							</div>
             				@endforeach --}}
		  	
           @if($product->primary_image)
                        <img src="{!! $product->primary_image !!}" class="img-responsive" alt="Image">
            @endif
 
				</div>
			</div>
		</div>
		<div class="product-overlay">
			<a href="#" class="add-to-cart"><i class="icon-shopping-cart"></i><span> Add to Cart</span></a>
			<a href="{!! asset('/frontend/include/ajax/shop-item.php') !!}" class="item-quick-view" data-lightbox="ajax"><i class="icon-zoom-in2"></i><span> Quick View</span></a>
		</div>
	</div>
	<div class="product-desc">
		<div class="product-title"><h3><a href="{!! action('ShopController@product', [$product->id]) !!}">
		{!! $product->name !!}</a></h3></div>
		<div class="product-price">Our Price:{!! $product->price !!}</div>
		<div class="product-sku">SKU:{!! $product->upc !!}</div>
		
		<div class="product-rating">
			<i class="icon-star3"></i>
			<i class="icon-star3"></i>
			<i class="icon-star3"></i>
			<i class="icon-star-empty"></i>
			<i class="icon-star-empty"></i>
		</div>
	</div>
</div>
@endforeach 
</article>

<article class="shop-item shop-hqf">
@foreach ($products as $product)
<div class="product clearfix">

	<div class="product-image">
		<div class="fslider" data-arrows="false">
			<div class="flexslider">
				<div class="slider-wrap">
					   
					{{--   		@foreach ($products as $product)
							<div class="slide">
							<a href="{!! action('ShopController@product', [$product->id]) !!}">
							<img src="{!! $product->primary_image !!}" alt=""></a>
							</div>
             				@endforeach --}}
		  	
           @if($product->primary_image)
                        <img src="{!! $product->primary_image !!}" class="img-responsive" alt="Image">
            @endif
 
				</div>
			</div>
		</div>
		<div class="product-overlay">
			<a href="#" class="add-to-cart"><i class="icon-shopping-cart"></i><span> Add to Cart</span></a>
			<a href="{!! asset('/frontend/include/ajax/shop-item.php') !!}" class="item-quick-view" data-lightbox="ajax"><i class="icon-zoom-in2"></i><span> Quick View</span></a>
		</div>
	</div>
	<div class="product-desc">
		<div class="product-title"><h3><a href="{!! action('ShopController@product', [$product->id]) !!}">
		{!! $product->name !!}</a></h3></div>
		<div class="product-price">Our Price:{!! $product->price !!}</div>
		<div class="product-sku">SKU:{!! $product->upc !!}</div>
		
		<div class="product-rating">
			<i class="icon-star3"></i>
			<i class="icon-star3"></i>
			<i class="icon-star3"></i>
			<i class="icon-star-empty"></i>
			<i class="icon-star-empty"></i>
		</div>
	</div>
</div>
@endforeach 
</article>

<script type="text/javascript">

						jQuery(window).load(function(){

							var $container = $('#shop-layout');

							$container.isotope({ transitionDuration: '0.65s' });

							$('#shop-filter a').click(function(){
								$('#shop-filter li').removeClass('activeFilter');
								$(this).parent('li').addClass('activeFilter');
								var selector = $(this).attr('data-filter');
								$container.isotope({ filter: selector });
								return false;
							});

							$('#portfolio-shuffle').click(function(){
								$container.isotope('updateSortData').isotope({
									sortBy: 'random'
								});
							});

							$(window).resize(function() {
								$container.isotope('layout');
							});

						});

					</script><!-- Portfolio Script End -->

