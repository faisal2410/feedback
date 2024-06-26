<?php
session_start();

$data_dir = 'data';
$users_file = $data_dir . '/users.json';

function load_data($file_name)
{
    if (file_exists($file_name)) {
        return json_decode(file_get_contents($file_name), true);
    }
    return [];
}

function save_data($file_name, $data)
{
    file_put_contents($file_name, json_encode($data));
}

if (isset($_GET['user_id'])) {
    $user_id = $_GET['user_id'];
    $users = load_data($users_file);

    foreach ($users as &$user) {
        if ($user['link'] == $user_id && $_SERVER['REQUEST_METHOD'] == 'POST') {
            $feedback = $_POST['feedback'];
            $user['feedbacks'][] = $feedback;
            save_data($users_file, $users);
            header('Location: feedback-success.php');
            exit();
        }
    }
} else {
    echo "Invalid user ID.";
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TruthWhisper - Feedback</title>
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
        </nav>
    </header>

    <main class="container mx-auto mt-10">
        <h1 class="text-2xl font-bold">Share Your Feedback</h1>
        <form action="feedback.php?user_id=<?php echo htmlspecialchars($user_id); ?>" method="POST" class="mt-4">
            <div>
                <label for="feedback" class="block text-sm font-medium text-gray-700">Your Feedback</label>
                <div class="mt-1">
                    <textarea id="feedback" name="feedback" rows="4" class="block w-full p-2 border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" required></textarea>
                </div>
            </div>
            <div class="mt-4">
                <button type="submit" class="inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-md shadow-sm text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">Submit</button>
            </div>
        </form>
    </main>

    <footer class="bg-white">
        <div class="mx-auto max-w-7xl px-6 py-12 md:flex md:items-center justify-center lg:px-8">
            <p class="text-center text-xs leading-5 text-gray-500">&copy; 2024 TruthWhisper, Inc. All rights reserved.</p>
        </div>
    </footer>

</body>

</html>