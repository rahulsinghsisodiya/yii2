$(document).ready(function(){
$('.dropify').dropify();

$('.selectize').selectize({
    plugins: ['restore_on_backspace'],
    delimiter: ',',

        maxItems: 10,

    create: function(input) {
        return {
            value: input,
            text: input
        }
    }
});
});   