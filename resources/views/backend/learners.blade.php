@extends('layouts.dashboard')

@section('title')
Dashboard
@endsection

@section('extrastyle')
    <link rel="stylesheet" type="text/css" href="{{ asset('lib/jquery.vectormap/jquery-jvectormap-1.2.2.css') }}"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('lib/jqvmap/jqvmap.min.css') }}"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('lib/datetimepicker/css/bootstrap-datetimepicker.min.css') }}"/>
@endsection
    
@section('extrascript')
    
    <script src="{{ asset('lib/jquery-flot/jquery.flot.js') }}" type="text/javascript"></script>
    <script src="{{ asset('lib/jquery-flot/jquery.flot.pie.js') }}" type="text/javascript"></script>
    <script src="{{ asset('lib/jquery-flot/jquery.flot.time.js') }}" type="text/javascript"></script>
    <script src="{{ asset('lib/jquery-flot/jquery.flot.resize.js') }}" type="text/javascript"></script>
    <script src="{{ asset('lib/jquery-flot/plugins/jquery.flot.orderBars.js') }}" type="text/javascript"></script>
    <script src="{{ asset('lib/jquery-flot/plugins/curvedLines.js') }}" type="text/javascript"></script>
    <script src="{{ asset('lib/jquery-flot/plugins/jquery.flot.tooltip.js') }}" type="text/javascript"></script>
    <script src="{{ asset('lib/jquery.sparkline/jquery.sparkline.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('lib/countup/countUp.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('lib/jquery-ui/jquery-ui.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('lib/jqvmap/jquery.vmap.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('lib/jqvmap/maps/jquery.vmap.world.js') }}" type="text/javascript"></script>
    <script type="text/javascript">
      $(document).ready(function(){
      	//-initialize the javascript
      	App.init();
      	App.dashboard();
      
      });
    </script>
@endsection

@section('content')

Learners

@endsection