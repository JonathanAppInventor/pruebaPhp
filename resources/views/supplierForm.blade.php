@extends ('template')

@section ('section')
<h1>Suppliers sheet!</h1>
<form action="{{ route('products.add') }}" method="POST">
	@csrf
	<input type="text" name="product" placeHolder="Product" class="form-control mb-2">
	<input type="number" name="quantity" placeHolder="Quantity" class="form-control mb-2">
	<input type="number" name="lot_num" placeHolder="Lot number" class="form-control mb-2">
	<input type="text" name="exp_date" placeHolder="Expiration date YYYY-MM-DD" class="form-control mb-2">
	<button class="btn btn-primary btn-block" type="submit">Add</button>
</form>
@endsection