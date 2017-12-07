var zindex = 2000;
var listModal = [];

function cloneModal($modal) {
    var newModal = $modal.clone();

    //gen id
    var idModal = new Date().getTime();
    newModal.attr("id", idModal);
    newModal.attr("style", "z-index: " + zindex++);

    //set onclick in button
    var onClickText = "cloneModal($('#" + idModal + "'))";
    newModal.find('.btn.btn-info').attr('onclick',onClickText);

    //append to modal
    $modal.after(newModal);
    
    //show modal
    var modalId = "#" + idModal;
    $(modalId).modal("show");
    
    //add id to list for using after
//    listModal.push(idModal);
}

$(document).on('hide.bs.modal', "div.createResource", function() {
	var vm = $(this);
	var id = vm.prop('id');
});