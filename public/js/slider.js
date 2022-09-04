Splide.defaults = {
    type: 'loop',
    perPage: 4,
    focus: 'center',
  }
  let elms = document.getElementsByClassName( 'splide' );
  console.log(elms)
  for ( let i = 0; i < elms.length; i++ ) {
    new Splide( elms[ i ] ).mount();
  }
  