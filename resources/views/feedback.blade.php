<x-app-layout>
    <x-slot name="header">
        <strong>Give your Feedback</strong>
    </x-slot>
    <div class="mt-4"  style="margin-left: 285px;">
        <strong>Your feedback helps us Identify opportunities fo change that will enable us</strong><br>
        <strong>serve you better</strong>
    </div>
    <div class="d-flex justify-center my-2">
        <div class="card col-7 bg-white py-2">
            <form action="">
                <div class="form-group my-2 mx-3">
                    <label for="category"><b>Category</b></label>
                    <select class="form-control" name="category" id="category">
                        <option value=""></option>
                        <option value="Suggestion">Suggestion</option>
                        <option value="Complaint">Complaint</option>
                        <option value="Complement">Complement</option>
                        <option value="Recommendation">Recommendation</option>
                        <option value="Review">Review</option>
                    </select>
                </div>
                <div class="form-group my-2 mx-3">
                    <label for="designation"><b>Designation</b></label>
                    <select class="form-control" name="designation" :value="old('designation')" id="designation">
                        <option value=""></option>
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
                <div class="form-group my-2 mx-3">
                    <label for="subject"><b>Feedback</b></label>
                    <textarea class="form-control my-2" name="subject" id="subject" cols="35" rows="5" placeholder="Kindly write your comment, complement, complaint, suggestion, recomendation or review here...."></textarea>
                </div>
                <div class="form-group d-flex justify-end my-2 mx-3">
                    <button type="submit" class="btn" style="color: white; background-color: #242424;">Submit Feedback</button>
                </div>
            </form>
        </div>
    </div>
</x-app-layout>