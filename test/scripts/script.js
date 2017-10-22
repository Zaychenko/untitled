var hi = prompt('Как тебя зовут?','');
alert('Привет ' + hi);

jQuery('document').ready(function () {
    jQuery('body').append('<a href="http://google.com">Перейти в гугл</a>');  //цепочная функция,
    jQuery('div').remove();//удалить теги div
    var p_clon;//создали переменую
    p_clon = jQuery('p').clone();//клонировали
    jQuery('body').append(p_clon);//добавили на страницу
    var value1,value2;

    jQuery('input').on('keyup',function () {
        value1 = parseInt(jQuery('#val1').val());
        value2 = parseInt(jQuery('#val2').val());

        jQuery('#result').html(value1+value2);
    });
    jQuery('button').on('click', function () {

        value1 = parseInt(jQuery('#val1').val());
        value2 = parseInt(jQuery('#val2').val());

        alert("Сумма " + (value1 + value2));
    });



});

