@extends('layouts/logged_in_layout' , [ 'breadcumb' => 'User Dashboard' ])

@section('content')

    {{--start--}}

{{--    <div class="py-12">--}}
{{--        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">--}}
{{--            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">--}}
{{--                <div style="height: 20%vh; width: 20%"  class="shadow-lg rounded-lg overflow-hidden">--}}
{{--                    <div class="py-3 px-5 bg-gray-50">Doughnut chart</div>--}}
{{--                    <canvas class="p-10" id="chartDoughnut"></canvas>--}}

{{--                </div>--}}

{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}


    <!-- Required chart.js -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <!-- Chart doughnut -->
    <script>
        const dataDoughnut = {
            labels: ["JavaScript", "Python", "Ruby"],
            datasets: [
                {
                    label: "My First Dataset",
                    data: [300, 50, 100],
                    backgroundColor: [
                        "rgb(133, 105, 241)",
                        "rgb(164, 101, 241)",
                        "rgb(101, 143, 241)",
                    ],
                    hoverOffset: 4,
                },
            ],
        };

        const configDoughnut = {
            type: "doughnut",
            data: dataDoughnut,
            options: {},
        };

        var chartBar = new Chart(
            document.getElementById("chartDoughnut"),
            configDoughnut
        );
    </script>
    {{--    end --}}


    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <a style="color: #2563eb" href={{ url('/inventory') }}  >Browse Inventory</a> </br> </br>
                    <a style="color: #2563eb" href="{{url('/add-to-inventory')}}"  >Add Items to Inventory</a>
                </div>
            </div>
        </div>
    </div>
@endsection





