@extends('layout.app')

@section('title', 'Compra de Producto - '.$title)

@section('content')
<div class="row" style="margin: 20px 0px;">
	<div class="col-md-12">
		<div class="card">
			<div class="card-header">
				<h4>Confirmacion de Compra</h4>
			</div>
			<div class="card-body">
				<table class="table table-bordered table-striped">
					<thead>
						<th>Producto</th>
						<th>Cantidad</th>
						<th>Total</th>
					</thead>
					<tbody>
						<tr>
							<td>{{ $data->title }}</td>
							<td>{{ $data->qty }}</td>
							<td>{{ $data->total }}</td>
						</tr>
					</tbody>
				</table>
			</div>
			<div class="card-footer text-right">
				<form action="{{ route('procesar_pago') }}" method="POST" style="display: inline;">
				  <script
				   src="https://www.mercadopago.com.ar/integrations/v1/web-payment-checkout.js"
				   data-preference-id="<?php echo $preference->id; ?>">
				  </script>
				</form>
				<a class="btn btn-danger" href="{{ route('product') }}">Cancelar</a>
			</div>
		</div>
	</div>
</div>
@stop