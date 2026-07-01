<footer class="site-footer">
    <div class="container">
        <div class="footer-inner">
            <div class="footer-brand">
                <a href="<?php echo esc_url(home_url('/')); ?>" class="footer-logo" aria-label="Flatto">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 300 80" role="img" aria-label="Flatto">
                        <title>Flatto</title>
                        <text x="30" y="42" font-family="'Helvetica Neue','Arial',sans-serif" font-size="36" font-weight="200" letter-spacing="0.08em" fill="#7ab8e0">F</text>
                        <text x="52" y="42" font-family="'Helvetica Neue','Arial',sans-serif" font-size="36" font-weight="200" letter-spacing="0.08em" fill="#ffffff">latto</text>
                        <line x1="30" y1="48" x2="220" y2="48" stroke="rgba(255,255,255,0.2)" stroke-width="0.8"/>
                        <text x="30" y="65" font-family="'Helvetica Neue','Arial',sans-serif" font-size="12" font-weight="400" letter-spacing="0.3em" fill="rgba(255,255,255,0.45)">WEB DESIGN STUDIO</text>
                    </svg>
                </a>
                <p class="footer-tagline"><?php bloginfo('description'); ?></p>
                <div class="social-links">
                    <a href="https://x.com/genderless_WebC" target="_blank" rel="noopener noreferrer" aria-label="Twitter" class="social-link">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor"><path d="M18.244 2.25h3.308l-7.227 8.26 8.502 11.24H16.17l-5.214-6.817L4.99 21.75H1.68l7.73-8.835L1.254 2.25H8.08l4.713 6.231zm-1.161 17.52h1.833L7.084 4.126H5.117z"/></svg>
                    </a>
                    <a href="https://github.com/kitagaki0925/flatto-portfolio-theme" target="_blank" rel="noopener noreferrer" aria-label="GitHub" class="social-link">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor"><path d="M12 0C5.374 0 0 5.373 0 12c0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23A11.509 11.509 0 0112 5.803c1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576C20.566 21.797 24 17.3 24 12c0-6.627-5.373-12-12-12z"/></svg>
                    </a>
                    <a href="https://linkedin.com/" target="_blank" rel="noopener noreferrer" aria-label="LinkedIn" class="social-link">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor"><path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433a2.062 2.062 0 01-2.063-2.065 2.064 2.064 0 112.063 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/></svg>
                    </a>
                </div>
            </div>

            <div class="footer-nav">
                <h4>Navigation</h4>
                <ul>
                    <li><a href="<?php echo esc_url(home_url('/')); ?>">Home</a></li>
                    <li><a href="<?php echo esc_url(home_url('/#about')); ?>">About</a></li>
                    <li><a href="<?php echo esc_url(home_url('/#works')); ?>">Works</a></li>
                    <li><a href="<?php echo esc_url(home_url('/#contact')); ?>">Contact</a></li>
                </ul>
            </div>

            <div class="footer-nav">
                <h4>Services</h4>
                <ul>
                    <li><a href="<?php echo esc_url(home_url('/web-design/')); ?>">Web Design</a></li>
                    <li><a href="<?php echo esc_url(home_url('/wordpress/')); ?>">WordPress Development</a></li>
                    <li><a href="<?php echo esc_url(home_url('/lp/')); ?>">LP制作</a></li>
                    <li><a href="<?php echo esc_url(home_url('/corporate/')); ?>">コーポレートサイト</a></li>
                </ul>
            </div>
        </div>

        <div class="footer-bottom">
            <p class="copyright">&copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?>. All rights reserved.</p>
            <nav class="footer-legal" aria-label="Legal">
                <a href="<?php echo esc_url(home_url('/privacy/')); ?>">プライバシーポリシー</a>
            </nav>
            <p class="footer-credit">Designed &amp; Built with <span aria-hidden="true">♥</span></p>
        </div>
    </div>
</footer>

<!-- Lightbox Modal -->
<div id="lightbox" class="lightbox" role="dialog" aria-modal="true" aria-label="画像拡大表示">
    <div class="lightbox-inner">
        <button class="lightbox-close" aria-label="閉じる">
            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5">
                <line x1="18" y1="6" x2="6" y2="18"/>
                <line x1="6" y1="6" x2="18" y2="18"/>
            </svg>
        </button>
        <img src="" alt="" class="lightbox-img">
        <p class="lightbox-caption"></p>
    </div>
</div>

<?php wp_footer(); ?>
</body>
</html>
