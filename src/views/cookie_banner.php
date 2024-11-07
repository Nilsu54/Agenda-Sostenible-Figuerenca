<!-- Cookie Banner -->
<div class="cookie-banner position-fixed bottom-0 start-0 w-100 bg-dark text-white p-3" id="cookieBanner" style="z-index: 1050;">
    <div class="container-fluid d-flex flex-wrap justify-content-between align-items-center gap-3">
        <div class="cookie-text">
            <p class="mb-0">
                <i class="bi bi-cookie me-2"></i>
                Utilitzem cookies pròpies i de tercers per millorar els nostres serveis. Si continues navegant, considerem que acceptes el seu ús.
                <a href="#" class="text-success text-decoration-none">Més informació</a>
            </p>
        </div>
        <div class="cookie-buttons d-flex gap-2">
            <button class="btn btn-outline-light btn-sm" onclick="rejectCookies()">
                Rebutjar
            </button>
            <button class="btn btn-success btn-sm" onclick="acceptCookies()">
                Acceptar
            </button>
        </div>
    </div>
</div>

<script>
    function setCookie(name, value) {
        // Cookie durará 30 segundos
        const date = new Date();
        date.setTime(date.getTime() + (30 * 1000)); // 30 segundos
        const expires = "; expires=" + date.toUTCString();
        document.cookie = name + "=" + (value || "") + expires + "; path=/";
    }

    function getCookie(name) {
        const nameEQ = name + "=";
        const ca = document.cookie.split(';');
        for(let i = 0; i < ca.length; i++) {
            let c = ca[i];
            while (c.charAt(0) == ' ') c = c.substring(1, c.length);
            if (c.indexOf(nameEQ) == 0) return c.substring(nameEQ.length, c.length);
        }
        return null;
    }

    function acceptCookies() {
        setCookie('cookies_accepted', 'true');
        document.getElementById('cookieBanner').style.display = 'none';
    }

    function rejectCookies() {
        setCookie('cookies_accepted', 'false');
        document.getElementById('cookieBanner').style.display = 'none';
    }

    // Comprobar el estado de la cookie cada segundo
    setInterval(function() {
        if (!getCookie('cookies_accepted')) {
            document.getElementById('cookieBanner').style.display = 'block';
        }
    }, 1000);

    // Comprobar al cargar la página
    window.onload = function() {
        if (!getCookie('cookies_accepted')) {
            document.getElementById('cookieBanner').style.display = 'block';
        } else {
            document.getElementById('cookieBanner').style.display = 'none';
        }
    }
</script> 