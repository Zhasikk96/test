@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card">
                    <div class="card-header"><h2>I этап. Тестирование</h2></div>

                    <div class="card-body">


                        <script type="text/javascript">
                            // Заголовок страницы (h1)
                            // Это ваши вопросы
                            var questions = [
                                {
                                    text: "Президент Республики Казахстан:",
                                    answers: ["назначает на должность и освобождает от должности Государственного секретаря Республики Казахстан, определяет его статус и полномочия",
                                        "руководит деятельностью министерств, государственных комитетов, иных центральных и местных исполнительных органов",
                                        "организует управление государственной собственностью",
                                        "решает вопросы о государственных займах и оказании Республикой экономической и иной помощи"],
                                    correctAnswer: 0 // нумерация ответов с нуля!
                                },
                                {
                                    text: "Каждый имеет право:",
                                    answers: ["на уголовную защиту своих прав и свобод",
                                        "на судебную защиту своих прав и свобод",
                                        "на административную и уголовную защиту своих прав и свобод",
                                        "на административную защиту своих прав и свобод"],
                                    correctAnswer: 1
                                },
                                {
                                    text: "Полномочия акимов областей, городов республиканского значения и столицы прекращаются:",
                                    answers: ["при вступлении в должность вновь избранного Президента Республики",
                                        "по усмотрению Парламента Республики",
                                        "при утверждении новой Конституции Республики",
                                        "по усмотрению Правительства Республики"],
                                    correctAnswer: 0
                                }
                            ];

                            var yourAns = new Array;
                            var score = 0;

                            function Engine(question, answer) {
                                yourAns[question] = answer;
                            }

                            function Score() {
                                var answerText = "Результаты:\n";

                                for (var i = 0; i < yourAns.length; ++i) {
                                    var num = i + 1;
                                    answerText = answerText + "\n    Вопрос №" + num + "";
                                    if (yourAns[i] != questions[i].correctAnswer) {
                                        answerText = answerText + "\n    Правильный ответ: " +
                                            questions[i].answers[questions[i].correctAnswer] + "\n";
                                    }
                                    else {
                                        answerText = answerText + ": Верно! \n";
                                        ++score;
                                    }
                                }

                                answerText = answerText + "\nВсего правильных ответов: " + score + "\n";

                                alert(answerText);
                                yourAns = [];
                                // score = 0;
                                clearForm("quiz");

                                location.href = '/cabinet?score='+score;
                            }

                            function clearForm(name) {
                                var f = document.forms[name];
                                for (var i = 0; i < f.elements.length; ++i) {
                                    if (f.elements[i].checked)
                                        f.elements[i].checked = false;
                                }
                            }
                        </script>

                        <h1>
                            <script>document.write(title)</script>
                        </h1>
                        <h2>
                            <script>document.write(subtitle)</script>
                        </h2>

                        <form name="quiz">
                                <script>
                                    for (var q = 0; q < questions.length; ++q) {
                                        var question = questions[q];
                                        var idx = 1 + q;

                                        document.writeln('<fieldset class="form-group"><legend>' + idx + '. ' + question.text + '</legend>');
                                        for (var i in question.answers) {
                                            document.writeln('<div class="form-check"><label class="form-check-label">' +
                                                '<input type="radio" class="form-check-input" name="q' + idx + '" value="' + i +
                                                '" onClick="Engine(' + q + ', this.value)">' + question.answers[i] + '</label></div>');
                                        }
                                        document.writeln('</fieldset>');
                                    }
                                </script>

                            <input class="btn btn-success" type="button" onClick="Score()" value="Проверить результаты"/>

                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
