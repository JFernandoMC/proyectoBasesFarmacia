</div>
<script>
    var listaMenu = document.querySelectorAll(".nav > .activar > li");
    var cadena = "<?= $_GET['url'] ?>";

    for (let i = 0; i < listaMenu.length; i++) {

        listaMenu[i].setAttribute("class", "");
        if (listaMenu[i].getAttribute("data-active") != null) {
            if (listaMenu[i].getAttribute("data-active").includes(cadena.split("/")[0])) {
                listaMenu[i].setAttribute("class", "active");
            }
        }
    }
</script>
<!--   Core JS Files   -->

<script>
function multi(){
		var total = 0;

		$(".monto").each(function(){
			if (isNaN(parseFloat($(this).val()))) {
				total += 0;
			} else {
			  total += parseFloat($(this).val());
	  }
	});

	document.getElementById('Costo').innerHTML = total;
}</script>
<script src="<?=URL?>public/js/core/jquery.min.js"></script>
<script src="<?=URL?>public/js/core/popper.min.js"></script>
<script src="<?=URL?>public/js/core/bootstrap.min.js"></script>
<script src="<?=URL?>public/js/plugins/perfect-scrollbar.jquery.min.js"></script>
<!--  Google Maps Plugin    -->
<script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
<!-- Chart JS -->
<script src="<?=URL?>public/js/plugins/chartjs.min.js"></script>
<!--  Notifications Plugin    -->
<script src="<?=URL?>public/js/plugins/bootstrap-notify.js"></script>
<!-- Control Center for Now Ui Dashboard: parallax effects, scripts for the example pages etc -->
<script src="<?=URL?>public/js/paper-dashboard.min.js?v=2.0.1" type="text/javascript"></script>
<!-- Paper Dashboard DEMO methods, don't include it in your project! -->
<script src="<?=URL?>public/demo/demo.js"></script>
</body>

</html>
