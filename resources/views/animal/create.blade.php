
@extends('layouts.app')

@section('content')



<div class="container">
    <div class="row">
        <div class="col-md-12">



        <form action="{{url('animals')}}" method="post"enctype="multipart/form-data">
            {{ csrf_field() }}


            <div class="form-group @if ($errors->get('name')) has-error @endif">

                <label for=""> Name</label>
                @if ($errors->get('name'))

                <div class=" alert alert-danger ">
                    @foreach ($errors->get('name') as $item)
                         <li >{{ $item }} </li>
                    @endforeach
                </div>

                @endif


                <input type="text" name="name"class="form-control " value="{{old('name')}}">


            </div>

            <div class="form-group @if ($errors->get('Categorie')) has-error @endif">
                  <label for=""> Categorie</label>

                @if ($errors->get('Categorie'))

                <div class=" alert alert-danger ">
                    @foreach ($errors->get('Categorie') as $item)
                         <li >{{ $item }} </li>
                    @endforeach
                </div>
                @endif

                    <input type="text"name="Categorie" class="form-control " value="{{old('Categorie')}}">
            </div>


       <div class="form-group ">

           <!--  <label for="">son</label>

            <form enctype="multipart/form-data">
            <input id="file-5" class="file" name="son"type="file" multiple data-preview-file-type="any" data-upload-url="#">
          <input  name="son"type="file" >-->

            <!--  </form>-->
        </div>
        <div class="form-group @if ($errors->get('photo')) has-error @endif">
            <label for=""> Image </label>

            @if ($errors->get('photo'))
            <div class=" alert alert-danger ">
                @foreach ($errors->get('photo') as $item)
                     <li >{{ $item }} </li>
                @endforeach
            </div>
         @endif
            <input type="file"name="photo" class="form-control "value="{{old('photo')}}">
        </div>

        <div class="form-group  @if ($errors->get('son')) has-error @endif">
            <label for=""> son </label>

            @if ($errors->get('son'))
            <div class=" alert alert-danger ">
                @foreach ($errors->get('son') as $item)
                     <li >{{ $item }} </li>
                @endforeach
            </div>
            @endif

            <input type="file"name="son" class="form-control "value="{{old('son')}}">
        </div>


        <div class="form-group @if ($errors->get('TypeNori')) has-error @endif">
            <label for=""> Type of eating  </label>

            @if ($errors->get('TypeNori'))

            <div class=" alert alert-danger ">
                @foreach ($errors->get('TypeNori') as $item)
                     <li >{{ $item }} </li>
                @endforeach
            </div>

            @endif


            <input type="text"name="TypeNori" class="form-control "value="{{old('TypeNori')}}">
          

        </div>


        <div class="form-group @if ($errors->get('zone')) has-error @endif">
            <label for=""> Zone  </label>

            @if ($errors->get('zone'))
            <div class=" alert alert-danger ">
                @foreach ($errors->get('zone') as $item)
                     <li >{{ $item }} </li>
                @endforeach
            </div>

            @endif

            <input type="text"name="zone" class="form-control "value="{{old('zone')}}">
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


            <div class="form-group ">
                <input type="submit" class="form-control  btn btn-dark" value="add">
            </div>


    </form>
</div>


    </div>
</div>


@endsection
