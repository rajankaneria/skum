<script type="text/javascript">
  $(function(){
  //scroll fire for nav
    $(window).scroll(function (event) {
        var scroll = $(window).scrollTop();
        if(scroll >= 100)
        {
            $(".nav-bar").removeClass("transparent-nav");
            //$(".nav-bar").addClass("deep-orange darken-3");
        }
        else
        {
            //$(".nav-bar").removeClass("deep-orange darken-3");
            $(".nav-bar").addClass("transparent-nav");
        }
    });

});
</script>
<div class="carousel carousel-slider center" data-indicators="true">
    <div class="carousel-item" href="#one!">
      <img src="<?php echo base_url(); ?>html/images/ban01.jpg" />
    </div>
    <div class="carousel-item amber white-text" href="#two!">
      <img src="<?php echo base_url(); ?>html/images/ban02.jpg" />
    </div>
    <div class="carousel-item amber white-text" href="#3!">
      <img src="<?php echo base_url(); ?>html/images/ban02.jpg" />
    </div>
</div>

