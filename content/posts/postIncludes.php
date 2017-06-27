<script type="text/javascript" src="../../../js/jquery-3.2.1.min.js"></script>
<script type="text/javascript" src="../../../js/ekko-lightbox.js"></script>
<script type="text/javascript" src="../../../js/tether.min.js"></script>
<script type="text/javascript" src="../../../js/bootstrap.min.js"> </script>

<script type="text/javascript">

$(document).on('click', '[data-toggle="lightbox"]', function(event) {
    event.preventDefault();
    $(this).ekkoLightbox();
});
</script>
