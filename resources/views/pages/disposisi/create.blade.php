@extends('layouts.app2')

@section('konten')
<div class="row">
	<!-- <div class="row"> -->

	<!-- </div> -->
</div>



@endsection
@section('js')
    <script src="{{asset('themes/app-assets/vendors/js/pickers/pickadate/picker.js')}}"></script>
    <script src="{{asset('themes/app-assets/vendors/js/pickers/pickadate/picker.date.js')}}"></script>
    <script src="{{asset('themes/app-assets/vendors/js/pickers/pickadate/picker.time.js')}}"></script>
    <script src="{{asset('themes/app-assets/vendors/js/pickers/pickadate/legacy.js')}}"></script>
    <script src="{{asset('themes/app-assets/vendors/js/pickers/flatpickr/flatpickr.min.js')}}"></script>

    <script src="{{asset('themes/app-assets/vendors/js/forms/wizard/bs-stepper.min.js')}}"></script>
    <script src="{{asset('themes/app-assets/vendors/js/forms/select/select2.full.min.js')}}"></script>
    <script src="{{asset('themes/app-assets/vendors/js/forms/validation/jquery.validate.min.js')}}"></script>
    <script src="{{asset('themes/app-assets/vendors/js/forms/select/select2.full.min.js')}}"></script>

    <!-- BEGIN: Page JS-->
    <script src="{{asset('themes/app-assets/js/scripts/forms/pickers/form-pickers.js')}}"></script>
    <script src="{{asset('themes/app-assets/js/scripts/forms/form-wizard.js')}}"></script>
    <script src="{{asset('themes/app-assets/js/scripts/forms/form-select2.js')}}"></script>
    <!-- END: Page JS-->
    <script type="text/javascript">
    	
    	$(document).ready(function() {
    		$('.js-example-basic-multiple').select2();
		});
    </script>
@endsection