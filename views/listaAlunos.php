<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estágios IFRS - Alunos</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <?php include('views/includes/links.php'); ?>
</head>

<body>

    <?php include('views/includes/menu.php') ?>

    <div class="flex flex-col justify-center items-center gap-2">
        <h1 class="font-bold text-4xl text-vermelho-1 py-4 flex items-center gap-x-2">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-12 h-12">
                <path d="M11.7 2.805a.75.75 0 01.6 0A60.65 60.65 0 0122.83 8.72a.75.75 0 01-.231 1.337 49.949 49.949 0 00-9.902 3.912l-.003.002-.34.18a.75.75 0 01-.707 0A50.009 50.009 0 007.5 12.174v-.224c0-.131.067-.248.172-.311a54.614 54.614 0 014.653-2.52.75.75 0 00-.65-1.352 56.129 56.129 0 00-4.78 2.589 1.858 1.858 0 00-.859 1.228 49.803 49.803 0 00-4.634-1.527.75.75 0 01-.231-1.337A60.653 60.653 0 0111.7 2.805z" />
                <path d="M13.06 15.473a48.45 48.45 0 017.666-3.282c.134 1.414.22 2.843.255 4.285a.75.75 0 01-.46.71 47.878 47.878 0 00-8.105 4.342.75.75 0 01-.832 0 47.877 47.877 0 00-8.104-4.342.75.75 0 01-.461-.71c.035-1.442.121-2.87.255-4.286A48.4 48.4 0 016 13.18v1.27a1.5 1.5 0 00-.14 2.508c-.09.38-.222.753-.397 1.11.452.213.901.434 1.346.661a6.729 6.729 0 00.551-1.608 1.5 1.5 0 00.14-2.67v-.645a48.549 48.549 0 013.44 1.668 2.25 2.25 0 002.12 0z" />
                <path d="M4.462 19.462c.42-.419.753-.89 1-1.394.453.213.902.434 1.347.661a6.743 6.743 0 01-1.286 1.794.75.75 0 11-1.06-1.06z" />
            </svg>
            Alunos
        </h1>

        <div class="flex items-center gap-x-4 justify-start w-6/12 mb-4">

            <a href="aluno.php" class="bg-verde-1 rounded-full p-2 focus:bg-zinc-50
         text-zinc-50 flex items-center justify-center border-2 border-verde-1 
         focus:text-verde-1 transition duration-300 ease-in-out mb-2 mr-8 self-end
         hover:bg-verde-3 hover:border-verde-3 focus:border-verde-1">

                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                    <path fill-rule="evenodd" d="M12 3.75a.75.75 0 01.75.75v6.75h6.75a.75.75 0 010 1.5h-6.75v6.75a.75.75 0 01-1.5 0v-6.75H4.5a.75.75 0 010-1.5h6.75V4.5a.75.75 0 01.75-.75z" clip-rule="evenodd" />
                </svg>
            </a>

            <div class="relative">
                <input id="pesquisa-input" placeholder="Procurar" type="text" class="rounded-md 
    border-0 py-1.5 pr-60 pl-10  ring-1 ring-inset ring-gray-500 
    focus:ring-2 focus:ring-inset focus:ring-vermelho-1 outline-none text-zinc-800">
                <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5 h-5 fill-neutral-700">
                        <path fill-rule="evenodd" d="M9 3.5a5.5 5.5 0 100 11 5.5 5.5 0 000-11zM2 9a7 7 0 1112.452 4.391l3.328 3.329a.75.75 0 11-1.06 1.06l-3.329-3.328A7 7 0 012 9z" clip-rule="evenodd" />
                    </svg>
                </div>
            </div>

        </div>

        <div class="relative overflow-x-auto border-gray-200 border-1 border-1 border-x border-y rounded-xl
        2xl:max-w-fit xl:w-11/12 md:w-11/12 w-7/12">
            <table class="table-auto">
                <thead class="pl-6 font-semibold text-sm text-left pr-3 py-3.5 bg-gray-50 text-neutral-700">
                    <tr class="border-1 border-neutral-200 border-b even:bg-zinc-50">
                        <th class="w-fit capitalize pl-2 pr-6 py-2">Matrícula</th>
                        <th class="w-fit capitalize pl-2 pr-6 py-2">
                            <div class="flex items-center gap-x-2">
                                <a <?php
                                    echo (!isset($_GET['descrescente'])) ? "href='alunos.php?descrescente'" : "href='alunos.php'";
                                    ?> class="hover:text-neutral-700">

                                    <?php
                                    if (isset($_GET['descrescente'])) {
                                        echo '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5 h-5">
                                                 <path fill-rule="evenodd" d="M10 5a.75.75 0 01.75.75v6.638l1.96-2.158a.75.75 0 111.08 1.04l-3.25 3.5a.75.75 0 01-1.08 0l-3.25-3.5a.75.75 0 111.08-1.04l1.96 2.158V5.75A.75.75 0 0110 5z" clip-rule="evenodd" />
                                            </svg>';
                                    } else {
                                        echo '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5 h-5">
                                                <path fill-rule="evenodd" d="M10 15a.75.75 0 01-.75-.75V7.612L7.29 9.77a.75.75 0 01-1.08-1.04l3.25-3.5a.75.75 0 011.08 0l3.25 3.5a.75.75 0 11-1.08 1.04l-1.96-2.158v6.638A.75.75 0 0110 15z" clip-rule="evenodd" />
                                            </svg>';
                                    }
                                    ?>
                                </a>
                                Nome
                            </div>
                        </th>
                        <th class="w-fit capitalize pl-2 pr-6 py-2">Data de nascimento</th>
                        <th class="w-fit capitalize pl-2 pr-6 py-2">Email</th>
                        <th class="w-fit capitalize pl-2 pr-6 py-2">CPF</th>
                        <th class="w-fit capitalize pl-2 pr-6 py-2">RG</th>
                        <th class="w-fit capitalize pl-2 pr-6 py-2">Endereco</th>
                        <th class="w-fit capitalize pl-2 pr-6 py-2">Telefone</th>
                        <th class="w-fit capitalize pl-2 pr-6 py-2">Turma</th>
                        <th class="w-fit capitalize pl-2 pr-6 py-2">Cidade</th>
                        <th class="w-fit capitalize pl-2 pr-6 py-2">Ações</th>
                    </tr>
                </thead>

                <tbody class="text-sm">
                    <?php

                    if (isset($_GET['descrescente'])) rsort($alunos);

                    foreach ($alunos as $aluno) {
                        echo '<tr class="border-1 border-neutral-200 border-b even:bg-zinc-50">';
                        echo '<td class="pl-1 pr-3 w-fit">' . $aluno->getMatricula() . '</td>';
                        echo '<td class="pl-2 pr-1 w-fit">
                                <div class="flex items-center">
                                    <span class="bg-sky-100 py-1 px-2 rounded-md hover:bg-sky-200 text-sky-700
                                    hover:cursor-pointer transition duration-300 ease-in-out font-medium text-sm mx-2">' .
                                $aluno->getId() .
                                ' </span>
                                ' . $aluno->getNome() . '
                                </div>
                            </td>';
                        echo '<td class="pl-1 pr-3 w-fit">' . date('d/m/Y', strtotime($aluno->getDataNascimento())) . '</td>';
                        echo '<td class="pl-1 pr-3 w-fit">' . $aluno->getEmail() . '</td>';
                        echo '<td class="p-1 w-min cpf">' . $aluno->getCPF() . '</td>';
                        echo '<td class="pl-1 pr-3 w-fit">' . $aluno->getRG() . '</td>';
                        echo '<td class="pl-1 pr-3 w-fit">' . $aluno->getEndereco() . '</td>';
                        echo '<td class="p-1 w-min phone_with_ddd">' . $aluno->getTelefone() . '</td>';
                        echo '<td class="pl-1 pr-3 w-fit"><span class="flex items-center w-max">' . $aluno->getAnoTurma() . 'º ' . $aluno->getNomeCurso() . '</span></td>';
                        echo '<td class="pl-1 pr-3 w-fit">' . $aluno->getNomeCidade() . '
                        <span class="bg-sky-100 py-1 px-2 rounded-md hover:bg-sky-200 text-sky-700
                        hover:cursor-pointer transition duration-300 ease-in-out font-medium text-sm">' .
                            $aluno->getIdCidade() .
                            ' </span>
                        </td>';
                        echo '<td class=" px-4 flex flex-col">';

                        echo "<a href='Aluno.php?id=" . $aluno->getId() . "' class='bg-verde-1 rounded-md py-1 px-4 focus:bg-zinc-50
                        text-zinc-50 flex items-center mt-4 gap-x-2 justify-center border-2 border-verde-1 focus:text-verde-1 focus:border-verde-1 transition duration-300 ease-in-out
                        hover:bg-verde-3 hover:border-verde-3'>
                        Editar
                        <svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 20 20' fill='currentColor' class='w-4 h-4'>
                                <path d='M2.695 14.763l-1.262 3.154a.5.5 0 00.65.65l3.155-1.262a4 4 0 001.343-.885L17.5 5.5a2.121 2.121 0 00-3-3L3.58 13.42a4 4 0 00-.885 1.343z' />
                            </svg>
                        </a>";
                        echo "<a href='excluirAluno.php?id=" . $aluno->getId() . "' class='bg-vermelho-1 rounded-md py-1 px-4 focus:bg-zinc-50
                        text-zinc-50 flex items-center mt-4 gap-x-2 justify-center border-2 border-vermelho-1 focus:text-vermelho-1 focus:border-vermelho-1 transition duration-300 ease-in-out
                        hover:bg-vermelho-3 hover:border-vermelho-3'>
                        Excluir
                       <svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 20 20' fill='currentColor' class='w-4 h-4'>
                            <path fill-rule='evenodd' d='M8.75 1A2.75 2.75 0 006 3.75v.443c-.795.077-1.584.176-2.365.298a.75.75 0 10.23 1.482l.149-.022.841 10.518A2.75 2.75 0 007.596 19h4.807a2.75 2.75 0 002.742-2.53l.841-10.52.149.023a.75.75 0 00.23-1.482A41.03 41.03 0 0014 4.193V3.75A2.75 2.75 0 0011.25 1h-2.5zM10 4c.84 0 1.673.025 2.5.075V3.75c0-.69-.56-1.25-1.25-1.25h-2.5c-.69 0-1.25.56-1.25 1.25v.325C8.327 4.025 9.16 4 10 4zM8.58 7.72a.75.75 0 00-1.5.06l.3 7.5a.75.75 0 101.5-.06l-.3-7.5zm4.34.06a.75.75 0 10-1.5-.06l-.3 7.5a.75.75 0 101.5.06l.3-7.5z' clip-rule='evenodd' />
                        </svg>
                        </a>";

                        echo '</td>';
                        echo '</tr>';
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>

    <?php include_once('views/includes/footer.php') ?>
</body>

</html>