<?php
/**
 * @var /Illuminate\Pagination\LengthAwarePaginator
 */
?>
<x-app-layout meta-description="LovelyStyle's personal blog about coding gugorials">
    <section class="w-full md:w-2/3 flex flex-col items-center px-3">

        @foreach($posts as $post)
            <x-post-item :post="$post"></x-post-item>
        @endforeach


        <!-- Pagination -->
        {{ $posts->onEachSide(1)->links() }}
    </section>

    <x-sidebar></x-sidebar>
</x-app-layout>
