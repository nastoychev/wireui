<div {{ $attributes->class($getRootClasses()) }}>
    @isset($header)
        <div {{ $header->attributes }}>
            {{ $header }}
        </div>
    @elseif($title)
        <div class="{{ $getHeaderClasses($slot) }}">
            <div class="flex items-center">
                @if ($getUseIcon() && !$iconless)
                    <x-dynamic-component
                        :component="WireUi::component('icon')"
                        class="{{ $getIconClasses() }}"
                        :name="$getUseIcon()"
                    />
                @endif

                <h3 class="{{ $getTitleClasses() }}">
                    {{ $title }}
                </h3>
            </div>

            @isset($action)
                <div {{ $action->attributes }}>
                    {{ $action }}
                </div>
            @endisset
        </div>
    @endisset

    @if ($slot->isNotEmpty())
        @if ($checkSlot($slot))
            <div {{ $slot->attributes->class($getMainClasses()) }}>
                {{ $slot }}
            </div>
        @else
            <div class="{{ $getMainClasses() }}">
                {{ $slot }}
            </div>
        @endif
    @endif

    @isset($footer)
        <div {{ $footer->attributes->class($getFooterClasses()) }}>
            {{ $footer }}
        </div>
    @endisset
</div>
