<?php

use Livewire\Volt\Component;

new class extends Component {
    public string $property;
    public string $title;
    public bool $is = false;

    #[\Livewire\Attributes\Computed]
    public function value(): mixed
    {
        return auth()->user()->client->{$this->property};
    }

    #[\Livewire\Attributes\Computed]
    public function tooltip(): string
    {
        return $this->is
            ? 'Is ' . \Illuminate\Support\Str::of($this->title)->title()->lower()->toString()
            : $this->title . ' is ' . ($this->value ? 'enabled' : 'disabled');
    }
}; ?>

<flux:tooltip content="{{ $this->tooltip }}">
    <flux:badge size="sm" color="{{ $this->value ? 'lime' : 'red' }}">
        {{ $title }}
    </flux:badge>
</flux:tooltip>
