<div class="form-group">
    <x-form-label :label="$label" :for="$attributes->get('id') ?: $id()" />

    <select @if ($isWired()) wire:model{!! $wireModifier() !!}="{{ $name }}" @endif
        name="{{ $name }}" @if ($multiple) multiple @endif
        @if ($placeholder) placeholder="{{ $placeholder }}" @endif
        @if ($label && !$attributes->get('id')) id="{{ $id() }}" @endif {!! $attributes->merge(['class' => 'form-control ' . ($hasError($name) ? 'is-invalid' : '')]) !!}>

        @if ($placeholder)
            <option value="" disabled @if ($nothingSelected()) selected="selected" @endif>
                {{ $placeholder }}
            </option>
        @endif

        @forelse($options as $key => $option)
            <option value="{{ $key }}" @if ($isSelected($key)) selected="selected" @endif>
                {{ $option }}
            </option>
        @empty
            {!! $slot !!}
        @endforelse
    </select>

    {!! $help ?? null !!}

    @if ($hasErrorAndShow($name))
        <x-form-errors :name="$name" />
    @endif
</div>
