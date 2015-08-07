/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
jQuery(function () {
    var arr = [];
    var strArr = null;
    var value_default = jQuery('.pr_cat_about_us').attr('value');
    if (value_default != null) {
        arr.push(value_default);
    }
    jQuery('.change_cat_about_us').live('click', function () {
        var $_this = jQuery(this);
        var rel_id = $_this.attr('rel');
        if (rel_id != null) {
            if ($_this.is(":checked")) {
                arr.push(rel_id);
            } else {
                for (var i in arr) {
                    if (arr[i] == rel_id) {
                        arr.splice(i, 1);
                    }
                }
            }
        }
        if (arr != null) {
            strArr = arr.toString();
            jQuery('.pr_cat_about_us').attr('value', strArr);
        }
    });
});


