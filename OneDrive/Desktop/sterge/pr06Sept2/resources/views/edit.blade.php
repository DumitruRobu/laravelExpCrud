
@extends('layouts.layout')

@section('doc_title', "Create Page")

@section('content')

    <h3>Editam utilizatori noi:</h3>
    <form id="formCreate" action="{{route('UpdateUtilizator', ["id"=>$id->id])}}" method="POST">
        @csrf
        @method("PATCH")
        <input type="text" placeholder="nume" name="nume" value="{{$id->nume}}">
        @error('nume')
        <span>*{{$message}}</span>
        @enderror

        <select name="gen">

            <option {{$id->gen === "Masculin" ? "selected" : ""}}>Masculin</option>
            <option {{$id->gen === "Feminin" ? "selected" : ""}}>Feminin</option>
        </select>
        @error('gen')
        <span>*{{$message}}</span>
        @enderror


        <input type="text" placeholder="imagine" name="imagine" value="{{ old('imagine') ? old('imagine') : $id->imagine}}">
        @error('imagine')
        <span>*{{$message}}</span>
        @enderror

        <select name="imputerniciri_id">
            <option {{$id->imputerniciri_id == 1 ? "selected" : ""}}>User</option>
            <option {{$id->imputerniciri_id == 2 ? "selected" : ""}}>Moderator</option>
            <option {{$id->imputerniciri_id == 3 ? "selected" : ""}}>Administrator</option>
            <option {{$id->imputerniciri_id == 4 ? "selected" : ""}}>Owner</option>
        </select>
        @error('imputerniciri_id')
        <span>*{{$message}}</span>
        @enderror

        <select multiple name="subiecte[]">
            @foreach($subiecte as $s)
                <option {{ $subiecteUtilizator->contains($s->titlu) ? "selected" : "" }} value="{{$s->id}}"> {{$s->titlu}} </option>
            @endforeach
        </select>
        @error('subiecte')
        <span>*{{$message}}</span>
        @enderror
        <button>Edit</button>


    </form>
@endsection
