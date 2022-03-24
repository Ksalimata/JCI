<script src="<?=base_url(); ?>assets/js/jquery-3.2.1.min.js"></script>
<script src="<?=base_url(); ?>assets/js/popper.min.js"></script>
<script src="<?=base_url(); ?>assets/js/bootstrap.min.js"></script>
<script src="<?=base_url(); ?>assets/plugins/scroll-fixed/jquery-scrolltofixed-min.js"></script>
<script src="<?=base_url(); ?>assets/plugins/slider/js/owl.carousel.min.js"></script>
<script src="<?=base_url(); ?>assets/js/script.js"></script>

<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.js"></script>

<script type="text/javascript">
	$(document).ready( function () {
	    $('#table_id').DataTable({
		  "language": {
		    "sProcessing": "Traitement en cours ...",
		    "sLengthMenu": "Afficher _MENU_ lignes",
		    "sZeroRecords": "Aucun résultat trouvé",
		    "sEmptyTable": "Aucune donnée disponible",
		    "sInfo": "Lignes _START_ à _END_ sur _TOTAL_",
		    "sInfoEmpty": "Aucune ligne affichée",
		    "sInfoFiltered": "(Filtrer un maximum de_MAX_)",
		    "sInfoPostFix": "",
		    "sSearch": "Chercher:",
		    "sUrl": "",
		    "sInfoThousands": ",",
		    "sLoadingRecords": "Chargement...",
		    "oPaginate": {
		      "sFirst": "Premier", "sLast": "Dernier", "sNext": "Suivant", "sPrevious": "Précédent"
		    },
		    "oAria": {
		      "sSortAscending": ": Trier par ordre croissant", "sSortDescending": ": Trier par ordre décroissant"
		    }
		  }
		});
	} );
</script>