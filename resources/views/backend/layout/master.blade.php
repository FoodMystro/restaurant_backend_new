<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Online Restaurant Ordering Platform">
    <meta name="author" content="Powered By FoodMystro">
    <title>Business Name - Restaurant Backend</title>
    <!-- Favicons-->
    <link href="https://primestudyhub.blogspot.com/bootstrap-4-dropdowns" target="_blank">
    <link rel="shortcut icon" href="{{asset('')}}admin-assets/img/favicon.svg" type="image/x-icon">
    <link rel="apple-touch-icon" type="image/x-icon" href="{{asset('')}}admin-assets/img/apple-touch-icon-57x57-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="72x72" href="{{asset('')}}assets/img/apple-touch-icon-72x72-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="114x114" href="{{asset('')}}admin-assets/img/apple-touch-icon-114x114-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="144x144" href="{{asset('')}}admin-assets/img/apple-touch-icon-144x144-precomposed.png">
    <!-- Bootstrap core CSS-->
    <link href="{{asset('')}}admin-assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- Main styles -->
    <link href="{{asset('')}}admin-assets/css/admin.css" rel="stylesheet">
    <!-- Icon fonts-->
    <link href="{{asset('')}}admin-assets/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <!-- Plugin styles -->
    <link href="{{asset('')}}admin-assets/vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">
    <!-- Your custom styles -->
    <link href="{{asset('')}}admin-assets/css/custom.css" rel="stylesheet">
       <!-- Plugin styles -->
    <link href="{{asset('')}}admin-assets/vendor/dropzone.css" rel="stylesheet">
    <link href="{{asset('')}}admin-assets/css/date_picker.css" rel="stylesheet">
    <!-- WYSIWYG Editor -->
    <link rel="stylesheet" href="{{asset('')}}admin-assets/js/editor/summernote-bs4.css">
    <!-- invoice links -->
    <link href="{{asset('')}}admin-assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- Main styles -->
    <link href="{{asset('')}}admin-assets/css/admin.css" rel="stylesheet">
    <!-- Icon fonts-->
    <link href="{{asset('')}}admin-assets/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <!-- Plugin styles -->
    <link href="{{asset('')}}admin-assets/vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">
    <!-- Your custom styles -->
    <link href="{{asset('')}}admin-assets/css/custom.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.1.0/css/toastr.css" rel="stylesheet" />

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
</head>

<body class="fixed-nav sticky-footer" id="page-top">
   
    @include('backend.layout.partials.sidebar')
    @yield('content')
    @include('backend.layout.partials.footer')

    <!-- Bootstrap core JavaScript-->
    <script src="{{asset('')}}admin-assets/vendor/jquery/jquery.min.js"></script>
    <script src="{{asset('')}}admin-assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- Core plugin JavaScript-->
    <script src="{{asset('')}}admin-assets/vendor/jquery-easing/jquery.easing.min.js"></script>
    <!-- Page level plugin JavaScript-->
    <script src="{{asset('')}}admin-assets/vendor/chart.js/Chart.js"></script>
    <script src="{{asset('')}}admin-assets/vendor/datatables/jquery.dataTables.js"></script>
    <script src="{{asset('')}}admin-assets/vendor/datatables/dataTables.bootstrap4.js"></script>
    <script src="{{asset('')}}admin-assets/vendor/jquery.magnific-popup.min.js"></script>
    <!-- Custom scripts for all pages-->
    <script src="{{asset('')}}admin-assets/js/admin.js"></script>
    <!-- Custom scripts for this page-->
    <script src="{{asset('')}}admin-assets/js/admin-charts.js"></script>
    <!-- Custom scripts for all pages-->
    <script src="{{asset('')}}admin-assets/js/admin.js"></script>
    <!-- Custom scripts for this page-->
    <script src="{{asset('')}}admin-assets/vendor/bootstrap-datepicker.js"></script>
        <!-- Page level plugin JavaScript-->
    <script src="{{asset('')}}admin-assets/vendor/chart.js/Chart.min.js"></script>
        <!-- Bootstrap core JavaScript-->
    <script src="{{asset('')}}admin-assets/js/admin.js"></script>
    <script src="{{asset('')}}admin-assets/js/admin-datatables.js"></script>
    <script src="{{asset('')}}admin-assets/https://cdn.ckeditor.com/4.17.1/standard/ckeditor.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.1.0/js/toastr.js"></script>

   <script https://use.fontawesome.com/releases/v5.11.0/js/all.js></script>
   <script https://use.fontawesome.com/releases/v5.0.1/js/v4-shims.js></script>

    

    
    <script>
    $('input.date-pick').datepicker();
    </script>

    <!-- WYSIWYG Editor -->
    <script src="{{asset('')}}admin-assets/js/editor/summernote-bs4.min.js"></script>
    <script src="{{asset('')}}admin-assets/vendor/dropzone.min.js"></script>

    <script type="text/javascript">
  $(document).ready(function() {
    $('#code_preview0').summernote({height: 300});
    });

    $(document).ready(function() {
    $('#code_preview1').summernote({height: 300});
    });

    $(document).ready(function() {
    $('#code_preview2').summernote({height: 300});
    });

    $(document).ready(function() {
    $('#code_preview3').summernote({height: 300});
    });
</script>
    <!-- <script>
        $('.editor').summernote({
            fontSizes: ['10', '14'],
            toolbar: [
                // [groupName, [list of button]]
                ['style', ['bold', 'italic', 'underline', 'clear']],
                ['font', ['strikethrough']],
                ['fontsize', ['fontsize']],
                ['para', ['ul', 'ol', 'paragraph']]
            ],
            placeholder: 'Write here ....',
            tabsize: 2,
            height: 200
        });
        </script> -->
        <script>
      $(document).ready(function() {

          $("input").each(function() {
            $(this).attr("autocomplete", "off");
          });
       
      });
    </script>
    @if(session()->has('success'))
    <script>
        toastr['success']('updated', 'Changes have been', 
            {
                closeButton: true,
                tapToDismiss: false,
            });
    </script>
@endif 

</body>

</html>