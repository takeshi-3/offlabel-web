<?php
$home_url = esc_url(home_url());
$theme_url = get_template_directory_uri();
?>

<footer class="footer">

</footer>
<script type="text/javascript">
    $(document).ready(function() {
        let lang = localStorage.getItem('lang');
        if(lang != null) {
            $('.jp').hide();
            $('.' + lang).show();
        }
    });
</script>
<?php wp_footer(); ?>
</body>
</html>
