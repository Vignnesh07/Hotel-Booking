
// -------------------Scroll Reveal-------------------- 
// --------Menu and Home----------- 
const sr = ScrollReveal({
    distance: '40px',
    duration: 2800,
    reset: false,
})


// -------------------Home-------------------- 

sr.reveal('.nav-links', {delay:50, origin:'top'})
sr.reveal('.clerk-logo-title', {delay:50, origin:'top'})
sr.reveal('.text-background', {delay:500, origin:'bottom'})
sr.reveal('.short-about', {delay:100, origin:'top'})




// // --------About----------- 

sr.reveal('.about-subtitle', {delay:100, origin:'top'})
sr.reveal('.roomtype-grid1', {delay:400, origin:'left'})
sr.reveal('.roomtype-grid2', {delay:400, origin:'right'})
sr.reveal('.roomtype-grid-special', {delay:400, origin:'left'})
sr.reveal('.container-our-team', {delay:400, origin:'top'})




// // --------Clerk Profile-----------
sr.reveal('.container-overlay', {delay:400, origin:'bottom'})

