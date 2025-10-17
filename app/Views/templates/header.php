<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title><?= esc($title ?? 'MyApp') ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <?php $uriPath = service('uri')->getPath(); ?>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark px-3">
        <a class="navbar-brand" href="<?= site_url('/') ?>">Learning Management System</a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">

                <li class="nav-item">
                    <a class="nav-link <?= $uriPath === '' || $uriPath === 'dashboard' ? 'active' : '' ?>" href="<?= site_url('/dashboard') ?>">Dashboard</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link <?= $uriPath === 'announcements' ? 'active' : '' ?>" href="<?= site_url('/announcements') ?>">Announcements</a>
                </li>

                <?php $role = session()->get('role'); ?>

                <?php if ($role === 'student'): ?>
                    <li class="nav-item">
                        <a class="nav-link <?= $uriPath === 'student/dashboard' ? 'active' : '' ?>" href="<?= site_url('student/dashboard') ?>">My Profile</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?= $uriPath === 'student/grades' ? 'active' : '' ?>" href="<?= site_url('student/grades') ?>">My Grades</a>
                    </li>
                <?php endif; ?>

                <?php if ($role === 'teacher'): ?>
                    <li class="nav-item">
                        <a class="nav-link <?= $uriPath === 'teacher/dashboard' ? 'active' : '' ?>" href="<?= site_url('teacher/dashboard') ?>">My Class</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?= $uriPath === 'teacher/students' ? 'active' : '' ?>" href="<?= site_url('teacher/students') ?>">Students</a>
                    </li>
                <?php endif; ?>

                <?php if ($role === 'admin'): ?>
                    <li class="nav-item">
                        <a class="nav-link <?= $uriPath === 'admin/dashboard' ? 'active' : '' ?>" href="<?= site_url('admin/dashboard') ?>">Manage Users</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?= $uriPath === 'admin/reports' ? 'active' : '' ?>" href="<?= site_url('admin/reports') ?>">Reports</a>
                    </li>
                <?php endif; ?>

                <?php if (session()->get('isLoggedIn')): ?>
                    <li class="nav-item">
                        <a class="nav-link text-danger" href="<?= site_url('/logout') ?>">Logout</a>
                    </li>
                <?php else: ?>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= site_url('/login') ?>">Login</a>
                    </li>
                <?php endif; ?>

            </ul>
        </div>
    </nav>

    <div class="container mt-4">
        <?= $this->renderSection('content') ?>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
