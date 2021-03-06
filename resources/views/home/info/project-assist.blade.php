@extends('master')

@section('main_content')
    <section class="info-for-developers">
        <div class="container">
            <div class="row">

                <div class="container-title">
                    <h1>Поддержка проекта</h1>
                    <div class="separator"></div>
                </div>

                <div class="short-description">
                    <p>Данный проект является <b>некоммерческим</b> продуктом. Это означает, что я не получаю никакой прибыли с проекта, он разрабатывался, поддерживается и развивается на энтузиазме.</p>
                    <br>
                    <p>Ты можешь помочь этому проекту абсолютно разными способами. Например, ты можешь рассказать об этом проекте у себя на страницах социальных сетей. Если ты разработчик и хочешь принять участие в развитии данного проекта на добровольной основе до тех пор, пока не появится возможность монетизировать проект,
                        <a href="<?php echo url('/'); ?>/help">то буду рад.</a></p>
                    <br>
                    <p>Любая помощь проекту это добрый шаг с вашей стороны, вы становитесь одним из спонсоров проекта и непосредственным образом влияете на его дальнейшее развитие.</p>
                </div>

                <!-- todo: дописать тут контент -->


            </div>
        </div>
    </section>

    @include('templates/call-to-action/no-account')
@stop