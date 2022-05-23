@extends('client_layout.client')

@section('title')

		Home

@endsection

@section('content')
<!-- start content -->

<section id="home-section" class="hero">
	<div class="home-slider owl-carousel">

	@foreach ($sliders as $slider)
	<div class="slider-item" style="background-image: url(/storage/slider_images/{{$slider->slider_image}});">
		<div class="overlay"></div>
	  <div class="container">
		<div class="row slider-text justify-content-center align-items-center" data-scrollax-parent="true">

		  <div class="col-md-12 ftco-animate text-center">
			<h1 class="mb-2">{{$slider->description1}}</h1>
			<h2 class="subheading mb-4">{{$slider->description2}}</h2>
			<p><a href="{{url('/shop')}}" class="btn btn-primary">Vezi lista de produse</a></p>
		  </div>

		</div>
	  </div>
	</div>
	@endforeach

	
  </div>
</section>

<section class="ftco-section">
	  <div class="container">
		  <div class="row no-gutters ftco-services">
	<div class="col-md-3 text-center d-flex align-self-stretch ftco-animate">
	  <div class="media block-6 services mb-md-0 mb-4">
		<div class="icon bg-color-1 active d-flex justify-content-center align-items-center mb-2">
			  <span class="flaticon-shipped"></span>
		</div>
		<div class="media-body">
		  <h3 class="heading">Livrare gratuită</h3>
		  <span>La comenzile de peste 10.000 LEI </span>
		</div>
	  </div>      
	</div>
	<div class="col-md-3 text-center d-flex align-self-stretch ftco-animate">
	  <div class="media block-6 services mb-md-0 mb-4">
		<div class="icon bg-color-2 d-flex justify-content-center align-items-center mb-2">
			  <span class="flaticon-diet"></span>
		</div>
		<div class="media-body">
		  <h3 class="heading">Plată online sigură</h3>
		  <span>Plată online cu cardul prin sistem securizat</span>
		</div>
	  </div>    
	</div>
	<div class="col-md-3 text-center d-flex align-self-stretch ftco-animate">
	  <div class="media block-6 services mb-md-0 mb-4">
		<div class="icon bg-color-3 d-flex justify-content-center align-items-center mb-2">
			  <span class="flaticon-award"></span>
		</div>
		<div class="media-body">
		  <h3 class="heading">Calitate Superioară</h3>
		  <span>Materiale de înaltă calitate, prelucrate cu atenție</span>
		</div>
	  </div>      
	</div>
	<div class="col-md-3 text-center d-flex align-self-stretch ftco-animate">
	  <div class="media block-6 services mb-md-0 mb-4">
		<div class="icon bg-color-4 d-flex justify-content-center align-items-center mb-2">
			  <span class="flaticon-customer-service"></span>
		</div>
		<div class="media-body">
		  <h3 class="heading">Suport clienți</h3>
		  <span>Suport clienți 24/7</span>
		</div>
	  </div>      
	</div>
  </div>
	  </div>
  </section>

  <section class="ftco-section ftco-category ftco-no-pt">
	  <div class="container">
		  <div class="row">
			  <div class="col-md-8">
				  <div class="row">
					  <div class="col-md-6 order-md-last align-items-stretch d-flex">
						  <div class="category-wrap-2 ftco-animate img align-self-stretch d-flex">
							  <div class="text text-center">
								  <h2>Prelucrare lemn</h2>
								  <p>Pentru orice proiect, pentru orice buget</p>
								  <p><a href="{{url('/shop')}}" class="btn btn-primary">Cumpără</a></p>
							  </div>
						  </div>
					  </div>
					  <div class="col-md-6">
						  <div class="category-wrap ftco-animate img mb-4 d-flex align-items-end" style="background-image: url(frontend/images/constructii.jpg);">
							  <div class="text px-3 py-1">
								  <h2 class="mb-0"><a href="#">Lemn pentru construcții</a></h2>
							  </div>
						  </div>
						  <div class="category-wrap ftco-animate img d-flex align-items-end" style="background-image: url(frontend/images/foc.jpg);">
							  <div class="text px-3 py-1">
								  <h2 class="mb-0"><a href="#">Lemn de foc</a></h2>
							  </div>
						  </div>
					  </div>
				  </div>
			  </div>

			  <div class="col-md-4">
				  <div class="category-wrap ftco-animate img mb-4 d-flex align-items-end" style="background-image: url(frontend/images/tamplarie.jpg);">
					  <div class="text px-3 py-1">
						  <h2 class="mb-0"><a href="#">Atelier de tâmplărie</a></h2>
					  </div>		
				  </div>
				  {{-- <div class="category-wrap ftco-animate img d-flex align-items-end" style="background-image: url(frontend/images/category-4.jpg);">
					  <div class="text px-3 py-1">
						  <h2 class="mb-0"><a href="#">Dried</a></h2>
					  </div> --}}
				  </div>
			  </div>
		  </div>
	  </div>
  </section>

