@extends('layout.app')

@section('body')
<div class="card border">
    <div class="card-body">
        <form action="/registre/new" method="POST">
            @csrf
            
            
            <div class="row">
                    <div class="form-group col-md-4">
                        <label for="name">Name Framework </label>
                        <input type="text" name="name" id="name"  class="form-control  {{ $errors->has('name') ? 'is-invalid' : ''}}" placeholder="Name">
                            @if($errors->has('name'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('name') }}
                                </div>
                            @endif
                    </div>
                    <div class=" form-group col-md-4">
                        <label for="title">Title Framework </label>
                        <input type="text" name="title"  id="title"  class="form-control  {{ $errors->has('title') ? 'is-invalid' : ''}}"  placeholder="Title">
                        @if($errors->has('title'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('title') }}
                                </div>
                            @endif
                    </div>
                    <div class="form-group col-md-4">
                        <label for="title">Link Framework </label>
                        <input type="text" name="link_ref"  id="link_ref" class="form-control  {{ $errors->has('link_ref') ? 'is-invalid' : ''}}" placeholder="link from Framework">
                          @if($errors->has('link_ref'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('link_ref') }}
                                </div>
                            @endif
                    </div>
            </div>

            <div class="row">
                    <div class=" form-group col-md-12">
                    <label for="description">Description of Framework </label>
                    <textarea id="description"  name="description" class="form-control {{ $errors->has('description') ? 'is-invalid' : ''}}"  placeholder="description of framework" rows="5"></textarea>
                            @if($errors->has('description'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('description') }}
                                </div>
                            @endif
                    </div>
            </div>

         
        <div class="card-footer">
            <button type="submit" class="btn btn-primary btn-sm">Salvar</button>
        
            <a href="/list" class="btn btn-danger btn-sm" >Cancelar</a>
        </div>   
        </form>
     
        
            </div>
    </div>
</div>

@endsection  