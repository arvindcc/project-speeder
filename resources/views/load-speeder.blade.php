<?php
/**
 * Created by PhpStorm.
 * User: arvind
 * Date: 11/6/18
 * Time: 9:31 PM
 */
?>
@extends('welcome')
@section('content')
    <div class="row ">
        <div class="col-md-12 text-center">
            <h2>Click the textbox, and copy the content on the left.</h2>
        </div>
    </div>
    <div class="row">
        <!--generated paragraphs-->
        <div class="lead paragraph col-md-6  blocks border">
        </div>
        <!--textarea-->
        <div class="col-md-6  blocks">
            <div class="form-group ">
                <label for="comment">The timer starts when a key is pressed.</label>
                <button type="button" class="resetBtn btn btn-default"><i class="fa fa-refresh"></i> Reset</button>

                <textarea class="form-control" rows="13" id="userInput" onkeypress="CallBoth(event)" onkeydown="BackSpace(event)"></textarea>
                <!--alert-->
                <div class="alert alert-danger alert-dismissible text-center" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <strong>Warning!</strong> The timer is still running. You must finish typing all of the content!
                </div>
            </div>
        </div>
    </div>
@endsection
@section('javascript')
<script src="/assets/custom/js/main.js"></script>
@endsection
