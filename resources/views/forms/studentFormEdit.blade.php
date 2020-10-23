@include('dublicated.header')

<div class="container">

        <link type="text/css" rel="stylesheet" href="{{Illuminate\Support\Facades\URL::asset('css/bootstrap.min.css')}}">

    <form method="POST" action="{{url('curd/edit/'.$data -> id)}}">
        @csrf
        <h2>Contact Us</h2>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">

                    <label for="first">First Name</label>
                    <input type="text" class="form-control"   name="fname"  value="{{$data->fname}}" placeholder="" id="first">

                </div>
            </div>
            <!--  col-md-6   -->

            <div class="col-md-6">
                <div class="form-group">
                    <label for="last">Last Name</label>

                    <input type="text" class="form-control" name="lname" value="{{$data->lname}}" placeholder="" id="last">
                </div>
            </div>
            <!--  col-md-6   -->
        </div>


        <button type="submit" class="btn btn-primary">حفظ التعديل</button>
    </form>

    @if(Illuminate\Support\Facades\Session::has('success'))
        <div class="alert alert-success" role="alert">
            {{ Illuminate\Support\Facades\Session::get('success') }}
        </div>
    @endif


</div>
