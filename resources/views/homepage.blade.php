<x-main>
<div class="spacer"></div>
    @if(session()->has('message'))
<div class="alert alert-danger">
    {{ session('message')}}
</div>
@endif
    <x-navbar/>
    <x-header/>
    <x-section-One :$announcements />
    <x-footer/>
</x-main>
