@extends('layouts.allcategory')

@section('content')	
<?php use App\author; ?>

			<!--ITEMS-->
				<div class="col-md-8 w3ls_mobiles_grid_right">
					
					<!--TIGA YANG FIRST-->
					<div class="w3ls_mobiles_grid_right_grid3">

						@if(count($books) > 0)
						@foreach($books as $book)

						
							<div class="col-md-4 agileinfo_new_products_grid agileinfo_new_products_grid_mobiles">
								<div class="agile_ecommerce_tab_left mobiles_grid">
									<div class="hs-wrapper hs-wrapper2">
										<img src="{{$book->image_url}}" alt="No Image" class="img-responsive"/>	
									</div>
									<h5><a href="/bookCategory/{{$book->book_id}}">{{$book->book_title}}</h5>
									<div class="simpleCart_shelfItem">
										<div class="rating1">
											@php($authors = Author::select('*')
												->leftjoin('book_contributor', 'book_contributor.author_id', '=', 'book_author.author_id')
												->where('book_id',$book->book_id)
												->get())
											<p>
											@foreach($authors as $author)
											{{$author->author_fname}} {{$author->author_lname}}
											@endforeach
											</p>
										</div>
										<a class="button button2" href="/bookCategory/{{$book->book_id}}" role="button">View More</a>
									</div> 
								</div>
							</div>
						@endforeach
						@else
						<p>no books found</p>
						@endif


								
						
	
						
								<!--BAKI DUA ITEM
						<div class="col-md-4 agileinfo_new_products_grid agileinfo_new_products_grid_mobiles">
							<div class="agile_ecommerce_tab_left mobiles_grid">
								<div class="hs-wrapper hs-wrapper2">
									<img src="images/p1.jpg" alt=" " class="img-responsive" />
									<img src="images/p2.jpg" alt=" " class="img-responsive" />
									<img src="images/p3.jpg" alt=" " class="img-responsive" />
									<img src="images/p4.jpg" alt=" " class="img-responsive" />
									<img src="images/p1.jpg" alt=" " class="img-responsive" /> 
									<div class="w3_hs_bottom w3_hs_bottom_sub1">
										<ul>
											<li>
												<a href="#" data-toggle="modal" data-target="#myModal4"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span></a>
											</li>
										</ul>
									</div>
								</div>
								<h5><a href="single.html">Book 2</a></h5>
								<div class="simpleCart_shelfItem">
									<p><span>Harga</span> <i class="item_price">Harga</i></p>
									<form action="#" method="post">
										<input type="hidden" name="cmd" value="_cart" />
										<input type="hidden" name="add" value="1" /> 
										<input type="hidden" name="w3ls_item" value="Audio-speaker" /> 
										<input type="hidden" name="amount" value="45.00"/>   
										<button type="submit" class="w3ls-cart">Rating</button>
									</form>
								</div> 
							</div>
						</div>
						<div class="col-md-4 agileinfo_new_products_grid agileinfo_new_products_grid_mobiles">
							<div class="agile_ecommerce_tab_left mobiles_grid">
								<div class="hs-wrapper hs-wrapper2">
									<img src="images/30.jpg" alt=" " class="img-responsive" />
									<img src="images/28.jpg" alt=" " class="img-responsive" />
									<img src="images/26.jpg" alt=" " class="img-responsive" />
									<img src="images/27.jpg" alt=" " class="img-responsive" />
									<img src="images/29.jpg" alt=" " class="img-responsive" /> 
									<div class="w3_hs_bottom w3_hs_bottom_sub1">
										<ul>
											<li>
												<a href="#" data-toggle="modal" data-target="#myModal9"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span></a>
											</li>
										</ul>
									</div>
								</div>
								<h5><a href="single.html">Red Mobile</a></h5>
								<div class="simpleCart_shelfItem">
									<p><span>$80</span> <i class="item_price">$65</i></p>
									<form action="#" method="post">
										<input type="hidden" name="cmd" value="_cart" />
										<input type="hidden" name="add" value="1" /> 
										<input type="hidden" name="w3ls_item" value="Red Mobile" /> 
										<input type="hidden" name="amount" value="65.00"/>   
										<button type="submit" class="w3ls-cart">Add to cart</button>
									</form>
								</div> 
							</div>
						</div>
						-->
						

						<div class="clearfix"> </div>
					</div>					
					
				</div>
			<!--END ITEMS-->

@endsection
