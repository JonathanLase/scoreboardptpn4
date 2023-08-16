<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Scoreboard Pool Teknik Pengolahan</title>
    <link rel="stylesheet" href="<?= base_url('css/scoreboard.css') ?>">
    <link rel="stylesheet" href="<?= base_url('css/cdnjs.cloudflare.com_ajax_libs_animate.css_4.1.1_animate.min.css') ?>">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body>
    <div class="title">Scoreboard Pool Teknik Pengolahan</div>
    <div class="container text-center">
        <div class="row">
            <div class="col-8">
                <div class="scoreboard">
                    <?php foreach ($scores as $score) : ?>
                        <div class="team-box">
                            <div class="team-name"><?= $score['nama_team'] ?></div>
                            <div class="team-score"><?= $score['skor'] ?></div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
            <div class="col-4">
                <div class="champion-list">
                    <h2>Top Leaderboard</h2>
                    <hr>
                    <ol>
                        <?php foreach ($champions as $champion) : ?>
                            <li><?= $champion['nama_team'] ?></li>
                        <?php endforeach; ?>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <script>
        function autoRefresh() {
            setTimeout(function() {
                location.reload();
            }, 3000); // Refresh halaman setiap 5 detik (5000 milidetik)
        }

        // Panggil fungsi autoRefresh saat halaman dimuat
        window.onload = autoRefresh;
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>

</html>