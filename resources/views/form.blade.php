@extends('layouts.master')

@section('title')
    Anxiety and Depression Surveys
@endsection

@section('content')
    <form method='GET' action='/results'>
        <div class='container'>
            <div class='panel-group'>
                <div class='panel panel-primary'>
                    <div class="panel-heading">
                        <h2 class='text-center'> Burns Anxiety Inventory
                    </div>
                    <div class="panel-body">
                        <div class='panel panel-info'>
                            <div class="panel-heading">
                                <h3 class='text-center'> Category 1: Anxious Feelings</h3>
                            </div>
                            <div class="panel-body">
                                <div class='form-group'>
                                    <p>1. Anxiety, nervousness, worry, or fear</p>
                                    <input type='radio' name='A1' value='0'> Not At All
                                    <input type='radio' name='A1' value='1'> Somewhat
                                    <input type='radio' name='A1' value='2'> Moderately
                                    <input type='radio' name='A1' value='3'> A lot
                                </div>
                                <div class='form-group'>
                                    <p>2. Feeling that things around you are strange, unreal, or foggy</p>
                                    <input type='radio' name='A2' value='0'> Not At All
                                    <input type='radio' name='A2' value='1'> Somewhat
                                    <input type='radio' name='A2' value='2'> Moderately
                                    <input type='radio' name='A2' value='3'> A lot
                                </div>
                                <div class='form-group'>
                                    <p>3. Feeling detached from all or part of your body</p>
                                    <input type='radio' name='A3' value='0'> Not At All
                                    <input type='radio' name='A3' value='1'> Somewhat
                                    <input type='radio' name='A3' value='2'> Moderately
                                    <input type='radio' name='A3' value='3'> A lot
                                </div>
                                <div class='form-group'>
                                    <p>4. Sudden unexpected panic spells</p>
                                    <input type='radio' name='A4' value='0'> Not At All
                                    <input type='radio' name='A4' value='1'> Somewhat
                                    <input type='radio' name='A4' value='2'> Moderately
                                    <input type='radio' name='A4' value='3'> A lot
                                </div>
                                <div class='form-group'>
                                    <p>5. Apprehension or a sense of impending doom</p>
                                    <input type='radio' name='A5' value='0'> Not At All
                                    <input type='radio' name='A5' value='1'> Somewhat
                                    <input type='radio' name='A5' value='2'> Moderately
                                    <input type='radio' name='A5' value='3'> A lot
                                </div>
                                <div class='form-group'>
                                    <p>6. Feeling tense, stressed, "uptight", or on edge</p>
                                    <input type='radio' name='A6' value='0'> Not At All
                                    <input type='radio' name='A6' value='1'> Somewhat
                                    <input type='radio' name='A6' value='2'> Moderately
                                    <input type='radio' name='A6' value='3'> A lot
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
                                    <input type='radio' name='A7' value='0'> Not At All
                                    <input type='radio' name='A7' value='1'> Somewhat
                                    <input type='radio' name='A7' value='2'> Moderately
                                    <input type='radio' name='A7' value='3'> A lot
                                </div>
                                <div class='form-group'>
                                    <p>8. Racing thoughts or having your mind jump from one thing to the next</p>
                                    <input type='radio' name='A8' value='0'> Not At All
                                    <input type='radio' name='A8' value='1'> Somewhat
                                    <input type='radio' name='A8' value='2'> Moderately
                                    <input type='radio' name='A8' value='3'> A lot
                                </div>
                                <div class='form-group'>
                                    <p>9. Frightening fantasies or daydreams</p>
                                    <input type='radio' name='A9' value='0'> Not At All
                                    <input type='radio' name='A9' value='1'> Somewhat
                                    <input type='radio' name='A9' value='2'> Moderately
                                    <input type='radio' name='A9' value='3'> A lot
                                </div>
                                <div class='form-group'>
                                    <p>10. Feeling that you're on the verge of losing control</p>
                                    <input type='radio' name='A10' value='0'> Not At All
                                    <input type='radio' name='A10' value='1'> Somewhat
                                    <input type='radio' name='A10' value='2'> Moderately
                                    <input type='radio' name='A10' value='3'> A lot
                                </div>
                                <div class='form-group'>
                                    <p>11. Fears of cracking up or going crazy</p>
                                    <input type='radio' name='A11' value='0'> Not At All
                                    <input type='radio' name='A11' value='1'> Somewhat
                                    <input type='radio' name='A11' value='2'> Moderately
                                    <input type='radio' name='A11' value='3'> A lot
                                </div>
                                <div class='form-group'>
                                    <p>12. Fears of fainting or passing out</p>
                                    <input type='radio' name='A12' value='0'> Not At All
                                    <input type='radio' name='A12' value='1'> Somewhat
                                    <input type='radio' name='A12' value='2'> Moderately
                                    <input type='radio' name='A12' value='3'> A lot
                                </div>
                                <div class='form-group'>
                                    <p>13. Fears of physical illness or heart attacks or dying</p>
                                    <input type='radio' name='A13' value='0'> Not At All
                                    <input type='radio' name='A13' value='1'> Somewhat
                                    <input type='radio' name='A13' value='2'> Moderately
                                    <input type='radio' name='A13' value='3'> A lot
                                </div>
                                <div class='form-group'>
                                    <p>14. Concerns about looking foolish or inadequate in front of others</p>
                                    <input type='radio' name='A14' value='0'> Not At All
                                    <input type='radio' name='A14' value='1'> Somewhat
                                    <input type='radio' name='A14' value='2'> Moderately
                                    <input type='radio' name='A14' value='3'> A lot
                                </div>
                                <div class='form-group'>
                                    <p>15. Fears of being alone, isolated, or abandoned</p>
                                    <input type='radio' name='A15' value='0'> Not At All
                                    <input type='radio' name='A15' value='1'> Somewhat
                                    <input type='radio' name='A15' value='2'> Moderately
                                    <input type='radio' name='A15' value='3'> A lot
                                </div>
                                <div class='form-group'>
                                    <p>16. Fears of criticism or disapproval</p>
                                    <input type='radio' name='A16' value='0'> Not At All
                                    <input type='radio' name='A16' value='1'> Somewhat
                                    <input type='radio' name='A16' value='2'> Moderately
                                    <input type='radio' name='A16' value='3'> A lot
                                </div>
                                <div class='form-group'>
                                    <p>17. Fears that something terrible is about to happen</p>
                                    <input type='radio' name='A17' value='0'> Not At All
                                    <input type='radio' name='A17' value='1'> Somewhat
                                    <input type='radio' name='A17' value='2'> Moderately
                                    <input type='radio' name='A17' value='3'> A lot
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
                                    <input type='radio' name='A18' value='0'> Not At All
                                    <input type='radio' name='A18' value='1'> Somewhat
                                    <input type='radio' name='A18' value='2'> Moderately
                                    <input type='radio' name='A18' value='3'> A lot
                                </div>
                                <div class='form-group'>
                                    <p>19. Pain, pressure, or tightness in the chest</p>
                                    <input type='radio' name='A19' value='0'> Not At All
                                    <input type='radio' name='A19' value='1'> Somewhat
                                    <input type='radio' name='A19' value='2'> Moderately
                                    <input type='radio' name='A19' value='3'> A lot
                                </div>
                                <div class='form-group'>
                                    <p>20. Tingling or numbness in the toes or fingers</p>
                                    <input type='radio' name='A20' value='0'> Not At All
                                    <input type='radio' name='A20' value='1'> Somewhat
                                    <input type='radio' name='A20' value='2'> Moderately
                                    <input type='radio' name='A20' value='3'> A lot
                                </div>
                                <div class='form-group'>
                                    <p>21. Butterflies or discomfort in the stomach</p>
                                    <input type='radio' name='A21' value='0'> Not At All
                                    <input type='radio' name='A21' value='1'> Somewhat
                                    <input type='radio' name='A21' value='2'> Moderately
                                    <input type='radio' name='A21' value='3'> A lot
                                </div>
                                <div class='form-group'>
                                    <p>22. Constipation or diarrhea</p>
                                    <input type='radio' name='A22' value='0'> Not At All
                                    <input type='radio' name='A22' value='1'> Somewhat
                                    <input type='radio' name='A22' value='2'> Moderately
                                    <input type='radio' name='A22' value='3'> A lot
                                </div>
                                <div class='form-group'>
                                    <p>23. Restlessness or jumpiness</p>
                                    <input type='radio' name='A23' value='0'> Not At All
                                    <input type='radio' name='A23' value='1'> Somewhat
                                    <input type='radio' name='A23' value='2'> Moderately
                                    <input type='radio' name='A23' value='3'> A lot
                                </div>
                                <div class='form-group'>
                                    <p>24. Tight, tense muscles</p>
                                    <input type='radio' name='A24' value='0'> Not At All
                                    <input type='radio' name='A24' value='1'> Somewhat
                                    <input type='radio' name='A24' value='2'> Moderately
                                    <input type='radio' name='A24' value='3'> A lot
                                </div>
                                <div class='form-group'>
                                    <p>25. Sweating not brought on by heat</p>
                                    <input type='radio' name='A25' value='0'> Not At All
                                    <input type='radio' name='A25' value='1'> Somewhat
                                    <input type='radio' name='A25' value='2'> Moderately
                                    <input type='radio' name='A25' value='3'> A lot
                                </div>
                                <div class='form-group'>
                                    <p>26. A lump in the throat</p>
                                    <input type='radio' name='A26' value='0'> Not At All
                                    <input type='radio' name='A26' value='1'> Somewhat
                                    <input type='radio' name='A26' value='2'> Moderately
                                    <input type='radio' name='A26' value='3'> A lot
                                </div>
                                <div class='form-group'>
                                    <p>27. Trembling or shaking</p>
                                    <input type='radio' name='A27' value='0'> Not At All
                                    <input type='radio' name='A27' value='1'> Somewhat
                                    <input type='radio' name='A27' value='2'> Moderately
                                    <input type='radio' name='A27' value='3'> A lot
                                </div>
                                <div class='form-group'>
                                    <p>28. Rubbery or "jelly" legs</p>
                                    <input type='radio' name='A28' value='0'> Not At All
                                    <input type='radio' name='A28' value='1'> Somewhat
                                    <input type='radio' name='A28' value='2'> Moderately
                                    <input type='radio' name='A28' value='3'> A lot
                                </div>
                                <div class='form-group'>
                                    <p>29. Feeling dizzy, lightheaded, or off balance</p>
                                    <input type='radio' name='A29' value='0'> Not At All
                                    <input type='radio' name='A29' value='1'> Somewhat
                                    <input type='radio' name='A29' value='2'> Moderately
                                    <input type='radio' name='A29' value='3'> A lot
                                </div>
                                <div class='form-group'>
                                    <p>30. Choking or smothering sensations or diffuculty breathing</p>
                                    <input type='radio' name='A30' value='0'> Not At All
                                    <input type='radio' name='A30' value='1'> Somewhat
                                    <input type='radio' name='A30' value='2'> Moderately
                                    <input type='radio' name='A30' value='3'> A lot
                                </div>
                                <div class='form-group'>
                                    <p>31. Headaches or pains in the neck or back</p>
                                    <input type='radio' name='A31' value='0'> Not At All
                                    <input type='radio' name='A31' value='1'> Somewhat
                                    <input type='radio' name='A31' value='2'> Moderately
                                    <input type='radio' name='A31' value='3'> A lot
                                </div>
                                <div class='form-group'>
                                    <p>32. Hot flashes or cold chills</p>
                                    <input type='radio' name='A32' value='0'> Not At All
                                    <input type='radio' name='A32' value='1'> Somewhat
                                    <input type='radio' name='A32' value='2'> Moderately
                                    <input type='radio' name='A32' value='3'> A lot
                                </div>
                                <div class='form-group'>
                                    <p>33. Feeling tired, weak, or easily exhausted</p>
                                    <input type='radio' name='A33' value='0'> Not At All
                                    <input type='radio' name='A33' value='1'> Somewhat
                                    <input type='radio' name='A33' value='2'> Moderately
                                    <input type='radio' name='A33' value='3'> A lot
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
                        <!-- Form submission buttion -->

            <div class='panel panel-primary'>
                <div class="panel-heading">
                    <h2> Burns Depression Checklist </h2>
                </div>
                <div class="panel-body">
                    <div class='form-group'>
                        <h6>1. Sadness: </h6><p>Have you been feeling sad or down in the dumps?</p>
                        <input type='radio' name='D1' value='0'> Not At All
                        <input type='radio' name='D1' value='1'> Somewhat
                        <input type='radio' name='D1' value='2'> Moderately
                        <input type='radio' name='D1' value='3'> A lot
                    </div>
                    <div class='form-group'>
                        <h6>2. Discouragement: </h6><p>Does the future look hopeless?</p>
                        <input type='radio' name='D2' value='0'> Not At All
                        <input type='radio' name='D2' value='1'> Somewhat
                        <input type='radio' name='D2' value='2'> Moderately
                        <input type='radio' name='D2' value='3'> A lot
                    </div>
                    <div class='form-group'>
                        <h6>3. Low self-esteem: </h6><p>Do you feel worthless or think of yourself as a failure?</p>
                        <input type='radio' name='D3' value='0'> Not At All
                        <input type='radio' name='D3' value='1'> Somewhat
                        <input type='radio' name='D3' value='2'> Moderately
                        <input type='radio' name='D3' value='3'> A lot
                    </div>
                    <div class='form-group'>
                        <h6>4. Inferiority: </h6><p>Do you feel inadequate or inferior to others?</p>
                        <input type='radio' name='D4' value='0'> Not At All
                        <input type='radio' name='D4' value='1'> Somewhat
                        <input type='radio' name='D4' value='2'> Moderately
                        <input type='radio' name='D4' value='3'> A lot
                    </div>
                    <div class='form-group'>
                        <h6>5. Guilt: </h6><p>Do you get self-critical and blame yourself for everything?</p>
                        <input type='radio' name='D5' value='0'> Not At All
                        <input type='radio' name='D5' value='1'> Somewhat
                        <input type='radio' name='D5' value='2'> Moderately
                        <input type='radio' name='D5' value='3'> A lot
                    </div>
                    <div class='form-group'>
                        <h6>6. Indecisiveness: </h6><p>Do you have trouble making up your mind about things?</p>
                        <input type='radio' name='D6' value='0'> Not At All
                        <input type='radio' name='D6' value='1'> Somewhat
                        <input type='radio' name='D6' value='2'> Moderately
                        <input type='radio' name='D6' value='3'> A lot
                    </div>
                    <div class='form-group'>
                        <h6>7. Irritability and Frustration: </h6><p>Have you been feeling resentful and angry a good deal of the time?</p>
                        <input type='radio' name='D7' value='0'> Not At All
                        <input type='radio' name='D7' value='1'> Somewhat
                        <input type='radio' name='D7' value='2'> Moderately
                        <input type='radio' name='D7' value='3'> A lot
                    </div>
                    <div class='form-group'>
                        <h6>8. Loss of interest in life: </h6><p>Have you lost interest in your career, your hobbies, your family, or your friends?</p>
                        <input type='radio' name='D8' value='0'> Not At All
                        <input type='radio' name='D8' value='1'> Somewhat
                        <input type='radio' name='D8' value='2'> Moderately
                        <input type='radio' name='D8' value='3'> A lot
                    </div>
                    <div class='form-group'>
                        <h6>9. Loss of motivation: </h6><p>Do you feel overwhelmed and have to push yourself hard to do things?</p>
                        <input type='radio' name='D9' value='0'> Not At All
                        <input type='radio' name='D9' value='1'> Somewhat
                        <input type='radio' name='D9' value='2'> Moderately
                        <input type='radio' name='D9' value='3'> A lot
                    </div>
                    <div class='form-group'>
                        <h6>10. Poor self-image: </h6><p>Do you think you are looking old or unattractive?</p>
                        <input type='radio' name='D10' value='0'> Not At All
                        <input type='radio' name='D10' value='1'> Somewhat
                        <input type='radio' name='D10' value='2'> Moderately
                        <input type='radio' name='D10' value='3'> A lot
                    </div>
                    <div class='form-group'>
                        <h6>11. Appetite Changes: </h6><p>Have you lost your appetite? Or do you overeat or binge compulsively?</p>
                        <input type='radio' name='D11' value='0'> Not At All
                        <input type='radio' name='D11' value='1'> Somewhat
                        <input type='radio' name='D11' value='2'> Moderately
                        <input type='radio' name='D11' value='3'> A lot
                    </div>
                    <div class='form-group'>
                        <h6>12. Sleep changes: </h6><p>Do you suffer from insomnia and find it hard to get a good night's sleep? Or are you excessively tired and sleeping too much?</p>
                        <input type='radio' name='D12' value='0'> Not At All
                        <input type='radio' name='D12' value='1'> Somewhat
                        <input type='radio' name='D12' value='2'> Moderately
                        <input type='radio' name='D12' value='3'> A lot
                    </div>
                    <div class='form-group'>
                        <h6>13. Loss of libido: </h6><p>Have you lost interest in sex?</p>
                        <input type='radio' name='D13' value='0'> Not At All
                        <input type='radio' name='D13' value='1'> Somewhat
                        <input type='radio' name='D13' value='2'> Moderately
                        <input type='radio' name='D13' value='3'> A lot
                    </div>
                    <div class='form-group'>
                        <h6>14. Hypochrondriasis: </h6><p>Do you worry a great deal about your health?</p>
                        <input type='radio' name='D14' value='0'> Not At All
                        <input type='radio' name='D14' value='1'> Somewhat
                        <input type='radio' name='D14' value='2'> Moderately
                        <input type='radio' name='D14' value='3'> A lot
                    </div>
                    <div class='form-group'>
                        <h6>15. Suicidal impulses*: </h6><p>Do you have thoughts that life is not worth living or think that you might be better off dead?</p>
                        <input type='radio' name='D15' value='0'> Not At All
                        <input type='radio' name='D15' value='1'> Somewhat
                        <input type='radio' name='D15' value='2'> Moderately
                        <input type='radio' name='D15' value='3'> A lot
                    </div>
                    <h6>*Anyone with suicidal urges should seek immediate consultation with a qualified psyciastrist or psychologist.</h6>
                </div>
            </div>
            <div class='form-group'>
                <input type='submit' class='btn btn-success btn-lg'>
            </div>
