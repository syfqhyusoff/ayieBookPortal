
<!--CATEGORIES LIST-->	

<?php use App\genre;
    $genres = genre::all();?>

    <div class="col-md-4 w3ls_mobiles_grid_left">
        <div class="w3ls_mobiles_grid_left_grid">
        <h3>Categories</h3>
            <div class="w3ls_mobiles_grid_left_grid_sub">
                <ul class="panel_bottom">
                    @foreach($genres as $genre)
                    <li><a href = "/{{$genre->genre_id}}" >{{$genre->genre_name}}</a></li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
<!--END CATEGORY-->