@extends('frontend.layouts.main')

@section('content')

    <div class="container" id="content">
        <h1 class="c-6600cc">Let's Get Started! Step 3</h1>
        <hr>
        @include('frontend.register.register-info-step3')
    </div>

    <div class="bg-eae">
        @include('frontend.register.preferences-form')
    </div>

@endsection

{{--@extends('frontend.layouts.parts.footer-scripts')--}}

{{-- page level scripts --}}
{{--@section('footer_scripts')--}}
    <script src="{{ asset('assets/js/app.js') }}" type="text/javascript"></script>

    <script type="text/javascript">
        $(document).ready(function() {
            // $('#addLink').click(function() {
            //     var values = $('#emailAdd').filter(function(){ // discard fields with no value
            //         return this.value != '';
            //     }).map(function() {
            //         return $(this).val();       // return the value
            //     }).get();                         // get the values
            //
            //     var $list = $('.email_list').empty();
            //     for(var i in values) {
            //         $('<option />').text(values[i]).appendTo($list);   // build and add options
            //     }
            // });
            $('.register-form select').css('background-image', 'none');
            var $list = $('#email_list').empty();
            $('span').on('click', function () {
                //alert(this.id);
                var spanId = this.id;

                if(spanId === 'addEmailLink'){
                    var values = $('#emailAdd').filter(function(){ // discard fields with no value
                        return this.value != '';
                    }).map(function() {
                        return $(this).val();       // return the value
                    }).get();                         // get the values

                    for(var i in values) {
                        // $('#email_list').val(values[i]).text(values[i]).appendTo($list);   // build and add options
                        $('#email_list').append("<option value=" + values[i] + ">" +  values[i] + "</option>");
                    }
                    $('#emailAdd').val("");
                }

                if(spanId === 'removeEmailLink'){
                    var selectedItem = document.getElementById("email_list");

                    for (var i = 0; i < selectedItem.options.length; i++) {
                        if (selectedItem.options[i].selected) {
                            val = selectedItem.options[i].value;
                            selectedItem.options[i].remove();
                        }
                    }
                    // selectedItem.remove(selectedItem.selectedIndex);

                }

            });

        });
    </script>

{{--@stop--}}

