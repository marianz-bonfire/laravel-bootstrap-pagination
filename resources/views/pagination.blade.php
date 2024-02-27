<div class="row">
	<div class="col-lg-12">
		
		<table class="table table-bordered" id="laravel">
		   <thead>
			  <tr>
                <th width="100px">Id</th>
                <th>Name</th>
                <th>Description</th>
			  </tr>
		   </thead>
		   <tbody>
				@if(!empty($blogs) && $blogs->count())
                @foreach ($blogs as $value)
				  <tr>
                    <td>{{ $value->id }}</td>
                    <td>{{ $value->name }}</td>
                    <td>{{ $value->description }}</td>
				  </tr>
				  @endforeach
				@else
				<tr>
					<td colspan="3">No data found.</td>
				</tr>
				@endif
		   </tbody>
		</table>
	</div>
</div>	
<div class="row">  
	<div class="col-lg-12">
		@if(!empty($blogs))
		{!! $blogs->links() !!}
		@endif
	</div>
</div>