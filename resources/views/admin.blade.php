<x-app-layout>
    <x-slot name='header'>
        <strong class="mt-2">The Admin Panel</strong>
    </x-slot>
    
    <script>
        function users(){
            document.getElementById("tickets-div").style.display = 'none'
            document.getElementById("password-div").style.display = 'none'
            document.getElementById("users-div").style.display = 'flex'
            document.getElementById("admin-tickets").style.display = 'none'
            document.getElementById("admin-users").style.display = 'flex'
        }

        function tickets(){
            document.getElementById("users-div").style.display = 'none'
            document.getElementById("password-div").style.display = 'none'
            document.getElementById("tickets-div").style.display = 'flex'
            document.getElementById("admin-users").style.display = 'none'
            document.getElementById("admin-tickets").style.display = 'flex'
        }

        function password(){
            document.getElementById("users-div").style.display = 'none'
            document.getElementById("tickets-div").style.display = 'none'
            document.getElementById("password-div").style.display = 'flex'
            document.getElementById("admin-tickets").style.display = 'none'
            document.getElementById("admin-users").style.display = 'none'
        }
        function filter() {
            document.getElementById("tickets-table").style.display = 'none'
            document.getElementById("tickets-filter").style.display = 'flex'
        }
    </script>

    <div class="d-flex">
        <div class="column col-2 mt-1 mx-2">
            <img src="{{ asset(Auth::user()->profile->avatar) }}" style="height: 200px; width:auto; border-radius:50%" class="my-2 ml-5">
            <div class="card" style="background-color: #242424; color: white;">
                <table class="table table-dark table-hover table-borderless" style="color: white; border:#242424;">
                    <thead style="text-align: center;">
                        <tr>
                            <th scope="col">Main Menu</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td onclick="users()" scope="row">Users</td>                    
                        </tr>
                        <tr>
                            <td onclick="tickets()" scope="row">Tickets</td>
                        </tr>
                        <tr>
                            <td onclick="password()" scope="row">Change Password</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        
        <div class="content bg-white card col-9 mt-2 pt-2 mx-2" id="users-div" style="display: none;">
            <h4 class="pt-2" style="text-align:center;"><strong>List of All Users in the System</strong></h4>   
            <table class="table table-hover">
                <thead>
                    <tr class="table-dark">
                        <th scope="col">Id</th>
                        <th scope="col">Name</th>
                        <th scope="col">Username</th>
                        <th scope="col">Email</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $user)
                        <tr>
                            <td scope="row">{{ $user->id }}</td>
                            <td scope="row">{{ $user->name }}</td>
                            <td scope="row">{{ $user->username }}</td>
                            <td scope="row">{{ $user->email }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>        
        
        <div class="content bg-white card col-10 mt-2 py-2 mx-2" id="tickets-div" style="display: flex;">

            <h4 class="pt-2" style="text-align:center;"><strong>Tickets in the System</strong></h4>
            <form action="{{ action('AdminController@index') }}" method="GET">
                @csrf
                <div class="form-group d-flex align-items-center ml-10">
                    <label for="filter" class="mr-3"><strong>Filter by Department:</strong></label>
                    <div class="col-3">
                        <select class="form-control" name="filter" id="filter">
                            <option value="ICT">ICT</option>
                            <option value="RECAS">Recas</option>
                            <option value="HR">Human Resource</option>
                            <option value="Catering">Catering</option>
                            <option value="House Keeping">House Keeping</option>
                            <option value="Maintenance">Maintenance</option>
                            <option value="Accomodation">Accomodation</option>
                            <option value="Accounting">Accounting</option>
                            <option value="Procurement">Procurement</option>
                        </select>
                    </div>
                    <div>
                        <button type="submit" class="btn btn-sm ml-10" style="background-color: #242424; color: white;" onclick="filter()">Filter</button>
                    </div>
                </div>
            </form>
            <div class="pt-2" id="tickets-table" style="display: flex;">
                <!-- All the Tickets -->
                <table class="table table-hover" >
                    <thead>
                        <tr class="table-dark">
                            <th scope="col">Id</th>
                            <th scope="col">Ticket Number</th>
                            <th scope="col">Title</th>
                            <th scope="col">Designation</th>
                            <th scope="col">Priority</th>
                            <th scope="col">Description</th>
                        </tr>
                    </thead>
                    <tbody>                        
                        @foreach ($tickets as $ticket)
                            <tr>
                                <td scope="row">{{ $ticket->id }}</td>
                                <td scope="row">{{ $ticket->ticket_number }}</td>
                                <td scope="row">{{ $ticket->title }}</td>
                                <td scope="row">{{ $ticket->designation }}</td>
                                <td scope="row">{{ $ticket->priority }}</td>
                                <td scope="row">{{ $ticket->description }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>                
            </div>

            <!-- Filtered Tickets -->
            <div class="py-2" id="tickets-filter" style="display: none;">
                <table class="table table-hover" >
                    <thead>
                        <tr class="table-dark">
                            <th scope="col">Id</th>
                            <th scope="col">Ticket Number</th>
                            <th scope="col">Title</th>
                            <th scope="col">Designation</th>
                            <th scope="col">Priority</th>
                            <th scope="col">Description</th>
                        </tr>
                    </thead>
                    <tbody>                        
                        @foreach ($ftickets as $fticket)
                            <tr>
                                <td scope="row">{{ $ticket->id }}</td>
                                <td scope="row">{{ $ticket->ticket_number }}</td>
                                <td scope="row">{{ $ticket->title }}</td>
                                <td scope="row">{{ $ticket->designation }}</td>
                                <td scope="row">{{ $ticket->priority }}</td>
                                <td scope="row">{{ $ticket->description }}</td>
                            </tr>
                        @endforeach                        
                    </tbody>
                </table>
            </div>
            
        </div>     

        <div class="content bg-white card col-9 mt-2 py-2 mx-2" id="password-div" style="display: none;">Change Password</div>      
    </div>
    <div class="d-flex col-12 justify-end">
        <button class="btn my-3" id="admin-users" style="margin-right: 100px; background-color: #242424; color:white; display:none">Create New User</button>
    </div>
    <div class="d-flex col-12 justify-end">
        <button class="btn my-3" id="admin-tickets" style="margin-right: 100px; background-color: #242424; color:white; display:flex">Create New Ticket</button>
    </div>
    
</x-app-layout>