@extends('layouts.app')

@section('title')
    Anxiety and Depression Surveys
@endsection

@section('content')
    @if ($errors->any())
    <div class='container'>
        <div class='alert alert-danger'>
            You must answer all of the questions!
        </div>
    </div>
    @endif
    <div class='container'>
        <form method='GET' action='/results'>
            <div class='panel-group'>
                <div class='panel panel-primary'>
                    <div class="panel-heading">
                        <h2 class='text-center'> Burns Anxiety Inventory</h2>
                    </div>
                    <div class="panel-body">
                        <div class='panel panel-info'>
                            <div class="panel-heading">
                                <h3 class='text-center'> Category 1: Anxious Feelings</h3>
                            </div>
                            <div class="panel-body">
                                <div class='form-group'>
                                    <p>1. Anxiety, nervousness, worry, or fear</p>
                                    <input type='radio' name='A1' value='0' {{ (old('A1') == '0') ? 'checked' : '' }} > Not At All
                                    <input type='radio' name='A1' value='1' {{ (old('A1') == '1') ? 'checked' : '' }}> Somewhat
                                    <input type='radio' name='A1' value='2' {{ (old('A1') == '2') ? 'checked' : '' }}> Moderately
                                    <input type='radio' name='A1' value='3' {{ (old('A1') == '3') ? 'checked' : '' }}> A lot
                                </div>
                                <div class='form-group'>
                                    <p>2. Feeling that things around you are strange, unreal, or foggy</p>
                                    <input type='radio' name='A2' value='0'{{ (old('A2') == '0') ? 'checked' : '' }} > Not At All
                                    <input type='radio' name='A2' value='1'{{ (old('A2') == '1') ? 'checked' : '' }}> Somewhat
                                    <input type='radio' name='A2' value='2'{{ (old('A2') == '2') ? 'checked' : '' }}> Moderately
                                    <input type='radio' name='A2' value='3'{{ (old('A2') == '3') ? 'checked' : '' }}> A lot
                                </div>
                                <div class='form-group'>
                                    <p>3. Feeling detached from all or part of your body</p>
                                    <input type='radio' name='A3' value='0'{{ (old('A3') == '0') ? 'checked' : '' }} > Not At All
                                    <input type='radio' name='A3' value='1'{{ (old('A3') == '1') ? 'checked' : '' }}> Somewhat
                                    <input type='radio' name='A3' value='2'{{ (old('A3') == '2') ? 'checked' : '' }}> Moderately
                                    <input type='radio' name='A3' value='3'{{ (old('A3') == '3') ? 'checked' : '' }}> A lot
                                </div>
                                <div class='form-group'>
                                    <p>4. Sudden unexpected panic spells</p>
                                    <input type='radio' name='A4' value='0'{{ (old('A4') == '0') ? 'checked' : '' }} > Not At All
                                    <input type='radio' name='A4' value='1'{{ (old('A4') == '1') ? 'checked' : '' }}> Somewhat
                                    <input type='radio' name='A4' value='2'{{ (old('A4') == '2') ? 'checked' : '' }}> Moderately
                                    <input type='radio' name='A4' value='3'{{ (old('A4') == '3') ? 'checked' : '' }}> A lot
                                </div>
                                <div class='form-group'>
                                    <p>5. Apprehension or a sense of impending doom</p>
                                    <input type='radio' name='A5' value='0'{{ (old('A5') == '0') ? 'checked' : '' }} > Not At All
                                    <input type='radio' name='A5' value='1'{{ (old('A5') == '1') ? 'checked' : '' }}> Somewhat
                                    <input type='radio' name='A5' value='2'{{ (old('A5') == '2') ? 'checked' : '' }}> Moderately
                                    <input type='radio' name='A5' value='3'{{ (old('A5') == '3') ? 'checked' : '' }}> A lot
                                </div>
                                <div class='form-group'>
                                    <p>6. Feeling tense, stressed, "uptight", or on edge</p>
                                    <input type='radio' name='A6' value='0'{{ (old('A6') == '0') ? 'checked' : '' }} > Not At All
                                    <input type='radio' name='A6' value='1'{{ (old('A6') == '1') ? 'checked' : '' }}> Somewhat
                                    <input type='radio' name='A6' value='2'{{ (old('A6') == '2') ? 'checked' : '' }}> Moderately
                                    <input type='radio' name='A6' value='3'{{ (old('A6') == '3') ? 'checked' : '' }}> A lot
                                </div>
                            </div>
                        </div>
                        <div class='panel panel-info'>
                            <div class="panel-heading">
                                <h3 class='text-center'> Category 2: Anxious Thoughts</h3>
                            </div>
                            <div class="panel-body">
                                <div class='form-group'>
                                    <p>7. Difficulty concentrating</p>
                                    <input type='radio' name='A7' value='0'{{ (old('A7') == '0') ? 'checked' : '' }} > Not At All
                                    <input type='radio' name='A7' value='1'{{ (old('A7') == '1') ? 'checked' : '' }}> Somewhat
                                    <input type='radio' name='A7' value='2'{{ (old('A7') == '2') ? 'checked' : '' }}> Moderately
                                    <input type='radio' name='A7' value='3'{{ (old('A7') == '3') ? 'checked' : '' }}> A lot
                                </div>
                                <div class='form-group'>
                                    <p>8. Racing thoughts or having your mind jump from one thing to the next</p>
                                    <input type='radio' name='A8' value='0'{{ (old('A8') == '0') ? 'checked' : '' }} > Not At All
                                    <input type='radio' name='A8' value='1'{{ (old('A8') == '1') ? 'checked' : '' }}> Somewhat
                                    <input type='radio' name='A8' value='2'{{ (old('A8') == '2') ? 'checked' : '' }}> Moderately
                                    <input type='radio' name='A8' value='3'{{ (old('A8') == '3') ? 'checked' : '' }}> A lot
                                </div>
                                <div class='form-group'>
                                    <p>9. Frightening fantasies or daydreams</p>
                                    <input type='radio' name='A9' value='0'{{ (old('A9') == '0') ? 'checked' : '' }} > Not At All
                                    <input type='radio' name='A9' value='1'{{ (old('A9') == '1') ? 'checked' : '' }}> Somewhat
                                    <input type='radio' name='A9' value='2'{{ (old('A9') == '2') ? 'checked' : '' }}> Moderately
                                    <input type='radio' name='A9' value='3'{{ (old('A9') == '3') ? 'checked' : '' }}> A lot
                                </div>
                                <div class='form-group'>
                                    <p>10. Feeling that you're on the verge of losing control</p>
                                    <input type='radio' name='A10' value='0'{{ (old('A10') == '0') ? 'checked' : '' }} > Not At All
                                    <input type='radio' name='A10' value='1'{{ (old('A10') == '1') ? 'checked' : '' }}> Somewhat
                                    <input type='radio' name='A10' value='2'{{ (old('A10') == '2') ? 'checked' : '' }}> Moderately
                                    <input type='radio' name='A10' value='3'{{ (old('A10') == '3') ? 'checked' : '' }}> A lot
                                </div>
                                <div class='form-group'>
                                    <p>11. Fears of cracking up or going crazy</p>
                                    <input type='radio' name='A11' value='0'{{ (old('A11') == '0') ? 'checked' : '' }} > Not At All
                                    <input type='radio' name='A11' value='1'{{ (old('A11') == '1') ? 'checked' : '' }}> Somewhat
                                    <input type='radio' name='A11' value='2'{{ (old('A11') == '2') ? 'checked' : '' }}> Moderately
                                    <input type='radio' name='A11' value='3'{{ (old('A11') == '3') ? 'checked' : '' }}> A lot
                                </div>
                                <div class='form-group'>
                                    <p>12. Fears of fainting or passing out</p>
                                    <input type='radio' name='A12' value='0'{{ (old('A12') == '0') ? 'checked' : '' }} > Not At All
                                    <input type='radio' name='A12' value='1'{{ (old('A12') == '1') ? 'checked' : '' }}> Somewhat
                                    <input type='radio' name='A12' value='2'{{ (old('A12') == '2') ? 'checked' : '' }}> Moderately
                                    <input type='radio' name='A12' value='3'{{ (old('A12') == '3') ? 'checked' : '' }}> A lot
                                </div>
                                <div class='form-group'>
                                    <p>13. Fears of physical illness or heart attacks or dying</p>
                                    <input type='radio' name='A13' value='0'{{ (old('A13') == '0') ? 'checked' : '' }} > Not At All
                                    <input type='radio' name='A13' value='1'{{ (old('A13') == '1') ? 'checked' : '' }}> Somewhat
                                    <input type='radio' name='A13' value='2'{{ (old('A13') == '2') ? 'checked' : '' }}> Moderately
                                    <input type='radio' name='A13' value='3'{{ (old('A13') == '3') ? 'checked' : '' }}> A lot
                                </div>
                                <div class='form-group'>
                                    <p>14. Concerns about looking foolish or inadequate in front of others</p>
                                    <input type='radio' name='A14' value='0'{{ (old('A14') == '0') ? 'checked' : '' }} > Not At All
                                    <input type='radio' name='A14' value='1'{{ (old('A14') == '1') ? 'checked' : '' }}> Somewhat
                                    <input type='radio' name='A14' value='2'{{ (old('A14') == '2') ? 'checked' : '' }}> Moderately
                                    <input type='radio' name='A14' value='3'{{ (old('A14') == '3') ? 'checked' : '' }}> A lot
                                </div>
                                <div class='form-group'>
                                    <p>15. Fears of being alone, isolated, or abandoned</p>
                                    <input type='radio' name='A15' value='0'{{ (old('A15') == '0') ? 'checked' : '' }} > Not At All
                                    <input type='radio' name='A15' value='1'{{ (old('A15') == '1') ? 'checked' : '' }}> Somewhat
                                    <input type='radio' name='A15' value='2'{{ (old('A15') == '2') ? 'checked' : '' }}> Moderately
                                    <input type='radio' name='A15' value='3'{{ (old('A15') == '3') ? 'checked' : '' }}> A lot
                                </div>
                                <div class='form-group'>
                                    <p>16. Fears of criticism or disapproval</p>
                                    <input type='radio' name='A16' value='0'{{ (old('A16') == '0') ? 'checked' : '' }} > Not At All
                                    <input type='radio' name='A16' value='1'{{ (old('A16') == '1') ? 'checked' : '' }}> Somewhat
                                    <input type='radio' name='A16' value='2'{{ (old('A16') == '2') ? 'checked' : '' }}> Moderately
                                    <input type='radio' name='A16' value='3'{{ (old('A16') == '3') ? 'checked' : '' }}> A lot
                                </div>
                                <div class='form-group'>
                                    <p>17. Fears that something terrible is about to happen</p>
                                    <input type='radio' name='A17' value='0'{{ (old('A17') == '0') ? 'checked' : '' }} > Not At All
                                    <input type='radio' name='A17' value='1'{{ (old('A17') == '1') ? 'checked' : '' }}> Somewhat
                                    <input type='radio' name='A17' value='2'{{ (old('A17') == '2') ? 'checked' : '' }}> Moderately
                                    <input type='radio' name='A17' value='3'{{ (old('A17') == '3') ? 'checked' : '' }}> A lot
                                </div>
                            </div>
                        </div>
                        <div class='panel panel-info'>
                            <div class="panel-heading">
                                <h3 class='text-center'> Category 3: Physical Symptoms</h3>
                            </div>
                            <div class="panel-body">
                                <div class='form-group'>
                                    <p>18. Skipping or racing or pounding of the heart (sometimes called "palpitations")</p>
                                    <input type='radio' name='A18' value='0'{{ (old('A18') == '0') ? 'checked' : '' }} > Not At All
                                    <input type='radio' name='A18' value='1'{{ (old('A18') == '1') ? 'checked' : '' }}> Somewhat
                                    <input type='radio' name='A18' value='2'{{ (old('A18') == '2') ? 'checked' : '' }}> Moderately
                                    <input type='radio' name='A18' value='3'{{ (old('A18') == '3') ? 'checked' : '' }}> A lot
                                </div>
                                <div class='form-group'>
                                    <p>19. Pain, pressure, or tightness in the chest</p>
                                    <input type='radio' name='A19' value='0'{{ (old('A19') == '0') ? 'checked' : '' }} > Not At All
                                    <input type='radio' name='A19' value='1'{{ (old('A19') == '1') ? 'checked' : '' }}> Somewhat
                                    <input type='radio' name='A19' value='2'{{ (old('A19') == '2') ? 'checked' : '' }}> Moderately
                                    <input type='radio' name='A19' value='3'{{ (old('A19') == '3') ? 'checked' : '' }}> A lot
                                </div>
                                <div class='form-group'>
                                    <p>20. Tingling or numbness in the toes or fingers</p>
                                    <input type='radio' name='A20' value='0'{{ (old('A20') == '0') ? 'checked' : '' }} > Not At All
                                    <input type='radio' name='A20' value='1'{{ (old('A20') == '1') ? 'checked' : '' }}> Somewhat
                                    <input type='radio' name='A20' value='2'{{ (old('A20') == '2') ? 'checked' : '' }}> Moderately
                                    <input type='radio' name='A20' value='3'{{ (old('A20') == '3') ? 'checked' : '' }}> A lot
                                </div>
                                <div class='form-group'>
                                    <p>21. Butterflies or discomfort in the stomach</p>
                                    <input type='radio' name='A21' value='0'{{ (old('A21') == '0') ? 'checked' : '' }} > Not At All
                                    <input type='radio' name='A21' value='1'{{ (old('A21') == '1') ? 'checked' : '' }}> Somewhat
                                    <input type='radio' name='A21' value='2'{{ (old('A21') == '2') ? 'checked' : '' }}> Moderately
                                    <input type='radio' name='A21' value='3'{{ (old('A21') == '3') ? 'checked' : '' }}> A lot
                                </div>
                                <div class='form-group'>
                                    <p>22. Constipation or diarrhea</p>
                                    <input type='radio' name='A22' value='0'{{ (old('A22') == '0') ? 'checked' : '' }} > Not At All
                                    <input type='radio' name='A22' value='1'{{ (old('A22') == '1') ? 'checked' : '' }}> Somewhat
                                    <input type='radio' name='A22' value='2'{{ (old('A22') == '2') ? 'checked' : '' }}> Moderately
                                    <input type='radio' name='A22' value='3'{{ (old('A22') == '3') ? 'checked' : '' }}> A lot
                                </div>
                                <div class='form-group'>
                                    <p>23. Restlessness or jumpiness</p>
                                    <input type='radio' name='A23' value='0'{{ (old('A23') == '0') ? 'checked' : '' }} > Not At All
                                    <input type='radio' name='A23' value='1'{{ (old('A23') == '1') ? 'checked' : '' }}> Somewhat
                                    <input type='radio' name='A23' value='2'{{ (old('A23') == '2') ? 'checked' : '' }}> Moderately
                                    <input type='radio' name='A23' value='3'{{ (old('A23') == '3') ? 'checked' : '' }}> A lot
                                </div>
                                <div class='form-group'>
                                    <p>24. Tight, tense muscles</p>
                                    <input type='radio' name='A24' value='0'{{ (old('A24') == '0') ? 'checked' : '' }} > Not At All
                                    <input type='radio' name='A24' value='1'{{ (old('A24') == '1') ? 'checked' : '' }}> Somewhat
                                    <input type='radio' name='A24' value='2'{{ (old('A24') == '2') ? 'checked' : '' }}> Moderately
                                    <input type='radio' name='A24' value='3'{{ (old('A24') == '3') ? 'checked' : '' }}> A lot
                                </div>
                                <div class='form-group'>
                                    <p>25. Sweating not brought on by heat</p>
                                    <input type='radio' name='A25' value='0'{{ (old('A25') == '0') ? 'checked' : '' }} > Not At All
                                    <input type='radio' name='A25' value='1'{{ (old('A25') == '1') ? 'checked' : '' }}> Somewhat
                                    <input type='radio' name='A25' value='2'{{ (old('A25') == '2') ? 'checked' : '' }}> Moderately
                                    <input type='radio' name='A25' value='3'{{ (old('A25') == '3') ? 'checked' : '' }}> A lot
                                </div>
                                <div class='form-group'>
                                    <p>26. A lump in the throat</p>
                                    <input type='radio' name='A26' value='0'{{ (old('A26') == '0') ? 'checked' : '' }} > Not At All
                                    <input type='radio' name='A26' value='1'{{ (old('A26') == '1') ? 'checked' : '' }}> Somewhat
                                    <input type='radio' name='A26' value='2'{{ (old('A26') == '2') ? 'checked' : '' }}> Moderately
                                    <input type='radio' name='A26' value='3'{{ (old('A26') == '3') ? 'checked' : '' }}> A lot
                                </div>
                                <div class='form-group'>
                                    <p>27. Trembling or shaking</p>
                                    <input type='radio' name='A27' value='0'{{ (old('A27') == '0') ? 'checked' : '' }} > Not At All
                                    <input type='radio' name='A27' value='1'{{ (old('A27') == '1') ? 'checked' : '' }}> Somewhat
                                    <input type='radio' name='A27' value='2'{{ (old('A27') == '2') ? 'checked' : '' }}> Moderately
                                    <input type='radio' name='A27' value='3'{{ (old('A27') == '3') ? 'checked' : '' }}> A lot
                                </div>
                                <div class='form-group'>
                                    <p>28. Rubbery or "jelly" legs</p>
                                    <input type='radio' name='A28' value='0'{{ (old('A28') == '0') ? 'checked' : '' }} > Not At All
                                    <input type='radio' name='A28' value='1'{{ (old('A28') == '1') ? 'checked' : '' }}> Somewhat
                                    <input type='radio' name='A28' value='2'{{ (old('A28') == '2') ? 'checked' : '' }}> Moderately
                                    <input type='radio' name='A28' value='3'{{ (old('A28') == '3') ? 'checked' : '' }}> A lot
                                </div>
                                <div class='form-group'>
                                    <p>29. Feeling dizzy, lightheaded, or off balance</p>
                                    <input type='radio' name='A29' value='0'{{ (old('A29') == '0') ? 'checked' : '' }} > Not At All
                                    <input type='radio' name='A29' value='1'{{ (old('A29') == '1') ? 'checked' : '' }}> Somewhat
                                    <input type='radio' name='A29' value='2'{{ (old('A29') == '2') ? 'checked' : '' }}> Moderately
                                    <input type='radio' name='A29' value='3'{{ (old('A29') == '3') ? 'checked' : '' }}> A lot
                                </div>
                                <div class='form-group'>
                                    <p>30. Choking or smothering sensations or diffuculty breathing</p>
                                    <input type='radio' name='A30' value='0'{{ (old('A30') == '0') ? 'checked' : '' }} > Not At All
                                    <input type='radio' name='A30' value='1'{{ (old('A30') == '1') ? 'checked' : '' }}> Somewhat
                                    <input type='radio' name='A30' value='2'{{ (old('A30') == '2') ? 'checked' : '' }}> Moderately
                                    <input type='radio' name='A30' value='3'{{ (old('A30') == '3') ? 'checked' : '' }}> A lot
                                </div>
                                <div class='form-group'>
                                    <p>31. Headaches or pains in the neck or back</p>
                                    <input type='radio' name='A31' value='0'{{ (old('A31') == '0') ? 'checked' : '' }} > Not At All
                                    <input type='radio' name='A31' value='1'{{ (old('A31') == '1') ? 'checked' : '' }}> Somewhat
                                    <input type='radio' name='A31' value='2'{{ (old('A31') == '2') ? 'checked' : '' }}> Moderately
                                    <input type='radio' name='A31' value='3'{{ (old('A31') == '3') ? 'checked' : '' }}> A lot
                                </div>
                                <div class='form-group'>
                                    <p>32. Hot flashes or cold chills</p>
                                    <input type='radio' name='A32' value='0'{{ (old('A32') == '0') ? 'checked' : '' }} > Not At All
                                    <input type='radio' name='A32' value='1'{{ (old('A32') == '1') ? 'checked' : '' }}> Somewhat
                                    <input type='radio' name='A32' value='2'{{ (old('A32') == '2') ? 'checked' : '' }}> Moderately
                                    <input type='radio' name='A32' value='3'{{ (old('A32') == '3') ? 'checked' : '' }}> A lot
                                </div>
                                <div class='form-group'>
                                    <p>33. Feeling tired, weak, or easily exhausted</p>
                                    <input type='radio' name='A33' value='0'{{ (old('A33') == '0') ? 'checked' : '' }} > Not At All
                                    <input type='radio' name='A33' value='1'{{ (old('A33') == '1') ? 'checked' : '' }}> Somewhat
                                    <input type='radio' name='A33' value='2'{{ (old('A33') == '2') ? 'checked' : '' }}> Moderately
                                    <input type='radio' name='A33' value='3'{{ (old('A33') == '3') ? 'checked' : '' }}> A lot
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <div class='panel panel-primary'>
                <div class="panel-heading">
                    <h2> Burns Depression Checklist </h2>
                </div>
                <div class="panel-body">
                    <div class='form-group'>
                        <p>1. Sadness: Have you been feeling sad or down in the dumps?</p>
                        <input type='radio' name='D1' value='0'{{ (old('D1') == '0') ? 'checked' : '' }} > Not At All
                        <input type='radio' name='D1' value='1'{{ (old('D1') == '1') ? 'checked' : '' }}> Somewhat
                        <input type='radio' name='D1' value='2'{{ (old('D1') == '2') ? 'checked' : '' }}> Moderately
                        <input type='radio' name='D1' value='3'{{ (old('D1') == '3') ? 'checked' : '' }}> A lot
                    </div>
                    <div class='form-group'>
                        <p>2. Discouragement: Does the future look hopeless?</p>
                        <input type='radio' name='D2' value='0'{{ (old('D2') == '0') ? 'checked' : '' }} > Not At All
                        <input type='radio' name='D2' value='1'{{ (old('D2') == '1') ? 'checked' : '' }}> Somewhat
                        <input type='radio' name='D2' value='2'{{ (old('D2') == '2') ? 'checked' : '' }}> Moderately
                        <input type='radio' name='D2' value='3'{{ (old('D2') == '3') ? 'checked' : '' }}> A lot
                    </div>
                    <div class='form-group'>
                        <p>3. Low self-esteem: Do you feel worthless or think of yourself as a failure?</p>
                        <input type='radio' name='D3' value='0'{{ (old('D3') == '0') ? 'checked' : '' }} > Not At All
                        <input type='radio' name='D3' value='1'{{ (old('D3') == '1') ? 'checked' : '' }}> Somewhat
                        <input type='radio' name='D3' value='2'{{ (old('D3') == '2') ? 'checked' : '' }}> Moderately
                        <input type='radio' name='D3' value='3'{{ (old('D3') == '3') ? 'checked' : '' }}> A lot
                    </div>
                    <div class='form-group'>
                        <p>4. Inferiority: Do you feel inadequate or inferior to others?</p>
                        <input type='radio' name='D4' value='0'{{ (old('D4') == '0') ? 'checked' : '' }} > Not At All
                        <input type='radio' name='D4' value='1'{{ (old('D4') == '1') ? 'checked' : '' }}> Somewhat
                        <input type='radio' name='D4' value='2'{{ (old('D4') == '2') ? 'checked' : '' }}> Moderately
                        <input type='radio' name='D4' value='3'{{ (old('D4') == '3') ? 'checked' : '' }}> A lot
                    </div>
                    <div class='form-group'>
                        <p>5. Guilt: Do you get self-critical and blame yourself for everything?</p>
                        <input type='radio' name='D5' value='0'{{ (old('D5') == '0') ? 'checked' : '' }} > Not At All
                        <input type='radio' name='D5' value='1'{{ (old('D5') == '1') ? 'checked' : '' }}> Somewhat
                        <input type='radio' name='D5' value='2'{{ (old('D5') == '2') ? 'checked' : '' }}> Moderately
                        <input type='radio' name='D5' value='3'{{ (old('D5') == '3') ? 'checked' : '' }}> A lot
                    </div>
                    <div class='form-group'>
                        <p>6. Indecisiveness: Do you have trouble making up your mind about things?</p>
                        <input type='radio' name='D6' value='0'{{ (old('D6') == '0') ? 'checked' : '' }} > Not At All
                        <input type='radio' name='D6' value='1'{{ (old('D6') == '1') ? 'checked' : '' }}> Somewhat
                        <input type='radio' name='D6' value='2'{{ (old('D6') == '2') ? 'checked' : '' }}> Moderately
                        <input type='radio' name='D6' value='3'{{ (old('D6') == '3') ? 'checked' : '' }}> A lot
                    </div>
                    <div class='form-group'>
                        <p>7. Irritability and Frustration: Have you been feeling resentful and angry a good deal of the time?</p>
                        <input type='radio' name='D7' value='0'{{ (old('D7') == '0') ? 'checked' : '' }} > Not At All
                        <input type='radio' name='D7' value='1'{{ (old('D7') == '1') ? 'checked' : '' }}> Somewhat
                        <input type='radio' name='D7' value='2'{{ (old('D7') == '2') ? 'checked' : '' }}> Moderately
                        <input type='radio' name='D7' value='3'{{ (old('D7') == '3') ? 'checked' : '' }}> A lot
                    </div>
                    <div class='form-group'>
                        <p>8. Loss of interest in life: Have you lost interest in your career, your hobbies, your family, or your friends?</p>
                        <input type='radio' name='D8' value='0'{{ (old('D8') == '0') ? 'checked' : '' }} > Not At All
                        <input type='radio' name='D8' value='1'{{ (old('D8') == '1') ? 'checked' : '' }}> Somewhat
                        <input type='radio' name='D8' value='2'{{ (old('D8') == '2') ? 'checked' : '' }}> Moderately
                        <input type='radio' name='D8' value='3'{{ (old('D8') == '3') ? 'checked' : '' }}> A lot
                    </div>
                    <div class='form-group'>
                        <p>9. Loss of motivation: Do you feel overwhelmed and have to push yourself hard to do things?</p>
                        <input type='radio' name='D9' value='0'{{ (old('D9') == '0') ? 'checked' : '' }} > Not At All
                        <input type='radio' name='D9' value='1'{{ (old('D9') == '1') ? 'checked' : '' }}> Somewhat
                        <input type='radio' name='D9' value='2'{{ (old('D9') == '2') ? 'checked' : '' }}> Moderately
                        <input type='radio' name='D9' value='3'{{ (old('D9') == '3') ? 'checked' : '' }}> A lot
                    </div>
                    <div class='form-group'>
                        <p>10. Poor self-image: Do you think you are looking old or unattractive?</p>
                        <input type='radio' name='D10' value='0'{{ (old('D10') == '0') ? 'checked' : '' }} > Not At All
                        <input type='radio' name='D10' value='1'{{ (old('D10') == '1') ? 'checked' : '' }}> Somewhat
                        <input type='radio' name='D10' value='2'{{ (old('D10') == '2') ? 'checked' : '' }}> Moderately
                        <input type='radio' name='D10' value='3'{{ (old('D10') == '3') ? 'checked' : '' }}> A lot
                    </div>
                    <div class='form-group'>
                        <p>11. Appetite Changes: Have you lost your appetite? Or do you overeat or binge compulsively?</p>
                        <input type='radio' name='D11' value='0'{{ (old('D11') == '0') ? 'checked' : '' }} > Not At All
                        <input type='radio' name='D11' value='1'{{ (old('D11') == '1') ? 'checked' : '' }}> Somewhat
                        <input type='radio' name='D11' value='2'{{ (old('D11') == '2') ? 'checked' : '' }}> Moderately
                        <input type='radio' name='D11' value='3'{{ (old('D11') == '3') ? 'checked' : '' }}> A lot
                    </div>
                    <div class='form-group'>
                        <p>12. Sleep changes: Do you suffer from insomnia and find it hard to get a good night's sleep? Or are you excessively tired and sleeping too much?</p>
                        <input type='radio' name='D12' value='0'{{ (old('D12') == '0') ? 'checked' : '' }} > Not At All
                        <input type='radio' name='D12' value='1'{{ (old('D12') == '1') ? 'checked' : '' }}> Somewhat
                        <input type='radio' name='D12' value='2'{{ (old('D12') == '2') ? 'checked' : '' }}> Moderately
                        <input type='radio' name='D12' value='3'{{ (old('D12') == '3') ? 'checked' : '' }}> A lot
                    </div>
                    <div class='form-group'>
                        <p>13. Loss of libido: Have you lost interest in sex?</p>
                        <input type='radio' name='D13' value='0'{{ (old('D13') == '0') ? 'checked' : '' }} > Not At All
                        <input type='radio' name='D13' value='1'{{ (old('D13') == '1') ? 'checked' : '' }}> Somewhat
                        <input type='radio' name='D13' value='2'{{ (old('D13') == '2') ? 'checked' : '' }}> Moderately
                        <input type='radio' name='D13' value='3'{{ (old('D13') == '3') ? 'checked' : '' }}> A lot
                    </div>
                    <div class='form-group'>
                        <p>14. Hypochrondriasis: Do you worry a great deal about your health?</p>
                        <input type='radio' name='D14' value='0'{{ (old('D14') == '0') ? 'checked' : '' }} > Not At All
                        <input type='radio' name='D14' value='1'{{ (old('D14') == '1') ? 'checked' : '' }}> Somewhat
                        <input type='radio' name='D14' value='2'{{ (old('D14') == '2') ? 'checked' : '' }}> Moderately
                        <input type='radio' name='D14' value='3'{{ (old('D14') == '3') ? 'checked' : '' }}> A lot
                    </div>
                    <div class='form-group'>
                        <p>15. Suicidal impulses*: Do you have thoughts that life is not worth living or think that you might be better off dead?</p>
                        <input type='radio' name='D15' value='0'{{ (old('D15') == '0') ? 'checked' : '' }} > Not At All
                        <input type='radio' name='D15' value='1'{{ (old('D15') == '1') ? 'checked' : '' }}> Somewhat
                        <input type='radio' name='D15' value='2'{{ (old('D15') == '2') ? 'checked' : '' }}> Moderately
                        <input type='radio' name='D15' value='3'{{ (old('D15') == '3') ? 'checked' : '' }}> A lot
                    </div>
                    <p>*Anyone with suicidal urges should seek immediate consultation with a qualified psyciastrist or psychologist.</p>
                    <div class='form-group'>
                        <input type='submit' class='btn btn-success btn-lg submit-test'>
                    </div>
                </div>
            </div>
        </div>
    </form>
    </div>

@endsection
