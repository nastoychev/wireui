<x-wrapper.switcher
    :attributes="$attributes->only(['wire:key'])"
    :data="$wrapperData"
>
    @include('wireui::components.wrapper.slots')

    <label
        class="relative flex items-center select-none group"
        for="{{ $id }}"
        tabindex="-1"
    >
        <input
            {{ $attributes->merge([
                'name' => $name,
                'id'   => $id,
            ])->class([
                'translate-x-0 transform transition ease-in-out duration-200 cursor-pointer shadow',
                'checked:bg-none peer focus:ring-0 focus:ring-offset-0 focus:outline-none bg-white',
                'absolute mx-0.5 my-auto inset-y-0 rounded-full border-0 appearance-none',
                'checked:text-white dark:bg-secondary-200',
                data_get($sizeClasses, 'circle'),
            ]) }}
            type="checkbox"
        />

        <div @class([
            'block rounded-full cursor-pointer transition ease-in-out duration-100',
            'peer-focus:ring-2 peer-focus:ring-offset-2',
            'group-focus:ring-2 group-focus:ring-offset-2',
            data_get($sizeClasses, 'background'),
            $colorClasses,

            'invalidated:bg-negative-600 invalidated:peer-focus:bg-negative-600 invalidated:peer-focus:ring-negative-600 invalidated:dark:bg-negative-700',
            'invalidated:group-focus:ring-negative-600 invalidated:dark:group-focus:ring-negative-700',
            'invalidated:dark:peer-focus:ring-negative-700 invalidated:dark:peer-focus:ring-offset-secondary-800',
        ])></div>
    </label>
</x-wrapper.switcher>
