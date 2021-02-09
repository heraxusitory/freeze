<form action="{{ route('question.form.store') }}" method="POST" id="questionForm">
    @csrf
    <div class="form-group">
        <label for="question" class="title">Спросите, что вас интересует</label>
        <textarea placeholder="Задать вопрос..." id="question" class="form-control" required name="question"></textarea>
        <div class="alert alert-danger error-report" style="display:none;"></div>
    </div>
    <div class="form-group">
        <label for="phone" class="title">Введите номер телефона для обратной связи</label>
        <input class="form-control" type="tel" id="phone" required name="phone">
        <div class="alert alert-danger error error-report" style="display:none;"></div>
    </div>
    <div class="form-group">
        <label for="name" class="title">Как к вам обращаться?</label>
        <input placeholder="Ваше имя" class="form-control" type="text" id="name" required name="name">
        <div class="alert alert-danger error-report" style="display:none;"></div>
    </div>
    <div class="form-group">
        <div class="all_errors alert alert-danger" style="display: none;"></div>
    </div>
</form>
