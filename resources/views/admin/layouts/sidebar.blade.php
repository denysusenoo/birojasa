<div class="sidebar-sticky">
    <ul class="nav flex-column">
        <li class="nav-item">
            <a class="nav-link @if(\Request::path() == 'admin') active @endif" href="{!! route('admin.dashboard') !!}">
                <span data-feather="home"></span>
                Dashboard @if(\Request::path() == 'admin') <span class="sr-only">(current)</span> @endif
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link @if(\Request::path() == 'admin/bookings') active @endif" href="{!! route('admin.bookings.index') !!}">
                <span data-feather="file"></span>
                Bookings @if(\Request::path() == 'admin/bookings') <span class="sr-only">(current)</span> @endif
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link @if(\Request::path() == 'admin/users') active @endif" href="{!! route('admin.users.index') !!}">
                <span data-feather="users"></span>
                Users @if(\Request::path() == 'admin/users') <span class="sr-only">(current)</span> @endif
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link @if(\Request::path() == 'admin/reports') active @endif" href="{!! route('admin.reports.index') !!}">
                <span data-feather="bar-chart-2"></span>
                Reports @if(\Request::path() == 'admin/reports') <span class="sr-only">(current)</span> @endif
            </a>
        </li>
    </ul>
</div>

