@extends('layouts.layout')

@section('content')
    <div class="container-fluid">
        @include('temp.header')
        @include('temp.serach')
        <div class="container">
            @include('temp.slide')
            <div class="row ">
                <div class=" panel panel-group col-md-12">
                    @foreach($faq as $row)
                        <h4 class="panel panel-title"> {{$row->title}}</h4>
                        <div class="panel panel-body">{{ htmlspecialchars_decode(htmlspecialchars_decode($row->commit))}} </div>
                    @endforeach

                    </div>
                </div>

        </div><!--/.endcontrainter--->
        @include('temp.footer')
    </div><!--/.endcontirentfiue-->
@endsection

