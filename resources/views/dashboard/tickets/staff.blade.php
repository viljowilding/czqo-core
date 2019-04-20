@extends('layouts.master')

@section('navbarprim')

    @parent

@stop

@section('content')
    <div class="container" style="margin-top: 20px;">
        <h2>Ticket Inbox</h2>
        <ul class="nav nav-tabs" id="myTab" role="tablist">
            <li class="nav-item">
                <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">
                    Open Tickets
                    @if (count($openTickets) >= 1)
                        <span class="badge-pill badge-primary">{{count($openTickets)}}</span>
                    @endif
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Closed Tickets</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">On Hold Tickets</a>
            </li>
        </ul>
        <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                @if (count($openTickets) < 1)
                    No open tickets.
                @else
                    <p>Returned {{count($openTickets) }} tickets</p>
                    <table id="dataTable" class="table table-hover">
                        <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Author</th>
                            <th scope="col">Title</th>
                            <th scope="col">Replies</th>
                            <th scope="col">Submitted</th>
                            <th scope="col">View</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($openTickets as $ticket)
                            <tr>
                            <th scope="row">#{{$ticket->ticket_id}}</th>
                            <td>{{App\User::find($ticket->user_id)->fname}} {{App\User::find($ticket->user_id)->lname}} {{App\User::find($ticket->user_id)->id}}</td>
                            <td>{{$ticket->title}}</td>
                            <td>{{count($ticket->replies)}}</td>
                            <td>{{$ticket->submission_time}}</td>
                            <td>
                                <a href="{{url('/dashboard/tickets/'.$ticket->ticket_id)}}"><i class="fa fa-eye"></i></a>
                            </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                @endif
            </div>
            <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                @if (count($closedTickets) < 1)
                    No closed tickets.
                @else
                    <p>Returned {{count($closedTickets) }} tickets</p>
                    <table id="dataTable" class="table table-hover">
                        <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Author</th>
                            <th scope="col">Title</th>
                            <th scope="col">Replies</th>
                            <th scope="col">Submitted</th>
                            <th scope="col">View</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($closedTickets as $ticket)
                            <tr>
                            <th scope="row">#{{$ticket->ticket_id}}</th>
                            <td>{{App\User::find($ticket->user_id)->fname}} {{App\User::find($ticket->user_id)->lname}} {{App\User::find($ticket->user_id)->id}}</td>
                            <td>{{$ticket->title}}</td>
                            <td>{{count($ticket->replies)}}</td>
                            <td>{{$ticket->submission_time}}</td>
                            <td>
                                <a href="{{url('/dashboard/tickets/'.$ticket->ticket_id)}}"><i class="fa fa-eye"></i></a>
                            </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                @endif
            </div>
            <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                @if (count($onHoldTickets) < 1)
                    No on hold tickets.
                @else
                    <p>Returned {{count($onHoldTickets) }} tickets</p>
                    <table id="dataTable" class="table table-hover">
                        <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Author</th>
                            <th scope="col">Title</th>
                            <th scope="col">Replies</th>
                            <th scope="col">Submitted</th>
                            <th scope="col">View</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($onHoldTickets as $ticket)
                            <tr>
                            <th scope="row">#{{$ticket->ticket_id}}</th>
                            <td>{{App\User::find($ticket->user_id)->fname}} {{App\User::find($ticket->user_id)->lname}} {{App\User::find($ticket->user_id)->id}}</td>
                            <td>{{$ticket->title}}</td>
                            <td>{{count($ticket->replies)}}</td>
                            <td>{{$ticket->submission_time}}</td>
                            <td>
                                <a href="{{url('/dashboard/tickets/'.$ticket->ticket_id)}}"><i class="fa fa-eye"></i></a>
                            </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                @endif
            </div>
        </div>
    </div>
@stop