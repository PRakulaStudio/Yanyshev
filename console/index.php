<html>
<head>
    <title>Панель управления сайтом</title>
    <link rel="manifest" href="console.webmanifest">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="apple-mobile-web-app-capable" content="yes"/>
    <meta name="apple-mobile-web-app-title" content="Янышев">
    <meta name="apple-mobile-web-app-status-bar-style" content="default">
    <link rel="apple-touch-icon" sizes="72x72" href="/console/icon.png">
    <link rel="apple-touch-icon" sizes="114x114" href="/console/icon.png">
    <link rel="apple-touch-icon" href="/console/icon.png">
    <link rel="apple-touch-startup-image" href="/console/icon.png">
    <style>
        body {
            margin: 0; /* Reset default margin */
        }

        iframe {
            display: block; /* iframes are inline by default */
            background: #fff;
            border: none; /* Reset default border */
            height: 100%; /* Viewport-relative units */
            width: 100%;
        }
    </style>
</head>
<body>
<iframe src="https://cms.prakula.ru/pms-console" id="pms-console"></iframe>
<script>
    var pmsHostData = {
        title: 'Адвокат Янышев',
        domain: 'advokat-yanyshev.ru',
        logo: '//advokat-yanyshev.ru/images/block/1_value.png',
        homePage: '//advokat-yanyshev.ru'
    };
    // if (getCookie('token')) pmsHostData.token = getCookie('token');
    var consoleFrame = document.getElementById('pms-console');
    window.addEventListener('message', function (event) {
        if (~event.origin.indexOf('//cms.prakula.ru')) {
            if (!event.data.status) return;
            if (event.data.get) {
                switch (event.data.get) {
                    case 'pmsHostData':
                        consoleFrame.contentWindow.postMessage(pmsHostData, '*');
                        break;
                }
            }
            if (event.data.set) {
                switch (event.data.set) {
                    case 'token':
                        // setCookie('token', event.data.data, {expires: 3600 * 24 * 300});
                        break;
                }
            }
        }
    });
</script>
</body>
</html>