function validation() {
    var noteName = document.forms["notesForm"]["note_name"].value;
    var newNote = document.forms["notesForm"]["new_note"].value;
    
    if (noteName == null || noteName == "" || newNote == null || newNote == "") {
        document.querySelector('.notify').textContent = "Make sure all text fields are filled out";
        return false;
    }
}

$(document).ready(function() {
        $('.slidetoggle').click(function(event) {
        $('.toggle').slideToggle('slow');
    });
});