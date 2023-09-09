<style>
    #userDiv img{
        width: 150px;
    }
    #userDiv:hover{
        background-color: darkseagreen;
        cursor: pointer;
    }
    #userDiv {
        background-color: darkolivegreen;
        width: 250px;
        height: 300px;
        padding: 30px;

    }
    #userDiv p{
        font-size: 15px;
    }

    #mainDiv{
        display: flex;
        flex-direction: row;
        flex-wrap: wrap;
        width: 80%;
        gap: 25px;
        align-items: center;
        justify-content: center;
        margin: auto;


    }

</style>
@extends('layouts.layout')

@section('doc_title', "Create Page")

@section('content')

    <div id="mainDiv">

        @foreach($totiUtilizatorii as $u)
            <div id="userDiv"><a href="{{route('ViewUtilizator', ['id' => $u->id]) }}">
                <img src="{{$u->imagine}}">
                <p>{{$u->nume}}</p>
                <p>{{$u->gen}}</p>
                <p>Imputerniciri:
                    @if($u->imputerniciri_id == 1) user
                    @elseif($u->imputerniciri_id == 2) moderator
                    @elseif($u->imputerniciri_id == 3) administrator
                    @elseif($u->imputerniciri_id == 4) owner
                    @else
                    @endif
                </p>
                </a>
            </div>

        @endforeach
    </div>
@endsection
