<!DOCTYPE html>
<html lang="fr">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="ie=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>TODOLIST</title>

		<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,400i,700|Pacifico" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="assets/css/style.css">

		<script defer src="assets/js/jquery-3.3.1.min.js"></script>
		<script defer src="assets/js/app.js"></script>
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
				<div class="view-item">
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
			</div>
			<!--Tasks-->
			<div class="tasks-list">
				<h2 class="block-title">Tâches</h2>

				<form>
					<ul class="tasks">
						<li>
							<label class="task">
								<input type="checkbox"> 
								<span class="task-label">oijsdcoi sdjfoijsoidfj sdoif jsdmf iojsdpf oidjs oidsj posdifj sdmof ijsdp fijsdpof ijsdfp uhdsfip uhdsfo iusdhfo</span>
								<span class="task-cat color-red">Catégorie 1</span>
								<span class="task-priority p-standard" title="prioritaire"></span>
								<span class="task-date">
									20/10/2017
								</span>
							</label>
						</li>
						<li>
							<label class="task">
								<input type="checkbox"> 
								<span class="task-label">tâche 1</span>
								<span class="task-cat color-orange">Catégorie 3</span>
								<span class="task-priority p-low" title="prioritaire"></span>
								<span class="task-date">
									20/10/2017
								</span>
							</label>
						</li>
						<li>
							<label class="task">
								<input type="checkbox"> 
								<span class="task-label">tâche 1</span>
								<span class="task-cat color-red">Catégorie 1</span>
								<span class="task-priority p-high" title="prioritaire"></span>
								<span class="task-date">
									20/10/2017
								</span>
							</label>
						</li>
						<li>
							<label class="task">
								<input type="checkbox"> 
								<span class="task-label">tâche 1</span>
								<span class="task-cat color-red">Catégorie 1</span>
								<span class="task-priority p-high" title="prioritaire"></span>
								<span class="task-date">
									20/10/2017
								</span>
							</label>
						</li>
						<li>
							<label class="task">
								<input type="checkbox"> 
								<span class="task-label">tâche 1</span>
								<span class="task-cat color-red">Catégorie 1</span>
								<span class="task-priority p-high" title="prioritaire"></span>
								<span class="task-date">
									20/10/2017
								</span>
							</label>
						</li>
						<li>
							<label class="task">
								<input type="checkbox"> 
								<span class="task-label">tâche 1</span>
								<span class="task-cat color-red">Catégorie 1</span>
								<span class="task-priority p-high" title="prioritaire"></span>
								<span class="task-date">
									20/10/2017
								</span>
							</label>
						</li>
						<li>
							<label class="task">
								<input type="checkbox"> 
								<span class="task-label">tâche 1</span>
								<span class="task-cat color-red">Catégorie 1</span>
								<span class="task-priority p-high" title="prioritaire"></span>
								<span class="task-date">
									20/10/2017
								</span>
							</label>
						</li>
					</ul>
				</form>

				<button class="add-item">Ajouter une tâche</button>
				<div class="view-item">
					<form class="form form-blocks" method="post">
						<div class="form-block">
							<label class="form-label" for="task-name">Nom de la tâche <abbr title="champ obligatoire">*</abbr></label>
							<input class="form-field" id="task-name" name="task-name" type="text" required>
						</div>
						<div class="form-block">
							<label class="form-label" for="task-category">Catégorie de la tâche <abbr title="champ obligatoire">*</abbr></label>
							<select class="form-field" id="task-category" name="task-category" required>
								<option value="1">Catégorie 1</option>
								<option value="2">Catégorie 2</option>
								<option value="3">Catégorie 3</option>
							</select>
						</div>
						<div class="form-block">
							<label class="form-label" for="task-priority">Priorité</label>
							<select class="form-field" id="task-priority" name="task-priority">
								<option value="low">Basse</option>
								<option value="standard">Normale</option>
								<option value="high">Importante</option>
							</select>
						</div>
						<div class="form-block">
							<label class="form-label" for="task-date">Date</label>
							<input class="form-field" id="task-date" name="task-date" type="text">
						</div>
						<div class="form-block dbl">
						<button class="form-btn" type="submit">Ajouter</button>
						</div>
					</form>
				</div>
			</div>
		</main>

		<footer class="site-footer">
			<p>Réalisé par l'équipe de <a href="http://simplon.co">Simplon Rodez</a></p>
			
		</footer>
	</body>
</html>