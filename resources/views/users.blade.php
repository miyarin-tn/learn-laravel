@foreach ($users as $data)
    {{ $data->name }}
    <br>
@endforeach
<div>
    {!! $users->links() !!}
</div>