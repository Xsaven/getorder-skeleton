<?php

use Livewire\Volt\Component;

new class extends Component {
    use \Livewire\WithPagination;

    public string $sortBy = 'id';
    public string $sortDirection = 'desc';

    public function sort($column): void
    {
        if ($this->sortBy === $column) {
            $this->sortDirection = $this->sortDirection === 'asc' ? 'desc' : 'asc';
        } else {
            $this->sortBy = $column;
            $this->sortDirection = 'asc';
        }
    }

    #[\Livewire\Attributes\Computed]
    public function restaurants()
    {
        return auth()->user()->client
            ?->restaurants()
            ->orderBy($this->sortBy, $this->sortDirection)
            ->paginate(10);
    }
}; ?>

<flux:card class="space-y-6 h-full">
    <flux:heading size="lg">
        Restaurants
    </flux:heading>

    <div class="space-y-6">
        <div class="space-y-6">
            @if($this->restaurants)
                <flux:table :paginate="$this->restaurants">
                    <flux:table.columns>
                        <flux:table.column sortable :sorted="$sortBy === 'id'" :direction="$sortDirection" wire:click="sort('id')">
                            ID
                        </flux:table.column>
                        <flux:table.column sortable :sorted="$sortBy === 'title'" :direction="$sortDirection" wire:click="sort('title')">
                            Title
                        </flux:table.column>
                        <flux:table.column sortable :sorted="$sortBy === 'uniq_id'" :direction="$sortDirection" wire:click="sort('uniq_id')">
                            Uniq ID
                        </flux:table.column>
                        <flux:table.column sortable :sorted="$sortBy === 'provider'" :direction="$sortDirection" wire:click="sort('provider')">
                            Provider
                        </flux:table.column>
                        <flux:table.column sortable :sorted="$sortBy === 'added'" :direction="$sortDirection" wire:click="sort('added')">
                            Created at
                        </flux:table.column>
                    </flux:table.columns>

                    <flux:table.rows>
                        @foreach ($this->restaurants as $restaurant)
                            <flux:table.row :key="$restaurant->id">
                                <flux:table.cell class="whitespace-nowrap">{{ $restaurant->id }}</flux:table.cell>
                                <flux:table.cell class="whitespace-nowrap">
                                    {{ $restaurant->title }}
                                    @if($restaurant->description)
                                        <flux:tooltip :content="$restaurant->description">
                                            <flux:icon.information-circle variant="micro" class="inline ml-1" />
                                        </flux:tooltip>
                                    @endif
                                    @if($restaurant->address)
                                        <flux:tooltip :content="$restaurant->address">
                                            <flux:icon.map-pin variant="micro" class="inline ml-1" />
                                        </flux:tooltip>
                                    @endif
                                    @if($restaurant->email)
                                        <flux:tooltip :content="$restaurant->email">
                                            <flux:icon.at-symbol variant="micro" class="inline ml-1" />
                                        </flux:tooltip>
                                    @endif
                                    @if($restaurant->phone)
                                        <flux:tooltip :content="$restaurant->phone">
                                            <flux:icon.device-phone-mobile variant="micro" class="inline ml-1" />
                                        </flux:tooltip>
                                    @endif
                                </flux:table.cell>
                                <flux:table.cell variant="strong">{{ $restaurant->uniq_id }}</flux:table.cell>
                                <flux:table.cell>
                                    <flux:badge size="sm" color="orange">{{ $restaurant->provider }}</flux:badge>
                                </flux:table.cell>
                                <flux:table.cell>
                                    <small><em>{{ $restaurant->added }}</em></small>
                                </flux:table.cell>
                            </flux:table.row>
                        @endforeach

                        @if(! $this->restaurants || $this->restaurants->isEmpty())
                            <flux:table.row>
                                <flux:table.cell colspan="8" class="text-center">
                                    <flux:callout icon="shield-exclamation" color="blue" inline>
                                        <flux:callout.heading>No requests found</flux:callout.heading>
                                    </flux:callout>
                                </flux:table.cell>
                            </flux:table.row>
                        @endif
                    </flux:table.rows>
                </flux:table>
            @else
                <flux:table>
                    <flux:table.rows>
                        <flux:table.row>
                            <flux:table.cell colspan="8" class="text-center">
                                <flux:callout icon="shield-exclamation" color="blue" inline>
                                    <flux:callout.heading>No requests found</flux:callout.heading>
                                </flux:callout>
                            </flux:table.cell>
                        </flux:table.row>
                    </flux:table.rows>
                </flux:table>
            @endif
        </div>
    </div>
</flux:card>
