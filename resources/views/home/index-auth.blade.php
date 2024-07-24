<x-head>Simple Blog</x-head>

    <div class="bg-white">
        <x-navigation></x-navigation>

        <div class="bg-white py-24 sm:py-32">
        <div class="mx-auto max-w-7xl px-6 lg:px-8">
            <div class="mx-auto max-w-2xl lg:mx-0">
            <h2 class="text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">Recent</h2>
            </div>
            <div class="mx-auto mt-10 grid max-w-2xl grid-cols-1 gap-x-8 gap-y-16 border-t border-gray-200 pt-10 sm:mt-16 sm:pt-16 lg:mx-0 lg:max-w-none lg:grid-cols-3">
            
            <x-blog-home-page.post-card>
                <x-slot:date>24 July 2024</x-slot:date>
                <x-slot:title>My blog post</x-slot:title>
                <x-slot:category>Marketing</x-slot:category>
                <x-slot:text>This is some text from the blog</x-slot:text>
                <x-slot:author>Ivan Jovanoski</x-slot:author>
            </x-blog-home-page.post-card>

            <x-blog-home-page.post-card>
                <x-slot:date>24 July 2024</x-slot:date>
                <x-slot:title>My blog post</x-slot:title>
                <x-slot:category>Marketing</x-slot:category>
                <x-slot:text>This is some text from the blog</x-slot:text>
                <x-slot:author>Ivan Jovanoski</x-slot:author>
            </x-blog-home-page.post-card>

            <x-blog-home-page.post-card>
                <x-slot:date>24 July 2024</x-slot:date>
                <x-slot:title>My blog post</x-slot:title>
                <x-slot:category>Marketing</x-slot:category>
                <x-slot:text>This is some text from the blog</x-slot:text>
                <x-slot:author>Ivan Jovanoski</x-slot:author>
            </x-blog-home-page.post-card>

            <!-- More posts... -->
        
            </div>
        </div>
        </div>
        <div style="width:100%; text-align:center">
            <x-blue-button>More</x-blue-button>
        </div>
        



<x-footer></x-footer>