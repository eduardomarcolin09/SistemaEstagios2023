<!DOCTYPE html 5>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estágios IFRS - Início</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css' integrity='sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==' crossorigin='anonymous' referrerpolicy='no-referrer' />
    <?php include('views/includes/links.php'); ?>
</head>

<body class="scroll-smooth">

    <?php
    include('views/includes/menu.php');
    ?>

    <div class="flex flex-row justify-center items-center gap-2 h-screen md:px-8">

        <div class="flex flex-col justify-center text-start w-6/12">
            <sapn class="font-bold text-vermelho-1 my-4 capitalize 
            2xl:w-6/12 xl:w-8/12 lg:w-8/12 2xl:text-6xl xl:text-4xl lg:text-4xl
            md:text-4xl md:w-7/12">
                Começe um estágio, descubra novas Oportunidades
            </sapn>

            <p class="2xl:w-8/12 xl:w-9/12 2xl:text-xl xl:text-lg text-neutral-700
            lg:w-9/12">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                Duis facilisis sodales sapien, eget finibus purus solli
                citudin a. Donec volutpat sem in urna ornare vulputate.
                Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                Duis facilisis sodales sapien, eget finibus purus solli
                citudin a. Donec volutpat sem in urna ornare vulputate.
            </p>

            <a <?php echo isset($_SESSION['usuario']) ? 'href="estagioAluno.php"' : 'href="login.php"' ?>>
                <button type="submit" class="bg-verde-1 rounded-full py-2 px-16
                    focus:bg-white border-2 border-verde-1 focus:text-vermelho-1 focus:border-verde-1 text-zinc-50 font-bold
                    capitalize mt-10 w-fit self-start transition duration-300 ease-in-out flex items-center
                    gap-x-1 hover:bg-verde-3 hover:border-verde-3">
                    <?php if (isset($_SESSION['usuario'])) {
                        echo '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5 h-5">
                        <path d="M10.75 4.75a.75.75 0 00-1.5 0v4.5h-4.5a.75.75 0 000 1.5h4.5v4.5a.75.75 0 001.5 0v-4.5h4.5a.75.75 0 000-1.5h-4.5v-4.5z" />
                      </svg>
                      ';
                        echo 'Começar estágio';
                    } else {
                        echo '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5 h-5">
                        <path fill-rule="evenodd" d="M3 4.25A2.25 2.25 0 015.25 2h5.5A2.25 2.25 0 0113 4.25v2a.75.75 0 01-1.5 0v-2a.75.75 0 00-.75-.75h-5.5a.75.75 0 00-.75.75v11.5c0 .414.336.75.75.75h5.5a.75.75 0 00.75-.75v-2a.75.75 0 011.5 0v2A2.25 2.25 0 0110.75 18h-5.5A2.25 2.25 0 013 15.75V4.25z" clip-rule="evenodd" />
                        <path fill-rule="evenodd" d="M6 10a.75.75 0 01.75-.75h9.546l-1.048-.943a.75.75 0 111.004-1.114l2.5 2.25a.75.75 0 010 1.114l-2.5 2.25a.75.75 0 11-1.004-1.114l1.048-.943H6.75A.75.75 0 016 10z" clip-rule="evenodd" />
                      </svg>
                      ';
                        echo 'Fazer Login';
                    }
                    ?>
                </button>
            </a>

        </div>

        <div class="flex justify-center items-center" id="login-div">
            <img src="views/assets/estagios_foto.png" class="2xl:h-[32rem] xl:h-96 lg:h-[24rem] md:h-96">
        </div>

    </div>

    <div class="flex flex-col justify-center items-center gap-y-10">

        <div class="flex justify-center items-center gap-x-20">
            <img src="views/assets/img-placeholder-1.png" class="xl:h-80 lg:h-72 md:h-64 sm:h-60 rounded-md">

            <div class="flex flex-col w-3/5">
                <sapn class="font-bold text-4xl text-vermelho-1 my-4">
                    Aprendizado
                </sapn>

                <p class="w-4/5 2xl:text-lg xl:text-md text-neutral-700">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                    Duis facilisis sodales sapien, eget finibus purus solli
                    citudin a. Donec volutpat sem in urna ornare vulputate.
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                    Duis facilisis sodales sapien, eget finibus purus solli
                    citudin a. Donec volutpat sem in urna ornare vulputate.
                </p>
            </div>
        </div>

        <div class="flex justify-center items-center gap-x-20">
            <div class="flex flex-col w-3/5">
                <sapn class="font-bold text-4xl text-vermelho-1 my-4">
                    Oportunidades
                </sapn>

                <p class="w-4/5 2xl:text-lg xl:text-md text-neutral-700">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                    Duis facilisis sodales sapien, eget finibus purus solli
                    citudin a. Donec volutpat sem in urna ornare vulputate.
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                </p>
            </div>

            <img src="views/assets/img-placeholder-2.png" class="xl:h-80 lg:h-72 md:h-64 sm:h-60 rounded-md">
        </div>
    </div>

    </div>

    <?php include_once('views/includes/footer.php') ?>
</body>

</html>