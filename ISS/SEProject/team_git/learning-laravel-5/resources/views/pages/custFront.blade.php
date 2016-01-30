@extends('template.master')
@section('css')

    @yield('css-child')
    @stop


            <!--Header-->
    @section('headbar')


            <!-- Navigation -->


@stop

@section('middle')
    <div class="full_width_container">
        @yield('content')
    </div>
    @stop

    @section('footer')
            <!--footer-->



@stop

@section('js')
    {{--<script src="{{URL::asset('jquery/jquery.min.js')}}"></script>--}}
    <script src="{{URL::asset('js/bootstrap.min.js')}}"></script>
    <script src="{{URL::asset('js/moment.min.js')}}"></script>
    <script src="{{URL::asset('js/bootstrap-datetimepicker.min.js')}}"></script>
    <script src="{{URL::asset('js/bootstrap.js')}}"></script>
    <script src="{{URL::asset('js/custome_widget_1.js')}}"></script>
    @yield('js-child')
@stop
