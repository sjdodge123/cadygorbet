<script type="text/javascript" src="../../../js/jquery-1.11.1.js"></script>
<script type="text/javascript" src="../../../js/ekko-lightbox.js"></script>
<script type="text/javascript" src="../../../js/tether.min.js"></script>
<script type="text/javascript" src="../../../js/bootstrap.min.js"> </script>

<script type="text/javascript">

$(document).on('click', '[data-toggle="lightbox"]', function(event) {
    event.preventDefault();
    $(this).ekkoLightbox();
});
</script>
