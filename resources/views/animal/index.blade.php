
@extends('layouts.app')
@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-12">

        <h1>Animals List</h1>
        <div class="pull-right">
        <a href="{{url('animals/create')}}" class="btn btn-success"> Add New animal</a>
        </div>
               <div class="row">
                    @foreach ($ListAnimal as $ListAnima)

                   <div class="col-sm-6 col-md-4">

                       <div class="thumbnail">
                       <img src="{{ url('storage/'.$ListAnima->Photo)}}" alt="......" width="250px" height="200" style="margin-top:20px">

                           <div class="caption">

                           <h3>{{$ListAnima->Nom}}</h3>
                            <audio src="{{ url('storage/'.$ListAnima->Son)}}" controls>
                                no way
                            </audio>


                                   <form action="{{ url('animals/'.$ListAnima->id)}} " method="POST">
                                    {{ csrf_field() }}
                                    {{ method_field('DELETE') }}

                                    <a href="#"class="btn btn-primary" role="button">Show</a>
                                    <a href="{{url('animals/'.$ListAnima->id.'/edit')}}"class="btn btn-success" role="button">Edit</a>
                                    <button type="submit" class="btn btn-danger">delet</button>
                                   </form>

                           </div>

                        </div>
                   </div>

                   @endforeach
               </div>





        </div>
    </div>
</div>

@endsection
