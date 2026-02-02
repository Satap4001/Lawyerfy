<style>
    :root {
        --footer-bg: #1a2b48; /* Azul profundo para combinar con el header */
        --footer-text: #e0e0e0;
        --accent: #c5a059;
    }

    .lawyerfy-footer {
        background-color: var(--footer-bg);
        color: var(--footer-text);
        padding: 40px 5% 20px;
        margin-top: 50px;
        font-family: 'Segoe UI', sans-serif;
    }

    .footer-content {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
        gap: 30px;
        border-bottom: 1px solid rgba(255, 255, 255, 0.1);
        padding-bottom: 30px;
    }

    .footer-section h3 {
        color: var(--accent);
        font-size: 1.2rem;
        margin-bottom: 20px;
        text-transform: uppercase;
        letter-spacing: 1px;
    }

    .footer-section p, .footer-section a {
        font-size: 0.95rem;
        line-height: 1.6;
        color: var(--footer-text);
        text-decoration: none;
        display: block;
        margin-bottom: 10px;
        transition: color 0.3s;
    }


    .contact-item {
        display: flex;
        align-items: center;
        gap: 10px;
        margin-bottom: 15px;
    }

    .footer-bottom {
        text-align: center;
        padding-top: 20px;
        font-size: 0.85rem;
        color: #888;
    }

    /* Estilo del logo en el footer */
    .footer-brand {
        font-size: 1.5rem;
        font-weight: 700;
        margin-bottom: 15px;
        display: inline-block;
    }
    .footer-brand span { color: var(--accent); }
</style>

<footer class="lawyerfy-footer">
    <div class="footer-content">
        <div class="footer-section">
            <div class="footer-brand">Lawyerfy</div>
            <p>Lawyerfy | Soluciones legales ágiles y transparentes.

Transformamos la complejidad del derecho <br>
 en resultados para ti.</p>
        </div>

        <div class="footer-section">
            <h3>Contacto Directo</h3>
            <div class="contact-item">
                <span>Calle Alpujarras, Leganés(Madrid)</span>
            </div>
            <div class="contact-item">
                <span>+34 912 345 678</span>
            </div>
            <div class="contact-item">
                <span><a href="mailto:info@lawyerfy.com">info@lawyerfy.com</a></span>
            </div>
        </div>

        <div class="footer-section">
            <h3>Legal</h3>
            <a href="#">Términos de Servicio</a>
            <a href="#">Política de Privacidad</a>
            <a href="#">Aviso Legal</a>
        </div>
    </div>

    <div class="footer-bottom">
        &copy; 2026 Lawyerfy - Todos los derechos reservados.
    </div>
</footer>