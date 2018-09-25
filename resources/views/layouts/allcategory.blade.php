@include('inc.header')
@include('inc.navbar')

<body>

<!-- breadcrumbs -->
    <div class="breadcrumb_dress">
        <div class="container">
                <ul>
                        <li><a href="/"><span class="glyphicon glyphicon-home" aria-hidden="true"></span> Home</a> 
                        <i> / </i></li>
                        <li><a href = "/bookCategory"></span>Categories</a>
                        </li>
                        
            
            
                </ul>
        </div>
    </div>
<!-- //breadcrumbs --> 

<!-- mobiles -->
<div class="mobiles">
    
    <div class="container">
        <div class="w3ls_mobiles_grids">

            @include('inc.list')
            
            @yield('content')
       
            <div class="clearfix"> 

            </div>
        </div>
    </div>
</div>  


        
</body>
