<?php
$modais = [
    [
        'modalId' => 'portfolioModal1',
        'modalTitle' => 'Cabana',
        'modalText' => "Texto passado com parametros para o modal",
        'modalImage' => '/freelancer/assets/img/portfolio/cabin.png'
],
[
        'modalId' => 'portfolioModal2',
        'modalTitle' => 'Bolo',
        'modalText' => "Texto passado com parametros o para o bolo",
        'modalImage' => '/freelancer/assets/img/portfolio/cake.png'
],
[
        'modalId' => 'portfolioModal3',
        'modalTitle' => 'Circo',
        'modalText' => "Texto passado com parametros o para o circo",
        'modalImage' => '/freelancer/assets/img/portfolio/circus.png'
],
[
        'modalId' => 'portfolioModal4',
        'modalTitle' => 'Nintendo',
        'modalText' => "Texto passado com parametros o para o game",
        'modalImage' => '/freelancer/assets/img/portfolio/game.png'
],
[
        'modalId' => 'portfolioModal5',
        'modalTitle' => 'Cofre',
        'modalText' => "Texto passado com parametros o para o safe",
        'modalImage' => '/freelancer/assets/img/portfolio/safe.png'
],
[
        'modalId' => 'portfolioModal6',
        'modalTitle' => 'Submarino',
        'modalText' => "Texto passado com parametros o para o submarino",
        'modalImage' => '/freelancer/assets/img/portfolio/submarine.png'
]
];
?>
@extends('freelancer.layout')

@section('body')
    @include('freelancer.components.nav')
    @include('freelancer.components.masterhead')
    @include('freelancer.components.portifolio')
    @include('freelancer.components.about')
    @include('freelancer.components.contact')
    @include('freelancer.components.footer')
    @include('freelancer.components.copyright')


    @foreach ($modais as $modal)
        @include('freelancer.components.modal',[
            'modalId' => $modal['modalId'],
            'modalTitle' => $modal['modalTitle'],
            'modalText' => $modal['modalText'],
            'modalImage' => $modal['modalImage']
        ])
    @endforeach

@endsection