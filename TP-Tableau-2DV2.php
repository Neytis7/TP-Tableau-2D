<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Soirée cocktail</title>
<style>
    .barre{text-decoration: line-through;}
</style>
</head>
<body>
     <!-- Responsive navbar-->
     <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="#">Soirée cocktail</a>
            
        </div>
    </nav>
<!-- .container +tab -->
<section class="container">
        <!-- 100 % sur mobile et 33 % sur pc -->
        <div class="row">
            <div class="col-12 col-md-4 ">
                <h1>Liste des invités</h1>
                <form action="ajouterPersonne.php" method="POST">
                <div class="mb-3">
                    <input 
                    aria-label="Prénom"
                    class="form-control" 
                    name="prenom" 
                    placeholder="Prénom">
                </div>
                <div class="mb-3">
                    <input 
                    aria-label="Nom"
                    class="form-control" 
                    name="nom" 
                    placeholder="Nom">
                </div>
                <div class="mb-3">
                    <input 
                    type ="number"
                    aria-label="Age"
                    class="form-control" 
                    name="age" 
                    placeholder="Age">
                </div>
                <button class="btn btn-primary" type="submit">
                    <i class="fa fa-plus"></i>
                </button>
                </form>
<table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Nom</th>
                            <th>Prénom</th>
                            <th>Age</th>
                            <th colspan="2">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        session_start();
                        $nb= 0;
                        $presence = 1;
                        if(isset($_SESSION["tab"])){
                            var_dump($_SESSION);
                            foreach($_SESSION["tab"] as $personne){
                                if($personne["presence"] == 1){
                        ?>
                        <tr>
                            <td><?php echo $personne["nom"]?></td>
                            <td><?php echo $personne["prenom"]?></td>
                            <td><?php echo $personne["age"]?></td>
                            <td>
                                <a href="ChangerEtat.php?x=0&nb=<?php echo $nb; ?>" class="btn btn-warning">
                                    <i class="fa fa-minus"></i>   
                                </a>
                            </td>
                            <td>
                                <a href="enleverPersonne.php?nb=<?php echo $nb; ?>" class="btn btn-danger">
                                    <i class="fa fa-trash"></i>   
                                </a>
                            </td>
                        </tr>
                        <?php $nb = $nb +1 ;}else{?>
                            <tr class="table-danger">
                            <td class="barre"><?php echo $personne["nom"]?></td>
                            <td class="barre"><?php echo $personne["prenom"]?></td>
                            <td class="barre"><?php echo $personne["age"]?></td>
                            <td>
                                <a href="ChangerEtat.php?x=1&nb=<?php echo $nb; ?>" class="btn btn-success">
                                    <i class="fa fa-plus"></i>   
                                </a>
                            </td>
                            <td>
                                <a href="enleverPersonne.php?nb=<?php echo $nb; ?>" class="btn btn-danger">
                                    <i class="fa fa-trash"></i>   
                                </a>
                            </td>
                            </tr>
                        <?php $nb = $nb +1 ;}}}?>
                    </tbody>
                </table>  
<a href="supprimerSession.php" class="btn btn-danger">Détruire session</a>    
</section>        
</body>
</html>


