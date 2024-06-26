<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TruthWhisper</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100">
    <header class="bg-white">
        <nav class="flex items-center justify-between p-6 lg:px-8" aria-label="Global">
            <div class="flex lg:flex-1">
                <a href="index.php" class="-m-1.5 p-1.5">
                    <span class="sr-only">TruthWhisper</span>
                    <span class="block font-bold text-lg bg-gradient-to-r from-blue-600 via-green-500 to-indigo-400 inline-block text-transparent bg-clip-text">TruthWhisper</span>
                </a>
            </div>
            <div class="hidden lg:flex lg:flex-1 lg:justify-end">
                <a href="login.php" class="text-sm font-semibold leading-6 text-gray-900">Log in <span aria-hidden="true">&rarr;</span></a>
            </div>
        </nav>
    </header>

    <main>
        <div class="relative px-6 lg:px-8">
            <div class="mx-auto max-w-3xl pt-20 pb-32 sm:pt-48 sm:pb-40">
                <div>
                    <div class="hidden sm:mb-8 sm:flex sm:justify-center">
                        <div class="relative overflow-hidden bg-white py-1.5 px-4 border border-gray-900/10 text-sm leading-6">
                            <span class="text-gray-600">
                                We are constantly evolving. Get the latest updates on our features.
                                <a href="#" class="font-semibold text-indigo-600"><span class="absolute inset-0" aria-hidden="true"></span>Read more <span aria-hidden="true">&rarr;</span></a>
                            </span>
                        </div>
                    </div>
                    <div>
                        <h1 class="text-4xl font-bold tracking-tight sm:text-center sm:text-6xl">Share your thoughts anonymously</h1>
                        <p class="mt-6 text-lg leading-8 text-gray-600 sm:text-center">At TruthWhisper, we believe in the power of honest feedback. Share your thoughts without revealing your identity.</p>
                        <div class="mt-8 flex gap-x-4 sm:justify-center">
                            <a href="register.php" class="inline-block rounded-lg bg-indigo-600 px-4 py-1.5 text-base font-semibold leading-7 text-white shadow-sm hover:bg-indigo-500">Get started</a>
                            <a href="feedback.php" class="inline-block rounded-lg bg-gray-200 px-4 py-1.5 text-base font-semibold leading-7 text-gray-900 shadow-sm hover:bg-gray-300">Give feedback</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <footer class="bg-white">
        <div class="mx-auto max-w-7xl px-6 py-12 md:flex md:items-center justify-center lg:px-8">
            <p class="text-center text-xs leading-5 text-gray-500">&copy; 2024 TruthWhisper, Inc. All rights reserved.</p>
        </div>
    </footer>

</body>

</html>