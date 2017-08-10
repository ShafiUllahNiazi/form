<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script type="text/javascript">
         function drawTable(data) {

  var dateTable = $('#selectTable');
  dateTable.children('tbody').empty();

  $.each(data,function(k,v){

    var selectEl  = $('<select>'),
      selectVal = [
        {val : 1, text: '1'},
        {val : 2, text: '2'},
        {val : 3, text: '3'},
        {val : 4, text: '4'},
        {val : 5, text: '5'}
      ];

      $(selectVal).each(function() {
        selectEl
       .append($('<option>')
               .attr('value',this.val)
               .text(this.text));
      });

      var row     = $('<tr />',{'class':'row-'+k});
      dateTable.append(row);
      row.append($('<td />').append(v));
      row.append($('<td />').append(selectEl));

   });
}

var a = ['Product-1','Product-2','Product-3','Product-4','Product-5'];

drawTable(a);
	</script>
</head>
<body>
<table id="selectTable" class="m-table">
    <thead>
        <tr>
            <th>Products</th>
            <th>Range</th>
        </tr>
    </thead>
</table>
</body>
</html>