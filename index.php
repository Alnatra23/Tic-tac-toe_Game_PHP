<?php
require_once "./templates/header.php";
?>

<form method="post" action="register-players.php">
    <div class="welcome">
        <h1>Selamat datang Di Game Tic Tac Toe!</h1>
        <h2>Masukkan Nama</h2>

        <div class="player-name">
            <label for="player-x">Pemain Pertama (X)</label>
            <input type="text" id="player-x" name="player-x" required />
        </div>

        <div class="player-name">
            <label for="player-o">Pemain Kedua (O)</label>
            <input type="text" id="player-o" name="player-o" required />
        </div>

        <button type="submit">Start</button>
    </div>
</form>

<?php
require_once "./templates/footer.php";
