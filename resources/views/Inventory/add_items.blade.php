@extends('layouts/logged_in_layout' , [ 'breadcumb' => 'Add New Item to Inventory' ])

@section('content')


<div class="container text" style="margin-top:10vh; margin-left: 40vw">
    <div class="row">
        <div class="">
            <div class="form-group">
                <form style="width: 50%" class="" action="/add-to-inventory"
                      method="POST">
                    @csrf
                    <div class="md:flex md:items-center mb-6">
                        <div class="md:w-1/3">
                            <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4" for="inline-full-name">
                                Product Name
                            </label>
                        </div>
                        <div class="md:w-2/3">
                            <input class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500" id="inline-full-name" name="product_name" type="text" placeholder="Enter product name ...">
                        </div>
                    </div>
                    <div class="md:flex md:items-center mb-6">
                        <div class="md:w-1/3">
                            <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4" for="inline-password">
                                Price
                            </label>
                        </div>
                        <div class="md:w-2/3">
                            <input class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500" id="inline-password" name ="product_price" type="number" placeholder="1234">
                        </div>
                    </div>
                    <div class="md:flex md:items-center mb-6">
                        <div class="md:w-1/3">
                            <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4" for="inline-password">
                                Quantity
                            </label>
                        </div>
                        <div class="md:w-2/3">
                            <input class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500" id="inline-password" name ="product_quantity" type="number" placeholder="1234">
                        </div>
                    </div>
                    <br>
                    <div class="md:flex md:items-center">
                        <div class="md:w-1/3"></div>
                        <div class="md:w-2/3">

                    <button style="background-color: #2563eb" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 border border-blue-700 rounded" type="submit">Add Item</button>
                </form>
            </div>
        </div>
    </div>
</div>



@endsection







