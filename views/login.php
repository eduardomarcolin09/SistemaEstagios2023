<?php if (isset($_SESSION['usuario'])) header('location:index.php'); ?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <?php include_once('includes/links.php'); ?>
</head>

<body>

    <?php include_once('includes/menu.php'); ?>

    <div class="flex flex-row">


        <div class="flex justify-center items-center w-6/12">
            <form action="fazerLogin.php" method="POST" class="flex flex-col justify-center 
            items-center gap-2 ">

            <h1 class="font-bold text-5xl text-vermelho-1 my-4">
                Login
            </h1>
                <fieldset class="flex flex-col justify-center bg-zinc-50 items-center gap-y-8  rounded-md px-10 py-10">

                    <div>
                        <label for="login" class="block text-sm font-medium leading-6 text-verde-1 
                        mb-2">Login</label>

                        <div class="relative">
                            <input type="text" name="login" id="login" class="rounded-md border-0 py-1.5 pr-7 pl-10 ring-1 ring-inset 
                        ring-neutral-300 focus:ring-2 focus:ring-inset
                        outline-none text-zinc-800">

                            <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5 h-5 fill-neutral-700">
                                    <path d="M10 8a3 3 0 100-6 3 3 0 000 6zM3.465 14.493a1.23 1.23 0 00.41 1.412A9.957 9.957 0 0010 18c2.31 0 4.438-.784 6.131-2.1.43-.333.604-.903.408-1.41a7.002 7.002 0 00-13.074.003z" />
                                </svg>
                            </div>
                        </div>

                    </div>

                    <div>
                        <label for="senha" class="block text-sm font-medium leading-6 text-verde-1
                        mb-2">Senha</label>

                        <div class="relative">
                            <input type="password" name="senha" id="senha" " class=" rounded-md border-0 py-1.5 pr-7 pl-10 ring-1 ring-inset ring-neutral-300 focus:ring-2 focus:ring-inset outline-none text-zinc-800">

                            <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5 h-5 fill-neutral-700">
                                    <path fill-rule="evenodd" d="M10 1a4.5 4.5 0 00-4.5 4.5V9H5a2 2 0 00-2 2v6a2 2 0 002 2h10a2 2 0 002-2v-6a2 2 0 00-2-2h-.5V5.5A4.5 4.5 0 0010 1zm3 8V5.5a3 3 0 10-6 0V9h6z" clip-rule="evenodd" />
                                </svg>


                            </div>
                        </div>
                    </div>

                    <button type="submit" class="class=' bg-verde-1 rounded-md py-1 px-20 focus:bg-zinc-50
                     text-zinc-50 flex items-center mt-4 gap-x-2 justify-center border-2 border-verde-1 
                     focus:text-verde-1 focus:border-verde-1 transition duration-300 ease-in-out w-available font-medium
                     hover:bg-verde-3 hover:border-verde-3">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5 h-5">
                            <path fill-rule="evenodd" d="M3 4.25A2.25 2.25 0 015.25 2h5.5A2.25 2.25 0 0113 4.25v2a.75.75 0 01-1.5 0v-2a.75.75 0 00-.75-.75h-5.5a.75.75 0 00-.75.75v11.5c0 .414.336.75.75.75h5.5a.75.75 0 00.75-.75v-2a.75.75 0 011.5 0v2A2.25 2.25 0 0110.75 18h-5.5A2.25 2.25 0 013 15.75V4.25z" clip-rule="evenodd" />
                            <path fill-rule="evenodd" d="M6 10a.75.75 0 01.75-.75h9.546l-1.048-.943a.75.75 0 111.004-1.114l2.5 2.25a.75.75 0 010 1.114l-2.5 2.25a.75.75 0 11-1.004-1.114l1.048-.943H6.75A.75.75 0 016 10z" clip-rule="evenodd" />
                        </svg>
                        Entrar
                    </button>
                </fieldset>

            </form>

        </div>

        <div class="flex flex-col justify-center items-center gap-2 w-6/12" id="login-div">
            <style>
                #login-div {
                    height: calc(100vh - 64px);
                }
            </style>

                <?php include_once('views/assets/login_vetor.svg') ?>
        </div>
    </div>

    </div>

    <?php include_once('views/includes/footer.php')?>

</body>

</html>