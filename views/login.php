<?php
if (!defined('SECURE_ACCESS')) {
    die('DIRECT IS NOT PERMITTED');
}

include('templates/header.php');
?>

<div class="min-h-screen bg-gradient-to-br from-blue-50 to-blue-100 flex items-center justify-center py-6 px-4">
    <div class="w-full max-w-md bg-white shadow-xl rounded-xl overflow-hidden">
        <div class="bg-gradient-to-r from-blue-500 to-purple-600 p-6 text-center">
            <h3 class="text-3xl font-bold text-white">Login</h3>
        </div>
        <div class="p-6">
            <?php if (isset($_SESSION['error'])) : ?>
                <div class="alert alert-danger text-center text-red-600 mb-4">
                    <?php echo $_SESSION['error']; unset($_SESSION['error']); ?>
                </div>
            <?php endif; ?>
            <?php if (isset($_SESSION['success'])) : ?>
                <div class="alert alert-success text-center text-green-600 mb-4">
                    <?php echo $_SESSION['success']; unset($_SESSION['success']); ?>
                </div>
            <?php endif; ?>
            <form method="POST" action="/login">
                <div class="mb-4">
                    <input type="text" class="w-full p-3 border border-gray-300 rounded-lg" placeholder="Username or email address" name="username" value="<?= isset($_SESSION['username']) ? $_SESSION['username'] : '' ?>">
                </div>
                <div class="mb-4 relative">
                    <input type="password" class="w-full p-3 border border-gray-300 rounded-lg" placeholder="Password" name="password">
                    <a role="button" class="absolute right-2 top-2 text-gray-500"><i class="fa-duotone fa-eye"></i></a>
                </div>
                <button class="w-full py-2 bg-blue-500 hover:bg-blue-700 text-white font-bold rounded-lg transition duration-300" type="submit">Sign in</button>
                <div class="text-center mt-4">
                    <p>Don't Have an Account? <a href="/register" class="text-blue-600 hover:underline">Create</a></p>
                </div>
            </form>
        </div>
    </div>
</div>

<?php include('templates/footer.php'); ?>
