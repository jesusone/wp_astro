$(document).ready(function() {
    $('.pr-radio-img-view').click(function(){
      $(this).parent().parent().find('.pr-radio-img-view').removeClass('pr-radio-img-selected');
      $(this).addClass('pr-radio-img-selected');
    });
    $('.dates').datepicker()
    .on('show', function (ev) {
        ev.stopPropagation();
    })
    $('.selectpicker').selectpicker();
    $('.color-box').colpick({
        colorScheme:'dark',
        layout:'rgbhex',
        color:'ff8800',
        onSubmit:function(hsb,hex,rgb,el) {
            $(el).css('background-color', '#'+hex);
            $(el).colpickHide();
            $(el).attr('value','#'+hex);
        }/*,
        onChange:function(hsb,hex,rgb,el,bySetColor) {
            $(el).css('border-color','#'+hex);
            // Fill the text box just if the color was set using the picker, and not the colpickSetColor function.
            if(!bySetColor) $(el).val(hex);
        } */
    })
    /*.keyup(function(){
        $(this).colpickSetColor(this.value);
    })  */
    /*.css('background-color', '#ff8800');*/
});