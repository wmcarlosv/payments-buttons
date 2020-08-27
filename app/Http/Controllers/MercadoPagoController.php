<?php
	namespace App\Http\Controllers;

	use Illuminate\Http\Request;
	use MercadoPago;

	class MercadoPagoController extends Controller{


		public function product(Request $request){
			$title = "Producto Mercado Pago";

			return view('mercadopago.product')->with(compact('title'));
		}

		public function setProduct(Request $request){

			MercadoPago\SDK::setAccessToken('TEST-8112655831923952-082616-06e537a056b482ef4d547817bc9add60-632212474');
			$preference = new MercadoPago\Preference();

			$title = $request->input('title');
			$qty = $request->input('qty');
			$price = $request->input('price');

			$data = [
				'title' => $title,
				'qty' => $qty,
				'total' => ($price * $qty)
			];

			$preference->back_urls = array(
				'success' => route('success'),
				'failure' => route('failure'),
				'pending' => route('pending')
			);

			$data = (object) $data;

			$item = new MercadoPago\Item();
			$item->title = $title;
			$item->quantity = $qty;
			$item->unit_price = $price;
			$preference->items = array($item);
			$preference->save();

			return view('mercadopago.process')->with(compact('preference','title','data'));
		}

		public function procesar_pago(Request $request){
			$data = [
				'preference_id' => $request->input('preference_id'),
				'back_url' => $request->input('back_url'),
				'payment_id' => $request->input('payment_id'),
				'payment_status' => $request->input('payment_status'),
				'payment_status_detail' => $request->input('payment_status_detail'),
				'merchant_order_id' => $request->input('merchant_order_id'),
				'processing_mode' => $request->input('processing_mode')
			];

			$data = (object) $data;

			return redirect()->to($data->back_url);
		}

		public function success(Request $request){
			dd($request);
		}

		public function failure(Request $request){
			dd($request);
		}

		public function pending(Request $request){
			dd($request);
		}
	}