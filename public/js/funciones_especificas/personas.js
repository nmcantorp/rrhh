$( "#tabs" ).tabs().addClass( "ui-tabs-vertical ui-helper-clearfix" );
$( "#tabs li" ).removeClass( "ui-corner-top" ).addClass( "ui-corner-left" );


$(".chosen-select").chosen({allow_single_deselect: true, max_selected_options: 1});
$(".chosen-select-cargo").chosen({allow_single_deselect: true, max_selected_options: 1, allow_single_deselect: true});
$(".chosen-select-personal").chosen({allow_single_deselect: true, max_selected_options: 1});
$(".chosen-select-empresa").chosen({allow_single_deselect: true, max_selected_options: 1});

$("div#titulo_profesional_chosen").css('width','220px');
$( "div[id^='tip_referencia_']" ).css('width', '170px');
$( "div#cargo_chosen" ).css('width', '340px');
$( "div#empresa_chosen" ).css('width', '340px');
$( "div#institucion_chosen" ).css('width', '340px');


var eventos = (function () {
    return {
        'loadChosen': function () {
            $(".chosen-select").chosen({disable_search_threshold: 10});
        },
        'loadParents': function () {
            $("select[name^='tipo_ref']").on('change',function (argument) {
                var selectFinish = $(this).parents('#details').find('select[name^="parentesco"]');
                var selectValue = $(this).val();
                var id_definicion = 0;
                switch (selectValue) {
                    case 'P':
                        id_definicion = 14;
                        break;
                    case 'F':
                        id_definicion = 13;
                        break;
                    default:
                        //  return false;
                        break;
                };

                $.ajax({
                    type: 'get',
                    url: "/getParent/"+id_definicion,
                    success: function (data) {
                        selectFinish.each(function () {
                            $(this).html(null);
                            $(this).append(data);
                        });
                    }
                });
            });
        }
    }
})()

var botones = (function(){
    var load_button = function (class_button) {
        var botones = $('.'+class_button);
        return botones;
    }

    var loadActionButton = function (element) {
        element.each(function () {
            $(this).on('click', function () {
                $(this).parents('#details').clone().appendTo('.content');
                botones.addEvent();
                botones.removeEvent();
                botones.addEventParent();
                eventos.loadChosen();
            })
        });
    }

    var loadRemoveAction = function (element) {
        element.each(function () {
            $(this).on('click', function () {
                var button = load_button('removeButton');
                if(button.length>1)
                {
                    $(this).parents('#details').remove();
                }
            });
        })
    }

    return{
        'addEvent': function () {
            var button = load_button('addButton');
            loadActionButton(button);
        },
        'removeEvent': function () {
            var button = load_button('removeButton');
            loadRemoveAction(button);
        },
        'addEventParent': function () {
            eventos.loadParents();
        }
    }
})();

(function () {
    botones.addEvent();
    botones.removeEvent();
    botones.addEventParent();
    eventos.loadChosen();
})()