<x-app-layout>
    <x-slot name='header'>
        <strong class="mt-2">The Admin Panel</strong>
    </x-slot>
    <script>
        function details(){
            document.getElementById("tickets-div").style.display = 'none'
            document.getElementById("history-div").style.display = 'none'
            document.getElementById("details-div").style.display = 'flex'
        }
        function tickets(){
            document.getElementById("details-div").style.display = 'none'
            document.getElementById("history-div").style.display = 'none'
            document.getElementById("tickets-div").style.display = 'flex'
        }
        function history(){
            document.getElementById("details-div").style.display = 'none'
            document.getElementById("tickets-div").style.display = 'none'
            document.getElementById("history-div").style.display = 'flex'
        }
    </script>

    <div class="d-flex">
    <div class="column col-2 mt-1 mx-2">
        <img src="{{ asset('ksg-logo.png') }}" style="height: 100px; width:auto;" class="my-2 ml-5">
        <div class="card" style="background-color: #242424; color: white;">
            <table class="table table-dark table-hover table-borderless" style="color: white; border:#242424;">
                <thead style="text-align: center;">
                    <tr>
                        <th scope="col">Main Menu</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td onclick="details()" scope="row">Users</td>                    
                    </tr>
                    <tr>
                        <td onclick="tickets()" scope="row">Tickets</td>
                    </tr>
                    <tr>
                        <td onclick="history()" scope="row">History</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div id="details">
        <div class="content bg-white card col-9 mt-2 py-2 mx-2" id="details-div" style="display: none;">Users</div>        
        <div class="content bg-white card col-9 mt-2 py-2 mx-2" id="tickets-div" style="display: none;">Tickets</div>        
        <div class="content bg-white card col-9 mt-2 py-2 mx-2" id="history-div" style="display: none;">History</div>        
    </div>
    
</x-app-layout>