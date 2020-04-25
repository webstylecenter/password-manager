@if(count($data) > 0)
    <table width="100%" class="table table-responsive table-hover">
        <thead>
            <tr>
                <th>Domain</th>
                <th>Customer</th>
                <th>Server</th>
                <th>Username</th>
                <th>Password</th>
                <th>Votes</th>
                <th>Backend</th>
                <th>Votes</th>
                <th>Last update</th>
            </tr>
        </thead>
        <tbody>
            @foreach($data as $row)
                <tr>
                    <td><a href="//{{ $row['name'] }}" target="_blank">{{ $row['name'] }}</a></td>
                    <td>
                        <a href="{{ route('customer.view', [
                            'id' => $row['customer']->id
                        ]) }}">{{ $row['customer']->name }}</a>
                    </td>
                    <td>@include('Components/server-field', ['server' => $row['server']])</td>
                    <td>@include('Components/copy-field', ['value' => $row['ssh_user']])</td>
                    <td>@include('Components/copy-field', ['value' => $row['ssh_password']])</td>
                    <td>Up: {{ $row['ssh_up_votes'] }}, Down: {{ $row['ssh_down_votes'] }}</td>
                    <td>
                        <a target="_blank" href="{{ $row['backend_url'] }}">{{ $row['backend_url'] }}</a><br />
                        User: @include('Components/copy-field', ['value' => $row['admin_user']])
                        Password: @include('Components/copy-field', ['value' => $row['admin_password']])
                    </td>
                    <td>Up: {{ $row['admin_up_votes'] }}, Down: {{ $row['admin_down_votes'] }}</td>
                    <td>{{ $row['updated_at'] }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@else
    <p>No records</p>
@endif

