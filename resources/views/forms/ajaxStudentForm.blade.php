

@extends('layouts.app')
@section('content')
<div class="container">

    <link type="text/css" rel="stylesheet" href="{{Illuminate\Support\Facades\URL::asset('css/bootstrap.min.css')}}">
    <div class="alert alert-success" role="alert" id="message" style="display: none">
        تم الحفظ
    </div>
    <form >
        @csrf
        <h2>Contact Us</h2>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">

                    <label for="first">First Name</label>
                    <input type="text" class="form-control" name="fname" placeholder="" id="first">
                    <small id="first_error" class="form-text text-danger"></small>


                </div>
            </div>
            <!--  col-md-6   -->

            <div class="col-md-6">
                <div class="form-group">
                    <label for="last">Last Name</label>

                    <input type="text" class="form-control" name="lname" placeholder="" id="last">
                    <small id="last_error" class="form-text text-danger"></small>

                </div>
            </div>

        </div>


        <button id="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
@stop

@section('scripts')

<script>

    $(document).on('click','#submit',function (e) {
        e.preventDefault();
        var data = new FormData($('form')[0]);

        var response = $.parseJSON(reject.responseText);
        $.each(response.errors, function (key, val) {
            $("#" + key + "_error").text('');
        });


        $.ajax({

            type: 'post',
            enctype: 'multipart/form-data',
            url: "{{route('ajaxStore')}}",
            data: data,
            processData: false,
            contentType: false,
            cache: false,

            success: function (data) {
                if (data.status) {
                    // alert(data.msg)
                    $('#message').show();

                }
            }, error: function (reject) {
                if (!reject.status) {
                    alert(reject.msg)
                }

                var response = $.parseJSON(reject.responseText);
                $.each(response.errors, function (key, val) {
                    $("#" + key + "_error").text(val[0]);
                });

            }

        });
    });
    </script>

    @stop
