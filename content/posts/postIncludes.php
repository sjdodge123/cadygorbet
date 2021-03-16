<script type="text/javascript" src="../../../js/jquery-3.2.1.min.js"></script>
<script type="text/javascript" src="../../../js/ekko-lightbox.js"></script>
<script type="text/javascript" src="../../../js/tether.min.js"></script>
<script type="text/javascript" src="../../../js/bootstrap.min.js"> </script>
<script async defer src="//assets.pinterest.com/js/pinit.js"></script>

<script>window.twttr = (function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0],
    t = window.twttr || {};
  if (d.getElementById(id)) return t;
  js = d.createElement(s);
  js.id = id;
  js.src = "https://platform.twitter.com/widgets.js";
  fjs.parentNode.insertBefore(js, fjs);

  t._e = [];
  t.ready = function(f) {
    t._e.push(f);
  };

  return t;
}(document, "script", "twitter-wjs"));</script>

<script type="text/javascript">

$(document).on('click', '[data-toggle="lightbox"]', function(event) {
    event.preventDefault();
    $(this).ekkoLightbox();
    
});
</script>


