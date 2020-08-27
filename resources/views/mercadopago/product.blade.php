@extends('layout.app')

@section('title',$title)

@section('content')
<div class="row" style="margin: 20px 0px;">
	<div class="col-md-12">
		<div class="card">
			<div class="card-header">
				<h3>Ingrese un Producto de Prueba</h3>
			</div>

			<form class="form" method="POST" action="{{ route('setProduct') }}" autocomplete="off">
				<div class="card-body">
						<div class="form-group">
							<label>Titulo:</label>
							<input type="text" required name="title" class="form-control">
						</div>
						<div class="form-group">
							<label>Cantidad:</label>
							<input type="number" required name="qty" class="form-control">
						</div>
						<div class="form-group">
							<label>Precio:</label>
							<input type="text" required name="price" class="form-control">
						</div>
				</div>
				<div class="card-footer text-right">
					<button class="btn btn-success" type="submit">Comprar</button>
				</div>
			</form>

		</div>
	</div>
</div>
@stop