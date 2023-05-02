<html>
	<head>
	</head>
	<body>
		<style>
			.card {
  background-color: #f8f9fa;
  box-shadow: 0px 2px 10px rgba(0, 0, 0, 0.1);
  margin-bottom: 2rem;
  overflow: hidden;
  border: 2px solid #333;
  border-radius: 5px;
  padding: 10px;
}


.card-body {
  padding: 2rem;
}

h1 {
  text-align: center;
}


.card-title {
  font-size: 2rem;
  margin-bottom: 1rem;
}

.card-subtitle {
  font-size: 1.25rem;
  margin-bottom: 1rem;
}

.card-text {
  font-size: 1.1rem;
  line-height: 1.5;
  margin-bottom: 1rem;
}

.card-text img {
  max-width: 100%;
  margin-bottom: 1rem;
}

.card-text small {
  font-size: 0.9rem;
}
	    </style>		
		<h1 class="titre-centre">{{ $fiche->titre }}</h1>
<div class="card">
	<div class="card-body">
	  <p class="card-text"><img src="{{ $fiche->img }}" alt="" class="img-fluid rounded float-right" style="max-width: 300px;"></p>
	  <h3 class="card-subtitle mb-2 text-muted">Auteur : {{  $fiche->auteur }}</h3>
	  <p class="card-text">{{  $fiche->contenu }}</p>
	  <p class="card-text"><small class="text-muted">Publié le {{  $fiche->datepublication }}</small></p>
	</div>
  </div>
</body>
</html>