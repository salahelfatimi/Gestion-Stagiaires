<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>Gestion Stagiaires</title>

</head>

<body class=" bg-[#a3cef1] h-full">
    <div class="p-4">
        <div class="pb-4">
            <span class=" font-extrabold  text-xl ">Modifier les information du stagiaire :
                {{ $data->nom . ' ' . $data->prenom }}</span>
        </div>


        <div class=" rounded-xl border-4 border-gray-600">
            <div class="p-4">
                <form class=" space-y-4" action="/update/{{ $id }}" method="post"
                    enctype="multipart/form-data">
                    @csrf
                    <div>
                        <label for="username" class="block font-medium  text-base pb-2">Nom : </label>
                        <input type="text" name="username" class=" h-8 rounded-md w-full px-2"
                            value={{ $data->nom }}>
                    </div>
                    <div>
                        <label for="prenom" class="block font-medium  text-base pb-2">prenom : </label>
                        <input type="text" name="prenom" class="h-8 rounded-md  w-full px-2"
                            value={{ $data->prenom }}>
                    </div>
                    <div>
                        <label for="email" class="block font-medium  text-base pb-2">email : </label>
                        <input type="text" name="email" class="h-8 rounded-md  w-full px-2"
                            value={{ $data->email }}>
                    </div>
                    <div class="flex">
                        <div class=" flex items-center">

                            <input type="file" name="photo" class="h-8 rounded-md w-full" >
                        </div>
                        <div>
                            <img class=" w-60 h-52 rounded-full" src="{{ asset('images/' . $data->photo) }}"
                                alt="">
                        </div>
                    </div>
                    <div>
                        <label for="date_naissance" class="block font-medium  text-base pb-2">date_naissance : </label>
                        <input type="date" name="date_naissance" class="h-8 rounded-md w-full px-2"
                            value={{ $data->date_naissance }}>
                    </div>
                    <div>
                        <button class=" bg-blue-500 text-white py-2 px-6 rounded-md" type="submit">Ajouter</button>
                        <a href="/"><button type="button"
                                class=" bg-gray-600 text-white  py-2 px-6 rounded-md">Annuler</button></a>
                    </div>

                </form>
            </div>
        </div>
    </div>

</body>

</html>
