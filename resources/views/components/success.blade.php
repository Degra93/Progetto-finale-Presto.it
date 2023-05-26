@if (session()->has('success'))

<span>
    <pre class="text-primary fs-3 fw-bold pt-5">{{ __('ui.successo') }}</pre>
</span>


    {{-- <div class="spacer"></div> --}}
    {{-- <div class="alert alert-success"> --}}
        {{ session('success') }}
    {{-- </div> --}}
@endif
