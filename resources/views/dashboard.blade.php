<x-layouts.app :title="__('Dashboard')">
    <div class="flex h-full w-full flex-1 flex-col gap-4 rounded-xl">
        <div class="grid auto-rows-min gap-4 md:grid-cols-3">
            <div class="relative aspect-video overflow-hidden rounded-xl">
                <livewire:dashboard.presonal-information />
            </div>
            <div class="relative aspect-video overflow-hidden rounded-xl">
                <livewire:dashboard.client-information />
            </div>
            <div class="relative aspect-video overflow-hidden rounded-xl">
                <livewire:dashboard.customer-data-information />
            </div>
        </div>
        <div class="relative h-full flex-1 overflow-hidden rounded-xl">
            <livewire:dashboard.restaurants-table />
        </div>
    </div>
</x-layouts.app>
