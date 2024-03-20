@extends('layouts.layout')

@section('main-content')
    <div class="comics">
        <h2>Current Series</h2>
        <div class="card-container">
            <div class="info-card">
                <div class="type">Comic book</div>
                <figure>
                    <img src="{{ $comic->thumb }}" :alt="img comic">
                </figure>
                <div class="gallery">view gallery</div>
                <span>{{ $comic['series'] }}</span>
            </div>
        </div>
    </div>
    <div class="top">
        <div class="container">
            <div class="info">
                <h2><?= $comic['title'] ?></h2>
                <div class="price">
                    <div class="bar">
                        <span><strong>U.S. Price: </strong><?= $comic->price ?></span>
                        <span><strong>AVAILABLE</strong></span>
                    </div>
                    <button role="button">Check Availability <i class="fas fa-caret-down"></i></button>
                </div>
                <p><?= $comic->description ?></p>
            </div>
            <div class="adv">
                <h5>ADVERTISEMENT</h5>
                <figure>
                    <img src="{{ asset('images/adv.jpg') }}" alt="advertisement image">
                </figure>
            </div>
        </div>
    </div>
    <div class="bottom">
        <div class="container">
            <div class="talents">
                <h3>Talent</h3>
                <div class="artists">
                    <strong>Art by:</strong>
                    <p>{{ $comic->artists }}</p>
                </div>
                <div class="writers">
                    <strong>Written by:</strong>
                    <p>{{ $comic->writers }}</p>
                </div>
            </div>
            <div class="specs">
                <h3>Specs</h3>
                <div>
                    <strong>Series:</strong>
                    <span class="comic">{{ $comic->series }}</span>
                </div>
                <div>
                    <strong>U.S. Price:</strong>
                    <span>{{ $comic->price }}</span>
                </div>
                <div>
                    <strong>On Sale Date:</strong>
                    <span>{{ $comic->sale_date }}</span>
                </div>

            </div>
        </div>
    </div>
@endsection
