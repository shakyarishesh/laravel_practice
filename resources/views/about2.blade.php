@include('common.header')
<h2>this is about 2</h2>


{{-- @include('common.footer',['page'=>"This is about page"]) --}}
@includeIf('common.footer',['page'=>"This is about page"])

<x-message-banner msg="about User"/>

<style>
    .success{
        background: lightblue;
        color: purple;
        padding: 3px 10px;
        border-radius: 2px;
        display: inline-block;
        margin: 10px;
    }
</style>