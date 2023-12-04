<?php require APPROOT . '\views\inc\header.php'; ?>

<div x-data="{ isOpen: false }" class="bg-white">
    <header>
        <div class=" container mx-auto px-6 py-3">
            <div class="flex items-center justify-between">
                <div class="hidden h-12 w-full  border-b-4 border-red-500 text-gray-600 md:flex md:items-center">
                    <span class="mx-1 text-sm">Kamikaze_Blog</span>
                </div>
                <div class="w-full uppercase h-12 text-gray-700 border-b-4 border-green-500 md:text-center text-2xl font-semibold">
                    avito
                </div>
                <div class="flex h-12 items-center border-b-4 border-blue-500 justify-end w-full">


                    <div class="flex sm:hidden">
                        <button @click="isOpen = !isOpen" type="button" class="text-gray-600 hover:text-gray-500 focus:outline-none focus:text-gray-500" aria-label="toggle menu">
                            <svg viewBox="0 0 24 24" class="h-6 w-6 fill-current">
                                <path fill-rule="evenodd" d="M4 5h16a1 1 0 0 1 0 2H4a1 1 0 1 1 0-2zm0 6h16a1 1 0 0 1 0 2H4a1 1 0 0 1 0-2zm0 6h16a1 1 0 0 1 0 2H4a1 1 0 0 1 0-2z"></path>
                            </svg>
                        </button>
                    </div>
                </div>
            </div>
            <nav :class="isOpen ? '' : 'hidden'" class="sm:flex sm:justify-center sm:items-center mt-4">
                <div class="flex flex-col sm:flex-row">
                    <a class="mt-3 text-gray-600 hover:underline sm:mx-3 sm:mt-0" href="#">Home</a>
                    <a class="mt-3 text-gray-600 hover:underline sm:mx-3 sm:mt-0" href="#">Post</a>
                    <a class="mt-3 text-gray-600 hover:underline sm:mx-3 sm:mt-0" href="#">Categories</a>
                    <a class="mt-3 text-gray-600 hover:underline sm:mx-3 sm:mt-0" href="#">Contact</a>
                    <a class="mt-3 text-gray-600 hover:underline sm:mx-3 sm:mt-0" href="#">About</a>
                    <a class="mt-3 text-gray-600 hover:underline sm:mx-3 sm:mt-0" href="#">Login</a>
                    <!-- test  -->
                    <a href="#" class=" flex justify-around bg-red-400 no-underline hover:bg-red-600  hover:no-underline hover:text-white rounded-md py-3 p-1 shadow-md hover:shadow-2xl transition duration-500">
                        <svg class="av-icon" height="24" width="24" viewBox="0 0 18 18" xmlns="http://www.w3.org/2000/svg" aria-labelledby="AddNoteTitleID" style="fill: currentcolor; stroke: currentcolor; stroke-width: 0;">
                            <title id="AddNoteTitleID">AddNote Icon</title>
                            <path fill="currentColor" fill-rule="evenodd" d="M1.5 5.667c.46 0 .833.373.833.833v9.167H11.5a.833.833 0 010 1.666H2.333c-.92 0-1.666-.746-1.666-1.666V6.5c0-.46.373-.833.833-.833z" clip-rule="evenodd"></path>
                            <path fill="currentColor" fill-rule="evenodd" d="M15.667 2.333h-10v10h10v-10zm-10-1.666h10c.92 0 1.666.746 1.666 1.666v10c0 .92-.746 1.667-1.666 1.667h-10C4.747 14 4 13.254 4 12.333v-10c0-.92.746-1.666 1.667-1.666z" clip-rule="evenodd"></path>
                            <path fill="currentColor" fill-rule="evenodd" d="M10.667 4c.46 0 .833.373.833.833v5a.833.833 0 01-1.667 0v-5c0-.46.373-.833.834-.833z" clip-rule="evenodd"></path>
                            <path fill="currentColor" fill-rule="evenodd" d="M7.333 7.333c0-.46.374-.833.834-.833h5a.833.833 0 110 1.667h-5a.833.833 0 01-.834-.834z" clip-rule="evenodd"></path>
                        </svg>
                         Publier une annonce
                    </a>

                    <!-- end test -->
                </div>
            </nav>

        </div>
    </header>
</div>