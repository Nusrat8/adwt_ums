
<div align ="center">
    
<table class="table table-borded">
    <thead>
        
            <th>User Name</th>
            <th>Full Name</th>
            <th>Phone</th>
            <th>Address</th>
            <th>Date of Birth</th>
            <th>Depatment Name</th>

</thead>
<tbody>
        @foreach($students as $student)
            <tr>
                <td>{{$student->username}}</td>
                <td>{{$student->fullname}}</td>
                <td>{{$student->phone}}</td>
                <td>{{$student->address}}</td>
                <td>{{$student->dob}}</td>
                <td>{{$student->department_name}}</td>
            </tr>
        @endforeach
</tbody>
    </table>
</div>