<x-layouts.home :showFilter="true">
    @foreach ($posts as $idx => $post)
        <x-view-post :post="$post" :index="$idx" :showRoute="'show'" />
    @endforeach
</x-layouts.home>
