<x-core::form.field
    :showLabel="$showLabel"
    :showField="$showField"
    :options="$options"
    :name="$name"
    :prepend="$prepend ?? null"
    :append="$append ?? null"
    :showError="$showError"
    :nameKey="$nameKey"
>
    <x-slot:label>
        @if ($showLabel && $options['label'] !== false && $options['label_show'])
            {!! Form::customLabel($name, $options['label'], $options['label_attr']) !!}
        @endif
    </x-slot:label>

    {!! Form::autocomplete($name, ($options['empty_value'] ? ['' => $options['empty_value']] : []) + $options['choices'], $options['selected'], $options['attr']) !!}
</x-core::form.field>
