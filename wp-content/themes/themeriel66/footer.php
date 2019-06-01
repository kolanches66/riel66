    <footer class="footer">
        <div class="footer__copyright">© <?php bloginfo('name'); ?>, <?=date('Y');?></div>
        <div class="footer__contacts">
            <div class="footer__contact">
                <span class="footer__icon"><i class="fas fa-phone"></i></span>
                <span><a class="footer__link" href="tel:+79028723894">+7 902 87 23 894</a></span>
            </div>
            <div class="footer__contact">
                <span class="footer__icon"><i class="fas fa-envelope"></i></span>
                <span><a class="footer__link" href="mailto:ponomareva@riel66.ru">ponomareva@riel66.ru</a></span>
            </div>
        </div>
    </footer>

    <?php wp_footer(); ?>

    <!-- analytics -->
    <script>
        (function(f,i,r,e,s,h,l){i['GoogleAnalyticsObject']=s;f[s]=f[s]||function(){
            (f[s].q=f[s].q||[]).push(arguments)},f[s].l=1*new Date();h=i.createElement(r),
            l=i.getElementsByTagName(r)[0];h.async=1;h.src=e;l.parentNode.insertBefore(h,l)
        })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
        ga('create', 'UA-XXXXXXXX-XX', 'yourdomain.com');
        ga('send', 'pageview');
    </script>

</body>

</html>
