	 	<footer class="page-footer">
          <div class="container">
            <div class="row">
              <div class="col l3 s3">
                  <h5 class="footer-title">Main Links</h5>
                  <ul class="footer-link">
                  	<li><a href="home">&raquo; Home</a></li>
                  	<li><a href="why_skum">&raquo; Why SKUM?</a></li>
                  	<li><a href="the_begining">&raquo; The Begining</a></li>
                  	<li><a href="salient_features">&raquo; Salient Features</a></li>
                  	<li><a href="#">&raquo; Rules &amp; Ragulation</a></li>
                  	<li><a href="#">&raquo; News &amp; Events</a></li>
                  	<li><a href="#">&raquo; Photo Gallery</a></li>
                  </ul>
              </div>

              <div class="col l3 s3">
                  <h5 class="footer-title">Related Organizations</h5>
                  <ul class="footer-link">
                  	<li><a href="#">&raquo; SKM?</a></li>
                  	<li><a href="#">&raquo; KVP</a></li>
                  	<li><a href="#">&raquo; SCP</a></li>
                  	<li><a href="#">&raquo;	Navnirman</a></li>
                  	<li><a href="#">&raquo; BJP</a></li>
                  	<li><a href="#">&raquo; SCN</a></li>
                  	<li><a href="#">&raquo; IBH Hostel</a></li>
                  </ul>
              </div>

<!--

<div class="col l4 s8">
                <h5 class="footer-title">Contact</h5>
                <div class="footer-text">E-mail :  skumschools@gmail.com</div>
                <div class="footer-text">Mobile : + 91 79268 54675</div>
                <div class="footer-text">Web : www.skumschools.org</div>
              </div>

              <div class="col l3 s12 footer-address">
                <h5 class="footer-title">Address</h5>
                <div class="footer-text">B/h T . V. Tower Drive-In Road,</div>
                <div class="footer-text">Ahmedabad - 380 054,</div>
                <div class="footer-text">Gujarat, INDIA.</div>
              </div>
-->
              <div class="col l3 s12 footer-address">
                <h5 class="footer-title">Latest News</h5>
                <marquee direction = "up" scrollamount="2">
                	<p>This is a Test News.</p>
                	<p>This is a Test News.</p>
                	<p>This is a Test News.</p>
                	<p>This is a Test News.</p>
                	<p>This is a Test News.</p>
                	<p>This is a Test News.</p>
                	<p>This is a Test News.</p>
                </marquee>
              </div>


            </div>
          </div>

          <div class="ftr-sitemap #004d40 teal darken-4 row" style="margin-bottom: 0px !important;">
            <div class="container"><center>
              <a class="" href="#!">Wonderfull World</a> &nbsp;|&nbsp;
              <a class="" href="#!">Achievements</a> &nbsp;|&nbsp;
              <a class="" href="#!">Feed Back</a> &nbsp;|&nbsp;
              <a class="" href="#!">Site Map</a> &nbsp;|&nbsp;
              <a class="" href="#!">Know Our Facilities</a>
              </center>
            </div>
          </div>

          <div class="footer-copyright black">
            <div class="container">
              <span>© <a class="copyright-site-link" href="#!">SKUM School</a> 2017</span>
              <a class="footer-link-right right" href="#!">Privacy Policy</a>
              <a class="footer-link-right right" href="#!">Terms of Use</a>
            </div>
          </div>
        </footer>

	 	<input type="hidden" id="site_url" value="<?php echo site_url(); ?>" />
	  	<input type="hidden" id="base_url" value="<?php echo base_url(); ?>" />
	  	<!--  Scripts-->
	  	<?php foreach($jsFiles as $fileName){ ?>
	  	<script src="<?php echo base_url(); ?>html/js/<?php echo $fileName; ?>"></script>
	  	<?php } ?>
	</body>
</html>