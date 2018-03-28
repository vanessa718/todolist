<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>TODOLIST</title>
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,400i,700|Pacifico" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="assets/css/style.css">
</head>
<body>
	<header class="site-header">
		<h1>Liste de tâches</h1>
	</header>

	<main class="site-main">
		<!--Categories-->
		<div class="categories-list">
			<h2 class="bloc-title">Catégories</h2>
			<ul class="cat-list">
				<li>
					<a href="/category-1" class="category color-red cat-default">Catégorie 1</a>
				</li>
				<li>
					<a href="/category-2" class="category color-blue">Catégorie 2</a>
				</li>
				<li>
					<a href="/category-3" class="category color-orange">Catégorie 3</a>
				</li>
				<li>
					<a href="/category-4" class="category color-pink">Catégorie 4</a>
				</li>
			</ul>
			<button class="add-item">Ajouter une catégorie</button>
			<form class="form" method="POST">
				<label class="form-label" for="cat-name">Nom de la catégorie<abbr title="champ obligatoire">*</abbr></label>
				<input class="form-field" id="cat-name" name="cat-name" type="text" required>
				<label class="form-label" for="cat-color">Couleur de la catégorie<abbr title="champ obligatoire">*</abbr></label>
				<select class="form-field" id="cat-color" name="cat-color" required>
					<option value="red">Rouge</option>
					<option value="blue">Bleu</option>
					<option value="orange">Orange</option>
					<option value="pink">Rose</option>
					<option value="green">Vert</option>
					<option value="grey">Gris</option>
				</select>
				<button class="form-btn" type="submit">Ajouter</button>
			</form>
		</div>
		<!--Tasks-->
		<div class="tasks-list">
			<h2 class="bloc-title">Tâches</h2>
		</div>

	</main>

	<footer class="site-footer">
		<p>Réalisé par l'équipe de <a href="http://simplon.co">Simplon Rodez</a></p>
		
	</footer>
</body>
</html>