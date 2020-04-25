<div class="d-inline">
    <a href="{{ route('server.view', [
    'server' => $server->ip,
    'id' => $server->id
    ]) }}">{{ $server->ip }}</a>
    <input type="hidden" value="{{ $server->ip }}" readonly />
    <button class="js-copy btn btn-sm btn-light fa fa-copy"></button>
</div>
