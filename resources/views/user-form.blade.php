<div>
    <h2>Add New User</h2>
    {{-- @if($errors->any())
        @foreach ($errors->all() as $error)
            <div style="color: red">{{$error}}</div>
        @endforeach
    @endif --}}
    <form action="adduser" method="post">
        @csrf
        <div class="input-wrapper">
            <input type="text" placeholder="Enter the name" name="username" value="{{old('username')}}">
            <span style="color: red">@error('username'){{$message}}@enderror</span>
        </div>

        <div class="input-wrapper">
            <input type="text" placeholder="Enter the email" name="email" value="{{old('email')}}">
            <span style="color: red">@error('email'){{$message}}@enderror</span>
        </div>

        <div class="input-wrapper">
            <input type="text" placeholder="Enter the city" name="city" value="{{old('city')}}">
            <span style="color: red">@error('city'){{$message}}@enderror</span>
        </div>

        <div>
            <h5>User Skills</h5>
            <input type="checkbox" name="skill[]" value="PHP" id="php">
            <label for="php">PHP</label>
            <input type="checkbox" name="skill[]" value="node" id="node">
            <label for="node">Node</label>
            <input type="checkbox" name="skill[]" value="java" id="java">
            <label for="java">Java</label>
            <span style="color: red">@error('skill'){{$message}}@enderror</span>
        </div>

        <div class="input-wrapper">
            <button value="submit">submit</button>
        </div>
    </form>
</div>

<style>
    input{
        border: orange 1px solid;
        height: 35px;
        width: 200px;
        border-radius: 2px;
        color: orange;
    }

    .input-wrapper{
        margin: 10px;
    }

    button{
        border: orange 1px solid;
        height: 35px;
        width: 200px;
        border-radius: 2px;
        color: orange;
        background-color: white;
        cursor: pointer;
    }
</style>
