<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estágios IFRS - Estágios</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <?php include('views/includes/links.php'); ?>
</head>

<body class="min-w-screen max-w-full">

    <?php include('views/includes/menu.php') ?>

    <div class="flex flex-col justify-center items-center gap-2">
        <h1 class="font-bold text-4xl text-vermelho-1 py-4 flex items-center gap-x-2">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-12 h-12">
                <path fill-rule="evenodd" d="M7.5 5.25a3 3 0 013-3h3a3 3 0 013 3v.205c.933.085 1.857.197 2.774.334 1.454.218 2.476 1.483 2.476 2.917v3.033c0 1.211-.734 2.352-1.936 2.752A24.726 24.726 0 0112 15.75c-2.73 0-5.357-.442-7.814-1.259-1.202-.4-1.936-1.541-1.936-2.752V8.706c0-1.434 1.022-2.7 2.476-2.917A48.814 48.814 0 017.5 5.455V5.25zm7.5 0v.09a49.488 49.488 0 00-6 0v-.09a1.5 1.5 0 011.5-1.5h3a1.5 1.5 0 011.5 1.5zm-3 8.25a.75.75 0 100-1.5.75.75 0 000 1.5z" clip-rule="evenodd" />
                <path d="M3 18.4v-2.796a4.3 4.3 0 00.713.31A26.226 26.226 0 0012 17.25c2.892 0 5.68-.468 8.287-1.335.252-.084.49-.189.713-.311V18.4c0 1.452-1.047 2.728-2.523 2.923-2.12.282-4.282.427-6.477.427a49.19 49.19 0 01-6.477-.427C4.047 21.128 3 19.852 3 18.4z" />
            </svg>

            Estágios
        </h1>

        <div class="flex items-center gap-x-4 justify-start w-6/12 mb-4">

            <a href="estagioAluno.php" class="bg-verde-1 rounded-full p-2 focus:bg-zinc-50
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

        <div class="relative overflow-x-auto 2xl:max-w-fit xl:w-11/12 md:w-11/12 w-7/12 
         border-gray-200 border rounded-md">
            <table class="table-auto">
                <thead class="pl-6 font-semibold text-sm text-left pr-3 py-3.5 bg-gray-50 text-neutral-700">
                    <tr class="border-b table-row">
                        <th class="w-fit capitalize pl-2 pr-6 py-2">
                            <div class="flex items-center gap-x-2">
                                <a <?php
                                    echo (!isset($_GET['descrescente'])) ? "href='estagiosAlunos.php?descrescente'" : "href='estagiosAlunos.php'";
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
                                aluno
                            </div>
                        </th>
                        <th class="w-fit capitalize pl-2 pr-6 py-2">empresa</th>
                        <th class="w-fit capitalize pl-2 pr-6 py-2">carga horária</th>
                        <th class="w-fit capitalize pl-2 pr-6 py-2">coordenador</th>
                        <th class="w-fit capitalize pl-2 pr-6 py-2">tipo de processo</th>
                        <th class="w-fit capitalize pl-2 pr-6 py-2">encaminhamentos</th>
                        <th class="w-fit capitalize pl-2 pr-6 py-2">situação</th>
                        <th class="w-fit capitalize pl-2 pr-6 py-2">início</th>
                        <th class="w-fit capitalize pl-2 pr-6 py-2">previsão de fim</th>
                        <th class="w-fit capitalize pl-2 pr-6 py-2">orientador</th>
                        <th class="w-fit capitalize pl-2 pr-6 py-2">coorientador</th>
                        <th class="w-fit capitalize pl-2 pr-6 py-2">supervisor</th>
                        <th class="w-fit capitalize pl-2 pr-6 py-2">data de fim</th>
                        <th class="w-fit capitalize pl-2 pr-6 py-2">área</th>
                        <th class="w-fit capitalize pl-2 pr-6 py-2">termo de compromisso</th>
                        <th class="w-fit capitalize pl-2 pr-6 py-2">plano de atividades</th>
                        <th class="w-fit capitalize pl-2 pr-6 py-2">avaliação empresa</th>
                        <th class="w-fit capitalize pl-2 pr-6 py-2">autoavaliação</th>
                        <th class="w-fit capitalize pl-2 pr-6 py-2">TCC</th>
                        <th class="w-fit capitalize pl-2 pr-6 py-2">Ações</th>
                    </tr>
                </thead>

                <tbody class="text-sm">
                    <?php

                    if (isset($_GET['descrescente'])) rsort($estagiosAlunos);

                    foreach ($estagiosAlunos as $estagioAluno) {
                        echo '<tr class="border-1 border-neutral-200 border-b even:bg-zinc-50">';
                        echo '<td class="pl-2 pr-1 w-fit">
                                <div class="flex items-center">
                                    <span class="bg-sky-100 py-1 px-2 rounded-md hover:bg-sky-200 text-sky-700
                                    hover:cursor-pointer transition duration-300 ease-in-out font-medium text-sm mx-2">' .
                                $estagioAluno->getIdAluno() .
                                ' </span>
                                ' . $estagioAluno->getNomeAluno() . '
                                </div>
                            </td>';
                        echo '<td class="pl-2 pr-1 w-fit">' . $estagioAluno->getNomeEmpresa() . '
                            <span class="bg-sky-100 py-1 px-2 rounded-md hover:bg-sky-200 text-sky-700
                            hover:cursor-pointer transition duration-300 ease-in-out font-medium text-sm">' .
                            $estagioAluno->getIdEmpresa() .
                            ' </span>
                        </td>';
                        echo '<td class="pl-2 pr-1 w-fit">' . $estagioAluno->getCargaHoraria() . ' horas </td>';
                        echo '<td class="pl-2 pr-1 w-fit">' . $estagioAluno->getNomeCoordenador() . '
                        <span class="bg-sky-100 py-1 px-2 rounded-md hover:bg-sky-200 text-sky-700
                        hover:cursor-pointer transition duration-300 ease-in-out font-medium text-sm">' .
                            $estagioAluno->getIdCoordenador() .
                            ' </span>
                        </td>';
                        echo '<td class="pl-2 pr-1 w-fit">' . $estagioAluno->getTipoProcessoEstagio() . '</td>';
                        echo '<td class="pl-2 pr-1 w-fit">
                                <span class="bg-sky-100 py-1 px-2 rounded-md hover:bg-sky-200 text-sky-700
                                hover:cursor-pointer transition duration-300 ease-in-out font-medium text-sm">' .
                            $estagioAluno->getNumeroEncaminhamentos() .
                            '</sapn>
                            </td>';
                        echo '<td class="p-1 w-max capitalize">
                            <span class="';
                        switch ($estagioAluno->getSituacaoEstagio()) {
                            case 'Não iniciado':
                                echo 'bg-red-100 hover:bg-red-200 text-red-700';
                                break;
                            case 'Finalizado':
                                echo 'bg-emerald-100 hover:bg-emerald-200 text-emerald-700';
                                break;
                            default:
                                echo 'bg-yellow-100 hover:bg-yellow-200 text-yellow-800';
                                break;
                        }
                        echo ' text-sm font-medium py-1 px-2 rounded-md inline-flex items-center w-max
                        hover:cursor-pointer transition duration-300 ease-in-out">' .
                            $estagioAluno->getSituacaoEstagio() .
                            '</span>
                        </td>';
                        echo '<td class="pl-1 pr-3 w-fit">' . date('d/m/Y', strtotime($estagioAluno->getDataInicio())) . '</td>';
                        echo '<td class="pl-1 pr-3 w-fit">' . date('d/m/Y', strtotime($estagioAluno->getPrevisaoFim())) . '</td>';
                        echo '<td class="pl-1 pr-3 w-fit">' . $estagioAluno->getNomeOrientador() . '
                                <span class="bg-sky-100 py-1 px-2 rounded-md hover:bg-sky-200 text-sky-700
                                hover:cursor-pointer transition duration-300 ease-in-out font-medium text-sm">' .
                            $estagioAluno->getIdOrientador() .
                            ' </span>
                            </td>';
                        echo '<td class="pl-2 pr-1 w-fit">' . $estagioAluno->getNomeCoorientador() . '
                                <span class="bg-sky-100 py-1 px-2 rounded-md hover:bg-sky-200 text-sky-700
                                hover:cursor-pointer transition duration-300 ease-in-out font-medium text-sm">' .
                            $estagioAluno->getIdCoorientador() .
                            ' </span>
                        </td>';
                        echo '<td class="pl-2 pr-1 w-fit">' . $estagioAluno->getNomeSupervisor() . '
                        <span class="bg-sky-100 py-1 px-2 rounded-md hover:bg-sky-200 text-sky-700
                        hover:cursor-pointer transition duration-300 ease-in-out font-medium text-sm">' .
                            $estagioAluno->getIdSupervisor() .
                            ' </span>
                        </td>';
                        echo '<td class="pl-2 pr-1 w-fit">' . date('d/m/Y', strtotime($estagioAluno->getDataFim())) . '</td>';
                        echo '<td class="pl-2 pr-1 w-fit">' . $estagioAluno->getNomeArea() . '
                        <span class="bg-sky-100 py-1 px-2 rounded-md hover:bg-sky-200 text-sky-700
                        hover:cursor-pointer transition duration-300 ease-in-out font-medium text-sm">' .
                            $estagioAluno->getIdArea() .
                            ' </span>
                        </td>';

                        echo '<td class="pl-2 pr-1 w-fit">
                        <a target="_blank" href="uploads/' . $estagioAluno->getUrlTermoCompromisso() . '">';
                        if ($estagioAluno->getUrlTermoCompromisso()) echo "Clique para baixar
                        </a>
                        </td>'";

                        echo '<td class="pl-2 pr-1 w-fit">
                        <a target="_blank" href="uploads/' . $estagioAluno->getUrlPlanoAtividades() . '">';
                        if ($estagioAluno->getUrlPlanoAtividades()) echo "Clique para baixar
                        </a>
                        </td>'";

                        echo '<td class="pl-2 pr-1 w-fit">
                        <a target="_blank" href="uploads/' . $estagioAluno->getUrlAvaliacaoEmpresa() . '">';
                        if ($estagioAluno->getUrlAvaliacaoEmpresa()) echo "Clique para baixar
                        </a>
                        </td>'";


                        echo '<td class="pl-2 pr-1 w-fit">
                        <a target="_blank" href="uploads/' . $estagioAluno->getUrlAutoavaliacao() . '">';
                        if ($estagioAluno->getUrlAutoavaliacao()) echo "Clique para baixar
                        </a>
                        </td>'";

                        echo '<td class="pl-2 pr-1 w-fit">
                        <a target="_blank" href="uploads/' . $estagioAluno->getUrlTcc() . '">';
                        if ($estagioAluno->getUrlTcc()) echo "Clique para baixar
                        </a>
                        </td>'";

                        echo '<td class="pl-2 pr-1 w-fit">';

                        echo "<a href='estagioAluno.php?id=" . $estagioAluno->getId() . "' class='bg-verde-1 rounded-md py-1 px-4 focus:bg-zinc-50
                        text-zinc-50 flex items-center mt-4 gap-x-2 justify-center border-2 border-verde-1 focus:text-verde-1 focus:border-verde-1 transition duration-300 ease-in-out
                        hover:bg-verde-3 hover:border-verde-3'>
                        Editar
                            <svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 20 20' fill='currentColor' class='w-4 h-4'>
                                 <path d='M2.695 14.763l-1.262 3.154a.5.5 0 00.65.65l3.155-1.262a4 4 0 001.343-.885L17.5 5.5a2.121 2.121 0 00-3-3L3.58 13.42a4 4 0 00-.885 1.343z' />
                            </svg>
                        </a>";
                        echo "<a href='excluirEstagioAluno.php?id=" . $estagioAluno->getId() . "'  class='bg-vermelho-1 rounded-md py-1 px-4 focus:bg-zinc-50
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