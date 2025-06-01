<?php

use Livewire\Volt\Component;

new class extends Component {
    //
}; ?>

<flux:card class="space-y-6 h-full">
    <flux:heading size="lg">
        Personal information
    </flux:heading>

    <div class="space-y-6">
        {{--ID--}}
        <div class="grid grid-cols-2 gap-4">
            <div class="flex items-center">
                <flux:icon.identification variant="micro" class="inline mr-2" />
                <span class="font-semibold">Your ID:</span>
            </div>
            <div class="text-gray-700 dark:text-gray-300">
                {{ auth()->user()->id }}
            </div>
        </div>
        <div class="grid grid-cols-2 gap-4">
            <div class="flex items-center">
                <flux:icon.user variant="micro" class="inline mr-2" />
                <span class="font-semibold">Your name:</span>
            </div>
            <div class="text-gray-700 dark:text-gray-300">
                {{ auth()->user()->name }}
            </div>
        </div>
        <div class="grid grid-cols-2 gap-4">
            <div class="flex items-center">
                <flux:icon.at-symbol variant="micro" class="inline mr-2" />
                <span class="font-semibold">Your email:</span>
            </div>
            <div class="text-gray-700 dark:text-gray-300">
                {{ auth()->user()->email }}
            </div>
        </div>
        <div class="grid grid-cols-2 gap-4">
            <div class="flex items-center">
                <flux:icon.calendar variant="micro" class="inline mr-2" />
                <span class="font-semibold">Registration date:</span>
            </div>
            <div class="text-gray-700 dark:text-gray-300">
                {{ auth()->user()->registerDate }}
            </div>
        </div>
    </div>
</flux:card>
