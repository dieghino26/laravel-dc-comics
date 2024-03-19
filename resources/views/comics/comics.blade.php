@extends('layouts.layout')

@section('main-content')
    <section>

        <div class="comics">
            <h2>Current Series</h2>
            <div class="card-container">
                @foreach (config('comics') as $comic)
                    <div class="card">
                        <a href="{{ route('comic', $loop->index) }}">
                            <figure>
                                <img src="{{ $comic['thumb'] }}" :alt="img comic">
                            </figure>
                            <span>{{ $comic['series'] }}</span>
                        </a>
                    </div>
                @endforeach
            </div>
            <div class="button">
                <button role="button">LOAD MORE</button>
            </div>
        </div>
    </section>
@endsection
