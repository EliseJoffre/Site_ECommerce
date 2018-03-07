const NB_JOURS_TRAITES = 7;
const NB_TRANCHES_TEMPS = 48 - 2;
let trancheHeure = -1;
let trancheMinute;

$('<div>').attr({
    'class': 'container',
}).appendTo('body');

$('<div>').attr({
    'id': 'titre',
    'class': 'row',
}).appendTo('.container');

$('<h1>').attr({
    'id': 'titre-h1'
}).appendTo('#titre');

$('#titre-h1').text('Planification');


$('<div>').attr({
    'id': 'corps',
    'class': 'row',
}).appendTo('.container');


$('<div>').attr({
    'id': 'menu-lateral',
    'class': 'col-md-2',
}).appendTo('#corps');

$('<h2>').attr({
    'id': 'sous-titre-h2'
}).appendTo('#menu-lateral');

$('#sous-titre-h2').text('Coucou');


$('<table>').attr({
    'id': 'table-calendrier',
    'class': 'col-md-10',
}).appendTo('#corps');

for (let i = 0; i <= NB_JOURS_TRAITES; i++) {
    switch(i) {
        case 1:
            $('<th>').attr({
                'id': 'lundi',
            }).appendTo('#table-calendrier');
            $('#lundi').text('Lundi');
            break;

        case 2:
            $('<th>').attr({
                'id': 'mardi',
            }).appendTo('#table-calendrier');
            $('#mardi').text('Mardi');
            break;

        case 3:
            $('<th>').attr({
                'id': 'mercredi',
            }).appendTo('#table-calendrier');
            $('#mercredi').text('Mercredi');
            break;

        case 4:
            $('<th>').attr({
                'id': 'jeudi',
            }).appendTo('#table-calendrier');
            $('#jeudi').text('Jeudi');
            break;

        case 5:
            $('<th>').attr({
                'id': 'vendredi',
            }).appendTo('#table-calendrier');
            $('#vendredi').text('Vendredi');
            break;

        case 6:
            $('<th>').attr({
                'id': 'samedi',
            }).appendTo('#table-calendrier');
            $('#samedi').text('Samedi');
            break;

        case 7:
            $('<th>').attr({
                'id': 'dimanche',
            }).appendTo('#table-calendrier');
            $('#dimanche').text('Dimanche');
            break;

        default:
            $('<th>').attr({}).appendTo('#table-calendrier');
    }
}

for (let i = 0; i <= NB_TRANCHES_TEMPS + 1; i++) {

    $('<tr>').attr({
        'id': 'ligne' + i,
    }).appendTo('#table-calendrier');

    for (let j = 0; j <= NB_JOURS_TRAITES; j++) {

        if (j === 0) {
            if (i % 2 === 0) {
                trancheMinute = '00';
                trancheHeure = trancheHeure + 1;
            } else {
                trancheMinute = '30';
            }

            let tranche_id = 'tranche_' + trancheHeure.toString() + '_' + trancheMinute;
            let tranche = trancheHeure.toString() + ':' + trancheMinute;

            $('<td>').attr({
                'id': tranche_id,
            }).appendTo('#ligne' + i);
            $('#' + tranche_id).text(tranche);

        } else {
            $('<td>').attr({}).appendTo('#ligne' + i);
        }
    }
}