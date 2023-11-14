@extends('template')

@section('content')
	<div id="main-container">
        <div class="title-menu">
            <h1>MENU DE LA SEMANA</h1>
        </div>
        <div class="title-menu">
            <p>La información del menú de la semana estará disponible desde {{$inicioSemana}} hasta {{$finSemana}}.</p>
        </div>
		<table class="table-menu">
			<thead>
				<tr>
                    <th>DESCRIPCIÓN</th>
                    <th>LUNES</th>
                    <th>MARTES</th>
                    <th>MIERCOLES</th>
                    <th>JUEVES</th>
                    <th>VIERNES</th>
				</tr>
			</thead>

			<tr>
				<td>DESAYUNO</td>
                <td>#</td>
                <td>#</td>
                <td>#</td>
                <td>#</td>
                <td>#</td>
			</tr>
			<tr>
				<td>ALMUERZO</td>
                <td>#</td>
                <td>#</td>
                <td>#</td>
                <td>#</td>
                <td>#</td>
			</tr>
			<tr>
				<td>CENA</td>
                <td>#</td>
                <td>#</td>
                <td>#</td>
                <td>#</td>
                <td>#</td>
			</tr>
		</table>
	</div>
@endsection