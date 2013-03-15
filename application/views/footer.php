        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.9.0.min.js"><\/script>')</script>
        <script src="<?= site_url() ?>js/bootstrap.min.js"></script>
        <? /* Load js scripts set in by the controller */
            if (isset($js_scripts) && is_array($js_scripts)) : 
                foreach($js_scripts as $js_script) :  
        ?>
    </body>
</html>
