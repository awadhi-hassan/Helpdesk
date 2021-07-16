<x-app-layout>
    <x-slot name='header'>
        <strong>Create Your ticket</strong>
    </x-slot>

    <div class="py-5">
        <form action="" method="POST">
            <div>
                <label for="text">Title</label><br>
                <input type="text" name="title" placeholder="title"/>
            </div>

            <div>
                <label for="designation">Designation</label><br>
                <select name="designation" id="designation">
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

            <div>
                <label for="priority">Priority</label><br>
                <select name="priority" id="priority">
                    <option value="high">High</option>
                    <option value="medium">Medium</option>
                    <option value="low">Low</option>
                </select>
            </div>

            <div>
                <label for="dec">Description</label><br>
                <textarea name="desc" id="desc" cols="35" rows="5" placeholder="please describe the problem you are facing..."></textarea>
            </div>

            <div>
                <label for="pic">Sample Picture</label><br>
                <input type="file" name="pic" id="pic">
            </div>

        </form>
    </div>
</x-app-layout>