<?php
session_start();

if (!isset($_SESSION['username'])) {
    header('Location: login.php');
    exit();
}

$data_dir = 'data';
$users_file = $data_dir . '/users.json';

function load_data($file_name)
{
    if (file_exists($file_name)) {
        return json_decode(file_get_contents($file_name), true);
    }
    return [];
}

$username = $_SESSION['username'];
$users = load_data($users_file);

$feedbacks = $users[$username]['feedbacks'];
$link = $users[$username]['link'];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TruthWhisper - Dashboard</title>
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
                <a href="logout.php" class="text-sm font-semibold leading-6 text-gray-900">Log out <span aria-hidden="true">&rarr;</span></a>
            </div>
        </nav>
    </header>

    <main class="container mx-auto mt-10">
        <h1 class="text-2xl font-bold">Welcome, <?php echo htmlspecialchars($username); ?></h1>
        <p>Your unique feedback link: <a href="feedback.php?user_id=<?php echo $link; ?>" class="text-blue-500"><?php echo 'http://localhost:8000/feedback.php?user_id=' . $link; ?></a></p>

        <h2 class="mt-10 text-xl font-semibold">Feedbacks Received:</h2>
        <ul class="mt-4">
            <?php foreach ($feedbacks as $feedback) : ?>
                <li class="border p-2 mb-2 bg-white shadow-sm"><?php echo htmlspecialchars($feedback); ?></li>
            <?php endforeach; ?>
        </ul>
    </main>

    <footer class="bg-white">
        <div class="mx-auto max-w-7xl px-6 py-12 md:flex md:items-center justify-center lg:px-8">
            <p class="text-center text-xs leading-5 text-gray-500">&copy; 2024 TruthWhisper, Inc. All rights reserved.</p>
        </div>
    </footer>

</body>

</html>