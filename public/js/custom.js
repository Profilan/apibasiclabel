function addColumnAfter(columnNumber, title, table) {
	var nextColumn = columnNumber + 1;
	
	table.find('thead th:nth-child(' + columnNumber + ')').after('<th />');
	table.find('thead th:nth-child(' + nextColumn + ')').text(title);
	table.find('tbody td:nth-child(' + columnNumber + ')').after('<td />');
}



$( document ).ready(function() {
	
	$('.table-operation').each(function(index) {
		addColumnAfter(2, 'Datatype', $(this));
		addColumnAfter(3, 'Format', $(this));
		
		$(this).find('tbody tr').each(function(index) {
			var description = $(this).find('td:nth-child(5)').text();
			var parts = description.split(/\s+/);
			
			$(this).find('td:nth-child(3)').text(parts[0]);
			
			parts.shift();
			var newDescription = parts.join(" ");
			
			$(this).find('td:nth-child(5)').text(newDescription);
		});
	});
	
});