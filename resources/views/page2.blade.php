@extends('layouts/main-layout')


@section('content')


<main id="page2-main">

    {{-- jumbo section --}}
    <section id="jumbo"></section>

    {{-- back to homepage section --}}
    <section id="back-to-homepage" class="d-flex justify-content-center align-items-center">

        <div class="container">

            <div id="back-home" class="d-flex justify-content-center align-items-center">
                <a href="{{route('home')}}"><button>Torna alla pagina principale</button></a>

                <div id="series-cover-container">
                    <img src="{{Vite::asset('resources/img/cover.png')}}" alt="">
                </div>
            </div>

        </div>

    </section>

    <section id="comic-info">

        <div class="container d-flex gap-4 pt-4 pb-4">

            <div id="comic-text-info">

                <h3>ACTION COMICS #1000: THE DELUXE EDITION</h3>

                <div id="buy-info" class="d-flex">

                    <div id="comic-price" class="flex-grow-1">
                        <div class="green d-flex justify-content-between px-3">
                            <div> U.S. Price: <span>$19.99</span></div><div>Available</div>
                        </div>
                    </div>

                    <div id="comic-availability">
                        <div class="green"><span>Check Availability</span></div>
                    </div>
                </div>

                <div id="caption">
                    <p>The celebration of 1.000 issues of Action Comics continues with a new. Deluxe Edition of the amazing comic that won raves when it hit comics shops in April! This hardcover includes all the stories from that issue, plus the tale by writer Paul Levitz and artist Neal Adams that appeared in the Action Comics: 80 Years Of Superman hardcover, as well as all the variant covers, design sketches by im Lee for Superman's new look, scripts for the stories, the original art from the lost story featuring art by Curt Swan and more! Plus: a complete reprint of the stories that started it all-the Superman stories Action Comics #1 and 2 from 1938!</p>
                </div>
            </div>
            
            <div id="comic-img-info" class="d-flex flex-column align-items-end">
                <span>advertisement</span>
                <img src="{{Vite::asset('resources/img/advertise.jpg')}}" alt="">
                
            </div>
            
        </div>

    </section>




</main>

@endsection