{{-- @include('common.header') --}}
<h1>Home2 page</h1>

<x-message-banner msg="User login successfully" class="success"/>
<x-message-banner msg="User Signup successfully" class="success"/>

<br>
<br>
<br>


<x-message-banner msg="Password not correct please try again" class="error"/>
<x-message-banner msg="Password not correct please try again" class="warning"/>


<style>
    .success{
        background: lightblue;
        color: green;
        padding: 3px 10px;
        border-radius: 2px;
        display: inline-block;
        margin: 10px;
    }

    .error{
        background: rgb(236, 144, 144);
        color: red;
        padding: 3px 10px;
        border-radius: 2px;
        display: inline-block;
        margin: 10px;
    }

    .warning{
        background: rgba(221, 173, 84, 0.356);
        color: orange;
        padding: 3px 10px;
        border-radius: 2px;
        display: inline-block;
        margin: 10px;
    }
</style>
{{-- 
@include('common.footer',['page'=>"This is home page"]) --}}