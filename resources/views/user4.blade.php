<div>
    <!-- Waste no more time arguing what a good man should be, be one. - Marcus Aurelius -->
    <h1>User 4</h1>
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
