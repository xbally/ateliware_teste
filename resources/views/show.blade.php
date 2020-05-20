
<html lang="en" class=" -webkit-">
    <head>
    <meta charset="UTF-8">
    <style media="" data-href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.css"></style>
        <script>
        window.console = window.console || function(t) {};
        </script>
        <link rel="stylesheet" type="text/css" href="{{ asset('css/index.css')}}">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/app.css')}}">
        <script>
        if (document.location.search.match(/type=embed/gi)) {
            window.parent.postMessage("resize", "*");
        }
        </script>
    </head>
<body translate="no">

<div class="page" id="p1">
<a href="/list" class="btn btn-light">Volta</a>
    <section class="icon fa fa-list">
        <span class="title">
            <p>Name : {{ $framework->name}}</p> 
        </span>
            <span class="hint">
            {{ $framework->description }}
            <br>
            <a href="{{ $framework->link_ref}}">{{ $framework->link_ref}}</a>
            </span>
    </section>
</div>
                  
</body>
</html>