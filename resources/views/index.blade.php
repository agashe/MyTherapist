@extends('layouts.master')

@section('title', 'MyTherapist')

@section('content')
    <div class="row p-0">
        @forelse ($therapists as $therapist)
            <div class="col-md-4 mb-4">
                <div class="card text-center">
                    <div class="card-body px-1">
                        <img src="{{ $therapist->avatar }}" alt="Therapist">
                        <h5 class="card-title mb-0">{{ $therapist->name }}</h5>
                        <span class="badge">{{ $therapist->title }}</span>
                        
                        <div class="stars my-3">
                            @for ($i = 0; $i < 5; $i++)
                                @if ($i < floor($therapist->rate)) 
                                    <span class="fa fa-star"></span>
                                @else
                                    <span class="fa fa-star-o"></span>
                                @endif
                            @endfor

                            <span>{{ "$therapist->rate ($therapist->reviews Rev)" }}</span>
                        </div>

                        <p class="card-text bio">{{ $therapist->bio }}</p>

                        <div class="my-3">
                            <span class="fa fa-money"></span> {{ "$therapist->fees EGP"}}
                            <span class="fa fa-play ml-3"></span> {{ "$therapist->sessions Sessions"}}
                        </div>

                        <a href="" class="btn btn-info"><span class="fa fa-eye"></span> View Profile</a>
                        <a href="#" class="btn btn-success" data-toggle="modal" data-target="#booking-modal"><span class="fa fa-book"></span> Book Now</a>
                    </div>
                </div>
            </div>
        @empty
            <div class="w-100 text-center">
                <h3>Sorry, no results found!</h3>
            </div>
        @endforelse
    </div>

    <!-- Booking Modal -->
    <div class="modal fade" id="booking-modal" tabindex="-1" role="dialog" aria-labelledby="booking-modal-label" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="booking-modal-label">Please select time slot :</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-4 mb-4">
                            <div class="card text-center">
                                <div class="card">
                                    <div class="card-header">
                                        Today (29/9)
                                    </div>
                                    <div class="card-body">
                                        <div class="list-group">
                                            <a href="#" class="list-group-item list-group-item-action">
                                                <p>09:30AM to</p>
                                                <p>10:30AM</p>
                                            </a>
                                            <a href="#" class="list-group-item list-group-item-action">
                                                <p>11:00AM to</p>
                                                <p>01:00PM</p>
                                            </a>
                                            <a href="#" class="list-group-item list-group-item-action">
                                                <p>01:30PM to</p>
                                                <p>03:30PM</p>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 mb-4">
                            <div class="card text-center">
                                <div class="card">
                                    <div class="card-header">
                                        Tomorrow (30/9)
                                    </div>
                                    <div class="card-body">
                                        <div class="list-group">
                                            <a href="#" class="list-group-item list-group-item-action">
                                                <p>09:30AM to</p>
                                                <p>10:30AM</p>
                                            </a>
                                            <a href="#" class="list-group-item list-group-item-action">
                                                <p>11:00AM to</p>
                                                <p>01:00PM</p>
                                            </a>
                                            <a href="#" class="list-group-item list-group-item-action">
                                                <p>01:30PM to</p>
                                                <p>03:30PM</p>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 mb-4">
                            <div class="card text-center">
                                <div class="card">
                                    <div class="card-header">
                                        Thursday (1/10)
                                    </div>
                                    <div class="card-body">
                                        <div class="list-group">
                                            <a href="#" class="list-group-item list-group-item-action">
                                                <p>09:30AM to</p>
                                                <p>10:30AM</p>
                                            </a>
                                            <a href="#" class="list-group-item list-group-item-action">
                                                <p>11:00AM to</p>
                                                <p>01:00PM</p>
                                            </a>
                                            <a href="#" class="list-group-item list-group-item-action">
                                                <p>01:30PM to</p>
                                                <p>03:30PM</p>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary btn-lg mx-auto">Book Now</button>
                </div>
            </div>
        </div>
    </div>
@endsection