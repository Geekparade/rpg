<?php include('header.php'); ?>
<body class="bodyStart">
	<main class="mainStart">
		<h2>Créer équipes</h2>
		<a href="statistique.php" id="buttonStat">Voir les stats des personnages</a>
		<hr class="separator">

	<div class="teamChoice">
		<div class="character">
			<h3>Les héros</h3>
			<div class="inputLabel">
				<h4>Personnage 1 :</h4>
				<div>
					<label for="name1">Nom<span class="required">*</span>:</label>
					<input type="text" id="name1">			
				</div>
				<div>
					<label>Type<span class="required">*</span>:</label>
					<select id="monselect">
						<option value="valeur1">Magicien</option> 
						<option value="valeur2">Elfe</option>
						<option value="valeur3">Nain</option>
						<option value="valeur4">Guerrier</option>
					</select>				
				</div>
			</div>
			<div class="inputLabel">
				<h4>Personnage 2 :</h4>
				<div>
					<label for="name2">Nom<span class="required">*</span>:</label>
					<input type="text" id="name2">			
				</div>
				<div>
					<label>Type<span class="required">*</span>:</label>
					<select id="monselect">
						<option value="valeur1">Magicien</option> 
						<option value="valeur2">Elfe</option>
						<option value="valeur3">Nain</option>
						<option value="valeur4">Guerrier</option>
					</select>				
				</div>
			</div>
			<div class="inputLabel">
				<h4>Personnage 3 :</h4>
				<div>
					<label for="name3">Nom<span class="required">*</span>:</label>
					<input type="text" id="name3">			
				</div>
				<div>
					<label>Type<span class="required">*</span>:</label>
					<select id="monselect">
						<option value="valeur1">Magicien</option> 
						<option value="valeur2">Elfe</option>
						<option value="valeur3">Nain</option>
						<option value="valeur4">Guerrier</option>
					</select>				
				</div>
			</div>
		</div>

		<div class="character">
			<h3>Les monstres</h3>
			<div class="inputLabel">
				<h4>Monstre 1 :</h4>
				<div>
					<label for="monster1">Nom<span class="required">*</span>:</label>
					<input type="text" id="monster1">			
				</div>
				<div>
					<label>Type<span class="required">*</span>:</label>
					<select id="monselect">
						<option value="valeur1">Mage noir</option> 
						<option value="valeur2">Orque</option>
						<option value="valeur3">Gobelin</option>
						<option value="valeur4">Ombre noir</option>
						<option value="valeur4">Sauron</option>
					</select>				
				</div>
			</div>
			<div class="inputLabel">
				<h4>Monstre 2 :</h4>
				<div>
					<label for="monster2">Nom<span class="required">*</span>:</label>
					<input type="text" id="monster2">			
				</div>
				<div>
					<label>Type<span class="required">*</span>:</label>
					<select id="monselect">
						<option value="valeur1">Mage noir</option> 
						<option value="valeur2">Orque</option>
						<option value="valeur3">Gobelin</option>
						<option value="valeur4">Ombre noir</option>
						<option value="valeur4">Sauron</option>
					</select>				
				</div>
			</div>
			<div class="inputLabel">
				<h4>Monstre 3 :</h4>
				<div>
					<label for="monster3">Nom<span class="required">*</span>:</label>
					<input type="text" id="monster3">			
				</div>
				<div>
					<label>Type<span class="required">*</span>:</label>
					<select id="monselect">
						<option value="valeur1">Mage noir</option> 
						<option value="valeur2">Orque</option>
						<option value="valeur3">Gobelin</option>
						<option value="valeur4">Ombre noir</option>
						<option value="valeur4">Sauron</option>
					</select>				
				</div>
			</div>
		</div>
	<div>
	</main>
	<label for="buttonValidateStart"></label>
	<input type="button" name="" id="buttonValidateStart" value="Valider">

<?php include('footer.php'); ?>
