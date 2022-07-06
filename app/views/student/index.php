<div class="container mt-5">
    <div class="row">
        <h3>Daftar Pelajar</h3>
            <?php foreach($data['student'] as $student) : ?>
                <ul>
                    <li><?= $student['nama']; ?></li>
                    <li><?= $student['phone']; ?></li>
                    <li><?= $student['email']; ?></li>
                    <li><?= $student['bidang']; ?></li>
                </ul>
            <?php endforeach; ?>
    </div>
</div>