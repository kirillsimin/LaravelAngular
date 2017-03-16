@extends('layouts/app')

@section('content')

    <div class="row">
        <div class="col-md-6 col-md-offset-3 text-center">
            <h2>Hi, GoFanbase!</h2>
        </div>
    </div>

    <div class="row">
        <div class="col-md-6 col-md-offset-3 text-center">
            <form id="submit-form" ng-submit="processForm()">
                <textarea class="form-control" rows="6"></textarea>
                <br>
                <button class="btn btn-success pull-right">Submit!</button>
            </form>
        </div>
    </div>

@stop