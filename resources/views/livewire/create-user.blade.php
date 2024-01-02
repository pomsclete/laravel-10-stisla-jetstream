<div id="form-create">
    <x-form-section :submit="$action" class="mb-4">
        <x-slot name="title">
            {{ __('Utilisateur') }}
        </x-slot>

        <x-slot name="description">
            {{ __('Complétez les données suivantes et soumettez-les pour créer de nouvelles données utilisateur') }}
        </x-slot>

        <x-slot name="form">
            <div class="form-group col-span-6 sm:col-span-5">
                <x-label for="name" value="{{ __('Prénom et nom') }}" />
                <small>Nom complet</small>
                <x-input id="name" type="text" class="mt-1 block w-full form-control shadow-none" wire:model.defer="user.name" />
                <x-input-error for="user.name" class="mt-2" />
            </div>

            <div class="form-group col-span-6 sm:col-span-5">
                <x-label for="email" value="{{ __('Email') }}" />
                <x-input id="email" type="text" class="mt-1 block w-full form-control shadow-none" wire:model.defer="user.email" />
                <x-input-error for="user.email" class="mt-2" />
            </div>

            @if ($action == "createUser")
            <div class="form-group col-span-6 sm:col-span-5">
                <x-label for="password" value="{{ __('Mot de passe') }}" />
                <small>Minimum 8 caractères</small>
                <x-input id="password" type="password" class="mt-1 block w-full form-control shadow-none" wire:model.defer="user.password" />
                <x-input-error for="user.password" class="mt-2" />
            </div>

            <div class="form-group col-span-6 sm:col-span-5">
                <x-label for="password_confirmation" value="{{ __('Confirmer mot de passe') }}" />
                <small>Minimum 8 caractères</small>
                <x-input id="password_confirmation" type="password" class="mt-1 block w-full form-control shadow-none" wire:model.defer="user.password_confirmation" />
                <x-input-error for="user.password_confirmation" class="mt-2" />
            </div>
            @endif
        </x-slot>

        <x-slot name="actions">
            <x-action-message class="mr-3" on="saved">
                {{ __($button['submit_response']) }}
            </x-action-message>

            <x-button>
                {{ __($button['submit_text']) }}
            </x-button>
        </x-slot>
    </x-form-section>

    <x-notify-message on="saved" type="success" :message="__($button['submit_response_notyf'])" />
</div>
