
<!--CATEGORIES LIST-->	
    <div class="col-md-4 w3ls_mobiles_grid_left">
        <div class="w3ls_mobiles_grid_left_grid">
        <h3>Categories</h3>
            <div class="w3ls_mobiles_grid_left_grid_sub">
                <ul class="panel_bottom">
                    
					@if(count($books) > 0)
                    @foreach($books as $book)
                    
                    <li><a href="/bookCategory">{{$book->genre_name}}</a></li>

                    @endforeach
					@else
					<p>no books found</p>
					@endif


                <!--other list
                    <li><a href="/bookCategory">Thriller</a></li>
                    <li><a href="/bookCategory">Romance</a></li>
                    <li><a href="/bookCategory">Mystery</a></li>
                    <li><a href="/bookCategory">Poetry</a></li>
                    <li><a href="/bookCategory">Non Fiction</a></li>
                    <li><a href="/bookCategory">Horror</a></li>
                    <li><a href="/bookCategory">Religious</a></li>
                    <li><a href="bookCategory">Comic</a></li>
                    <li><a href="bookCategory">Lifestyle</a></li>
                    <li><a href="bookCategory">General</a></li>
                    <li><a href="bookCategory">Paranormal</a></li>
                    <li><a href="bookCategory">Magazines</a></li>
                    <li><a href="bookCategory">IT & Technology</a></li>
                    <li><a href="bookCategory">Random</a></li>
                -->
                </ul>
            </div>
        </div>
    </div>
<!--END CATEGORY-->