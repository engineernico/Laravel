<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ajax insert</title>
</head>
<body>
@include('dublicated.header')
<div class="alert alert-success" style="display:none" id="success">
    تم بنجاح
</div>
<div class="container">

    <link type="text/css" rel="stylesheet" href="{{Illuminate\Support\Facades\URL::asset('css/bootstrap.min.css')}}">

    <form method="post"  id="form_data" enctype="multipart/form-data">
        @csrf
        <h2>ajax form</h2>
        <div class="row">
    <div class="col-md-6">
        <div class="form-group">
            <label for="last">upload photo</label>

            <input type="file" class="form-control" name="photo" id="last">
        </div>

  </div>
            <div class="col-md-6">
                <div class="form-group">

                    <label for="first">First Name</label>
                    <input type="text" class="form-control"   name="fname"  placeholder="" id="first">

                </div>
            </div>

            <!--  col-md-6   -->

            <div class="col-md-6">
                <div class="form-group">
                    <label for="last">Last Name</label>

                    <input type="text" class="form-control" name="lname"  placeholder="" id="last">
                </div>
            </div>
            <!--  col-md-6   -->
        </div>


        <button id="send_data" class="btn btn-primary" >insert by ajax</button>
    </form>

    @if(Illuminate\Support\Facades\Session::has('success'))
        <div class="alert alert-success" role="alert">
            {{ Illuminate\Support\Facades\Session::get('success') }}
        </div>
    @endif



</div>

<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>

<script>
    $(document).on('click', '#send_data', function (e) {
        var formData = new FormData($('#form_data')[0]);
        e.preventDefault();
        $.ajax({
            type: 'post',
            url:"{{route('AjaxSave')}}",
            data: formData,
            processData: false,
            contentType: false,
            cache: false,
            success:function (data) {
                if(data.status){$('#success').show();}
                }
        });
    });
</script>
</body>
</html>
