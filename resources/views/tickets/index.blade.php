<x-app-layout>
    <x-slot name='header'>
        <div class="d-flex" style="justify-content: space-around;">
            <strong class="mt-2">My Tickets</strong>
            <a href="{{ route('ticket.create') }}">
                <button class="btn" style="background-color: #242424; color:white"> Create Ticket</button>
            </a>
        </div>
    </x-slot>

    <div class="container py-5">

        <style>
            .css-serial {
                counter-reset: serial-number;  
            }
  
            .css-serial td:first-child:before {
                counter-increment: serial-number;  
                content: counter(serial-number);  
            }
        </style>

        <h4 style="text-align: center;"><b>Your Tickets</b></h4>

        <table class="table table-hover css-serial">
            <thead>
                <tr class="table-dark">
                    <th scope="col">Id</th>
                    <th scope="col">Ticket Number</th>
                    <th scope="col">Title</th>
                    <th scope="col">Designation</th>
                    <th scope="col">Priority</th>
                    <th scope="col">Description</th>
                    <th scope="col">Status</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($tickets as $ticket)
                    <tr>
                        <td scope="row"></td>
                        <td>{{ $ticket->ticket_number }}</td>
                        <td>{{ $ticket->title }}</td>
                        <td>{{ $ticket->designation }}</td>
                        <td>{{ $ticket->priority }}</td>
                        <td>{{ $ticket->description }}</td>
                        <td>Pending</td>
                    </tr>
                @endforeach
            </tbody>
        </table>

    </div>
</x-app-layout>