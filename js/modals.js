/**
 * Display the overlay
 *
 * @param  {[type]} $ [description]
 * @return {[type]}   [description]
 */
( function( $ ) {
  modals('#theproject', 'theprojectModal');
  modals('#modal-architecture', 'arhitectureModal');
  modals('#projectVisition', 'projectVisitionModal');
  modals('#request-residence', 'requestResidenceModal');
  modals('#locationModal', 'locationMapModal');

  /*
  let modal = document.querySelector(".popmodal");
  let closeButton = document.querySelector(".popclose-button");

  setTimeout(function () {
    toggleModal();
  }, 5000);

  closeButton.addEventListener("click", toggleModal);

  function toggleModal() {
    modal.classList.toggle("show-modal");
  }
   */

  function modals(id, target) {
    $(id).animatedModal({
      modalTarget:target,
      color: 'white',
    });
  }

} )( jQuery );
