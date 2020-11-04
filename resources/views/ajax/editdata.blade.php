@include('dublicated.header')

<div class="container">

    <link type="text/css" rel="stylesheet" href="{{Illuminate\Support\Facades\URL::asset('css/bootstrap.min.css')}}">

    <form method="POST" id="form_data" >
        @csrf
        <h2>Contact Us</h2>
        <div class="row">
            <div class="col-md-6">

                <div class="form-group">

                    <label for="first">id</label>
                    <input type="text" style="display: none" class="form-control" value="{{$data->id}}"   name="id"  placeholder="" id="first">

                </div>



                <div class="form-group">

                    <label for="first">First Name</label>
                    <input type="text" class="form-control" value="{{$data->fnam}}"   name="fnam"  placeholder="" id="first">

                </div>

            </div>
            <!--  col-md-6   -->

            <div class="col-md-6">
                <div class="form-group">
                    <label for="last">Last Name</label>

                    <input type="text" class="form-control"  value="{{$data->lname}}"  name="lname" placeholder="" id="last">
                </div>
            </div>
            <!--  col-md-6   -->
        </div>


        <a  class="btn btn-primary updataWithAjax">update</a>
    </form>

    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>

    <script>
        $(document).on('click', '.updataWithAjax', function (e) {
            var formData = new FormData($('#form_data')[0]);
            e.preventDefault();
            $.ajax({
                type: 'post',
                url:"{{route('ajaxUpdate')}}",
                data: formData,
                processData: false,
                contentType: false,
                cache: false,
                // success:function (data) {
                //     if(data.status){$('#success').show();}
                // }
            });
        });
    </script>

</div>
