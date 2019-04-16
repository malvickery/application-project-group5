<aside>
    <div class="sidebar">
        <div class="sidebar-header">
            <img src="/img/logo.png" alt="track 3 logo">
        </div>
        <nav class="sidebar-nav">

                <div>
                    <a href="/home" class="btn btn-secondary w-full rounded-none">
                        <i class="nav-icon fas fa-tachometer-alt"></i> Dashboard
                    </a>
                </div>
                <div>
                    <div class="btn-group w-full rounded-none">
                        <button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">
                            <i class="fas fa-id-card"></i> Manage Users
                        </button>
                        <div class="dropdown-menu">
                            @role('admin')
                            <a class="nav-link" href="/admin-view/list-students">Students</a>
                            <a class="nav-link" href="admin-view/list-instructors">Instructors</a>
                            <a class="nav-link" href="/dashboard/view">Edit Dashboard</a>
                            @endrole
                        </div>
                    </div>
                </div>
                <div>
                    <a href="/calendar/create" class="btn btn-secondary w-full rounded-none">
                        <i class="fas fa-calendar-alt"></i> Calendar
                    </a>
                </div>
                <div>
                    <a href="/calendar/create" class="btn btn-secondary w-full rounded-none">
                        <i class="fas fa-bullhorn"></i> Announcements
                    </a>
                </div>
                <div>
                    <a href="/calendar/create" class="btn btn-secondary w-full rounded-none">
                        <i class="far fa-newspaper"></i> Register
                    </a>
                </div>

        </nav>
        <div class="sidebar-footer d-flex justify-content-sm-around">

                <li class="nav-item">
                    <a class="nav-link" href="#">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">
                        <i class="fab fa-instagram"></i>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">
                        <i class="fab fa-twitter"></i>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">
                        <i class="fab fa-youtube"></i>
                    </a>
                </li>

        </div>
    </div>
</aside>
