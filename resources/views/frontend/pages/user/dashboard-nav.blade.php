<ul class="list-group list-group-flush">
    <li class="list-group-item">
        <a href="{{ route('user.dashboard') }}">Dashboard</a>
    </li>
    <li class="list-group-item">
        <a href="{{ route('user.profile') }}">Profile</a>
    </li>
    <li class="list-group-item">A third item</li>
    <li class="list-group-item">A fourth item</li>
    <li class="list-group-item">
        <form action="{{ route('logout') }}" method="post">
        @csrf
        <button type="submit" class="btn btn-info btn-sm">Logout</button>
        </form>
    </li>
</ul>