<section class="ftco-section">
  <div class="container">
		  <div class="row justify-content-center mb-3 pb-3">
	<div class="col-md-12 heading-section text-center ftco-animate">
		<span class="subheading">Prezentare Produse</span>
	  <h2 class="mb-4">Produsele noastre</h2>
	</div>
  </div>   		
  </div>
  <div class="container">
		<div class="row">

			@foreach ($products as $product)
			<div class="col-md-6 col-lg-3 ftco-animate">
				<div class="product">
					<a href="#" class="img-prod"><img class="img-fluid" src="/storage/product_images/{{$product->product_image}}" alt="Colorlib Template">
						<div class="overlay"></div>
					</a>
					<div class="text py-3 pb-4 px-3 text-center">
						<h3><a href="#">{{$product->product_name}}</a></h3>
						<div class="d-flex">
							<div class="pricing">
								<p class="price"><span>{{$product->product_price}} RON</span></p>
							</div>
						</div>
						<div class="bottom-area d-flex px-3">
							<div class="m-auto d-flex">
								<a href="#" class="add-to-cart d-flex justify-content-center align-items-center text-center">
									<span><i class="ion-ios-menu"></i></span>
								</a>
								<a href="{{url('/addtocart/'.$product->id)}}" class="buy-now d-flex justify-content-center align-items-center mx-1">
									<span><i class="ion-ios-cart"></i></span>
								</a>
								<a href="#" class="heart d-flex justify-content-center align-items-center ">
									<span><i class="ion-ios-heart"></i></span>
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>
			@endforeach
		  
	  </div>
  </div>
</section>
  


<section class="ftco-section testimony-section">
<div class="container">
  <div class="row justify-content-center mb-5 pb-3">
	<div class="col-md-7 heading-section ftco-animate text-center">
		<span class="subheading">Testimoniale</span>
	  <h2 class="mb-4">Mesaje de la clienți mulțumiți</h2>
	</div>
  </div>
  <div class="row ftco-animate">
	<div class="col-md-12">
	  <div class="carousel-testimony owl-carousel">
		<div class="item">
		  <div class="testimony-wrap p-4 pb-5">
			<div class="user-img mb-5" style="background-image: url(frontend/images/noprofile.jpg)">
			  <span class="quote d-flex align-items-center justify-content-center">
				<i class="icon-quote-left"></i>
			  </span>
			</div>
			<div class="text text-center">
			  <p class="mb-5 pl-4 line">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
			  <p class="name">Garreth Smith</p>
			  <span class="position">Marketing Manager</span>
			</div>
		  </div>
		</div>
		<div class="item">
		  <div class="testimony-wrap p-4 pb-5">
			<div class="user-img mb-5" style="background-image: url(frontend/images/noprofile.jpg)">
			  <span class="quote d-flex align-items-center justify-content-center">
				<i class="icon-quote-left"></i>
			  </span>
			</div>
			<div class="text text-center">
			  <p class="mb-5 pl-4 line">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
			  <p class="name">Garreth Smith</p>
			  <span class="position">Interface Designer</span>
			</div>
		  </div>
		</div>
		<div class="item">
		  <div class="testimony-wrap p-4 pb-5">
			<div class="user-img mb-5" style="background-image: url(frontend/images/noprofile.jpg)">
			  <span class="quote d-flex align-items-center justify-content-center">
				<i class="icon-quote-left"></i>
			  </span>
			</div>
			<div class="text text-center">
			  <p class="mb-5 pl-4 line">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
			  <p class="name">Garreth Smith</p>
			  <span class="position">UI Designer</span>
			</div>
		  </div>
		</div>
		<div class="item">
		  <div class="testimony-wrap p-4 pb-5">
			<div class="user-img mb-5" style="background-image: url(frontend/images/noprofile.jpg)">
			  <span class="quote d-flex align-items-center justify-content-center">
				<i class="icon-quote-left"></i>
			  </span>
			</div>
			<div class="text text-center">
			  <p class="mb-5 pl-4 line">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
			  <p class="name">Garreth Smith</p>
			  <span class="position">Web Developer</span>
			</div>
		  </div>
		</div>
		<div class="item">
		  <div class="testimony-wrap p-4 pb-5">
			<div class="user-img mb-5" style="background-image: url(frontend/images/noprofile.jpg)">
			  <span class="quote d-flex align-items-center justify-content-center">
				<i class="icon-quote-left"></i>
			  </span>
			</div>
			<div class="text text-center">
			  <p class="mb-5 pl-4 line">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
			  <p class="name">Garreth Smith</p>
			  <span class="position">System Analyst</span>
			</div>
		  </div>
		</div>
	  </div>
	</div>
  </div>
</div>
</section>

<hr>

  <section class="ftco-section ftco-partner">
  <div class="container">
	  <div class="row">
		  <div class="col-sm ftco-animate">
			  <a href="#" class="partner"><img src="frontend/images/partner-1.png" class="img-fluid" alt="Colorlib Template"></a>
		  </div>
		  <div class="col-sm ftco-animate">
			  <a href="#" class="partner"><img src="frontend/images/partner-2.png" class="img-fluid" alt="Colorlib Template"></a>
		  </div>
		  <div class="col-sm ftco-animate">
			  <a href="#" class="partner"><img src="frontend/images/partner-3.png" class="img-fluid" alt="Colorlib Template"></a>
		  </div>
		  <div class="col-sm ftco-animate">
			  <a href="#" class="partner"><img src="frontend/images/partner-4.png" class="img-fluid" alt="Colorlib Template"></a>
		  </div>
		  <div class="col-sm ftco-animate">
			  <a href="#" class="partner"><img src="frontend/images/partner-5.png" class="img-fluid" alt="Colorlib Template"></a>
		  </div>
	  </div>
  </div>
</section>

<!-- end content -->


@endsection

		