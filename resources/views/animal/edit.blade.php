
@extends('layouts.app')

@section('content')
@if (count($errors))
<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $item)

        <li>{{ $item }} </li>

        @endforeach

    </ul>
</div>

@endif

<div class="container">
    <div class="row">
        <div class="col-md-12">

        <form action="{{url('animals/'.$anim->id)}}" method="post"enctype="multipart/form-data">
            <input type="hidden" name="_method" value="PUT">
            {{ csrf_field() }}

            <div class="form-group ">
                <label for=""> Name</label>
            <input type="text" name="name"class="form-control" value="{{$anim->Nom}}">
            </div>
                <div class="form-group">
                    <label for=""> Categorie</label>
                    <input type="text"name="Categorie" class="form-control"value="{{$anim->Categorie}}">
                </div>


       <div class="form-group">

            <label for="">son</label>

            <!-- <form enctype="multipart/form-data">-->
                    <input id="file-5" class="file" name="son"type="file" multiple data-preview-file-type="any" data-upload-url="#"value="{{$anim->Son}}">
            <!--  </form>-->
        </div>
        <div class="form-group">
            <label for=""> Image </label>
            <input type="file"name="photo" class="form-control" value="{{$anim->Photo}}">
        </div>

        <div class="form-group">
            <label for=""> Type of nutration </label>
            <input type="text"name="TypeNori" class="form-control" value="{{$anim->TypeNori}}">
        </div>
        <div class="form-group">
            <label for=""> Zone  </label>
            <input type="text"name="zone" class="form-control" value="{{$anim->Zone}}">
        </div>

        <div class="form-group @if ($errors->get('Desc')) has-error @endif">
            <label for=""> Description  </label>

            @if ($errors->get('Desc'))

            @foreach ($errors->get('Desc') as $item)
                <div class=" alert alert-danger ">

                    @foreach ($errors->get('Desc') as $item)
                         <li >{{ $item }} </li>
                    @endforeach
                </div>

            <li>{{ $item }} </li>

            @endforeach
            @endif

            <textarea name="Desc" class="form-control"> {{old('Desc')}}</textarea>
        </div>

            <div class="form-group">
                <input type="submit" class="form-control btn btn-succses" value="Edit">
            </div>


        </form>
        </div>
    </div>
</div>


@endsection
