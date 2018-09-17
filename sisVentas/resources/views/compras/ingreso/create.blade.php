@extends('layouts.admin')
@section('contenido')
	<div class="row">
		<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
			<h3>Nuevo Ingreso</h3>
			@if(count($errors)>0)
			<div class="alert alert-danger">
				<ul>
					@foreach($errors->all() as $error)
					<li>{{$error}}</li>
					@endforeach
				</ul>
			</div>
			@endif
		</div>
	</div>

			{!! Form::open(array('url'=>'compras/ingreso','method'=>'POST','autocomplete'=>'off')) !!}
			{{ Form::token()}}

	<div class="row">
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
			<div class="form-group">
				<label for="proveedor">Proveedor</label>
				<select name="idproveedor" id="idproveedor" class="form-control selectpicker" data-live-search="true">
					@foreach($personas as $persona)
					<option value="{{$persona->idpersona}}">{{$persona->nombre}}</option>
					@endforeach
				</select>
			</div>
		</div>
		<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
			<div class="form-group">
				<label>Tipo Comprobante</label>
				<select name="tipo_comprobante" class="form-control">
					<option value="Boleta">Boleta</option>
					<option value="Factura">Factura</option>
					<option value="Ticket">Ticket</option>
				</select>
			</div>
		</div>
		<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
			<div class="form-group">
				<label for="serie_comprobante">Serie de Comprobante</label>
				<input type="text" name="serie_comprobante" value="{{old('serie_comprobante')}}" class="form-control" placeholder="Serie de Comprobante...">
			</div>
		</div>
		<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
			<div class="form-group">
				<label for="num_comprobante">Numero de Comprobante</label>
				<input type="text" name="num_comprobante" value="{{old('num_comprobante')}}" class="form-control" placeholder="Numero de Comprobante..." required>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="panel panel-primary">
			<div class="panel-body">
				<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
					<div class="form-group">
						<label>Articulo</label>
						<select name="piarticulo" id="piarticulo" class="form-control selectpicker" data-live-search="true">
						@foreach($articulos as $articulo)
						<option value="{{$articulo->idarticulo}}">{{$articulo->articulo}}</option>
						@endforeach
						</select>
					</div>
				</div>
				<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
					<div class="form-group">
						<label for="cantidad">Cantidad</label>
						<input type="number" name="pcantidad" id="pcantidad" class="form-control" placeholder="cantidad">
					</div>
				</div>	
				<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
					<div class="form-group">
						<label for="precio_compra">Precio Compra</label>
						<input type="number" name="pprecio_compra" id="pprecio_compra" class="form-control" placeholder="P. compra">
					</div>
				</div>	
				<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
					<div class="form-group">
						<label for="precio_venta">Precio de Venta</label>
						<input type="number" name="pprecio_venta" id="pprecio_venta" class="form-control" placeholder="P. venta">
					</div>
				</div>
				<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
					<div class="form-group">
						<label></label>
						<button type="button" id="bt_add" class="btn btn-primary">Agregar</button>
					</div>
				</div>
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
					<table id="detalles" class="table table-striped table-bordered table-condensed table-hover">
						<thead style="background-color:#A9D0F5">
							<th>Opciones</th>
							<th>Articulos</th>
							<th>Cantidad</th>
							<th>Precio Compra</th>
							<th>Precio Venta</th>
							<th>Subtotal</th>
						</thead>
						<tfoot>
							<th>TOTAL</th>
							<th></th>
							<th></th>
							<th></th>
							<th></th>
							<th><H4 id="Total">S/. 0.00</H4></th>
						</tfoot>
						<tbody>
						</tbody>
					</table>
				</div>				
			</div>
			
		</div>
		<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
			<div class="form-group">
				<input type="hidden" name="_token" value="{{ csrf_token() }}">
				<button class="btn btn-primary" type="submit">Guardar</button>
				<button class="btn btn-danger" type="reset">Cancelar</button>
			</div>
		</div>
	</div>
			
			{!!Form::close() !!}


@endsection