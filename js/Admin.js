document.addEventListener('DOMContentLoaded', function() {

    var masterCheckbox = document.getElementById('Master_Checkbox');
    var checkboxes = document.querySelectorAll('.checkbox');

    masterCheckbox.addEventListener('change', function () {
        if (this.checked) {
            checkboxes.forEach(function(checkbox) {
                checkbox.checked = true;
            });
        } else {
            checkboxes.forEach(function(checkbox) {
                checkbox.checked = false;
            });
        }
    });
});
