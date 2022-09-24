

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ $breadcumb  }}
        </h2>
    </x-slot>

    @yield('content')


    @yield('footer')

</x-app-layout>
