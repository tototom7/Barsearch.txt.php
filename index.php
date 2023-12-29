<!DOCTYPE html>
	<html lang="en">
	<head>
<title>BarSearch.TXT</title>
<meta name="description" content="Il est aussi possible de faire de l'insertion (autre projet) Mais vu que c'est pas très jolie jolie je le garde en local ;) Enjoy D Code <3">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link rel="stylesheet" href="assets/styles.css">
	
<link
href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,wght@0,400;0,500;0,700;1,700&family=Press+Start+2P&display=swap"
rel="stylesheet">
		<style>
			
			body{
				font-family: 'DM Sans', sans-serif;
				font-family: 'Press Start 2P', cursive;
				background: rgb(0,0,0);
				overflow:hidden;
				background: radial-gradient(circle, rgba(0,0,0,1) 0%, rgba(144,209,90,1) 48%, rgba(0,0,0,1) 100%);

			}
			h1.logo{
				text-shadow: 4px 19px 2px rgba(164,218,86,0.6);
				background: rgb(0,0,0);
				color:white;
				font-size:3vw;
				margin-left: 6%;
				text-align: center;
				text-transform: uppercase;
				border-radius:25px;
				z-index:1;
				padding-top:30px;
				background: radial-gradient(circle, rgba(0,0,0,1) 0%, rgba(70,76,101,1) 48%, rgba(0,0,0,1) 100%);
				height:8vh;
			}
			form{
				width:80vw;
			}
			input{
				font-family: 'DM Sans', sans-serif;
				z-index:1;
				position:absolute;
				font-family: 'Press Start 2P', cursive;
				width:70vw;
				text-align:center;
				background: rgb(255,255,255);
				background: radial-gradient(circle, rgba(255,255,255,1) 0%, rgba(144,209,90,1) 48%, rgba(255,248,248,1) 100%);
				margin-top:.5vh;margin-left: 15vw;height:75px;border-radius:50px;border:none;
			}
			input::placeholder{
				font-family: 'DM Sans', sans-serif;
				font-family: 'Press Start 2P', cursive;
				text-align:center;
				opacity:.4;
			}
			ul{
				position:absolute;
				top:60%;
				width:80%;
				margin-left:10%;
				text-shadow:2px 2px 2px white;
				font-size:17px;
			}
			@media screen and (max-width:768px) {
				input{
					width:70vw;
					margin-left: 15vw;
				}
				form{
				margin-left:10vw;
			}
			}
		</style>
		</head>
		<body>

<img style="margin-left:40vw;opacity:.1;width:20%;height:auto;display:flex;z-index:4000;" src="simpson-homer.gif">
<h1 class="logo" style="">Interface coût à la page </h1>
		<form>
		<input type="text" id="search" placeholder="Entrez votre recherche...">
		</form>
		
		<table class="container"style="margin-top:9vh;">
	<thead>
		<tr>
			<th><h4>Client / Matériel / Action Anomalie</h4></th>
			<th><h4>Compteur Couleur</h4></th>
			<th><h4>Compteur Noir</h4></th>
			<th><h4>Compteur Total</h4></th>
		</tr>
	</thead>
	<tbody id="results"></tbody>
	<!-- <tbody>
		<tr>
			<td>Google réel</td>
			<td>9518</td>
			<td>6369</td>
			<td>01:32:50</td>
		</tr>
		<tr>
			<td>Google prévisionnel</td>
			<td>7326</td>
			<td>10437</td>
			<td>00:51:22</td>
		</tr>
		<tr>
			<td>Amazon réel</td>
			<td>4162</td>
			<td>5327</td>
			<td>00:24:34</td>
		</tr>
		<tr>
			<td>Amazon prévisionnel</td>
			<td>4162</td>
			<td>5327</td>
			<td>00:24:34</td>
		</tr>
 
	</tbody> -->
</table>


<div class="area" >
            <ul class="circles">
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
            </ul>
    </div >
			</body>

<script>
	const searchInput = document.getElementById('search');
	const resultsList = document.getElementById('results');
	
	searchInput.addEventListener('keyup', function() {
		const searchTerm = searchInput.value;
		if (searchTerm.length >= 4) {
		fetch('search.php', {
			method: 'POST',
			body: new URLSearchParams({ search: searchTerm })
		})
		.then(response => response.text())
		.then(data => resultsList.innerHTML = data);
		} else {
		resultsList.innerHTML = '';
		}
	});
</script>
</html>