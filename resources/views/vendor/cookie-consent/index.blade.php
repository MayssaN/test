<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/cookie-consent.css">
    <style>
        body {
            font-family: sans-serif;
        }
    </style>
    <title>Document</title>
</head>
<body>

   

    <div role="dialog" aria-labelledby="lcc-modal-alert-label" aria-describedby="lcc-modal-alert-desc" aria-modal="true" class="lcc-modal lcc-modal--alert js-lcc-modal js-lcc-modal-alert" style="display: none;"
        data-cookie-key="__cookie_consent"
        data-cookie-value-both="true"
        data-cookie-value-none="false"
        data-cookie-value-analytics="2"
        data-cookie-value-marketing="3"
        data-cookie-expiration-days="365"
    >
        <div class="lcc-modal__content">
            <h2 id="lcc-modal-alert-label" class="lcc-modal__title">
                Deze website gebruikt cookies
            </h2>
            <p id="lcc-modal-alert-desc" class="lcc-text">
                We gebruiken cookies om je een betere bezoekerservaring te bieden. Klik op akkoord om alle cookies te accepteren of ga naar cookieinstellingen om je voorkeuren te beheren.
            </p>
        </div>
        <div class="lcc-modal__actions">
            <button type="button" class="lcc-button lcc-button--link js-lcc-settings-toggle">
                Cookieinstellingen
            </button>
            <button type="button" class="lcc-button js-lcc-accept">
                Akkoord
            </button>
        </div>
    </div>

    <div role="dialog" aria-labelledby="lcc-modal-settings-label" aria-describedby="lcc-modal-settings-desc" aria-modal="true" class="lcc-modal lcc-modal--settings js-lcc-modal js-lcc-modal-settings" style="display: none;">
        <button class="lcc-modal__close js-lcc-settings-toggle" type="button">
            <span class="lcc-u-sr-only">
                Sluiten
            </span>
            &times;
        </button>
        <div class="lcc-modal__content">
            <div class="lcc-modal__content">
                <h2 id="lcc-modal-settings-label" class="lcc-modal__title">Cookieinstellingen</h2>
                <p id="lcc-modal-settings-desc" class="lcc-text">
                    Onze website houdt drie niveaus van cookies bij. Je kan zelf je voorkeuren op elk moment aanpassen. Meer informatie over wat cookies zijn en welke cookies we verzamelen kan je lezen in ons <a href="#" target="_blank" rel="noopener noreferrer">cookiebeleid</a>.
                </p>
                <div class="lcc-modal__section lcc-u-text-center">
                    <button type="button" class="lcc-button js-lcc-accept">
                        Alle cookies aanvaarden
                    </button>
                </div>
                <div class="lcc-modal__section">
                    <label for="lcc-checkbox-essential" class="lcc-label">
                        <input type="checkbox" id="lcc-checkbox-essential" disabled="disabled" checked="checked">
                        <span>Essentiële cookies</span>
                    </label>
                    <p class="lcc-text">
                        zijn noodzakelijke cookies die ervoor zorgen dat de website goed functioneert en dat je voorkeuren (bv. taal, regio) goed worden opgeslagen.
                    </p>
                </div>
                <div class="lcc-modal__section">
                    <label for="lcc-checkbox-analytics" class="lcc-label">
                        <input type="checkbox" id="lcc-checkbox-analytics">
                        <span>Analytische cookies</span>
                    </label>
                    <p class="lcc-text">
                        laten ons toe om het gebruik van de website te analyseren en de bezoekerservaring te verbeteren.
                    </p>
                </div>
                <div class="lcc-modal__section">
                    <label for="lcc-checkbox-marketing" class="lcc-label">
                        <input type="checkbox" id="lcc-checkbox-marketing">
                        <span>Marketingcookies</span>
                    </label>
                    <p class="lcc-text">
                        hebben als doel om je ervaring te kunnen personaliseren en je relevante inhoud en aanbiedingen te sturen op deze en andere websites.
                    </p>
                </div>
            </div>
        </div>
        <div class="lcc-modal__actions">
            <button type="button" class="lcc-button lcc-button--link js-lcc-settings-toggle">
                Annuleren
            </button>
            <button type="button" class="lcc-button js-lcc-settings-save">
                Bewaren
            </button>
        </div>
    </div>

    <div class="lcc-backdrop js-lcc-backdrop" style="display: none;"></div>

    <script src="./js/cookie-consent.js"></script>
</body>
</html>