@include('inc.header')
@include('inc.navbar')

<body>

@include('inc.breadSingle')

<!-- mobiles -->
<div class="mobiles">

<div class="container">
    <div class="w3ls_mobiles_grids">
        
        @yield('content')
   
        <div class="clearfix"> 

        </div>
    </div>
</div>
</div>  


    
</body>
