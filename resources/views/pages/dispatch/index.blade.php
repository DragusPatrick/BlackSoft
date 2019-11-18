@extends('layouts.dispatch')

@section('content')
    <div class="mapouter">
        <div class="gmap_canvas" style="height: 100vh;">
            <iframe width="100%" height="100%" id="gmap_canvas" src="https://maps.google.com/maps?q=berlin&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
            <a href="https://www.emojilib.com"></a>
        </div>

        <style>.mapouter{position:relative;text-align:right;height:500px;width:565px;}.gmap_canvas {overflow:hidden;background:none!important;height:500px;width:565px;}</style>
    </div>
@endsection