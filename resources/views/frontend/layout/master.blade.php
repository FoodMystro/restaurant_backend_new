<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="FoodMystro - Online ordering platform">
    <meta name="author" content="FoodMystro">
    <title>Papa Nadox Kitchen | Powered by FoodMystro</title>

    <!-- Favicons-->
    <link rel="shortcut icon" href="{{asset('assets/img/favicon.svg')}}" type="image/x-icon">
    <link rel="apple-touch-icon" type="image/x-icon" href="{{asset('')}}assets/img/apple-touch-icon-57x57-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="72x72" href="{{asset('assets/img/apple-touch-icon-72x72-precomposed.png')}}">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="114x114" href="{{asset('')}}assets/img/apple-touch-icon-114x114-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="144x144" href="{{asset('')}}assets/img/apple-touch-icon-144x144-precomposed.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/brands.min.css">
    
    
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <!-- GOOGLE WEB FONT -->
    
    <link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <!-- BASE CSS -->
    <link href="{{asset('')}}assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{asset('')}}assets/css/style.css" rel="stylesheet">
  
    {{-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"> --}}
    {{-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"> --}}
    
    <!-- SPECIFIC CSS -->
    <link href="{{asset('')}}assets/css/home.css" rel="stylesheet">
    <link href="{{asset('')}}assets/css/order-sign_up.css" rel="stylesheet">


  
    <link href="{{asset('')}}assets/css/detail-page.css" rel="stylesheet">

    <link href="{{asset('')}}assets/css/blog.css" rel="stylesheet">

    <link href="{{asset('')}}assets/css/detail-page.css" rel="stylesheet">
    

    <!-- YOUR CUSTOM CSS -->
    <link href="{{asset('')}}assets/css/custom.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>  

</head>

<body>

@include('frontend.layout.partials.header') 

@yield('content')

@include('frontend.layout.partials.footer')


<!-- COMMON SCRIPTS -->
    <script src="{{asset('')}}assets/js/common_scripts.min.js"></script>
    <script src="{{asset('')}}assets/js/common_func.js"></script>
    <script src="{{asset('')}}assets/assets/validate.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <!-- SPECIFIC SCRIPTS -->
    <script src="{{asset('')}}assets/js/sticky_sidebar.min.js"></script>
    <script src="{{asset('')}}assets/js/sticky-kit.min.js"></script>
    <script src="{{asset('')}}assets/js/specific_detail.js"></script>
    <script>
    	$('#sidebar_fixed').theiaStickySidebar({
		    minWidth: 991,
		    updateSidebarHeight: false,
		    additionalMarginTop: 30
		});
    </script>
</body>
</html>