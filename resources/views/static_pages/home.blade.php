@extends('layouts.default')

@section('content')
  <div class="jumbotron">
    <h1>Hello My company</h1>
    <p class="lead">
      你现在看到的是<a>@爱纳米博客</a>の主页.
    </p>
    <p>
      If you really want it!
    </p>
    <p>
      <a class="btn btn-lg btn-success" href="{{ route('signup') }}" role="button">现在注册</a>
    </p>
  </div>
@stop
