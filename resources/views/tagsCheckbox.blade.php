<div class='tags'>
    @foreach ($tagsForCheckbox as $id => $name)
        <input
            type='checkbox'
            value='{{ $id }}'
            name='tags[]'
        >
        {{ $name }} <br>
    @endforeach
</div>
