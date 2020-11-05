<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>delete by ajax</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

</head>
<body>
<div style="display: none" class="successAlert alert alert-success" role="alert">
   deleted successfully
</div>
<br>

<div style="display: none" class="failAlert alert alert-danger" role="alert">
    there are a problem didn't deleted
</div>

<table class="table">
    <thead class="thead-dark">
    <tr>
        <th scope="col">id</th>
        <th scope="col">first name</th>
        <th scope="col">last name</th>
        <th scope="col">modify</th>
    </tr>
    </thead>
    <tbody>
    @foreach($data as $data2)
        <tr class="todelete{{$data2->id}}">
            <th scope="row">{{$data2 -> id}}</th>
            <td>{{$data2->fnam}}</td>
            <td>{{$data2->lname}}</td>
            <td><a  class = "delete btn btn-success"   type="button" >delete with ajax</a>
            <td><a student_id="{{$data2->id}}" class="edit btn btn-info "    type="button" >edit with ajax</a>
            </td>

        </tr>
    @endforeach
    </tbody>
</table>
<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>

<script type="application/javascript">

    {{--$(document).on('click', '.delete', function (e) {--}}
    {{--    e.preventDefault();--}}
    {{--    var st_id = $(this).attr('student_id');--}}
    {{--    $.ajax({--}}
    {{--        type: 'get',--}}
    {{--        url:"{{route('AjaxDelete')}}",--}}
    {{--        data:{--}}

    {{--            st_id,--}}
    {{--        } ,--}}
    {{--         // success:function (ali) {--}}
    {{--         //    if(ali.status) {--}}
    {{--         //        $('.successAlert').show() ;--}}
    {{--         //   }--}}
    {{--         //     $('.todelete'+ ali.id) .remove();--}}
    {{--         //--}}
    {{--         // },--}}

    {{--    });--}}
    {{--});--}}


    $(document).on('click', '.edit', function (e) {
        e.preventDefault();
        let st_id = $(this).attr('student_id');
        $.ajax({
            type: 'get',
            url:"{{route('ajaxEdit')}}",
            data:{

                st_id
            } ,
            // success:function (ali) {
            //     if(ali.status) {
            //         $('.successAlert').show() ;
            //     }
            //
            //
            // },

        });
    });
</script>



</body>
</html>

