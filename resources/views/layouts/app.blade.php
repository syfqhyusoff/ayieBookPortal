    @include('inc.header')
    @include('inc.navbar')

    <body>

	@include('inc.breadindex')

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
