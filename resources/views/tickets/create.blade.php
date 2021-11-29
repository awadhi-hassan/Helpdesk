<x-app-layout>
    <x-slot name='header'>
        <strong>Create Your ticket</strong>
    </x-slot>

    <div class="py-3">
        <div class="mt-4 bg-white max-w-5xl mx-auto">
            <div class="container d-flex justify-content-center">
                <div class="col-7">

                    <form action="{{ route('ticket.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group my-2">
                            <label for="text"><b>Title</b></label><br>
                            <input class="form-control" type="text" name="title" :value="old('title')" placeholder="title"/>
                        </div>
            
                        <div class="form-group my-2">
                            <label for="designation"><b>Designation</b></label><br>
                            <select class="form-control" name="designation" :value="old('designation')" id="designation">
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
            
                        <div class="form-group my-2">
                            <label for="priority"><b>Priority</b></label><br>
                            <select class="form-control" name="priority" id="priority" :value="old('priority')">
                                <option value="High">High</option>
                                <option value="Medium">Medium</option>
                                <option value="Low">Low</option>
                            </select>
                        </div>
            
                        <div class="form-group my-2">
                            <label for="dec"><b>Description</b></label><br>
                            <textarea class="form-control" name="desc" :value="old('desc')" id="desc" cols="35" rows="5" placeholder="please describe the problem you are facing..."></textarea>
                        </div>
            
                        <div class="form-group my-2">
                            <label for="pic"><b>Sample Picture</b></label><br>
                            <input class="form-control-file" type="file" name="pic" id="pic">
                        </div>

                        <div class="form-group my-2 d-flex justify-content-end">
                            <button class="btn" type="submit" style="color:white; background-color: #242424;">Create Ticket</button>
                        </div>

                    </form>

                </div>    
            </div>
        </div>
    </div>
</x-app-layout>