<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../public/tailwind.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Sen:wght@400;700;800&display=swap" rel="stylesheet"> 
    <title>Login</title>
</head>
<body>
    <div class="container-fluid bg-white bg-cover bg-center bg-no-repeat relative overflow-hidden h-screen">
        <div class="bg-spacex right-0 w-full h-full absolute bg-cover bg-center">
        </div>
        <div class="container mx-auto px-10 flex items-center justify-center h-screen font-sen relative transition-all">
            <section id="login" class="h-3/4 lg:mx-52 w-full flex content-center items-center shadow-lg rounded-xl">
                <div class="box-left hidden lg:w-6/12 h-full lg:flex items-center px-2 bg-black">
                    <div class="container flex items-center justify-center ">
                        <img class="w-3/4" src="../../public/img/logo-1.png" alt="Logo SpaceX">
                    </div>
                </div>
                <div class="box-right w-full lg:w-6/12 h-full py-5 px-5 flex items-center bg-white">
                    <div class="login-content w-full">
                        <div class="logo py-10 md:hidden">
                            <img src="../../public/img/logo-2.svg" alt="Logo SpaceX">
                        </div> 
                        <div class="title-login">
                            <h1 class="title">Login</h1>
                            <p>Enter your login details below</p>
                        </div>
                        <div class="content-login mt-6">
                            <form action="">
                                <div class="username-input">
                                    <label for="username" class="label-auth">Username</label>
                                    <input type="text"  id="username" class="input-auth" placeholder="elon.doge.stonks">
                                </div>
                                <div class="password-input">
                                    <label for="password" class="label-auth">Password</label>
                                    <input type="password" id="password" class="input-auth" placeholder="Password">
                                </div>
                                <div class="button flex mt-5 justify-center">
                                    <button class="bg-black text-white hover:bg-white px-10 py-2 hover:text-black border hover:border-black transition-all"><span>Login</span></button>
                                </div>
                            </form>
                            <div class="register mt-5 flex justify-center">
                                <a href="register.php">Don't have an account?</a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
    <footer class="container-fluid bg-black w-full h-20 flex justify-center items-center">
        <p class="text-white font-sen">Gilang Rama Syaputra &copy; 2021</p>
    </footer>

    <script src="./public/js/app.js"></script>
</body>
</html>