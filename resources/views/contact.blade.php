<x-app-layout>
    <x-slot name="header">
        <strong>Contact Us</strong>
    </x-slot>

    <div id="contact-container">
        <div class="mt-3 d-flex justify-center">
            <strong>Do you have any questions issues or concerns, we would love to hear from you.</strong>
        </div>
        <div class="my-5 d-flex justify-content-around">
            <div class="card col-3" style="text-align: center; border-radius: 10px;"  id="contact-cards">
                <div class="card-header" style="background-color: #242424; border-top-right-radius: 10px; border-top-left-radius: 10px"></div>
                <strong style="padding-top: 20px;">Phone</strong>
                <p>Our help desk is dedicated to pic your calls 24 ghours everyday 7 days a week</p>
                <strong>Numbers</strong>
                <div class="ml-1" style="text-align: left;">
                    Admissions office<br>
                    Kenya School of Government<br>
                </div>
                <div class="d-flex ml-1">
                    Tel: <br>
                    <div class="ml-1">
                        +254 792718171<br>
                        +254 743266536<br>
                        +254 113000305
                    </div>
                </div>
            </div>
            <div class="card col-3" style="text-align: center; border-radius: 10px;" id="contact-cards">
                <div class="card-header" style="background-color: #242424; border-top-right-radius: 10px; border-top-left-radius: 10px"></div>
                <strong style="padding-top: 20px;">Inquiries</strong>
                <p>Hit the bellow button to submit any inquiries you have about the Kenya School of Government Embu Campus</p>
                <div class="pb-3">
                    <button class="btn" style="background-color: #242424;  color: white;">Inquiries</button>
                </div>
                
            </div>
            <div class="card col-3" style="text-align: center; border-radius: 10px;" id="contact-cards">
                <div class="card-header" style="background-color: #242424; border-top-right-radius: 10px; border-top-left-radius: 10px"></div>
                <strong style="padding-top: 20px;">Email</strong>
                <p style="padding:2px">Send us an email through the folowing address and we will get back to you as fast as we possibly can.</p>
                <strong>Addresses</strong>
                <div class="d-flex ml-1">
                    Email: <br>
                    <div style="text-align: left;" class="ml-1">
                        info.embu@ksg.ac.ke<br>
                        admissions.embu@ksg.ac.ke<br>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

