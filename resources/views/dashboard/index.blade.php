@extends('home')

@section('title', 'Dashboard')

@section('content')
<div class="contaier-fluid mt-2 mb-2" id="btngroup">
    <div class="btn-group">
        <button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Add<span class="caret">&nbsp;&nbsp;&nbsp;&nbsp;</span>
        </button>
        <div class="dropdown-menu">
            <!-- <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#myModal">PASSPORT</a> -->
            <a class="dropdown-item" href="/appointment/site" id="passid">PASSPORT</a>
            <a class="dropdown-item" href="#">NBI</a>
            <a class="dropdown-item" href="#">PRC</a>
            <a class="dropdown-item" href="#">MOVIE</a>
        </div>
    </div>
    <div class="btn-group">
        <button type="button" class="btn btn-info" >
            Update
        </button>
    </div>
        <!-- <div class="dropdown-menu">
            <a class="dropdown-item" href="#">Action</a>
            <a class="dropdown-item" href="#">Another action</a>
            <a class="dropdown-item" href="#">Something else here</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">Separated link</a>
        </div> -->
    <div class="btn-group">
        <button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Action
        </button>
        <div class="dropdown-menu">
            <a class="dropdown-item" href="#">DELETE</a>
            <a class="dropdown-item" href="#">PAY</a>
            <a class="dropdown-item" href="#">WITHDRAW</a>
        </div>
    </div>
</div>
<br>
@endsection