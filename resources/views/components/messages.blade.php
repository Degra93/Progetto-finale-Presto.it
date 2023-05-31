@if (session()->has('messages'))

{{-- <span>
    <pre class="alert alert-success fs-2 fw-bold pt-5">{{ __('ui.successo') }}</pre>
</span> --}}


    <div class="spacer"></div>
    <div class="alert alert-success ">
        {{ __('ui.messages') }}
        {{-- {{ session('success') }} --}}
    </div>
@endif
