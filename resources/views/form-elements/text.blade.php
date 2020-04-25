<div class="form-group slide-in">
    @include('form-elements.shared.custom-header', ['name' => $name, 'display_name' => $display_name ?? $name, 'custom' => $custom ?? null])
    <input
        type="text"
        name="{{ strtolower(str_replace(' ', '_', $name)) }}"
        class="form-control"
        id="{{ strtolower(str_replace(' ', '_', $name)) }}"
        placeholder="{{ $placeholder ?? '' }}"
        autocomplete="off"
        value="{{ $value ?? '' }}"
    >
    @include('form-elements.shared.custom-footer', ['custom' => $custom ?? null])
</div>
