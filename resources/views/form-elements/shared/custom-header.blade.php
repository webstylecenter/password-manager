<div class="custom-field-block" data-position="{{ $position ?? 0 }}" data-name="{{ strtolower(str_replace(' ', '_', $name)) }}">
    <div class="row">
        <div class="col-3">
            @include('form-elements.label', ['name' => $name, 'display_name' => $display_name ?? ucfirst($name)])
        </div>

        <div class="col-6">
