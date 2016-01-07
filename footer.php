
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <script>
	    // Fill modal with content from link href
	    $("#myModal").on("show.bs.modal", function(e) {
	        var link = $(e.relatedTarget);
	        $(this).find(".modal-body").load(link.attr("href"));

    });
	</script>
  </body>
</html>