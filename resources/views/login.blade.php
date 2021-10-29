<html>
<head>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    
</head>
<body>
    <div align = "center">
<h1> University Management System </h1>
</div>
	<form method="post">
        @csrf
        <div align="center">
        <table>
            <tr>
                <td>User Name</td>
                <td><input type="text" class="form-control" name="username"></td>
            </tr>
            <!-- <tr>
                <td>Identity</td>
                <td>
                <select id="identity" name="identity">
				<option selected disabled>--Select--</option>
				<option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
				</select> 
                 </td>
               </tr> -->


            <tr>
                <td>Password</td>
                <td><input type="password" class="form-control" name="password"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" name="submit" class="btn btn-primary"  class="form-control" value="Submit"></td>
                <td></td>
            </tr>
            <tr>
                <td>
                <a href="/" class="btn btn-primary">Back</a>
                </td>
            </tr>
        </table>
</div>
        {{session('msg')}}
        @foreach ($errors->all() as $error)
		{{$error}} <br>
	    @endforeach
	</form>
</body>
</html>