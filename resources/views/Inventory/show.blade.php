@extends('layouts/logged_in_layout' , [ 'breadcumb' => 'Inventory' ])


@section('content')









    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="overflow-scroll shadow-sm sm:rounded-lg">
                <div class="container" style="margin-top: 15px; height: 50vh;">
                    <div class="row">
                        <div class="col-lg-6">


                            <div class="overflow-x-auto relative">
                                <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                                    <thead class="text-xs text-left text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                                    <tr>
                                        <th scope="col" class="py-3 px-6">
                                            Product name
                                        </th>
{{--                                        <th scope="col" class="py-3 px-6">--}}
{{--                                            Category--}}
{{--                                        </th>--}}
                                        <th scope="col" class="py-3 px-6">
                                            Quantity
                                        </th>
                                        <th scope="col" class="py-3 px-6">
                                            Unit Price
                                        </th>
                                        <th scope="col" class="py-3 px-6">
                                            Action
                                        </th>
                                    </tr>
                                    </thead>
                                    <tbody>

                                    @foreach( $items as $item)
                                    <tr class="text-center bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                        <th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                            {{Arr::get($item->products->first(), 'product_name')}}
                                        </th>
{{--                                        <td class="py-4 px-6">--}}
{{--                                            {{$item->category}}--}}
{{--                                        </td>--}}
                                        <td class="py-4 px-6">
                                            {{$item->product_quantity}}
                                        </td>
                                        <td class="py-4 px-6">
                                            {{Arr::get($item->products->first(), 'product_price')}}
                                        </td>
                                        <td class="py-4 px-6">
                                            <button style="background-color: #2563eb" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 border border-blue-700 rounded">
                                                <a href="{{url('/update/'.$item->id)}}">Update</a>
                                            </button>
                                            <button style="background-color: crimson" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 border border-blue-700 rounded">

                                                 <a href="{{url('/delete/'.$item->id)}}">Delete</a>
                                            </button>
                                        </td>
                                    </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

@section('footer')

    <div class="py-2">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <button style="background-color: green" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 border border-blue-700 rounded"> <a href="{{url('/add-to-inventory')}}"> Add New Items to Inventory</a>  </button>
        </div>
    </div>

@endsection
