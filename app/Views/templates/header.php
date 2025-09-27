<!DOCTYPE html>
<html>

<head>
    <title><?= esc($title ?? 'MyApp') ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark px-3">
        <a class="navbar-brand" href="<?= site_url('/dashboard') ?>">Learning Management System</a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link text-primary" href="<?= site_url('/dashboard') ?>">Dashboard</a>
                </li>

                <?php if (session()->get('role') === 'student'): ?>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= site_url('/dashboard') ?>">My Profile</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= site_url('/dashboard') ?>">My Grades</a>
                    </li>
                <?php endif; ?>

                <?php if (session()->get('role') === 'instructor'): ?>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= site_url('/dashboard') ?>">My Class</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= site_url('/dashboard') ?>">Students</a>
                    </li>
                <?php endif; ?>

                <?php if (session()->get('role') === 'admin'): ?>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= site_url('/dashboard') ?>">Manage Users</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= site_url('/dashboard') ?>">Reports</a>
                    </li>
                <?php endif; ?>

                <li class="nav-item">
                    <a class="nav-link text-danger" href="<?= site_url('/logout') ?>">Logout</a>
                </li>
            </ul>
        </div>
        </div>
    </nav>

    <div class="container mt-4">