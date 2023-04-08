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
    <div class="flex  justify-center items-center h-screen ">
        <div class="bg-blue-400 p-12 rounded-xl">
            <div class=" pb-4 text-center">
                <span class=" font-extrabold  text-xl "> Ajouter un stagiaire </span>
            </div>
            <form action="ajouter" method="post" enctype="multipart/form-data">
                @csrf
                <div class=" space-y-1">
                    <label for="username" class="block font-medium  text-base pb-2">Nom : </label>
                    <input type="text" name="username" class=" h-8 rounded-md w-full">
                    <label for="prenom" class="block font-medium  text-base pb-2">prenom : </label>
                    <input type="text" name="prenom" class="h-8 rounded-md  w-full">
                    <label for="email" class="block font-medium  text-base pb-2">email : </label>
                    <input type="text" name="email" class="h-8 rounded-md  w-full">
                    <label for="photo" class="block font-medium  text-base pb-2">photo : </label>
                    <input type="file" name="photo" class="h-8 rounded-md w-full">
                    <label for="date_naissance" class="block font-medium  text-base pb-2">date_naissance : </label>
                    <input type="date" name="date_naissance" class="h-8 rounded-md w-full">
                    <div class="pt-6">
                        <button class=" bg-blue-500 text-white py-2 px-6 rounded-md" type="submit">Ajouter</button>
                        <a href="/"><button type="button"
                                class=" bg-gray-600 text-white  py-2 px-6 rounded-md">Annuler</button></a>
                    </div>
                </div>
            </form>
            <div>

            </div>

        </div>

    </div>

</body>

</html>
