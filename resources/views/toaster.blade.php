<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.1.4/toastr.min.js" integrity="sha512-lbwH47l/tPXJYG9AcFNoJaTMhGvYWhVM9YI43CT+uteTRRaiLCui8snIgyAN8XWgNjNhCqlAUdzZptso6OCoFQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<link rel="stylesheet" type="text/css" href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.css">

<script>
  @if(Session::has('success'))
  toastr.options = {
    "closeButton": true,
    "progressBar": true,
    "timeOut": "2000",
  }
  toastr.success("{{ Session::get('success') }}");
  @endif



  @if(Session::has('info'))
  toastr.options = {
    "closeButton": true,
    "progressBar": true,
    "timeOut": "2000",
  }
  toastr.info("{{ Session::get('info') }}");
  @endif


  @if(Session::has('warning'))
  toastr.options = {
    "closeButton": true,
    "progressBar": true,
    "timeOut": "2000",
  }
  toastr.warning("{{ Session::get('warning') }}");
  @endif



  @if(Session::has('error'))
  toastr.options = {
    "closeButton": true,
    "progressBar": true,
    "timeOut": "2000",
  }
  toastr.error("{{ session('error') }}");
  @endif
</script>