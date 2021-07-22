<x-app-layout>
    <x-slot name='header'>
        <strong>Create Your ticket</strong>
    </x-slot>

    <div class="py-3">
        <div class="container d-flex justify-content-center">
            <div class="col-7">

                <form action="" method="POST">
                    @csrf_token
                    <div class="form-group my-2">
                        <label for="text"><b>Title</b></label><br>
                        <input class="form-control" type="text" name="title" :value="old('title')" placeholder="title"/>
                    </div>
        
                    <div class="form-group my-2">
                        <label for="designation"><b>Designation</b></label><br>
                        <select class="form-control" name="designation" :value="old('designation')" id="designation">
                            <option value="ict">ICT</option>
                            <option value="recas">Recas</option>
                            <option value="hr">Human Resource</option>
                            <option value="catering">Catering</option>
                            <option value="hk">House Keeping</option>
                            <option value="aintenance">Maintenance</option>
                            <option value="accomodation">Accomodation</option>
                            <option value="accounting">Accounting</option>
                            <option value="procurement">Procurement</option>
                        </select>
                    </div>
        
                    <div class="form-group my-2">
                        <label for="priority"><b>Priority</b></label><br>
                        <select class="form-control" name="priority" id="priority" :value="old('priority')">
                            <option value="high">High</option>
                            <option value="medium">Medium</option>
                            <option value="low">Low</option>
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
                        <button class="btn btn-primary" type="submit">Create Ticket</button>
                    </div>

                </form>

            </div>    
        </div>
    </div>
</x-app-layout>