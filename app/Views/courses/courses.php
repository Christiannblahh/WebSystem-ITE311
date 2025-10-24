<!DOCTYPE html>
<html>
<head>
    <title>Courses</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<?= $this->include('templates/header') ?>
<div class="container mt-5">
    <h2 class="mb-4">Courses</h2>
    <?php if (!empty($courses)): ?>
        <table class="table table-striped">
            <thead class="table-dark">
                <tr>
                    <th>Title</th>
                    <th>Description</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
            <?php foreach ($courses as $course): ?>
                <tr>
                    <td><?= esc($course['title']) ?></td>
                    <td><?= esc($course['description']) ?></td>
                    <td>
                        <a href="<?= site_url('/admin/course/' . $course['id'] . '/upload') ?>" class="btn btn-primary btn-sm">
                            Upload Materials
                        </a>
                    </td>
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
    <?php else: ?>
        <div class="alert alert-info">No courses available.</div>
    <?php endif; ?>
</div>
</body>
</html>
