 </div> <!-- /.container -->

</div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <!-- Latest compiled and minified JavaScript -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.2/js/bootstrap-select.min.js"></script>

    <script type="text/javascript">
	  $( function() {
	    $( "#pick-a-date" ).datepicker();

	    $('.selectpicker').selectpicker({
 			noneSelectedText: 'ADD PACKAGE',
 
		});

	    var options = [
	    	{index:0, value:300},
	    	{index:1, value:100},
	    	{index:2, value:50},
	    	{index:3, value:180}
	    ];

		$('.selectpicker').on('changed.bs.select', function (e, index, newValue) {
			$.each(options, function(j, optionItem) {
				var total_amount = $('#total_amount').data('amount');

				if(optionItem.index == index && newValue === true) {
					total_amount += parseInt(optionItem.value);
					$('#total_amount').html('$'+total_amount);
					$('#total_amount').data( "amount", total_amount );
				}

				if(optionItem.index == index && newValue !== true) {
					total_amount -= parseInt(optionItem.value);
					$('#total_amount').html('$'+total_amount);
					$('#total_amount').data( "amount", total_amount );

				}
			});
		});

		var source = [
		    { name: 'Soekarno Hatta International Airport - Jakarta', code: 'CGK'},
		    { name: 'Kuala Lumpur International Airport', code: 'KUL'},
		    { name: 'Senai International Airport', code: 'JHB'},
		    { name: 'Mandalay International Airport', code: 'MDL'},
		    { name: 'Ninoy Aquino International Airport', code: 'MNL'},
		    { name: 'Singapore Changi Airport', code: 'SIN'},
		    { name: 'Suvarnabhumi Airport', code: 'BKK'}
		];

		$( "#pick-up" ).autocomplete({
		    source: function(request, response){
		        var searchTerm = request.term.toLowerCase();
		        var ret = [];
		        $.each(source, function(i, airportItem){
		            if (airportItem.code.toLowerCase().indexOf(searchTerm) !== -1 || airportItem.name.toLowerCase().indexOf(searchTerm) === 0)
		                ret.push(airportItem.name + ' - ' + airportItem.code);
		        });
		       
		        response(ret);
		    }
		});

		$( "#drop-off" ).autocomplete({
		    source: function(request, response){
		        var searchTerm = request.term.toLowerCase();
		        var ret = [];
		        $.each(source, function(i, airportItem){
		            if (airportItem.code.toLowerCase().indexOf(searchTerm) !== -1 || airportItem.name.toLowerCase().indexOf(searchTerm) === 0)
		                ret.push(airportItem.name + ' - ' + airportItem.code);
		        });
		       
		        response(ret);
		    }
		});

	  });
    </script>
<?php wp_footer(); ?> 

<footer>
	<div class="container">
		<div class="row">
			<div class="col-sm-8">
				<ul>
			       	<li> GrabLimo </li>
					<li> GrabCruise </li>
					<li> GrabCopter </li>
			     </ul>
			</div>
			<div class="col-sm-4">
				<ul>
			       	<li style="font-weight: normal"> Copyright Grab.com 2017. All Rights Reserved.  </li>
			     </ul>
				
			</div>
		</div>
	</div>
      
</footer>

  </body>
</html>