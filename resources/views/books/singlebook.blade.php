@extends('layouts.app')

@section('content')	

	<!-- breadcrumbs -->
	<div class="breadcrumb_dress">
		<div class="container">
			<ul>
				<li><a href="/"><span class="glyphicon glyphicon-home" aria-hidden="true"></span> Home</a> 
				<i> / </i></li>
				<li><a href = "/bookCategory"></span> Business</a>
				<i> / </i></li>
				<li>{{$book->book_title}}</a>


			</ul>
		</div>
	</div>
	<!-- //breadcrumbs -->  
	<!-- single -->

	

	<div class="single">
		<div class="container">
			<div class="col-md-4 single-left">
				<div class="flexslider">
					<div>
						<img src="/{{$book->image_url}}" alt="Image tak keluar" class="img-responsive" data-imagezoom="true"/> 
					</div>
					
				</div>
				
			</div>
			<div class="col-md-8 single-right">
				<h3>{{$book->book_title}}</h3>

				<!--INSERT RATING HERE-->
				<!--update the id whenver rating_id is obtainable-->
				{!! Form::open(['id'=>'rating-form','action'=>['ratingCont@update',$book->book_id],'method'=>'POST']) !!} 
				<h2>Rating</h2>
				<div class="rating1">
						{{Form::label('title','Rating')}}
						
				
				<span class="starRating">
					{{Form::hidden('_method','PUT')}}
					<input id="rating5" type="radio" name="rating" value="5" onchange="this.form.submit();">
					<label for="rating5" >5</label>
					<input id="rating4" type="radio" name="rating" value="4"  onchange="this.form.submit();">
					<label for="rating4" >4</label>
					<input id="rating3" type="radio" name="rating" value="3" onchange="this.form.submit();">
					<label for="rating3" >3</label>
					<input id="rating2" type="radio" name="rating" value="2" onchange="this.form.submit();">
					<label for="rating2"> 2</label>
					<input id="rating1" type="radio" name="rating" value="1" onchange="this.form.submit();">
					<label for="rating1" >1</label>
					
				</span>
				</div>	
				{!! Form::close() !!}
			


				<!--END RATING-->

				<div class="description">
					<h5><i>Description</i></h5>
					<p>ISBN :		{{$book->book_isbn}}</p>
					<p>Pages:		{{$book->book_page}}</p>
					<p>Year :		{{$book->book_year}}</p>
					<p>Location :	{{$book->book_location}}</p>
					<p>Material :	{{$book->book_material}}</p>
					<p>Status	:	{{$book->book_status}}</p>
					<p>Unit		:	{{$book->book_unit}}</p>
					<p>Publisher:	</p>
				</div>
				
			</div>
			<div class="clearfix"> </div>
		</div>
	</div> 

	<!--TEE INSERT REVIEW-->
	<div class="additional_info">
		<div class="container">
			<div class="sap_tabs">	
				<div id="horizontalTab1" style="display: block; width: 100%; margin: 0px;">
					<ul>
						<li class="resp-tab-item" aria-controls="tab_item-1" role="tab"><span>Reviews</span></li>
					</ul>		
						
					<div class="tab-2 resp-tab-content additional_info_grid" aria-labelledby="tab_item-1">
						<h4>Reviews</h4>
						<div class="additional_info_sub_grids">
							<div class="col-xs-2 additional_info_sub_grid_left">
								<img src="images/t1.png" alt=" " class="img-responsive" />
							</div>
							<div class="col-xs-10 additional_info_sub_grid_right">
								<div class="additional_info_sub_grid_rightl">
									<a href="single.html">Laura</a>
									<h5>Oct 06, 2016.</h5>
									<p>Quis autem vel eum iure reprehenderit qui in ea voluptate 
										velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat 
										quo voluptas nulla pariatur.</p>
								</div>
								<div class="additional_info_sub_grid_rightr">
									<div class="rating">
										<div class="rating-left">
											<img src="images/star-.png" alt=" " class="img-responsive">
										</div>
										<div class="rating-left">
											<img src="images/star-.png" alt=" " class="img-responsive">
										</div>
										<div class="rating-left">
											<img src="images/star-.png" alt=" " class="img-responsive">
										</div>
										<div class="rating-left">
											<img src="images/star.png" alt=" " class="img-responsive">
										</div>
										<div class="rating-left">
											<img src="images/star.png" alt=" " class="img-responsive">
										</div>
										<div class="clearfix"> </div>
									</div>
								</div>
								<div class="clearfix"> </div>
							</div>
							<div class="clearfix"> </div>
						</div>
						<div class="additional_info_sub_grids">
							<div class="col-xs-2 additional_info_sub_grid_left">
								<img src="images/t2.png" alt=" " class="img-responsive" />
							</div>
							<div class="col-xs-10 additional_info_sub_grid_right">
								<div class="additional_info_sub_grid_rightl">
									<a href="single.html">Michael</a>
									<h5>Oct 04, 2016.</h5>
									<p>Quis autem vel eum iure reprehenderit qui in ea voluptate 
										velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat 
										quo voluptas nulla pariatur.</p>
								</div>
								<div class="additional_info_sub_grid_rightr">
									<div class="rating">
										<div class="rating-left">
											<img src="images/star-.png" alt=" " class="img-responsive">
										</div>
										<div class="rating-left">
											<img src="images/star-.png" alt=" " class="img-responsive">
										</div>
										<div class="rating-left">
											<img src="images/star.png" alt=" " class="img-responsive">
										</div>
										<div class="rating-left">
											<img src="images/star.png" alt=" " class="img-responsive">
										</div>
										<div class="rating-left">
											<img src="images/star.png" alt=" " class="img-responsive">
										</div>
										<div class="clearfix"> </div>
									</div>
								</div>
								<div class="clearfix"> </div>
							</div>
							<div class="clearfix"> </div>
						</div>
						<div class="review_grids">
							<h5>Add A Review</h5>
							<form action="#" method="post">
								<input type="text" name="Name" value="Name" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Name';}" required="">
								<input type="email" name="Email" placeholder="Email" required="">
								<input type="text" name="Telephone" value="Telephone" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Telephone';}" required="">
								<textarea name="Review" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Add Your Review';}" required="">Add Your Review</textarea>
								<input type="submit" value="Submit" >
							</form>
						</div>
					</div> 			        					            	      
				</div>	
			</div>
			
		</div>
	</div>
	<!--REVIEW END-->
	

	<!-- //single -->  
	

@endsection