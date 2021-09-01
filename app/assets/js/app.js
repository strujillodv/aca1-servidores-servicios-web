(function () {
    const btn = document.getElementsByClassName("btn-contact");
    const formContainer = document.getElementById("form-contact"); 

    for(var i = 0; i < btn.length; i++) {
        (function(index) {
            btn[index].addEventListener('click', function () {
                console.log("toggle class");
                formContainer.classList.toggle( 'toggledForm' );
            })
        })(i);
    }
}());
