@extends('include.layout')
@section('container')
    <div class="shadow p-3 mb-5  rounded" style="min-height:148px; background-color:#FFEAF1; "><br><br>

       <center> <strong style="font-size:32px; padding:100px; margin:50px; ">Votre message a été bien envoyé!&nbsp; Merci de votre attention.</strong></center>

    </div>
    <center>
            <img src="{{ asset('images/message.png') }}" alt="" style="width: 50%; height:50%;">
    </center><br>
    <center><a class="btn btn-dark btn-lg" href="{{route('accueil')}}" role="button"><strong style="font-size: 30px;">Retour</strong> </a></center><br><br><br>
   
@endsection
