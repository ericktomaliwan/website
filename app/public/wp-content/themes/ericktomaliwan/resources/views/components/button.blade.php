<button {{ $attributes->merge( ['class' => '$type_class'] ) }}>
    {{ $slot }}
</button>