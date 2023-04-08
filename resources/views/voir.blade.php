<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>Gestion Stagiaires</title>
</head>
<body>
    <div class="p-4 space-y-5">
        <div>
            <span class=" font-extrabold  text-xl "> Details de stagiaire :  {{$stagiaires->nom .' '. $stagiaires->prenom}}</span>
        </div>
    <div class=" border-2 border-gray-500 p-5">

        <div class=" font-bold text-xl uppercase font-mono">
            <span>{{$stagiaires->nom}}</span>
            <span>{{$stagiaires->prenom}}</span>
        </div>
        <div>
            <span class=" font-bold text-lg">Email : </span>
            <span>{{$stagiaires->email}}</span>
        </div>
        <div>
            <span class="font-bold text-lg">date naissance : </span>
            <span>{{$stagiaires->date_naissance}}</span>
        </div>

        <div class=" flex flex-col items-center justify-center  ">
            <img class=" w-52 h-64 rounded-md" src="{{ asset('images/'.$stagiaires->photo)}}" alt="">
        </div>
    </div>

    <div class=" space-x-2">

        <a href="/Delete/{{$stagiaires->id}}"><button class=" bg-red-600 py-2 px-6 rounded-xl ">Delete</button> </a>
        <a href="/Update/{{$stagiaires->id}}"><button class=" bg-blue-600 py-2 px-6 rounded-xl ">Update</button> </a>
        <a href="/"><button class=" bg-gray-600 py-2 px-6 rounded-xl ">Retour</button> </a>

    </div>

</div>

</body>
</html>
