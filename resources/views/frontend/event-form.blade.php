@extends('frontend.layout.main-after')
@section('main2.container')


    {{-- ===========================================
                    PAGE HEADER
    =========================================== --}}
    <section class="page-header-section style-1 breadcrumb-section">
        <div class="container">
            <div class="page-header-content">
                <div class="page-header-inner">
                    <div class="page-title">
                        <h2>Event</h2>
                    </div>
                    <ol class="breadcrumb">
                        <li><a href="profile">Home</a></li>
                        <li>-</li>
                        <li class="active">Event Form</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>


    {{-- ===========================================
                    EVENT FORM SECTION
    =========================================== --}}
    <section class="event-form-section container-fluid">
        <div>
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <div class="event-img">
                        <img src="{{ asset('assets/images/event-form.jpg') }}" alt="" class="w-100 h-100">
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 my-auto">
                    <div class="event-form text-center">
                        <div class="event-form-header">
                            <h6>Submit an event form</h6>
                        </div>
                        <form action="events" method="POST">
                            @csrf
                            <div class="group-input">
                                <input type="text" name="event_date" class="flex-fill" placeholder="Event Date" onfocus="(this.type='date')" required>
                            </div>
                            <div class="group-input">
                                <input type="text" name="event_duration" class="flex-fill" placeholder="Event Time" onfocus="(this.type='time')" required>
                            </div>
                            <div class="group-input">
                                <input type="text" name="event_location" class="flex-fill" placeholder="Location" required>
                            </div>
                            <select name="event_name" class="form-select group-input" aria-label="Default select example">
                                <option selected>Event Name</option>
                                <option value="Travel">Travel</option>
                                <option value="Lunch">Lunch</option>
                                <option value="Dinner">Dinner</option>
                            </select>
                            <div class="group-input">
                                <input type="text" name="event_des" class="flex-fill" placeholder="Event Description" required>
                            </div>
                            <div class="group-input">
                                <button type="submit">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>




@endsection
