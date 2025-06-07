<nav class="dash-nav-list">
    <a href="/super-admin/dashboard"
        class="{{ request('/super-admin/dashboard') ? 'text-primary' : 'text-light' }} dash-nav-item">
        <i class="fas fa-home"></i> Dashboard </a>

    <div class="dash-nav-dropdown">
        <a href="#!" class="dash-nav-item dash-nav-dropdown-toggle">
            <i class="fas fa-users"></i>Manage Users </a>
        <div class="dash-nav-dropdown-menu">
            <a href="/super-admin/jobseekers" class="dash-nav-dropdown-item">JobSeekers</a>
            <a href="/super-admin/employers" class="dash-nav-dropdown-item">Employers</a>
        </div>
    </div>

    <div class="dash-nav-dropdown">
        <a href="#" class="dash-nav-item dash-nav-dropdown-toggle">
            <i class="fas fa-file-invoice"></i>Job Posts</a>
        <div class="dash-nav-dropdown-menu">
            <a href="/super-admin/jobs" class="dash-nav-dropdown-item">All Jobs</a>
        </div>
    </div>
{{--


    <div class="dash-nav-dropdown">
        <a href="#!" class="dash-nav-item dash-nav-dropdown-toggle">
            <i class="fas fa-list-ul"></i>Categories & Tags</a>
        <div class="dash-nav-dropdown-menu">
            <a href="#" class="dash-nav-dropdown-item">Blank</a>

        </div>
    </div>

    <div class="dash-nav-dropdown">
        <a href="#!" class="dash-nav-item dash-nav-dropdown-toggle">
            <i class="fas fa-briefcase"></i>Companies</a>
        <div class="dash-nav-dropdown-menu">
            <a href="#" class="dash-nav-dropdown-item">Blank</a>

        </div>
    </div>


    <div class="dash-nav-dropdown">
        <a href="#!" class="dash-nav-item dash-nav-dropdown-toggle">
            <i class="fas fa-users-cog"></i>Roles-Permissions</a>
        <div class="dash-nav-dropdown-menu">
            <a href="#" class="dash-nav-dropdown-item">Blank</a>

        </div>
    </div>


    <div class="dash-nav-dropdown">
        <a href="#!" class="dash-nav-item dash-nav-dropdown-toggle">
            <i class="far fa-chart-bar"></i>Report & Analytics</a>
        <div class="dash-nav-dropdown-menu">
            <a href="#" class="dash-nav-dropdown-item">Blank</a>

        </div>
    </div>

    <div class="dash-nav-dropdown">
        <a href="#!" class="dash-nav-item dash-nav-dropdown-toggle">
            <i class="fas fa-cogs"></i>Settings</a>
        <div class="dash-nav-dropdown-menu">
            <a href="#" class="dash-nav-dropdown-item">Blank</a>

        </div>
    </div>

    <div class="dash-nav-dropdown">
        <a href="#!" class="dash-nav-item dash-nav-dropdown-toggle">
            <i class="fas fa-check"></i>Audit Logs</a>
        <div class="dash-nav-dropdown-menu">
            <a href="#" class="dash-nav-dropdown-item">Blank</a>

        </div>
    </div>

    <div class="dash-nav-dropdown">
        <a href="#!" class="dash-nav-item dash-nav-dropdown-toggle">
            <i class="far fa-handshake"></i>Support/Feedback</a>
        <div class="dash-nav-dropdown-menu">
            <a href="#" class="dash-nav-dropdown-item">Blank</a>

        </div>
    </div>

    <div class="dash-nav-dropdown">
        <a href="#!" class="dash-nav-item dash-nav-dropdown-toggle">
            <i class="fas fa-mouse-pointer"></i>Quick Actions</a>
        <div class="dash-nav-dropdown-menu">
            <a href="#" class="dash-nav-dropdown-item">Blank</a>

        </div>
    </div>
 --}}











    <div class="dash-nav-dropdown">
        <a href="#!" class="dash-nav-item dash-nav-dropdown-toggle">
            <i class="fas fa-info"></i> About </a>
        <div class="dash-nav-dropdown-menu">
            <a href="https://github.com/HackerThemes/spur-template" target="_blank"
                class="dash-nav-dropdown-item">GitHub</a>
            <a href="http://hackerthemes.com" target="_blank" class="dash-nav-dropdown-item">HackerThemes</a>
        </div>
    </div>
</nav>
