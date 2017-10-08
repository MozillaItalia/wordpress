<?php
 // Bisogna ridefinire la variabile $indirizzo_base_url per il footer (la variabile originale è definita in menu_laterale.php)
 $indirizzo_base_url_footer = "/home/";
?>
<div id="footer">
 <div>
	<p>Hosting offerto da <a href="https://www.mozilla.org/">Mozilla Foundation</a></p>
 </div>
 <div id="footer_centro">
	<p>Comunità Mozilla Italia</p>
    <p>
        <a href="<?php echo $indirizzo_base_url_footer; ?>riconoscimenti">Riconoscimenti</a>&nbsp;–&nbsp;
        <a href="<?php echo $indirizzo_base_url_footer; ?>informativa-sui-cookie/">Cookie</a>
    </p>
 </div>
 <div>
    <p>Contenuti distribuiti con <br/><a href="https://creativecommons.org/licenses/by-sa/4.0/">licenza Creative Commons</a>.</p>
 </div>
</div><!-- id=footer -->
</div><!-- id=wrap -->
</div><!-- id=contenitore -->
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-571010-6', 'auto');
  ga('send', 'pageview');
  ga('set', 'anonymizeIp', true);
</script>

<?php
	wp_footer();
?>

</body>
</html>
