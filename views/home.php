<?php 
if(!defined('SECURE_ACCESS')){
    die('DIRECT IS NOT PERMITTED');
}

include('templates/header.php') ?>

<div x-data="{ activeMenu: null }" class="min-h-screen bg-gradient-to-br from-blue-50 to-blue-100 flex items-center justify-center p-4">
    <div class="w-full max-w-md bg-white shadow-2xl rounded-2xl overflow-hidden">
        <div class="bg-gradient-to-r from-blue-500 to-purple-600 p-6">
            <h3 class="text-3xl font-bold text-center text-white">Ryusaaa Library</h3>
        </div>

        <div class="p-6 space-y-4">
            <a href="/book" 
               @mouseenter="activeMenu = 'book'"
               @mouseleave="activeMenu = null"
               class="block transform transition-all duration-300 hover:scale-105 hover:shadow-lg">
                <div class="flex items-center justify-center bg-blue-50 p-4 rounded-xl">
                    <div class="text-center">
                        <i class="fa-duotone fa-book text-5xl text-blue-500 mb-2"></i>
                        <h6 class="text-lg font-semibold text-blue-800">Book Collection</h6>
                    </div>
                </div>
            </a>

            <a href="/pinjam" 
               @mouseenter="activeMenu = 'pinjam'"
               @mouseleave="activeMenu = null"
               class="block transform transition-all duration-300 hover:scale-105 hover:shadow-lg">
                <div class="flex items-center justify-center bg-green-50 p-4 rounded-xl">
                    <div class="text-center">
                        <i class="fa-duotone fa-user text-5xl text-green-500 mb-2"></i>
                        <h6 class="text-lg font-semibold text-green-800">Peminjaman</h6>
                    </div>
                </div>
            </a>

            <a href="/balikin" 
               @mouseenter="activeMenu = 'balikin'"
               @mouseleave="activeMenu = null"
               class="block transform transition-all duration-300 hover:scale-105 hover:shadow-lg">
                <div class="flex items-center justify-center bg-purple-50 p-4 rounded-xl">
                    <div class="text-center">
                        <i class="fa-duotone fa-user text-5xl text-purple-500 mb-2"></i>
                        <h6 class="text-lg font-semibold text-purple-800">Pengembalian</h6>
                    </div>
                </div>
            </a>

            <a href="/membership" 
               @mouseenter="activeMenu = 'membership'"
               @mouseleave="activeMenu = null"
               class="block transform transition-all duration-300 hover:scale-105 hover:shadow-lg">
                <div class="flex items-center justify-center bg-red-50 p-4 rounded-xl">
                    <div class="text-center">
                        <i class="fa-duotone fa-users text-5xl text-red-500 mb-2"></i>
                        <h6 class="text-lg font-semibold text-red-800">Membership</h6>
                    </div>
                </div>
            </a>
        </div>

        <div class="bg-gray-100 p-4 text-center">
            <p>Copyright© <span x-text="new Date().getFullYear()"></span> All Rights Reserved By <span class="text-blue-600 font-semibold">Ryusaaa</span></p>
        </div>
    </div>
</div>

<?php include('templates/footer.php') ?>