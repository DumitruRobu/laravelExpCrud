@extends('layouts.layout')

@section('doc_title', "Create Page")

@section('content')


            <h3>Cream utilizatori noi:</h3>


        <form id="formCreate" action="{{route('StoreUtilizatori')}}" method="POST">
            @csrf
            <input type="text" placeholder="nume" name="nume" value="{{old('nume')}}">
            @error('nume')
            <span>*{{$message}}</span>
            @enderror

            <select name="gen" >
                <option value="Masculin" {{old('gen') === "Masculin" ? "selected": ''}}>Masculin</option>
                <option value="Feminin" {{old('gen') === "Feminin" ? "selected": ''}}>Feminin</option>
            </select>
            @error('gen')
            <span>*{{$message}}</span>
            @enderror

            <input type="text" placeholder="imagine" name="imagine" value="{{old('imagine')}}">
            @error('imagine')
            <span>*{{$message}}</span>
            @enderror

            <select name="imputerniciri_id">
                @foreach($imputerniciri as $i)
                    <option value="{{$i->id}}" {{old('imputerniciri_id') == $i->id ? "selected" : '' }}>{{$i->imputerniciri}}</option>
                @endforeach
            </select>
            @error('imputerniciri_id')
            <span>*{{$message}}</span>
            @enderror


            <select multiple name="subiecte[]">
                @foreach($subiecte as $s)
                    <option value="{{$s->id}}" {{in_array($s->id, old('subiecte', [])) ? "selected" : '' }}>{{$s->titlu}}</option>
                @endforeach
            </select>



            @error('subiecte')
            <span>*{{$message}}</span>
            @enderror

            <button>Create</button>
        </form>



@endsection
