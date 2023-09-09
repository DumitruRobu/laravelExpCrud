<style>

    #usersInfo{
        display: flex;
        flex-direction: column;

        align-items: center;
        justify-content: center;
        margin: auto;
        color:white;
    }
    img{
        width: 200px;
    }
    button{
        background-color: #718096;
    }


</style>
@extends('layouts.layout')

@section('doc_title', "Create Page")

@section('content')
    <div id="usersInfo">
        <img src="{{$utilizator->imagine}}">
        <p>Nume: {{$utilizator->nume}}</p>
        <p>Gen: {{$utilizator->gen}}</p>
        <p>Imputerniciri:
            @if($utilizator->imputerniciri_id == 1) user
            @elseif($utilizator->imputerniciri_id == 2) moderator
            @elseif($utilizator->imputerniciri_id == 3) administrator
            @elseif($utilizator->imputerniciri_id == 4) owner
            @else
            @endif
        </p>

        <p>Interese:
            <ol>
                @foreach($subiecteleUtilizatorului as $s)
                    <li>{{$s}}</li>
                @endforeach
            </ol>
        </p>
        <button><a href="{{route('EditUtilizator', ['id'=> $utilizator->id])}}">Edit</a></button>

        <form action="{{route('DeleteUtilizator', ['id'=> $utilizator->id])}}" method="POST">
            @csrf
            @method("DELETE")
            <button>Delete</button>
        </form>


    </div>

@endsection
