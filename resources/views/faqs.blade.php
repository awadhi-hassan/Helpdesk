<x-app-layout>
    <x-slot name="header">
        <strong>Frequently Asked Questions</strong>
    </x-slot>

    <script>
        function svg_down() {
            document.getElementById('response').style.display = 'flex'
            document.getElementById('svg').src = "{{ asset('up.svg') }}"
            document.getElementById('svg').onclick = svg_up
        }
        
        function svg_up() {
            document.getElementById('svg').onclick = svg_down
            document.getElementById('svg').src = "{{ asset('down.svg') }}"
            document.getElementById('response').style.display = 'none'
        }
        
        function row() {
            //document.getElementById('response').style.display = 'flex'
        }
    </script>

    <div class="container py-4">
        
        KSG Embu campus have come up with some FAQs that other users in our environment school have been experiencing over the years. If none of them work &emsp;for you please feel free to contact our systems administrator. <br>
        
        <table class="table table-hover mt-2">
            <thead style="text-align: center;">
                <tr class="table-dark">
                    <th scope="col">Fix an issue using the Frequently Asked Questions</th>
                </tr>
            </thead>
            <tbody>
                <tr onclick="row()">
                    <td>
                        <div class="d-flex justify-content-between">
                            <strong>Why is my mouse not functioning?</strong>
                            <img class="mr-3" src="{{ asset('down.svg') }}" id='svg' onclick="svg_down()">
                        </div>
                        <div class=ml-10 style="display:none;" id="response">
                           <br> A mouse can stop working due to a couple of reasons. Try the following fixes to see if they work for you. <br>
                            &emsp;(i) Unplug the USB device from the computer and replug it back in. Listen for the windows feedback sound to confirm the device is installed. Also &emsp; &emsp; check if the led light on the mouse is on. <br>
                            &emsp;(ii) If step 1 did not fix your problem try installing the mouse driver inside of you device manager. <br>
                            &emsp;(iii) Confirm if your mouse is wireles and if so make the transciever is correctly configured on your devices and printers setting. <br>
                            &emsp;(iv) Don't forget to reboot your computer in the process. <br><br>
                        </div>
                    </td>                   
                </tr>
                <tr onclick="row()">
                    <td>
                        <div class="d-flex justify-content-between">
                            <strong>Why can't I be able to connect to the internet?</strong>
                            <img class="mr-3" src="{{ asset('down.svg')}}" id='svg' onclick="svg_down()">
                        </div>

                        <div class="ml-10" style="display:none;" id="response2">
                           <br> Lack of Internet connection can be caused by the following issues. Be sure to explore them to try and fix the issue.
                           &emsp;(i) Check if your ethernet is correctly pluged in the ethernet port at the back of your system unit. <br> 
                           &emsp;(ii) If you are using a wireless connection, check wether your PC is connected a Wifi signal. Use the correct authentication pin for Wifi's which are &emsp;&emsp;encrypted. <br>
                           &emsp;(iii) For connections over USB tethering, make sure the tethering device has connectivity enabled. <br>
                           &emsp;(iv) Try troubleshooting the internet connectivity using the windows diagnostic tool. Try following the instruction from this guide to try and solve &emsp;&emsp; connectivity issues. <br>
                           &emsp;(v) If you have access to a router, check if it is on and if it isn't try to restarting it to see if your issue will be resolved. <br><br>
                        </div>
                    </td>
                </tr>
                <tr onclick="row()">
                    <td>
                        <div class="d-flex justify-content-between">
                            <strong>Why is my monitor displaying strange colors?</strong>
                            <img class="mr-3" src="{{ asset('down.svg')}}" id='svg' onclick="svg_down()">
                        </div>
                        <div class="ml-10" style="display:none;" id="response3">
                            <br> Color change on a PC can only be caused by either of the following two factors; <br>
                            &emsp;(i) Faulty VGA or HDMI cable. <br>
                            &emsp;(ii) Changes to the color settings in the Windows Display settings.
                            To resolve this, try the following fixes; <br>
                            &emsp;(i) Try pushing the VGA cable well to te ports on both the monitor and the system unit. Make sure the screws are tight for the case of the VGA. <br>
                            &emsp;(ii) Remove the VGA or HDMI cable and replace it with another to see if the problem will be resolved. If this resolves the issue then it means that &emsp;&emsp; the cable was faulty. <br><br> 
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</x-app-layout>