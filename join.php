<?php
include("header.php");
?>
    <div class="form-title">
        <h1>Atstāj ziņojumu, sazinies ar mani!</h1>
        <p>Aizpildi šo īso anketu lai atstātu savu ziņu, kuru es <i>noteikti</i> izlasīšu!</p>
    </div>
    <form method="post" action="result.php">
        <div class="form-container">
            <div class="form-question">
                <p>Norādiet savu vārdu/nosaukumu:</p>
                <input type="text" name="name" id="name">
                <p>Ierakstiet jums vēlamo ziņojumu:</p>
                <textarea name="message" id="message" maxlength="255" style="height: 300px; width: 60%; resize: none"></textarea>
            </div>
            <div class="form-question">
                <p>Vai vēlaties saņemt atbildi uz šo ziņojumu?</p>
                <input type="radio" name="reply" id="reply" class="reply">
                <label for="q3y">Jā</label>
                <input type="radio" name="reply" id="replyn" class="reply">
                <label for="q3n">Nē</label>
                <div id="reply-form">
                    <p>Ievadiet savu kontaktinformāciju</p>
                    <input type="text" name="contact" id="contact">
                </div>
            </div>
            <input class="submit-btn" id="form-submit" type="submit" value="Iesniegt ziņu">
        </div>
    </form>
<?php include("footer.php");?>