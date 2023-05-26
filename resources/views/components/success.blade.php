@if (session()->has('success'))

{{-- <span>
    <pre class="alert alert-success fs-2 fw-bold pt-5">{{ __('ui.successo') }}</pre>
</span> --}}


    <div class="spacer"></div>
    <div class="alert alert-success ">
        {{ __('ui.successo') }}
        {{-- {{ session('success') }} --}}
    </div>
@endif
