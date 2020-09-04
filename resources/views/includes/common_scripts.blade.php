<!-- Jquery CDN -->
<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

{{--<!-- notify alert -->--}}
{{--<script src="{{ \Illuminate\Support\Facades\URL::asset('myAssets/js/notify.min.js')}}"></script>--}}

{{--<!-- sweet alert -->--}}
{{--<script src="{{  \Illuminate\Support\Facades\URL::asset('myAssets/plugins/sweet-alert2/sweetalert2.min.js')}}"></script>--}}

<!-- select2 -->
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/js/select2.min.js"></script>

{{--<!-- Bootsrap Touch spins -->--}}
{{--<script src="{{ \Illuminate\Support\Facades\URL::asset('myAssets/js/jquery.bootstrap-touchspin.js')}}"></script>--}}

{{--<!-- number format -->--}}
{{--<script src="{{ \Illuminate\Support\Facades\URL::asset('myAssets/js/jquery.number.js')}}"></script>--}}

<!-- datepicker -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>


<!-- Counter up -->
<script src="http://cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.3/waypoints.min.js"></script>
<script src="{{ \Illuminate\Support\Facades\URL::asset('plugins/counterUp/jquery.counterup.min.js')}}"></script>

<!-- Owl carousel -->
{{--<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous"></script>--}}
<script src="{{ \Illuminate\Support\Facades\URL::asset('plugins/OwlCarousel/dist/owl.carousel.min.js')}}"></script>

{{--<!-- scroll magic -->--}}
{{--<script src="https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.7/plugins/jquery.ScrollMagic.min.js" integrity="sha512-f031btWm661Twvo3JQ18X5z8epjTu5K4eNcOOYNJs3AKU0wOTGnY1mjXUmfsTJ96lYggbyIg9vdJ7nbjdddtvQ==" crossorigin="anonymous"></script>--}}

{{--<!-- debug indicators : scroll magic -->--}}
{{--<script src="https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.7/plugins/debug.addIndicators.min.js" integrity="sha512-Ey+nIg+Ue8gUAaCNjR1KHR8nwDjWn9QXoQbynR/X+V66s6u1oqynnuRQ8zSgg5f5gBNb2Bzsu1pItCi3sPkbfA==" crossorigin="anonymous"></script>--}}

{{--<!-- G-sap -->--}}
{{--<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.5.1/gsap.min.js" integrity="sha512-IQLehpLoVS4fNzl7IfH8Iowfm5+RiMGtHykgZJl9AWMgqx0AmJ6cRWcB+GaGVtIsnC4voMfm8f2vwtY+6oPjpQ==" crossorigin="anonymous"></script>--}}

{{--<!-- Motion path -->--}}
{{--<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.5.1/MotionPathPlugin.min.js" integrity="sha512-2vgSeT4mD0azBGIp91Fnho9fbT8ZG8zu5c+mK//TGxj4YNX2mRAwEZHtZsMRwA7ObqH6Vl7mMOdvkzNVTuhUcA==" crossorigin="anonymous"></script>--}}
<script>
    $(document).ready(function () {
//
//        $.ajaxSetup({
//            headers: {
//                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
//            }
//        });

        {{--$(':input[type="number"]').addClass('gtZero'); // number input make no negative values or text--}}

        {{--$('.select2').select2();--}}

        {{--$(".touchSpin").TouchSpin({--}}
            {{--min: 0,--}}
            {{--max: 100,--}}
            {{--step: 1,--}}
            {{--decimals: 0,--}}
            {{--initval: 0,--}}
            {{--buttondown_class: "btn btn-info",--}}
            {{--buttonup_class: "btn btn-info"--}}
        {{--});--}}


        {{--$('.gtZero').not('allowNegative').on('input',function () {--}}
            {{--this.value = this.value < 0 ? 0 : this.value;--}}
        {{--});--}}

        {{--$('.autoClosePicker').on('change',function () {--}}
            {{--if($(this).closest('.endDate').val() == ''){--}}
                {{--$(this).closest('.endDate').val($(this).val()).trigger('change');--}}
            {{--}--}}
            {{--if($(this).closest('.startDate').val() == ''){--}}
                {{--$(this).closest('.startDate').val($(this).val()).trigger('change');--}}
            {{--}--}}
        {{--});--}}

        {{--@if(\Illuminate\Support\Facades\Session::has('errorMessage'))--}}
                {{--showError('{{\Illuminate\Support\Facades\Session::get('errorMessage')}}');--}}
        {{--@endif--}}

        {{--$('.popOver').popover({--}}
            {{--trigger: 'focus',--}}
            {{--html:true--}}
        {{--});--}}
        {{--initializeDate();--}}

        $('#mobileHamburger').on('click',function (event) {
            $('.nav-links-mobile').toggleClass('open');

            $('.nav-links-mobile li').each(function () {
                $(this).toggleClass('fade');
            });

            setTimeout(function () {
                $('#mobileHamburger').toggleClass('open');
            },500);
        })
    });


    {{--function clearAll() {--}}
        {{--$('input').not(':checkbox').not('.noClear').val('');--}}
        {{--$('textarea').not('.noClear').val('');--}}
        {{--$(":checkbox").not('.noClear').attr('checked', false).trigger('change');--}}
        {{--$(":radio").not('.noClear').attr('checked', false).trigger('change');--}}
        {{--$('select').not('.noClear').val('').trigger('change');--}}
    {{--}--}}

    {{--function initializeDate() {--}}
        {{--jQuery('.autoClosePicker').datepicker({--}}
            {{--autoclose: true,--}}
            {{--todayHighlight: true--}}
        {{--});--}}
    {{--}--}}

    {{--function clearAlerts() {--}}
        {{--$('.notifyjs-corner').html('');--}}
        {{--$('.alert').hide().html("");--}}
    {{--}--}}

    {{--function showSuccess(value) {--}}
        {{--showNotify(value,'success');--}}
    {{--}--}}

    {{--function showError(value) {--}}
        {{--showNotify(value,'error');--}}
    {{--}--}}

    {{--function showNotify(value,className,delay = 6000,duration = 300,gap = 2,position = 'top right') {--}}
        {{--$.notify(value,--}}
            {{--{--}}
                {{--className: className,--}}
                {{--autoHideDelay: delay,--}}
                {{--hideDuration: duration,--}}
                {{--gap: gap,--}}
                {{--position: position--}}
            {{--});--}}
    {{--}--}}

    {{--function showControllerErrors(data) {--}}
        {{--if (data.errors != null) {--}}
            {{--$.each(data.errors, function (key, value) {--}}
                {{--showError(value);--}}
            {{--});--}}
        {{--}--}}
    {{--}--}}

    {{--function showRequestErrors(data) {--}}
        {{--$.each(data.responseJSON.errors, function (parentKey, parentValue) {--}}
            {{--$.each(parentValue, function (key, value) {--}}
                {{--showError(value);--}}
            {{--});--}}
        {{--});--}}
    {{--}--}}

    {{--function numberFormat(number,decimal = 2) {--}}
        {{--return $.number(number,decimal);--}}
    {{--}--}}

    {{--function submitForm(form,route,completed = true) {--}}
        {{--event.preventDefault();--}}

        {{--//initialize alert and variables--}}
        {{--clearAlerts();--}}
        {{--//initialize alert and variables end--}}

        {{--//validate user input--}}

        {{--//validation end--}}

        {{--if (completed) {--}}

            {{--$.ajax({--}}
                {{--url: ''+route+'',--}}
                {{--type: 'POST',--}}
                {{--data: $(form).serialize(),--}}
                {{--success: function (data) {--}}
                   {{--if(data.errors != null){--}}
                       {{--showControllerErrors(data.errors);--}}
                    {{--}--}}
                    {{--if (data.success != null) {--}}
                        {{--showSuccess(data.success);--}}
                        {{--clearAll();--}}
                    {{--}--}}
                {{--},--}}
                {{--error: function (data) {--}}
                    {{--showRequestErrors(data);--}}
                {{--}--}}
            {{--});--}}
        {{--}--}}
        {{--else {--}}
            {{--showError('Please provide all required fields.')--}}
        {{--}--}}
    {{--}--}}

    {{--$(document).on("wheel", "input[type=number]", function (e) {--}}
        {{--$(this).blur();--}}
    {{--});--}}

    // gtZero allowNegative touchSpin select2 autoClosePicker startDate endDate popOver
</script>

