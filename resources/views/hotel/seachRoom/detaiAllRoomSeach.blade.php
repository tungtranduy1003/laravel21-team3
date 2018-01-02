@extends('hotel.layouts.app')
@section('content')
    @include('hotel.layouts.availabilitySeach')
    <br>
    <!-- start other detect room section -->
    <section class="other_room_area">
        <div class="container">
            <div class="row">
                <div class="other_room">
                    <div class="section_title nice_title content-center">
                        <h3>The rooms you need to find</h3>
                    </div>
                    <div class="section_content">
                        <!-- start single room details -->
                        <div class="accomodation_single_room">
                            <div class="container">
                                <div class="row">
                                    @foreach($rooms as $room)
                                    <div class="col-lg-3 col-md-3 col-sm-3">
                                        <div class="single_room_wrapper clearfix padding-bottom-30">
                                            <figure class="uk-overlay uk-overlay-hover">
                                                <div class="room_media">
                                                    <a href="{{route('room.detailRoom', $room->id )}}"><img src="{{asset('hotel-booking/img/room-image-five.png')}}" alt=""></a>
                                                </div>
                                                <div class="room_title border-bottom-whitesmoke clearfix">
                                                    <div class="left_room_title floatleft">
                                                        <h6>{{$room->roomTypes->name}} Room</h6>
                                                        <p>${{$room->price}}/ <span>DAY</span></p>
                                                    </div>
                                                    <div class="left_room_title floatright">
                                                        <a href="{{route('bookings.add', $room->id)}}"><button class="btn btn-primary floatright" type="button" name="button">BOOK</button></a>
                                                    </div>
                                                </div>
                                            </figure>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                        <!-- end single room details -->
                    </div>
                </div>
            </div>
        </div>
    </section>
@stop