document.addEventListener("DOMContentLoaded", function(event) {

    const onButtonClick = (e) => {
        e.preventDefault();
        const link = e.target.href;
        e.target.closest('.row').remove();
        const xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function() {
              if (this.readyState == 4 && this.status == 200) {
                const html = document.createElement( 'html' );
                html.innerHTML = this.responseText;
                const rows = html.querySelectorAll('.rw-news__list--wrap .row');
                rows.forEach(r => {
                    document.querySelector(".rw-news__list--wrap").append(r);
                })
                if (document.querySelector('.post__load-button')) document.querySelector('.post__load-button').addEventListener('click', onButtonClick);
              }
            };
            xhttp.open("GET", link, true);
            xhttp.send();
    };

    document.querySelector('.post__load-button').addEventListener('click', onButtonClick);

});
