<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estágios IFRS - Gerenciar Estágio</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css' integrity='sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==' crossorigin='anonymous' referrerpolicy='no-referrer' />
    <?php include('views/includes/links.php'); ?>
</head>

<body>

    <?php include('views/includes/menu.php'); ?>

    <div class="flex flex-col justify-center items-center gap-2">
        <h1 class="font-bold text-4xl text-vermelho-1 my-4">
            <i class="fa-solid fa-circle-user"></i>
            Gerenciar Estágio
        </h1>

        <nav class="flex mb-4" aria-label="Breadcrumb">
            <ol class="inline-flex items-center space-x-1 md:space-x-2 rtl:space-x-reverse">
                <li class="inline-flex items-center">
                    <a href="index.php" class="inline-flex items-center text-sm font-medium text-neutral-700 
                    hover:text-vermelho-1">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-4 h-4 mr-2">
                            <path d="M11.47 3.84a.75.75 0 011.06 0l8.69 8.69a.75.75 0 101.06-1.06l-8.689-8.69a2.25 2.25 0 00-3.182 0l-8.69 8.69a.75.75 0 001.061 1.06l8.69-8.69z" />
                            <path d="M12 5.432l8.159 8.159c.03.03.06.058.091.086v6.198c0 1.035-.84 1.875-1.875 1.875H15a.75.75 0 01-.75-.75v-4.5a.75.75 0 00-.75-.75h-3a.75.75 0 00-.75.75V21a.75.75 0 01-.75.75H5.625a1.875 1.875 0 01-1.875-1.875v-6.198a2.29 2.29 0 00.091-.086L12 5.43z" />
                        </svg>
                        Início
                    </a>
                </li>
                <li>
                    <div class="flex items-center">
                        <svg class="rtl:rotate-180 w-3 h-3 text-neutral-400 mx-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4" />
                        </svg>
                        <a href="estagiosAlunos.php" class="ms-1 text-sm font-medium text-neutral-700 
                        hover:text-vermelho-1 md:ms-2">Estágios</a>
                    </div>
                </li>
                <li aria-current="page">
                    <div class="flex items-center">
                        <svg class="rtl:rotate-180 w-3 h-3 text-neutral-400 mx-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4" />
                        </svg>
                        <span class="ms-1 text-sm font-medium text-neutral-500 md:ms-2">Formulário</span>
                    </div>
                </li>
            </ol>
        </nav>

        <fieldset class="bg-zinc-50 p-10 rounded-md">
            <form action="salvarEstagioAluno.php" method="post" class="flex flex-col justify-center items-center gap-2" enctype=multipart/form-data>
                <input type="hidden" name="id" value='<?php echo $estagioAluno->getId(); ?>'>

                <div class="flex flex-col justify-center items-baseline gap-2">

                    <div class="w-available">
                        <label for="id_aluno" class="block text-sm font-medium leading-6 text-verde-1 
                        mb-2">Aluno</label>
                        <div class="relative ">
                            <select id="id_aluno" name="id_aluno" value="id_aluno" class="rounded-md 
                    border-0 py-1.5 pl-10  ring-1 ring-inset ring-neutral-300 bg-white
                    focus:ring-2 focus:ring-inset focus:ring-verde-2 outline-none text-zinc-800 w-72 pr-10">
                                <?php
                                echo '<pre>';
                                var_dump($alunos);
                                if (isset($_GET['id'])) {
                                    foreach ($alunos as $aluno) {
                                        $selected = ($aluno->getId() == $estagioAluno->getIdAluno()) ? "selected" : "";
                                        echo "<option value='" . $aluno->getId() . "' " . $selected . "> " . $aluno->getNome() . "</option>";
                                    }
                                } else {
                                    foreach ($alunosSemEstagio as $alunoSemEstagio) {
                                        $selected = ($alunoSemEstagio->getId() == $estagioAluno->getIdAluno()) ? "selected" : "";
                                        echo "<option value='" . $alunoSemEstagio->getId() . "' " . $selected . "> " . $alunoSemEstagio->getNome() . "</option>";
                                    }
                                }
                                ?>
                            </select>

                            <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5 h-5 fill-neutral-700">
                                    <path d="M10 8a3 3 0 100-6 3 3 0 000 6zM3.465 14.493a1.23 1.23 0 00.41 1.412A9.957 9.957 0 0010 18c2.31 0 4.438-.784 6.131-2.1.43-.333.604-.903.408-1.41a7.002 7.002 0 00-13.074.003z" />
                                </svg>
                            </div>
                        </div>
                    </div>

                    <div class="flex gap-x-4">

                        <div>
                            <label for="id_empresa" class="block text-sm font-medium leading-6 text-verde-1 
                        mb-2">Empresa</label>

                            <div class="relative">
                                <select id="id_empresa" name="id_empresa" value="id_empresa" class="rounded-md 
                    border-0 py-1.5 pl-10  ring-1 ring-inset ring-neutral-300  bg-white
                    focus:ring-2 focus:ring-inset focus:ring-verde-2 outline-none text-zinc-800">
                                    <?php
                                    foreach ($empresas as $empresa) {
                                        $selected = ($empresa->getId() == $estagioAluno->getIdEmpresa()) ? "selected" : "";
                                        echo "<option value='" . $empresa->getId() . "' " . $selected . "> " . $empresa->getNome() . "</option>";
                                    }
                                    ?>
                                </select>

                                <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5 h-5 fill-neutral-700">
                                        <path fill-rule="evenodd" d="M4 16.5v-13h-.25a.75.75 0 010-1.5h12.5a.75.75 0 010 1.5H16v13h.25a.75.75 0 010 1.5h-3.5a.75.75 0 01-.75-.75v-2.5a.75.75 0 00-.75-.75h-2.5a.75.75 0 00-.75.75v2.5a.75.75 0 01-.75.75h-3.5a.75.75 0 010-1.5H4zm3-11a.5.5 0 01.5-.5h1a.5.5 0 01.5.5v1a.5.5 0 01-.5.5h-1a.5.5 0 01-.5-.5v-1zM7.5 9a.5.5 0 00-.5.5v1a.5.5 0 00.5.5h1a.5.5 0 00.5-.5v-1a.5.5 0 00-.5-.5h-1zM11 5.5a.5.5 0 01.5-.5h1a.5.5 0 01.5.5v1a.5.5 0 01-.5.5h-1a.5.5 0 01-.5-.5v-1zm.5 3.5a.5.5 0 00-.5.5v1a.5.5 0 00.5.5h1a.5.5 0 00.5-.5v-1a.5.5 0 00-.5-.5h-1z" clip-rule="evenodd" />
                                    </svg>

                                </div>
                            </div>
                        </div>

                        <div>
                            <label for="data_inicio" class="block text-sm font-medium leading-6 text-verde-1 
                        mb-2">Data de Início</label>
                            <input type="date" id="data_inicio" name="data_inicio" value='<?php echo $estagioAluno->getDataInicio(); ?>' class="rounded-md border-0 py-1.5 pr-7 pl-10 ring-1 ring-inset ring-neutral-300 focus:ring-2 focus:ring-inset focus:ring-verde-2 outline-none text-zinc-800">
                        </div>

                        <div>
                            <label for="carga_horaria" class="block text-sm font-medium leading-6 text-verde-1 
                        mb-2">Carga horária (em horas)</label>
                            <input type="text" id="carga_horaria" name="carga_horaria" value=" <?php echo $estagioAluno->getCargaHoraria(); ?>" class="rounded-md 
                border-0 py-1.5 pl-10  ring-1 ring-inset ring-neutral-300
                focus:ring-2 focus:ring-inset focus:ring-verde-2 outline-none text-zinc-800">
                        </div>

                    </div>

                    <div class="flex gap-x-4">
                        <div>
                            <label for="tipo_processo_estagio" class="block text-sm font-medium leading-6 text-verde-1 
                        mb-2">Tipo de Processo</label>

                            <ul class="items-center w-full text-sm font-medium text-neutral-900 bg-white border border-neutral-200 rounded-lg sm:flex  hover:cursor-pointer">
                                <li class="w-full border-b border-neutral-200 sm:border-b-0 sm:border-r hover:cursor-pointer px-2">
                                    <div class="flex items-center ps-3 hover:cursor-pointer">
                                        <input id="processo_fisico" type="radio" value="Físico" name="tipo_processo_estagio" <?php echo $estagioAluno->getTipoProcessoEstagio() == "Físico" ? "checked" : '' ?> class="w-4 h-4 text-verde-1
                                         bg-neutral-100 border-neutral-300 focus:ring-verde-2 focus:ring-2 accent-verde-1 
                                          hover:cursor-pointer">

                                        <label for="processo_fisico" class="w-full py-3 ms-2 text-sm font-medium text-neutral-900  hover:cursor-pointer">
                                            Físico
                                        </label>
                                    </div>
                                </li>
                                <li class="w-full border-b border-neutral-200 sm:border-b-0 sm:border-r hover:cursor-pointer px-2">
                                    <div class="flex items-center ps-3 hover:cursor-pointer">
                                        <input id="processo_digital" type="radio" value="Digital" name="tipo_processo_estagio" <?php echo $estagioAluno->getTipoProcessoEstagio() == "Digital" ? "checked" : '' ?> class="w-4 h-4 text-verde-1
                                         bg-neutral-100 border-neutral-300 focus:ring-verde-2 focus:ring-2 accent-verde-1
                                           hover:cursor-pointer">

                                        <label for="processo_digital" class="w-full py-3 ms-2 text-sm font-medium text-neutral-900  hover:cursor-pointer">
                                            Digital
                                        </label>
                                    </div>
                                </li>
                            </ul>

                            <!-- <input type="text" id="tipo_processo_estagio" name="tipo_processo_estagio" value=" //<?php echo $estagioAluno->getTipoProcessoEstagio(); ?>" class="rounded-md 
                border-0 py-1.5 pl-10  ring-1 ring-inset ring-neutral-300
                focus:ring-2 focus:ring-inset focus:ring-verde-2 outline-none text-zinc-800"> -->
                        </div>

                        <div>
                            <label for="id_area" class="block text-sm font-medium leading-6 text-verde-1 
                        mb-2">Area</label>

                            <div class="relative">
                                <select id="id_area" name="id_area" value="id_area" class="rounded-md 
                    border-0 py-1.5 pl-10  ring-1 ring-inset ring-neutral-300 bg-white
                    focus:ring-2 focus:ring-inset focus:ring-verde-2 outline-none text-zinc-800">
                                    <?php
                                    foreach ($areas as $area) {
                                        $selected = ($area->getId() == $estagioAluno->getIdArea()) ? "selected" : "";
                                        echo "<option value='" . $area->getId() . "' " . $selected . "> " . $area->getNome() . "</option>";
                                    }
                                    ?>
                                </select>

                                <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5 h-5 fill-neutral-700">
                                        <path d="M10 8a3 3 0 100-6 3 3 0 000 6zM3.465 14.493a1.23 1.23 0 00.41 1.412A9.957 9.957 0 0010 18c2.31 0 4.438-.784 6.131-2.1.43-.333.604-.903.408-1.41a7.002 7.002 0 00-13.074.003z" />
                                    </svg>

                                </div>
                            </div>
                        </div>

                        <div>
                            <label for="situacao_estagio" class="block text-sm font-medium leading-6 text-verde-1 
                        mb-2">Situação</label>

                            <div class="relative">
                                <select name="situacao_estagio" id="situacao_estagio" value="situacao_estagio" class="rounded-md 
                border-0 py-1.5 pl-10 ring-1 ring-inset ring-neutral-300 bg-white
                focus:ring-2 focus:ring-inset focus:ring-verde-2 outline-none text-zinc-800 w-available">

                                    <!-- <option value="não iniciado" <? //php echo $estagioAluno->getSituacaoEstagio() == 'não iniciado' ? 'selected' : '' 
                                                                        ?>>Não Iniciado</option> -->
                                    <option value="em andamento" <?php echo $estagioAluno->getSituacaoEstagio() == 'em andamento' ? 'selected' : '' ?>>Em Andamento</option>
                                    <option value="finalizado" <?php echo $estagioAluno->getSituacaoEstagio() == 'finalizado' ? 'selected' : '' ?>>Finalizado</option>

                                </select>

                                <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5 h-5 fill-neutral-700">
                                        <path d="M15.5 2A1.5 1.5 0 0014 3.5v13a1.5 1.5 0 001.5 1.5h1a1.5 1.5 0 001.5-1.5v-13A1.5 1.5 0 0016.5 2h-1zM9.5 6A1.5 1.5 0 008 7.5v9A1.5 1.5 0 009.5 18h1a1.5 1.5 0 001.5-1.5v-9A1.5 1.5 0 0010.5 6h-1zM3.5 10A1.5 1.5 0 002 11.5v5A1.5 1.5 0 003.5 18h1A1.5 1.5 0 006 16.5v-5A1.5 1.5 0 004.5 10h-1z" />
                                    </svg>
                                </div>
                            </div>
                        </div>
                    </div>

                    <input type="hidden" id="numero_encaminhamentos" name="numero_encaminhamentos" value='<?php echo $estagioAluno->getNumeroEncaminhamentos(); ?>'>

                    <input type="hidden" id="previsao_fim" name="previsao_fim" value='<?php echo $estagioAluno->getPrevisaoFim(); ?>'>

                    <div class="flex gap-x-4 w-available">
                        <div>
                            <div>
                                <label for="id_coordenador" class="block text-sm font-medium leading-6 text-verde-1 
                        mb-2">Coordenador</label>

                                <div class="relative">
                                    <select id="id_coordenador" name="id_coordenador" value="id_coordenador" class="rounded-md 
                    border-0 py-1.5 pl-10  ring-1 ring-inset ring-neutral-300 bg-white
                    focus:ring-2 focus:ring-inset focus:ring-verde-2 outline-none text-zinc-800">
                                        <?php
                                        foreach ($coordenadores as $coordenador) {
                                            $selected = ($coordenador->getId() == $estagioAluno->getIdCoordenador()) ? "selected" : "";
                                            echo "<option value='" . $coordenador->getId() . "' " . $selected . "> " . $coordenador->getNome() . "</option>";
                                        }
                                        ?>
                                    </select>

                                    <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5 h-5 fill-neutral-700">
                                            <path d="M10 8a3 3 0 100-6 3 3 0 000 6zM3.465 14.493a1.23 1.23 0 00.41 1.412A9.957 9.957 0 0010 18c2.31 0 4.438-.784 6.131-2.1.43-.333.604-.903.408-1.41a7.002 7.002 0 00-13.074.003z" />
                                        </svg>

                                    </div>
                                </div>
                            </div>
                        </div>

                        <div>
                            <label for="id_orientador" class="block text-sm font-medium leading-6 text-verde-1 
                        mb-2">Orientador</label>

                            <div class="relative">
                                <select id="id_orientador" name="id_orientador" value="id_orientador" class="rounded-md 
                                border-0 py-1.5 pl-10  ring-1 ring-inset ring-neutral-300 bg-white
                                focus:ring-2 focus:ring-inset focus:ring-verde-2 outline-none text-zinc-800">
                                    <?php
                                    foreach ($orientadores as $orientador) {
                                        $selected = ($orientador->getId() == $estagioAluno->getIdOrientador()) ? "selected" : "";
                                        echo "<option value='" . $orientador->getId() . "' " . $selected . "> " . $orientador->getNome() . "</option>";
                                    }
                                    ?>
                                </select>

                                <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5 h-5 fill-neutral-700">
                                        <path d="M10 8a3 3 0 100-6 3 3 0 000 6zM3.465 14.493a1.23 1.23 0 00.41 1.412A9.957 9.957 0 0010 18c2.31 0 4.438-.784 6.131-2.1.43-.333.604-.903.408-1.41a7.002 7.002 0 00-13.074.003z" />
                                    </svg>

                                </div>
                            </div>
                        </div>

                        <div>
                            <label for="id_coorientador" class="block text-sm font-medium leading-6 text-verde-1 
                        mb-2">Coorientador</label>

                            <div class="relative">
                                <select id="id_coorientador" name="id_coorientador" value="id_coorientador" class="rounded-md 
                    border-0 py-1.5 pl-10  ring-1 ring-inset ring-neutral-300 bg-white
                    focus:ring-2 focus:ring-inset focus:ring-verde-2 outline-none text-zinc-800">
                                    <?php
                                    foreach ($coorientadores as $coorientador) {
                                        $selected = ($coorientador->getId() == $estagioAluno->getIdCoorientador()) ? "selected" : "";
                                        echo "<option value='" . $coorientador->getId() . "' " . $selected . "> " . $coorientador->getNome() . "</option>";
                                    }
                                    ?>
                                </select>

                                <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5 h-5 fill-neutral-700">
                                        <path d="M10 8a3 3 0 100-6 3 3 0 000 6zM3.465 14.493a1.23 1.23 0 00.41 1.412A9.957 9.957 0 0010 18c2.31 0 4.438-.784 6.131-2.1.43-.333.604-.903.408-1.41a7.002 7.002 0 00-13.074.003z" />
                                    </svg>

                                </div>
                            </div>
                        </div>

                        <div>
                            <label for="id_supervisor" class="block text-sm font-medium leading-6 text-verde-1 
                        mb-2">Supervisor</label>

                            <div class="relative">
                                <select id="id_supervisor" name="id_supervisor" value="id_supervisor" class="rounded-md 
                    border-0 py-1.5 pl-10  ring-1 ring-inset ring-neutral-300 bg-white
                    focus:ring-2 focus:ring-inset focus:ring-verde-2 outline-none text-zinc-800">
                                    <?php
                                    foreach ($supervisores as $supervisor) {
                                        $selected = ($supervisor->getId() == $estagioAluno->getIdSupervisor()) ? "selected" : "";
                                        echo "<option value='" . $supervisor->getId() . "' " . $selected . "> " . $supervisor->getNome() . "</option>";
                                    }
                                    ?>
                                </select>

                                <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5 h-5 fill-neutral-700">
                                        <path d="M10 8a3 3 0 100-6 3 3 0 000 6zM3.465 14.493a1.23 1.23 0 00.41 1.412A9.957 9.957 0 0010 18c2.31 0 4.438-.784 6.131-2.1.43-.333.604-.903.408-1.41a7.002 7.002 0 00-13.074.003z" />
                                    </svg>

                                </div>
                            </div>
                        </div>

                    </div>

                    <input type="hidden" id="data_fim" name="data_fim" value="<?php echo $estagioAluno->getDataFim(); ?>">

                </div>

                <div class="flex gap-x-4">

                    <div>
                        <label for="url_termo_compromisso" class="block text-sm font-medium leading-6 text-verde-1 
                        mb-2">Termo Compromisso:</label>
                        <input type="file" id="url_termo_compromisso" name="url_termo_compromisso" accept="application/pdf" value='<?php echo $estagioAluno->getUrlTermoCompromisso(); ?>' class="rounded-md 
        border-0 py-1.5 pl-10  ring-1 ring-inset ring-neutral-300 
        focus:ring-2 focus:ring-inset focus:ring-verde-2 outline-none text-zinc-800">
                    </div>

                    <input type="hidden" name="url_plano_atividades" value='<?php echo $estagioAluno->getUrlPlanoAtividades(); ?>'>
                    <div>
                        <label for="url_plano_atividades" class="block text-sm font-medium leading-6 text-verde-1 
                        mb-2">Plano Atividades</label>
                        <input type="file" id="url_plano_atividades" name="url_plano_atividades" accept="application/pdf" value='<?php echo $estagioAluno->getUrlPlanoAtividades(); ?>' class="rounded-md 
        border-0 py-1.5 pl-10  ring-1 ring-inset ring-neutral-300 
        focus:ring-2 focus:ring-inset focus:ring-verde-2 outline-none text-zinc-800">
                    </div>

                </div>

                <div class="flex gap-x-4">

                    <input type="hidden" name="url_avaliacao_empresa" value='<?php echo $estagioAluno->getUrlAvaliacaoEmpresa(); ?>'>
                    <div>
                        <label for="url_avaliacao_empresa" class="block text-sm font-medium leading-6 text-verde-1 
                        mb-2">Avaliação Empresa</label>
                        <input type="file" id="url_avaliacao_empresa" name="url_avaliacao_empresa" accept="application/pdf" value='<?php echo $estagioAluno->getUrlAvaliacaoEmpresa(); ?>' class="rounded-md 
        border-0 py-1.5 pl-10  ring-1 ring-inset ring-neutral-300 
        focus:ring-2 focus:ring-inset focus:ring-verde-2 outline-none text-zinc-800">
                    </div>

                    <input type="hidden" name="url_autoavaliacao" value='<?php echo $estagioAluno->getUrlAutoavaliacao(); ?>'>
                    <div>
                        <label for="url_autoavaliacao" class="block text-sm font-medium leading-6 text-verde-1 
                        mb-2">Autoavaliação</label>
                        <input type="file" id="url_autoavaliacao" name="url_autoavaliacao" accept="application/pdf" value='<?php echo $estagioAluno->getUrlAutoavaliacao(); ?>' class="rounded-md 
        border-0 py-1.5 pl-10  ring-1 ring-inset ring-neutral-300 
        focus:ring-2 focus:ring-inset focus:ring-verde-2 outline-none text-zinc-800">
                    </div>

                </div>

                <div class="flex gap-x-4">

                    <input type="hidden" name="url_tcc" value='<?php echo $estagioAluno->getUrlTcc(); ?>'>
                    <div>
                        <label for="url_tcc" class="block text-sm font-medium leading-6 text-verde-1 
                        mb-2">TCC</label>
                        <input type="file" id="url_tcc" name="url_tcc" accept="application/pdf" value='<?php echo $estagioAluno->getUrlTcc(); ?>' class="rounded-md 
        border-0 py-1.5 pl-10  ring-1 ring-inset ring-neutral-300 
        focus:ring-2 focus:ring-inset focus:ring-verde-2 outline-none text-zinc-800">
                    </div>

                </div>

                <button type="submit" class="bg-verde-1 rounded-md py-1 px-20 focus:bg-zinc-50
                     text-zinc-50 flex items-center mt-4 gap-x-2 justify-center border-2 border-verde-1 
                     focus:text-verde-1 transition duration-300 ease-in-out hover:bg-verde-3 hover:border-verde-3 focus:border-verde-1">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5 h-5">
                        <path d="M10.75 4.75a.75.75 0 00-1.5 0v4.5h-4.5a.75.75 0 000 1.5h4.5v4.5a.75.75 0 001.5 0v-4.5h4.5a.75.75 0 000-1.5h-4.5v-4.5z" />
                    </svg>
                    Salvar
                </button>
    </div>

    </div>

    </form>
    </fieldset>

    </form>
    </div>

    <?php include_once('views/includes/footer.php') ?>

</body>

</html>