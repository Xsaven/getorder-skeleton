<?php

use Livewire\Volt\Component;

new class extends Component {
    //
}; ?>

<flux:card class="space-y-6 h-full">
    <flux:heading size="lg">
        Client information
    </flux:heading>

    <div class="space-y-6">
        @if (auth()->user()->client)
            <div class="grid grid-cols-2 gap-4">
                <div class="flex items-center">
                    <flux:icon.identification variant="micro" class="inline mr-2" />
                    <span class="font-semibold">Client ID:</span>
                </div>
                <div class="text-gray-700 dark:text-gray-300">
                    {{ auth()->user()->client->id }}
                </div>
            </div>
            <div class="grid grid-cols-2 gap-4">
                <div class="flex items-center">
                    <flux:icon.user variant="micro" class="inline mr-2" />
                    <span class="font-semibold">Client name:</span>
                </div>
                <div class="text-gray-700 dark:text-gray-300">
                    {{ auth()->user()->client->name }}
                </div>
            </div>
            <div class="text-gray-700 dark:text-gray-300">
                <livewire:dashboard.client-information.client-setting-badge
                    title="Published"
                    property="published"
                    is
                />
                <livewire:dashboard.client-information.client-setting-badge
                    title="Debug"
                    property="is_debug"
                />
                <livewire:dashboard.client-information.client-setting-badge
                    title="Pay online"
                    property="is_pay_online"
                />
                <livewire:dashboard.client-information.client-setting-badge
                    title="Auto accept"
                    property="is_auto_accept"
                />
                <livewire:dashboard.client-information.client-setting-badge
                    title="Stop on"
                    property="is_stop_on"
                />
                <livewire:dashboard.client-information.client-setting-badge
                    title="Modifier stop on"
                    property="is_modifier_stop_on"
                />
                <livewire:dashboard.client-information.client-setting-badge
                    title="Work pos state"
                    property="is_work_pos_state"
                />
                <livewire:dashboard.client-information.client-setting-badge
                    title="Weight to title"
                    property="add_weight_to_title"
                />
                <livewire:dashboard.client-information.client-setting-badge
                    title="Auto send"
                    property="is_auto_send"
                />
                <livewire:dashboard.client-information.client-setting-badge
                    title="Trial"
                    property="is_trial"
                />
                <livewire:dashboard.client-information.client-setting-badge
                    title="Email notifies"
                    property="is_email_notif"
                />
                <livewire:dashboard.client-information.client-setting-badge
                    title="Subscribe"
                    property="is_subscribe"
                />
                <livewire:dashboard.client-information.client-setting-badge
                    title="Send order price"
                    property="is_send_order_price"
                />
            </div>
        @else
            <div class="text-gray-700 dark:text-gray-300">
                You are not associated with any client.
            </div>
        @endif
    </div>
</flux:card>
