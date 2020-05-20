@extends('layout.app')


@section('body')

<html lang="en" class=" -webkit-"><head>
<meta charset="UTF-8">
<style media="" data-href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.css"></style>
<script>
  window.console = window.console || function(t) {};
</script>
<link rel="stylesheet" type="text/css" href="{{ asset('css/index.css')}}">
<script>
  if (document.location.search.match(/type=embed/gi)) {
    window.parent.postMessage("resize", "*");
  }
</script>
</head>
<body translate="no">
<div class="ct" id="t1">
<div class="ct" id="t2">
<div class="ct" id="t3">
<div class="ct" id="t4">
<div class="ct" id="t5">
<ul id="menu">
<a href="#t1"><li class="icon fa fa-list" id="cuatro"></li></a>
<a href="#t2"><li class="icon fa fa-plus" id="cuatro"></li></a>
</ul>
<div class="page" id="p1">
<section class="icon fa fa-list"><span class="title">List</span><span class="hint">
List of frameworks contained in the database<br><a href="/list">List</a></span></section>
</div>
<div class="page" id="p2">
<section class="icon fa fa-plus"><span class="title">Register</span><span class="hint">
Register Framework in the database<br><a href="/registre">Register</a></span></section>
</div>
</div>
</div>
</div>
  </div>
</div>


</body></html>



@endsection
