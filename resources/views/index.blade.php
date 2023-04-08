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

    <div class=" p-4">

        <a href="add"><button href="add" type="button"
                class="py-2.5 px-5 mr-2 mb-2 text-sm font-medium text-gray-900  bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-200">Ajouter
                un stagiare</button></a>
        @unless (count($stagiaires) == 0)
            <table class="w-full text-sm text-center text-gray-500 ">
                <thead class="text-xs text-gray-700 uppercase bg-gray-400 rounded-xl">
                    <tr>
                        <th scope="col" class="px-6 py-3">
                            #
                        </th>
                        <th scope="col" class="px-6 py-3">
                            nom
                        </th>
                        <th scope="col" class="px-6 py-3">
                            prenom
                        </th>
                        <th scope="col" class="px-6 py-3">
                            email
                        </th>
                        <th scope="col" class="px-6 py-3">
                            photo
                        </th>
                        <th scope="col" class="px-6 py-3">
                            date
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Action
                        </th>

                    </tr>
                </thead>

                <tbody class="rounded-xl">

                    @foreach ($stagiaires as $stagiaires)
                        <tr class=" bg-gray-50 border-b">
                            <th scope="row" class="px-6 py-4 font-bold text-black whitespace-nowrap ">
                                {{ $stagiaires->id }}
                            </th>
                            <td class="px-6 py-4 text-black font-medium uppercase">
                                {{ $stagiaires->nom }}
                            </td>
                            <td class="px-6 py-4 text-black font-medium uppercase">
                                {{ $stagiaires->prenom }}
                            </td>
                            <td class="px-6 py-4 text-black font-medium">
                                {{ $stagiaires->email }}
                            </td>
                            <td class="px-6 py-4 flex  justify-center">
                                <img class=" w-60 h-52 rounded-full" src="{{ asset('images/' . $stagiaires->photo) }}"
                                    alt="">
                            </td>
                            <td class="px-6 py-4 text-black font-medium">
                                {{ $stagiaires->date_naissance }}
                            </td>
                            <td class="px-6 py-4 space-x-4">
                                <a href="Voir/{{ $stagiaires->id }}"><button
                                        class=" bg-cyan-400 py-2 px-6 rounded-md text-white font-mono font-bold">Voir</button>
                                </a>
                                <a href="Delete/{{ $stagiaires->id }}"><button
                                        class=" bg-red-600 py-2 px-6 rounded-md text-white font-mono font-bold">Delete</button>
                                </a>
                                <a href="Update/{{ $stagiaires->id }}"><button
                                        class=" bg-blue-600 py-2 px-6 rounded-md text-white font-mono font-bold">Update</button>
                                </a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @else
            <div class=" flex  justify-center  bg-gray-400 p-24 rounded-lg">
                <span class=" font-bold font-mono text-2xl"> No stagiaires found </span>
            </div>


        @endunless




    </div>
</body>

</html>
