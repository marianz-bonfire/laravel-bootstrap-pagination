<html lang="en">
<head>
  <title>Laravel Blogs</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <style type="text/css">
    .mt-5 {
        margin-top: 90px !important;
    }
</style>
</head>
<body>
	<div class="container mt-5">
    <form>
      <div class="form-row align-items-center">
        <div class="col-sm-3 my-1">
          <label class="sr-only" for="from">From</label>
          <input type="text" class="form-control" id="from" placeholder="Index from">
        </div>
        <div class="col-sm-3 my-1">
          <label class="sr-only" for="to">To</label>
          <input type="text" class="form-control" id="to" placeholder="Index to">               
        </div>
        <div class="col-auto my-1">
          <button type="button" class="btn btn-primary" id="filterButton">Filter</button>
        </div>
      </div>
    </form>
		<div id="table_data">
		@include('pagination')
	   </div>
	</div>
</body>  
<script>
$(document).ready(function() {
    $(document).on('click', '.pagination a', function(event) {
        event.preventDefault();
        var page = $(this).attr('href').split('page=')[1];
        paginate(page);
    });

    $('#filterButton').on('click', function(event) {
        var page = $('.pagination .active a').text();
        paginate(page);
    });

    function paginate(page) {
        var from = $('#from').val();
        var to = $('#to').val();
        $.ajax({
            url: "paginate?page=" + page + "&from=" + from + "&to=" + to,
            success: function(data) {
                $('#table_data').html(data);
            }
        });
    }
});
</script>
</html>