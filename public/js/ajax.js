$(function () {
    $('#contactform').on('submit', function (e) {
        e.preventDefault()
        var form = $(this); // Предположу, что этот код выполняется в обработчике события 'submit' формы
        var data = new FormData();  // Для отправки файлов понадобится объект FormData. Подробнее про него можно прочитать в документации - https://developer.mozilla.org/en-US/docs/Web/API/FormData


        // Сбор данных из обычных полей
        form.find(':input[name]').not('[type="file"]').each(function () {
            var field = $(this);
            data.append(field.attr('name'), field.val());
        });


        // Сбор данных о файле (будет немного отличаться для нескольких файлов)
        var filesField = form.find('input[type="file"]');
        var fileName = filesField.attr('name');
        var file = filesField.prop('files')[0];

        if (file != null) {
            data.append(fileName, file);
        }

        // Отправка данных
        var url = '/sendmail';

        $.ajax({
            url: url,
            type: 'POST',
            data: data,
            contentType: false,
            cache: false,
            processData: false,
            success: function (data) {
                $('#errsend').hide();
                $('#sendmessage').show();
            }
        });
    })
});

$(function () {
    $('#contactform2').on('submit', function (e) {
        e.preventDefault()
        var form = $(this); // Предположу, что этот код выполняется в обработчике события 'submit' формы
        var data = new FormData();  // Для отправки файлов понадобится объект FormData. Подробнее про него можно прочитать в документации - https://developer.mozilla.org/en-US/docs/Web/API/FormData


        // Сбор данных из обычных полей
        form.find(':input[name]').not('[type="file"]').each(function () {
            var field = $(this);
            data.append(field.attr('name'), field.val());
        });


        // Сбор данных о файле (будет немного отличаться для нескольких файлов)
        var filesField = form.find('input[type="file"]');
        var fileName = filesField.attr('name');
        var file = filesField.prop('files')[0];

        if (file != null) {
            data.append(fileName, file);
        }

        // Отправка данных
        var url = '/sendmail';

        $.ajax({
            url: url,
            type: 'POST',
            data: data,
            contentType: false,
            cache: false,
            processData: false,
            success: function (data) {
                $('#errsend2').hide();
                $('#sendmessage2').show();
            }
        });
    })
});

$(function () {
    $('#form_question_answer').on('submit', function (e) {
        e.preventDefault()
        var form = $(this); // Предположу, что этот код выполняется в обработчике события 'submit' формы
        var data = new FormData();  // Для отправки файлов понадобится объект FormData. Подробнее про него можно прочитать в документации - https://developer.mozilla.org/en-US/docs/Web/API/FormData


        // Сбор данных из обычных полей
        form.find(':input[name]').not('[type="file"]').each(function () {
            var field = $(this);
            data.append(field.attr('name'), field.val());
        });



        // Отправка данных
        var url = '/sendquestion';

        $.ajax({
            url: url,
            type: 'POST',
            data: data,
            contentType: false,
            cache: false,
            processData: false,
            success: function (data) {
                $('#errsend3').hide();
                $('#sendmessage3').show();
            }
        });
    })
});


//добавление новой записи в таблицу questions
$(function () {
    $('#form_admin_question_answer').on('submit', function (e) {
        e.preventDefault()
        var form = $(this); // Предположу, что этот код выполняется в обработчике события 'submit' формы
        var data = new FormData();  // Для отправки файлов понадобится объект FormData. Подробнее про него можно прочитать в документации - https://developer.mozilla.org/en-US/docs/Web/API/FormData


        // Сбор данных из обычных полей
        form.find(':input[name]').not('[type="file"]').each(function () {
            var field = $(this);
            data.append(field.attr('name'), field.val());
        });



        // Отправка данных
        var url = '/add_question_answer';

        $.ajax({
            url: url,
            type: 'POST',
            data: data,
            contentType: false,
            cache: false,
            processData: false,
            success: function (data) {
                $('#errsend3').hide();
                $('#sendmessage3').show();

            },
            error: function (error) {
                $('#senderror3').show();
                $('#sendmessage3').hide();
            }
        });
    })
});

//удаление записи из таблицы questions
$(function () {
    $('#delete_question').on('submit', function (e) {
        e.preventDefault()
        var form = $(this); // Предположу, что этот код выполняется в обработчике события 'submit' формы
        var data = new FormData();  // Для отправки файлов понадобится объект FormData. Подробнее про него можно прочитать в документации - https://developer.mozilla.org/en-US/docs/Web/API/FormData


        // Сбор данных из обычных полей
        form.find(':input[name]').not('[type="file"]').each(function () {
            var field = $(this);
            data.append(field.attr('name'), field.val());
        });


        // Отправка данных
        var url = '/delete_question_answer';

        $.ajax({
            url: url,
            type: 'POST',
            data: data,
            contentType: false,
            cache: false,
            processData: false,
            success: function (data) {
                alert('запись удалена!');
            }
        });
    })
});

