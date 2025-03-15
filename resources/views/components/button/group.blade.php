<div {{ $attributes->class([
    'flex -space-x-px group/button',
    '[&>button:not(:first-child):not(:last-child)]:rounded-none',
    '[&>button:first-child:not(:last-child)]:rounded-l-none',
    '[&>button:last-child:not(:first-child)]:rounded-r-none',
    '[&>button:last-child:not(:first-child)]:rounded-r-none',
]) }} data-button-group>
    {{ $slot }}
</div>
