<div class="list-group">

    <a href="{{ route('dashboard') }}" class="list-group-item {{ request()->routeIs('dashboard') ? 'active' : '' }}">
        Dashboard
    </a>

    <a href="{{ route('classes.index') }}"
        class="list-group-item {{ request()->routeIs('classes.*') ? 'active' : '' }}">
        Classes
    </a>

    <a href="{{ route('sections.index') }}"
        class="list-group-item {{ request()->routeIs('sections.*') ? 'active' : '' }}">
        Sections
    </a>

    <a href="{{ route('subjects.index') }}"
        class="list-group-item {{ request()->routeIs('subjects.*') ? 'active' : '' }}">
        Subjects
    </a>

    <a href="{{ route('teachers.index') }}"
        class="list-group-item {{ request()->routeIs('teachers.*') ? 'active' : '' }}">
        Teachers
    </a>

</div>