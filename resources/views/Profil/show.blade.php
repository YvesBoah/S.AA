<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" 
    integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    
            <p class="text-center"> Mon Profil </p>

            <p class="text-center">nom : {{Auth::user()->name}} </p>
            <p class="text-center">prenom : {{Auth::user()->prenom}} </p>
            <p class="text-center">email : {{Auth::user()->email}} </p>
            <p class="text-center">role : {{Auth::user()->role}} </p>
            <p class="text-center">date de naissance : {{Auth::user()->date_de_naissance}} </p>
            <p class="text-center">Ville : {{Auth::user()->ville}} </p>
            <p class="text-center">telephone : {{Auth::user()->telephone}} </p>
            <p class="text-center">Statut : {{Auth::user()->Statut}} </p>
           
</body>
</html>