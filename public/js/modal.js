function toggleModal(id){
    let modal=document.getElementById(`modal-${id}`);
    console.log(modal)
    modal.classList.toggle("hidden");
}