@if (\Session::has('success'))
    <div class="p-3 mb-4 text-sm text-green-700 bg-green-100 rounded-lg"
        role="alert">
        {!! \Session::get('success') !!}
    </div>
@endif
@if (\Session::has('error'))
    <div class="p-3 mb-4 text-sm text-red-700 bg-red-100 rounded-lg" role="alert">
        {!! \Session::get('error') !!}
    </div>
@endif
