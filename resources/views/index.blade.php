<body>
    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Age</th>
                <th>Phone</th>
                
            </tr>
   
        </thead>
        <tbody>
            <tr>
                @foreach($students as $student)
                    <td>{{$student->id}}</td>
                    <td>{{$student->name}}</td>
                    <td>{{$student->age}}</td>
                    <td>{{$student->phone}}</td>
                @endforeach
            </tr> 
</tbody>
</table>
</body>