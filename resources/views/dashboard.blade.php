<!DOCTYPE html>
<html>
<head>
	<title>Kepegawaian</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
</head>
<body>

	<div class="container">
    <br>
	<h2><a href="/">PT Listrik Biru</a></h2>
    <br>
	<h3>Data Pelanggan</h3>
	<br/>

		<table border="1" class="table table-hover table-striped">
            <tr class="mode">
                <th scope="col">#</th>
                <th scope="col">Nama</th>
                <th scope="col">Alamat</th>
                <th scope="col">Nometer</th>
                <th scope="col">Voltase</th>
            </tr>
            @foreach ($pelanggans as $pelanggan)
                <tr class="mode">
                <th scope="row">{{ $pelanggan->id}}</th>
                    <td>{{ $pelanggan->nama}}</td>
                    <td>{{ $pelanggan->alamat}}</td>
                    <td>{{ $pelanggan->nometer}}</td>
                    <td>{{ $pelanggan->tarif->voltase}}</td>
                </tr>
            @endforeach
		</table>
	</div>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>

</body>
</html>