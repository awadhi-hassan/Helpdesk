<x-app-layout>
    <x-slot name="header">
        <strong>Questions</strong>
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

        <h4 style="text-align: center;"><b>All Questions</b></h4>

        <table class="table table-hover css-serial">
            <thead>
                <tr class="table-dark">
                    <th scope="col">Id</th>
                    <th scope="col">Question</th>
                </tr>
            </thead>
            <tbody>
                @if(count($questions) > 0)
                    @foreach($questions as $question)
                        <tr>
                            <td scope="row"></td>
                            <td>{{ $question->question }}</td>
                        </tr>
                    @endforeach
                @endif
            </tbody>
        </table>
    </div>
</x-app-layout>