<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-8">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
           Hi <strong>{{ Auth::user()->name }}</strong>,</br>
            <div class="overflow-hidden shadow-sm sm:rounded-lg">
                <div>
                    <div class="p-6 bg-white flex" style="justify-content: space-around;" id="dashboard">
                        <a style="color: black; text-decoration: none" href="{{ route('ticket.create') }}">
                            <div class="card mt-3" id="ticket" style="padding: 20px;">
                                <div class="flex ml-10">
                                    <img src="{{ asset('ticket.jpeg') }}" style="height: 50px; width: auto;" alt="">
                                    <h5 class="mt-3 ml-2"><b>Create Ticket</b></h5>
                                </div>
                                <div class="container">
                                    <small>Raise an issue you cant fix yourself.</small>
                                </div>
                            </div>
                        </a>
                        <a style="color: black; text-decoration: none" href="">
                            <div class="card mt-3" id="faqs" style="padding: 20px;">
                                <div class="flex ml-10">
                                    <img src="{{ asset('faq.png') }}" style="height: 50px; width: auto;" alt="">
                                    <h5 class="mt-3 ml-2"><b>FAQs</b></h5>
                                </div>
                                <div class="container">
                                    <small>Go through the frequently asked questions.</small>
                                </div>
                            </div>
                        </a>
                        <a style="color: black; text-decoration: none" href="{{ route('contact') }}">
                            <div class="card mt-3" id="contactus" style="padding: 20px;">
                                <div class="flex ml-10">
                                    <img src="{{ asset('contact.png') }}" style="height: 50px; width: auto;" alt="">
                                    <h5 class="mt-3 ml-2"><b>Contact US</b></h5>
                                </div>
                                <div class="container">
                                    <small>Information on how to reach us (phone and mail)</small>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="p-6 bg-white flex" style="justify-content: space-around;" id="dashboard_lower">
                        <a style="color: black; text-decoration: none" href="{{ route('feedback') }}">                        
                            <div class="card mt-3" id="feedback" style="padding: 20px;">
                                <div class="flex ml-10">
                                    <img src="{{ asset('feedback.png') }}" style="height: 50px; width: auto;" alt="">
                                    <h5 class="mt-3 ml-2"><b>Feedback</b></h5>
                                </div>
                                <div class="container">
                                    <small>Give feedback on your XP at KSG</small>
                                </div>
                            </div>
                        </a>
                        <a style="color: black; text-decoration: none" href="">                            
                            <div class="card mt-3" id="forum" style="padding: 20px;">
                                <div class="flex ml-10">
                                    <img src="{{ asset('forum.png') }}" style="height: 50px; width: auto;" alt="">
                                    <h5 class="mt-3 ml-2"><b>Forum</b></h5>
                                </div>
                                <div class="container">
                                    <small class="ml-5">Share your XP with other users</small>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <div class="flex mt-10 justify-end">
                <img src="{{ asset('chat.png') }}" style="height: 60px; width:auto; border-radius:50%;">
            </div>
        </div>
    </div>
</x-app-layout>
<div>

