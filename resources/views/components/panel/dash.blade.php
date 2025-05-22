
<x-panel.layout>

<div class="dash">
    {{-- Side-navbar --}}
       <x-panel.sidenav />

        <div class="dash-app">
            {{-- Top-navbar --}}
            <x-panel.topnav />
            <main class="dash-content">
               {{ $slot }}
            </main>
        </div>
    </div>
</x-panel.layout>
