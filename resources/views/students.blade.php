<div>
    <!-- Simplicity is the essence of happiness. - Cedric Bledsoe -->
    <h1>Student list</h1>
    <table border="1">
        <tr>
            <td>Name</td>
            <td>Email</td>
            <td>Batch</td>
        </tr>
        @foreach ($students as $std)
            <tr>
                <td>{{$std->name}}</td>
                <td>{{$std->email}}</td>
                <td>{{$std->batch}}</td>
            </tr>
            
        @endforeach
    </table>
</div>
