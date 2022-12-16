@if (Auth::user->role_id==2)
    <script>window.location = "{{ route('admin.admin') }}";</script>
@else
    @include('enrolement.index')
@endif

