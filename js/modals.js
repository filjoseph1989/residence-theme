/**
 * Display the overlay
 *
 * @param  {[type]} $ [description]
 * @return {[type]}   [description]
 */
( function( $ ) {
  modals('#download-brochue', 'downloadBrochuresModal');
  modals('#theproject', 'theprojectModal');
  modals('#modal-architecture', 'arhitectureModal');
  modals('#projectVisition', 'projectVisitionModal');
  modals('#request-residence', 'requestResidenceModal');
  modals('#locationModal', 'locationMapModal');

  function modals(id, target) {
    console.log(id, target);
    $(id).animatedModal({
      modalTarget:target,
      color: 'white',
    });
  }

} )( jQuery );
