@include('dublicated.header')

<div class="container">

    <link type="text/css" rel="stylesheet" href="{{Illuminate\Support\Facades\URL::asset('css/bootstrap.min.css')}}">

    <form method="POST" action="{{url('curd/update/'.$data3->id)}}">
        @csrf
        <h2>Contact Us</h2>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">

                    <label for="first">First Name</label>
                    <input type="text" class="form-control" value="{{$data3->fnam}}"   name="fnam"  placeholder="" id="first">

                </div>

            </div>
            <!--  col-md-6   -->

            <div class="col-md-6">
                <div class="form-group">
                    <label for="last">Last Name</label>

                    <input type="text" class="form-control"  value="{{$data3->lname}}"  name="lname" placeholder="" id="last">
                </div>
            </div>
            <!--  col-md-6   -->
        </div>


        <button type="submit" class="btn btn-primary">update</button>
    </form>
</div>
