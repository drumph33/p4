<div class='tags'>
    @foreach ($tagsForCheckbox as $id => $name)
        <input
            type='checkbox'
            value='{{ $id }}'
            name='tags[]'
            {{ (isset($tagsForThisScore) and in_array($name, $tagsForThisScore)) ? 'CHECKED' : '' }}
        >
        {{ $name }} <br>
    @endforeach
</div>
