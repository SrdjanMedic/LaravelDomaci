@extends('layouts.app')
@section('content')
<!-- dodali smo dugme da nnas vrati na prethodnu stranicu -->
<a href="/kamion/public/kamion" class="btn btn-default"> Vrati se nazad</a>
<h1> Podaci o kamionu: {{$r->regBr}}</h1>
    <div>
        Vrsta goriva: {{$r->gorivo}}
    </div>
    <div>
        Opis: {{$r->opis}}
    </div>
    <div>
        Cena: {{$r->cena}}
    </div>
     <div> Model automobila: {{$r->model}} </div>
     <div> Godiste: {{$r->godiste}}</div>


    <a href="/kamion/public/kamion/{{$r->id}}/edit" class="btn btn-defualt">Izmeni</a>
    {!!Form::open(['action'=>['App\Http\Controllers\KamionController@destroy',$r->id,
    'method'=>'POST','class'=>'pull-right']])!!}
    {!!Form::hidden('_method','DELETE')!!}
    {!!Form::submit('Izbrisi',['class'=>'btn btn-danger'])!!}
    {!!Form::close()!!}
@endsection
