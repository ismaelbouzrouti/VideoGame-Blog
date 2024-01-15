<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('About') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-2xl mx-auto bg-white p-8 shadow-md rounded-md">
            <h3 class="text-2xl font-semibold mb-4">Documentation Used:</h3>

            <ul class="list-disc pl-8">
                <li class="mb-4">
                    Laravel Documentation:
                    <ul class="list-inside">
                        <li><a href="https://laravel.com/docs" class="text-blue-500 hover:underline"
                                target="_blank">Official Laravel Docs</a></li>
                        <li><a href="https://laracasts.com" class="text-blue-500 hover:underline"
                                target="_blank">Laracasts</a></li>
                        <li><a href="https://www.tutorialspoint.com/laravel/index.htm"
                                class="text-blue-500 hover:underline" target="_blank">Tutorialspoint Laravel</a></li>
                        <li><a href="https://www.stackhawk.com/blog/laravel-xss" class="text-blue-500 hover:underline"
                                target="_blank">Laravel XSS Guide</a></li>
                        <li><a href="https://www.stackhawk.com/blog/laravel-csrf-protection-guide/"
                                class="text-blue-500 hover:underline" target="_blank">Laravel CSRF Protection Guide</a>
                        </li>
                        <li><a href="https://dev.to/robinkashyap_01/a-beginners-guide-to-resource-routes-in-laravel-4d2j"
                                class="text-blue-500 hover:underline" target="_blank">Resource Routes in Laravel</a>
                        </li>
                        <li><a href="https://www.cloudways.com/blog/laravel-migrations/"
                                class="text-blue-500 hover:underline" target="_blank">Laravel Migrations</a></li>
                        <li><a href="https://www.tutorialspoint.com/laravel/laravel_controllers.htm"
                                class="text-blue-500 hover:underline" target="_blank">Laravel Controllers</a></li>
                    </ul>
                </li>
                <li class="mb-4">
                    Tailwind CSS Documentation:
                    <ul class="list-inside">
                        <li><a href="https://tailwindcss.com/docs" class="text-blue-500 hover:underline"
                                target="_blank">Official Tailwind CSS Docs</a></li>
                    </ul>
                </li>
                <li class="mb-4">
                    PHP Documentation:
                    <ul class="list-inside">
                        <li><a href="https://www.php.net/docs.php" class="text-blue-500 hover:underline"
                                target="_blank">Official PHP Docs</a></li>
                        <li><a href="https://www.tutorialspoint.com/php/index.htm" class="text-blue-500 hover:underline"
                                target="_blank">Tutorialspoint PHP</a></li>
                    </ul>
                </li>
                <li class="mb-4">
                    Debugging & Errors:
                    <ul class="list-inside">
                        <li><a href="https://stackoverflow.com/" class="text-blue-500 hover:underline"
                                target="_blank">Stack Overflow</a></li>
                        <li><a href="https://chat.openai.com/" class="text-blue-500 hover:underline"
                                target="_blank">OpenAI ChatGPT</a></li>
                    </ul>
                </li>
                <li class="mb-4">
                    GitHub Repo:
                    <ul class="list-inside">
                        <li><a href="https://github.com/ismaelbouzrouti/VideoGame-Blog"
                                class="text-blue-500 hover:underline" target="_blank">VideoGameBlog Repo</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</x-app-layout>