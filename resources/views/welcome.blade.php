@extends('layouts/app')

@section('content')

<div ng-app="formApp" ng-controller="formController">
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <h2>Hi, GoFanbase!</h2>
        </div>
    </div>

    <div class="row">
        <div class="col-md-6 col-md-offset-3 text-center">
            <form>
                <textarea ng-model="newReview.text" class="form-control" rows="6" placeholder="How do you think I did?"></textarea>
                <br>
                <span class="pull-left"><% message.text %></span>
                <button class="btn btn-success pull-right" ng-click="validateForm()">Submit!</button>
            </form>
        </div>
    </div>

    <div class="row all-reviews" ng-init="loadReviews()">
        <div class="col-md-6 col-md-offset-3" ng-repeat="review in reviews track by $index" ng-bind-html="review.review">
            <% review.updated_at %>
            <br>
            <% review.review %>
        </div>
    </div>
</div>
@stop