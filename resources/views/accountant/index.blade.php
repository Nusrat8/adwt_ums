<html>
    <head>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

    </head>

<body>
<img src="views.ums.jpg" alt="University Management System" width="1400" height="250">

   <div align="center">
<a class="btn btn-primary" href="{{URL::to('/profile/1')}}">View Profile</a>
<a class="btn btn-primary" href="{{route('register')}}">Register Students</a>
<a class="btn btn-primary" href="{{route('list')}}">Students Payment Status</a>
<a class="btn btn-primary" href="{{route('changepass')}}">Change Password</a>
<a class="btn btn-primary" href="{{route('logout')}}">Log out</a>



</div>
</body>
</html>