@extends('layouts.layout')

@section('content')
    <div class="container-fluid">
        @include('temp.header')
        @include('temp.serach')
        <div class="container">
            @include('temp.slide')
            <div class="row">
                <div class=" panel panel-group col-md-12">
                    @foreach($learn as $row)
                        <h4> {{$row->title}}</h4>
                        <?= htmlspecialchars_decode(htmlspecialchars_decode($row->commit)); ?>
                    @endforeach
                </div>
            </div>

        </div><!--/.endcontrainter--->
        @include('temp.footer')
    </div><!--/.endcontirentfiue-->
@endsection

