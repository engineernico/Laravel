@include('dublicated.header')

<div class="container">

        <link type="text/css" rel="stylesheet" href="{{Illuminate\Support\Facades\URL::asset('css/bootstrap.min.css')}}">

    <form method="post" action="{{url('curd/create')}}">
        @csrf
        <h2>Contact Us</h2>
        <div class="row">
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

                    <input type="text" class="form-control" name="lname" placeholder="" id="last">
                </div>
            </div>
            <!--  col-md-6   -->
        </div>


        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
