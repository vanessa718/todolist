<?php 
spl_autoload_register(function ($class_name)
{
    include 'controllers/class/' . $class_name . '.php';
});

?>
<!DOCTYPE html>
<html lang="fr">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="ie=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Liste de tâches</title>
		
		 <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,400i,700|Pacifico" rel="stylesheet">
		<link rel="stylesheet" href="assets/css/style.css">

		<script defer src="assets/js/jquery-3.3.1.min.js"></script>
		<script defer src="assets/js/app.js"></script>
	</head>
	<body>
		<header class="site-header">
			<h1>Liste de tâches</h1>
		</header>

		<main class="site-main">
			<!-- Categories -->
			<div class="categories-list">
				<h2 class="block-title">Catégories</h2>

				<?php 
				$db = new Connect();
				$categories = $db->getCategories();

				if(empty($categories)): ?>
					<p>Il n'y a pas de catégories</p>
				<?php elseif(isset($categories['error'])) : ?>
					<p><?php echo $categories['error']; ?></p>
				<?php else: ?>
					<ul id="cat-list" class="cat-list">
						<li>
							<a data-cat="*" href="/all" class="category active">Toutes les catégories</a>
						</li>

						<?php foreach ($categories as $category): ?>
							<li>
								<a data-cat="<?php echo $category->getId(); ?>" href="/category-<?php echo $category->getId(); ?>" class="category color-<?php echo $category->getColor(); ?>"><?php echo $category->getName(); ?></a>
							</li>
						<?php endforeach; ?>
					</ul>
				<?php endif; ?>
				<button class="add-item" id="add-category-btn" aria-controls="add-category" >Ajouter une catégorie</button>
				<div class="view-item" id="add-category" aria-expanded="false" aria-labelledby="add-category-btn">
					<form class="form" method="post">
						<label class="form-label" for="cat-name">Nom de la catégorie <abbr title="champ obligatoire">*</abbr></label>
						<input class="form-field" id="cat-name" name="cat-name" type="text" required>
						<label class="form-label" for="cat-color">Couleur de la catégorie <abbr title="champ obligatoire">*</abbr></label>
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
				<button class="delete-item"  id="delete-category-btn" aria-controls="delete-category">Supprimer une catégorie</button>
				<div class="view-item" id="delete-category" aria-expanded="false" aria-labelledby="delete-category-btn">
					<form class="form" method="post">
						<label class="form-label" for="cat-delete">Catégorie</label>
						<select class="form-field" id="cat-delete" name="cat-delete" required>
							<option value="1">Catégorie 1</option>
							<option value="2">Catégorie 2</option>
							<option value="3">Catégorie 3</option>
							<option value="4">Catégorie 4</option>
						</select>
						<button class="form-btn" type="submit">Supprimer</button>
					</form>
				</div>
			</div>

			<!-- Tasks -->
			<div class="tasks-list">
				<h2 class="block-title">Tâches</h2>

				<form>
					<?php 
					$tasks = $db->getTasks();

					if(empty($tasks)): ?>
						<p>Il n'y a pas de tâche</p>
					<?php elseif(isset($tasks['error'])) : ?>
						<p><?php echo $tasks['error']; ?></p>
					<?php else: ?>
						<ul id="tasks" class="tasks">
							<?php foreach ($tasks as $task): ?>
								<li data-cat="<?php echo $task->getCategory();?>">
									<label class="task">
										<input type="checkbox"> 
										<span class="task-label"><?php echo $task->getContent();?></span>
										<span class="task-cat color-red"><?php echo $task->getCategory();?></span>
										<span class="task-priority p-1" title="prioritaire"><?php echo $task->getPriority();?></span>
										<span class="task-date">
											<?php echo $task->getDate();?>
										</span>
									</label>
								</li>
							<?php endforeach; ?>
						</ul>
					<?php endif; ?>
					
				</form>

				<button class="add-item" id="add-task-btn" aria-controls="add-task">Ajouter une tâche</button>
				<div class="view-item" id="add-task" aria-expanded="false" aria-labelledby="add-task-btn">
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
				<button class="delete-item js-delete-task">Supprimer les tâches effectuées</button>
			</div>
		</main>
		
		<footer class="site-footer">
			<p>Réalisé par l'équipe de <a href="http://simplon.co/rodez">Simplon Rodez</a></p>
		</footer>
	</body>
</html>