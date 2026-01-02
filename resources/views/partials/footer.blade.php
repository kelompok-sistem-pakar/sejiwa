<!-- ==================== FOOTER STYLE START ==================== -->
<style>
    .simple-footer {
        margin-top: 50px;
        padding: 40px 0;
        text-align: center;
        border-top: 1px solid rgba(0, 0, 0, 0.05);
    }

    .footer-logo {
        height: 35px;
        width: auto;
        margin-bottom: 15px;
        opacity: 0.7;
        transition: all 0.3s ease;
    }

    .footer-logo:hover {
        opacity: 1;
        transform: translateY(-2px);
    }

    .footer-text {
        font-size: 0.85rem;
        font-weight: 500;
        color: #adb5bd;
        margin: 0;
        letter-spacing: 0.5px;
    }
</style>
<!-- ==================== FOOTER STYLE END ==================== -->

<!-- ==================== FOOTER START ==================== -->
<footer class="simple-footer">
    <img src="{{ asset('images/logo-anda.png') }}" alt="Logo Aplikasi" class="footer-logo">

    <p class="footer-text">
        &copy; {{ date('Y') }} <strong>NamaBrand</strong>. All rights reserved.
    </p>
</footer>
<!-- ==================== FOOTER END ==================== -->
