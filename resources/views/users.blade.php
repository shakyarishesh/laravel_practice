<div>
    <!-- Happiness is not something readymade. It comes from your own actions. - Dalai Lama -->
    <h1>Users List</h1>
    
    
    <table border="1">
        <tr>
            <td>Name</td>
            <td>Email</td>
            <td>Password</td>
        </tr>
        @foreach ($users as $user)
            <tr>
                <td>{{$user->name}}</td>
                <td>{{$user->email}}</td>
                <td>{{$user->password}}</td>
            </tr>
            
        @endforeach
    </table>
</div> 