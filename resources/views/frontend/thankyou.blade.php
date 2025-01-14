@extends('frontend.layout.app')
@section('title',
    'thankyou voyage inde découvrez nos lieux populaires
    ')
@section('description',
    'Obtenez des informations détaillées sur les voyages en Inde avec un guide, ses attractions touristiques telles que la
    faune, les stations de montagne, les plages, l aventure, les pèlerins et les circuits inde ,
    ')
@section('keywords',
    'touropérateurenInde,circuitaurajasthanenInde,voyagesurmesureenInde,guidefrancophoneagencedevoyage')
@section('content')

    <div class="thank-you-container" style="text-align: center; margin-top: 50px;">
        <h1>Merci!</h1>
        <p>Votre demande a été soumise avec succès.</p>
        <p>Nous apprécions votre intérêt et vous répondrons sous peu.</p>
        <a href="{{ url('/') }}" class="btn btn-primary"
            style="display: inline-block; margin-top: 20px;margin-bottom: 130px;">
            Retour à l'accueil
        </a>
    </div>
    <script src="{{ asset('js/script.js') }}"></script>
@endsection
