@if (Session::has('notification'))
    <div class="notification is-success alert alert-success">
    <ul class="mb-0">
        <li>{{ Session::get('notification') }}</li>
    </ul>
    </div>
@endif
