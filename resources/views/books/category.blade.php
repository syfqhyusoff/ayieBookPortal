@extends('layouts.allcategory')

@section('content')	
<?php use App\author; ?>

			<!--ITEMS-->
				<div class="col-md-8 w3ls_mobiles_grid_right">
					
					<!--TIGA YANG FIRST-->
					<div class="w3ls_mobiles_grid_right_grid3">
<<<<<<< HEAD
						
						@php ($book2 = 0)
						@if(count($books) > 0)
						@foreach($books as $book)
						{{$book2}}
						@if($book->book_id !== $book2)
=======

						@if(count($books) > 0)
						@foreach($books as $book)
>>>>>>> 894d02a138ffed1d546fe1afeddbe1543f8a1e75

						
							<div class="col-md-4 agileinfo_new_products_grid agileinfo_new_products_grid_mobiles">
								<div class="agile_ecommerce_tab_left mobiles_grid">
<<<<<<< HEAD
								<div class="hs-wrapper hs-wrapper2">
										
							
									<img src="{{$book->image_url}}" alt="No Image" class="img-responsive"/>
									
									
									
								</div>


								<h5><a href="/bookCategory/{{$book->book_id}}">{{$book->book_title}}</h5>
								<div class="simpleCart_shelfItem">
										<div class="rating1">
												<span class="starRating">
													<input id="rating5" type="radio" name="rating" value="5">
													<label for="rating5">5</label>
													<input id="rating4" type="radio" name="rating" value="4">
													<label for="rating4">4</label>
													<input id="rating3" type="radio" name="rating" value="3">
													<label for="rating3">3</label>
													<input id="rating2" type="radio" name="rating" value="2">
												<label for="rating2">2</label>
													<input id="rating1" type="radio" name="rating" value="1">
													<label for="rating1">1</label>
												</span>
												
											</div>
									<p>{{$book->author_fname}}</p>
									
									<a class="button button2" href="/bookCategory/{{$book->book_id}}" role="button">View More</a>
									
									@else
									<p>{{$book->author_fname}}</p>
									@endif
									
								</div> 
								</div>
							</div>
							
						@php($book2 = $book->book_id) 

=======
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
>>>>>>> 894d02a138ffed1d546fe1afeddbe1543f8a1e75
						@endforeach
						@else
						<p>no books found</p>
						@endif

<<<<<<< HEAD
						
						<!--modal unused
							<div class="modal video-modal fade" id="myModal9" tabindex="-1" role="dialog" aria-labelledby="myModal9">
									<div class="modal-dialog" role="document">
										<div class="modal-content">
											<div class="modal-header">
												<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>						
											</div>
											<section>
												
												<div class="modal-body">
													<div class="col-md-5 modal_body_left">
													<img src="{$book->image_url}}" alt="No Image" class="img-responsive"/>													</div>
													<div class="col-md-7 modal_body_right">
														<h4>{$book->book_title}}</h4>
														<p>Ut enim ad minim veniam, quis nostrud 
															exercitation ullamco laboris nisi ut aliquip ex ea 
															commodo consequat.Duis aute irure dolor in 
															reprehenderit in voluptate velit esse cillum dolore 
															eu fugiat nulla pariatur. Excepteur sint occaecat 
															cupidatat non proident, sunt in culpa qui officia 
															deserunt mollit anim id est laborum.</p>
														<div class="rating">
															<div class="rating-left">
																<img src="images/star-.png" alt=" " class="img-responsive" />
															</div>
															<div class="rating-left">
																<img src="images/star-.png" alt=" " class="img-responsive" />
															</div>
															<div class="rating-left">
																<img src="images/star-.png" alt=" " class="img-responsive" />
															</div>
															<div class="rating-left">
																<img src="images/star.png" alt=" " class="img-responsive" />
															</div>
															<div class="rating-left">
																<img src="images/star.png" alt=" " class="img-responsive" />
															</div>
															<div class="clearfix"> </div>
														</div>
														<div class="modal_body_right_cart simpleCart_shelfItem">
															<p><span>$250</span> <i class="item_price">$245</i></p>
															<form action="#" method="post">
																<input type="hidden" name="cmd" value="_cart" />
																<input type="hidden" name="add" value="1" /> 
																<input type="hidden" name="w3ls_item" value="Smart Phone" /> 
																<input type="hidden" name="amount" value="245.00"/>   
																<button type="submit" class="w3ls-cart">Add to cart</button>
															</form>
														</div> 	
														<h5>Color</h5>
														<div class="color-quality">
															<ul>
																<li><a href="#"><span></span></a></li>
																<li><a href="#" class="brown"><span></span></a></li>
																<li><a href="#" class="purple"><span></span></a></li>
																<li><a href="#" class="gray"><span></span></a></li>
															</ul>
														</div>
													</div>
													<div class="clearfix"> </div>
												</div>
						
										</section>
									</div>
								</div>
							</div>
=======

								
						
	
						
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
>>>>>>> 894d02a138ffed1d546fe1afeddbe1543f8a1e75
						-->
						

						<div class="clearfix"> </div>
					</div>					
					
				</div>
			<!--END ITEMS-->

@endsection
