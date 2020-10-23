@include('dublicated.header')

<div class="container">

        <link type="text/css" rel="stylesheet" href="{{Illuminate\Support\Facades\URL::asset('css/bootstrap.min.css')}}">

    <form method="POST" action="{{route('insert_form')}}" enctype="multipart/form-data">
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
            <!--  upload images   -->
            <div class="col-md-6">
                <div class="form-group">
                    <label for="last">upload photo</label>

                    <input type="file" class="form-control" name="photo" id="last">
                </div>
            </div>

        </div>


        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

    @if(Illuminate\Support\Facades\Session::has('success'))
        <div class="alert alert-success" role="alert">
            {{ Illuminate\Support\Facades\Session::get('success') }}
        </div>
    @endif


    @if(Illuminate\Support\Facades\Session::has('error'))
        <div class="alert alert-danger" role="alert">
            {{ Illuminate\Support\Facades\Session::get('error') }}
        </div>
    @endif


    <table class="table">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">الإسم الأول</th>
            <th scope="col">الإسم الثانى</th>
        </tr>
        </thead>
        <tbody>

            @foreach($data as $dat)

            <tr>
                <th scope="row">{{$dat -> id}}</th>
                <td>{{$dat -> fname}}</td>
                <td>{{$dat -> lname}}</td>

{{--                <td><img  style="width: 90px; height: 90px;" src="{{asset('images/offers/'.$offer->photo)}}"></td>--}}
                <td>
                    <a href="{{url('curd/edit/'.$dat -> id)}}" class="btn btn-success"> عدل</a>
                    <a href="{{route('delete',$dat -> id)}}" class="btn btn-danger"> حذف </a>
                </td>

            </tr>
            @endforeach
        </tbody>



    </table>
</div>
