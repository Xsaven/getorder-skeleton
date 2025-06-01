<?php

use Livewire\Volt\Component;

new class extends Component {
    //
}; ?>

<flux:card class="space-y-6 h-full">
    <flux:heading size="lg">
        Customer data information
    </flux:heading>

    <div class="space-y-6">
        @if (auth()->user()->client)
            @if(auth()->user()->client->customer_data)
                @foreach(auth()->user()->client->customer_data as $key => $value)
                    <div class="grid grid-cols-2 gap-4">
                        <div class="flex items-center">
                            <flux:icon.chat-bubble-bottom-center-text variant="micro" class="inline mr-2" />
                            <span class="font-semibold">{{ \Illuminate\Support\Str::of($key)->title() }}:</span>
                        </div>
                        <div class="text-gray-700 dark:text-gray-300">
                            @if ($value)
                                {{ $value }}
                            @else
                                <flux:badge size="sm" color="red">
                                    Not set
                                </flux:badge>
                            @endif
                        </div>
                    </div>
                @endforeach
            @else
                <div class="text-gray-700 dark:text-gray-300">
                    No customer data available for this client.
                </div>
            @endif
        @else
            <div class="text-gray-700 dark:text-gray-300">
                You are not associated with any client.
            </div>
        @endif
    </div>
</flux:card>
