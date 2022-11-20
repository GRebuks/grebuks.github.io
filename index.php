<?php
if(isset($_COOKIE["Tested"])) {
    if($_COOKIE["Tested"] == 2) {
        header("Location: failure.php");
        exit();
    }
}

include("header.php");

?>
    <div class="welcome">
        <div class="welcome-message fade-in">
            <div class="img-bulk">
                <img class="img-left" src="images/potato1.png" alt="potato1">
                <div class="middle-overflow">
                    <img class="img-main" src="images/potato1.png" alt="potato1">
                </div>
                <img class="img-right" src="images/potato1.png" alt="potato1">
            </div>
            <div class="text-overlay">
                <h2>Students</h2>
                <p>Studē profesionālās izglītības kompetences centrā "Rīgas Valsts tehnikums"</p>
            </div>
        </div>
        <div class="welcome-message fade-in">
            <div class="img-bulk">
                <img class="img-left" src="images/potato2.png" alt="potato2">
                <div class="middle-overflow">
                    <img class="img-main" src="images/potato2.png" alt="potato2">
                </div>
                <img class="img-right" src="images/potato2.png" alt="potato2">
            </div>
            <div class="text-overlay">
                <h2>Nākotnes programmētājs</h2>
                <p>Pārāk maz laika ieguldīta, lai būtu programmētājs, pārāk daudz - lai aizietu prom</p>
            </div>
        </div>
        <div class="welcome-message fade-in">
            <div class="img-bulk">
                <img class="img-left" src="images/potato3.png" alt="potato3"">
                <div class="middle-overflow">
                    <img class="img-main" src="images/potato3.png" alt="potato3"">
                </div>
                <img class="img-right" src="images/potato3.png" alt="potato3"">
            </div>
            <div class="text-overlay">
                <h2>Dzīves cienītājs</h2>
                <p>Veltot sevi tikai vienai jomai, dzīve ir tukša un bezjēdzīga. Kamēr jauni, daram visu iespējamo!</p>
            </div>
        </div>
    </div>


    <div class="info-container">
        <img src="images/blocked.png" alt="portrait" class="main-portrait"/>
        <div class="info-text">
            <h2>Par mani īsumā:</h2>
            <h3>Mani sauc Gundars Rēbuks, 18 gadi</h3>
            <p>Nodarbojos ar programmēšanu jau kopš pamatskolas, bet, jo ilgāk laiks paiet, jo mazāk par šo jomu zinu.<p/>
            <p>Projektu mapītē atrodas vairāk nepabeigtu projektu karkasi nekā tuvākajā auto kapsētā.</p>
            <p>Kopš agras bērnības piešķirts līdz šim neārstējams prokrastinācijas lāsts, kas atspoguļojās katrā darbā ar noteiktu termiņu. Tomēr, neskatoties uz to, viss tiek izdarīts laikā. Parasti.</p>
            <p><a href="about.php">Vairāk par mani</a></p>
        </div>
    </div>

    <div class="project-container">
        <div class="project-block">
            <img src="images/C-Sharp.webp" alt="proj" />
            <p>Satiksmes vadības sistēma</p>
            <p>| C# |</p>
            <p><a href="https://github.com/GRebuks/satiksmes-vadibas-sistema">GitHub</a></p>
        </div>
        <div class="project-block">
            <img src="images/dataclicker.png" alt="proj" />
            <p>DataClicker v0.1</p>
            <p>| C++ |</p>
            <p><a href="https://github.com/GRebuks/DataClicker">GitHub</a></p>
        </div>
        <div class="project-block">
            <img src="images/travely.svg" alt="proj" />
            <p>Travely vietne</p>
            <p>| Python | WEB |</p>
            <p><a href="https://github.com/GRebuks/flask_celojums-majas-lapa">GitHub</a></p>
        </div>
        <div class="project-block">
            <img src="images/TTLP-dark.png" alt="proj" />
            <p>Portfolio</p>
            <p>| PHP | WEB |</p>
            <p><a href="https://github.com/GRebuks/grebuks.github.io">GitHub</a></p>
        </div>
    </div>

    <div class="quote-list">
        <h2 class="quote-title">Manu personīgo elku ietekmīgākie citāti, kuri palīdzējuši manas dzīves gaitā</h2>
        <div class="quote">
            <div class="quote-text">
                <h3>Uz pārmaiņām es vēlētos pats izvēlēties savu nāves veidu. Man ir apnicis mocīties ellē. Man tas ir apnicis. Ja nevaram dzīvot mierā, tad nomirsim mierā.</h3>
                <p>- Džeimss Vorens Džonss</p>
            </div>
            <img class="quote-img" src="images/jim-jones.webp" alt="james-jones" />
        </div>
        <div class="quote">
            <div class="quote-text">
                <h3>Šie cilvēki paliek šeit, jo es viņiem esmu rūpīgi atvēris septiņus atklāsmju zīmogus.</h3>
                <p>- Deivids Korešs</p>
            </div>
            <img class="quote-img" src="images/konesh.jpg" alt="david-koresh" />
        </div>
        <div class="quote">
            <div class="quote-text">
                <h3>Godīgi sakot, mēs ienīstam šo pasauli.</h3>
                <p>- Māršals Herfs Eplvaits</p>
            </div>
            <img class="quote-img" src="images/marshall.jpg" alt="marshall-applewhite" />
        </div>
    </div>
<?php include("footer.php");?>