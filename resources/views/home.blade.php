<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Home page</h1>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores non officia earum, quae inventore tempora consectetur dignissimos ab voluptas doloribus rerum dolorum numquam cupiditate. Magni ipsum optio obcaecati consectetur amet?</p>
    <br>
    <h1>users: {{$users[1]}}</h1>
    {{-- <h2><?php print_r($users)?></h2> --}}
    <br>
    <a href="/about/aaradhana">about page</a>
    <br>

    @if ($name=='Rishesh')
        <h2> The name is Rishesh. </h2>
    @elseif ($name=='anil')
        <h2>Anil</h2>
    @else
        <h2>Other users</h2>
    @endif

    
    {{-- for loop  --}}
    <div>
        @for($i=0;$i<4;$i++)
            <h3>{{$i}}</h3>
        @endfor
    </div>

    {{-- foreach loop --}}
    <div>
        @foreach ($users as $user)
            <h2>{{$user}}</h2>
    </div>
        
        
    @endforeach
</body>
</html>