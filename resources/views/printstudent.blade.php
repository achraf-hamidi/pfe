@extends('layouts.my')
@section('content')
<center>
<br><br>
<a href="{{ url('/prnpriview') }}" class="btnprn btn">Print Preview</a></center>
<script type="text/javascript">
$(document).ready(function(){
$('.btnprn').printPage();
});
</script>
<center>
<h1>animList </h1>
<table class="table" >
    <tr><th>Id</th><th>Name</th><th>Email</th><th>Course</th></tr>
    @foreach( $Animall as $ani)
    <tr><td>{{ $ani->id }}</td>
    <td>{{ $ani->Nom }}</td>
    <td>{{ $ani->Categorie }}</td>
    <td>{{ $ani->TypeNori }}</td>
    </tr>
@endforeach
</center>
@endsection
