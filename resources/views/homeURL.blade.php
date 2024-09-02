<div>
   <h1>Home</h1>

   <a href="/abouturl">about</a>
   <br>
   <a href="{{URL::to('abouturl')}}">about</a>
   <br>
   <a href="{{URL::to('abouturl',['rishesh'])}}">{{URL::to('abouturl',['rishesh'])}}</a>
   <br>

   {{-- {{URL::current()}} --}}
   {{url()->current()}}
   
   <h3>{{URL::full()}}</h3>
   {{-- {{url()->full()}} --}}
</div>
